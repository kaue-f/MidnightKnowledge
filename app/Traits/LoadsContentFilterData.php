<?php

namespace App\Traits;

use App\Enums\Status;
use App\Enums\ContentType;
use App\Services\Caches\BookCache;
use App\Services\Caches\GameCache;
use App\Services\Caches\AnimeCache;
use App\Services\Caches\GenreCache;
use App\Services\Caches\ClassificationCache;

trait LoadsContentFilterData
{
    public function loadAllFilters(): void
    {
        $this->genres = app(GenreCache::class)->getGenres();
        $this->loadClassifications();
        $this->loadAllTypes();
        $this->loadStatus();
        $this->loadAnimeFilters();
        $this->loadBookFilters();
        $this->loadGameFilters();
    }

    public function loadFiltersFor(ContentType $contentType): void
    {
        $this->genres = $contentType->getGenreCache();
        $this->loadClassifications();

        match ($contentType) {
            ContentType::ANIME => $this->loadAnimeFilters(),
            ContentType::BOOK => $this->loadBookFilters(),
            ContentType::GAME => $this->loadGameFilters(),
            default => null,
        };
    }

    protected function loadClassifications(): void
    {
        $this->classifications = app(ClassificationCache::class)->fetch();
    }

    protected function loadAllTypes()
    {
        $this->types = array_merge(
            $this->types,
            array_map(fn($type) => $type->value, ContentType::filtered()),
        );
    }

    protected function loadStatus()
    {
        $this->statuses = collect(Status::array())
            ->map(fn(string $value, string $key) => ['id' => $key, 'name' => $value])
            ->values()
            ->toArray();
    }

    protected function loadAnimeFilters(): void
    {
        $this->animeTypes = app(AnimeCache::class)->getTypes();
    }

    protected function loadBookFilters(): void
    {
        $cache = app(BookCache::class);

        $this->authors = $cache->getAuthors();
        $this->formats = $cache->getFormats();
        $this->publishedBy = $cache->getPublishedBy();
        $this->series = $cache->getSeries();
    }

    protected function loadGameFilters()
    {
        $cache = app(GameCache::class);

        $this->platforms = $cache->getPlatforms();
        $this->developers = $cache->getDevelopers();
    }
}
