<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    /**
     * 書籍一覧表示
     * 
     * @return view
     */
    public function showList()
    {
        $books = Book::all();
        return view('book.list', ['books' => $books]);
    }
}
