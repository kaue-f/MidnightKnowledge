<?php

namespace App\Traits;

use App\Enums\StatusEnum;
use App\Enums\ContentTypeEnum;
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

    public function loadFiltersFor(ContentTypeEnum $contentType): void
    {
        $this->genres = $contentType->getGenreCache();
        $this->loadClassifications();

        match ($contentType) {
            ContentTypeEnum::ANIME => $this->loadAnimeFilters(),
            ContentTypeEnum::BOOK => $this->loadBookFilters(),
            ContentTypeEnum::GAME => $this->loadGameFilters(),
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
            array_map(fn($type) => $type->value, ContentTypeEnum::filtered()),
        );
    }

    protected function loadStatus()
    {
        $this->statuses = collect(StatusEnum::array())
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
        $this->publishedBy = $cache->getPublishedBy();
        $this->series = $cache->getSeries();
        $this->formats = $cache->getFormats();
    }

    protected function loadGameFilters()
    {
        $cache = app(GameCache::class);

        $this->developers = $cache->getDevelopers();
        $this->platforms = $cache->getPlatforms();
    }
}
