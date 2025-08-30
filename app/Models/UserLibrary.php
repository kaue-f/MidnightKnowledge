<?php

namespace App\Models;

use App\Enums\StatusEnum;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Concerns\HasUlids;

class UserLibrary extends Model
{
    use HasUlids, SoftDeletes;

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $keyType = 'string';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'content_id',
        'content_type',
        'library',
        'favorite',
        'status',
    ];

    /**
     * The attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'library' => 'boolean',
            'favorite' => 'boolean',
            'status' => StatusEnum::class,
        ];
    }

    /**
     * Get the user that owns the library.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo<User, UserLibrary>
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the polymorphic content associated with the user library.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo
     */
    public function content()
    {
        return $this->morphTo();
    }

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function status(): Attribute
    {
        return Attribute::make(
            get: fn($value) => StatusEnum::tryFrom($value)->description()
        );
    }

    /**
     * Remove the content from the library.
     *
     * @return bool|null
     */
    public function removeContent()
    {
        $this->library = false;

        if ($this->save())
            return $this->delete();
    }

    /**
     * Restore the content in the library.
     *
     * @return void
     */
    public function restoreContent()
    {
        if ($this->trashed()) {
            $this->restore();
            $this->library = true;
            $this->save();
        }
    }
}
