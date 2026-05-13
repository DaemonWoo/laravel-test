<?php

namespace App\Http\Livewire\Books;

use App\Models\Book;
use Livewire\Component;
use Livewire\WithPagination;

class BooksComponent extends Component
{
    use WithPagination;

    public $user;

    public $currentUrl;

    public function deleteBook($id): void
    {
        Book::destroy($id);
        $this->resetPage();
    }

    public function mount(): void
    {
        $this->currentUrl = url()->current();
    }

    public function render()
    {
        $books = Book::paginate(10);

        return view('livewire.book.books-component', [
            'books' => $books,
            'cUrl' => $this->currentUrl,
        ]);
    }
}
