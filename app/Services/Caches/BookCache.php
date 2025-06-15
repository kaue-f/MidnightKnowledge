<?php

namespace App\Services\Caches;

use App\Models\Genre;
use App\Models\Book\Book;
use App\Enums\ContentType;
use App\Models\Book\Format;

class BookCache extends BaseCache
{
    protected string $genreKey = 'bookGenres';
    protected string $authorsKey = 'bookAuthors';
    protected string $publishedKey = 'bookPublishedBy';
    protected string $formatsKey = 'formats';
    protected string $seriesKey = 'bookSeries';

    public function getGenres()
    {
        return $this->remember(
            key: $this->genreKey,
            callback: fn() => Genre::where('category', ContentType::BOOK)
                ->orderBy('genre')
                ->get()

        );
    }

    public function getAuthors()
    {
        return $this->remember(
            key: $this->authorsKey,
            callback: fn() => Book::selectRaw('TRIM(author) AS id, TRIM(author) AS name')
                ->whereRaw("TRIM(author) <> ''")
                ->groupByRaw('TRIM(author)')
                ->orderByRaw('TRIM(author)')
                ->get()
                ->toArray()
        );
    }

    public function getPublishedBy()
    {
        return $this->remember(
            key: $this->publishedKey,
            callback: fn() => Book::selectRaw('TRIM(published_by) AS id, TRIM(published_by) AS name')
                ->whereRaw("TRIM(published_by) <> ''")
                ->groupByRaw('TRIM(published_by)')
                ->orderByRaw('TRIM(published_by)')
                ->get()
                ->toArray()
        );
    }

    public function getFormats()
    {
        return $this->remember(
            key: $this->formatsKey,
            callback: fn() => Format::all()->toArray()
        );
    }

    public function getSeries()
    {
        return $this->remember(
            key: $this->seriesKey,
            callback: fn() => Book::selectRaw('TRIM(series) AS id, TRIM(series) AS name')
                ->whereRaw("TRIM(series) <> ''")
                ->groupByRaw('TRIM(series)')
                ->orderByRaw('TRIM(series)')
                ->get()
                ->toArray()
        );
    }

    public function clearContentFilters()
    {
        $this->forget(key: $this->authorsKey);
        $this->forget(key: $this->publishedKey);
        $this->forget(key: $this->seriesKey);
    }
}
