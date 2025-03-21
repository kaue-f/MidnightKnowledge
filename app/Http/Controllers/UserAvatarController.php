<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Laravel\Facades\Image;

class UserAvatarController extends Controller
{
    public $path = "avatars";
    public $oldPath = "old-avatars";
    public function __construct()
    {
        if (Storage::exists($this->path))
            Storage::makeDirectory($this->path);

        if (Storage::exists($this->oldPath))
            Storage::makeDirectory($this->oldPath);
    }

    public function updateImage(User $user, $image)
    {
        try {
            $old = $user->image;
            $this->oldImage($old);

            $imageWebp = Image::read($image);
            $path = "$this->path/$user->id.webp";

            Storage::put($path, $imageWebp->toWebp(80));
            if ($user->update(['image' => $path])) {
                $this->deleteImage($user);
                notyf()->success("Imagem de perfil atualizada.");
            } else {
                $this->cancelUpdateImage($user, $old);
                notyf()->error("Não foi possível atualizada imagem de perfil.");
            }

            return;
        } catch (\Throwable $th) {
            notyf()->warning("Não foi possível atualizada imagem de perfil. Tente novamente mais tarde");
            return $user->image;
        }
    }

    public function deleteImage(User $user)
    {
        if (!isNullOrEmpty($user->image)) {
            $files = Storage::files($this->oldPath);
            $id = $user->id;
            $images = array_filter($files, function ($image) use ($id) {
                return str_starts_with(basename($image), "{$id}.");
            });

            if (!isNullOrEmpty($images))
                Storage::delete($images);
        }
        return;
    }

    public function cancelUpdateImage(User $user, $oldImage)
    {
        if (isNullOrEmpty($user->image))
            return;

        Storage::delete($user->image);

        if (!isNullOrEmpty($oldImage) || $oldImage != imageNoneUser()) {
            $name = basename($oldImage);
            Storage::move("$this->oldPath/$name", "$this->path/$name");
            $user->update(['image' => $oldImage]);
        }

        $this->deleteImage($user);
    }

    public function oldImage($image)
    {
        if (!isNullOrEmpty($image)) {
            $name = basename($image);
            Storage::move($image, "$this->oldPath/$name");
        }
    }
}
