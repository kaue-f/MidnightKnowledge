<?php

namespace App\Services\Managements;

use App\Models\User;
use App\Models\Book\Book;
use App\Enums\ContentType;
use App\Actions\SaveCoverAction;
use App\Livewire\Forms\BookForm;
use App\Services\Caches\BookCache;
use App\Actions\AttachGenresAction;

class BookService
{
    public function create(BookForm $bookForm, User $user)
    {
        $book = Book::create([
            'title' => $bookForm->title,
            'classification_id' => $bookForm->classification,
            'synopsis' => $bookForm->synopsis,
            'chapter' => ($bookForm->chapter ?? 0) > 0 ? $bookForm->chapter : null,
            'pages' => ($bookForm->pages ?? 0) > 0 ? $bookForm->pages : null,
            'volume' => ($bookForm->volume ?? 0) > 0 ? $bookForm->volume : null,
            'series' => $bookForm->serie,
            'author' => $bookForm->author,
            'release_date' => $bookForm->release_date,
            'published_by' => $bookForm->published_by,
            'user_id' => $user->id,
        ]);

        if (! isNullOrEmpty($bookForm->formats))
            $book->formats()->syncWithoutDetaching($bookForm->formats);

        app(AttachGenresAction::class)->execute($book, $bookForm->genres);
        app(SaveCoverAction::class)->execute($book, $bookForm->image,  ContentType::BOOK->value);

        if (!isNullOrEmpty($book)) {
            app(BookCache::class)->clearContentFilters();
            $bookForm->resetForm();
            return notyf()->success("Livro <strong>{$book->title}</strong> foi adicionado ao acervo Midnight Knowledge.");
        }

        return notyf()->warning("Não foi possível cadastrar o livro desejado. Verifique os dados e tente novamente.");
    }
}
