<?php

namespace App\Livewire\Pages\Books;

use Livewire\Component;
use App\Models\Book\Book;
use Livewire\WithPagination;
use Livewire\Attributes\Title;
use App\Services\Caches\BookCache;
use Illuminate\Support\Collection;
use Livewire\WithoutUrlPagination;
use App\Services\Caches\ClassificationCache;

class Index extends Component
{
    use WithPagination, WithoutUrlPagination;
    public string $search = '';
    public Collection $genres;
    public array $genre = [];
    public array $authors;
    public array $author = [];
    public array $publishedBy;
    public array $published = [];
    public array $formats;
    public array $format = [];
    public array $series;
    public array $serie = [];
    public array $classifications;
    public array $classification = [];
    public array $sortBy = ['column' => 'id', 'direction' => 'asc'];
    public array $numbersPage = [
        ['id' => 10, 'name' => 10],
        ['id' => 15, 'name' => 15],
        ['id' => 30, 'name' => 30],
        ['id' => 50, 'name' => 50],
        ['id' => 75, 'name' => 75],
        ['id' => 100, 'name' => 100],
    ];

    public int $page = 15;
    public bool $modalBook = false;

    #[Title('Livros')]
    public function render()
    {
        return view('livewire.pages.books.index', ['books' => $this->booksQuery()]);
    }

    public function mount(BookCache $bookCache)
    {
        $this->authors = $bookCache->getAuthors();
        $this->formats = $bookCache->getFormats();
        $this->genres = $bookCache->getGenres();
        $this->publishedBy = $bookCache->getPublishedBy();
        $this->series = $bookCache->getSeries();
        $this->classifications = app(ClassificationCache::class)->fetch();
    }

    public function booksQuery($assortment = NULL)
    {
        if (! isNullOrEmpty($assortment))
            $this->sortBy = orderSortBy($this->sortBy, $assortment);

        return Book::query()->select('books.*')
            ->with(['genres', 'formats'])
            ->withAvg('ratings', 'rating')
            ->when($this->search, function ($query) {
                $query->whereLike('title', "%$this->search%");
            })
            ->when($this->author, function ($query) {
                $query->whereIn('author', $this->author);
            })
            ->when($this->format, function ($query) {
                $query->whereHas('formats', function ($query) {
                    $query->whereIn('formats.id', $this->format);
                });
            })
            ->when($this->genre, function ($query) {
                $query->whereHas('genres', function ($query) {
                    $query->whereIn('genres.id', $this->genre);
                });
            })
            ->when($this->published, function ($query) {
                $query->whereIn('published_by', $this->published);
            })
            ->when($this->classification, function ($query) {
                $query->whereIn('classification_id', $this->classification);
            })
            ->orderBy(...array_values($this->sortBy))
            ->paginate($this->page);
    }

    public function resetFilter()
    {
        $this->reset('search', 'author', 'format', 'genre', 'published', 'classification',);
        $this->resetPage();
    }
}
