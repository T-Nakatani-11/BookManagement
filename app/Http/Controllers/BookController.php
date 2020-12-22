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

    /**
     * 書籍詳細表示
     * @param int $id
     * @return view
     */
    public function showList($id)
    {
        $book = Book::find($id);
        if(is_null($book)){
            // エラーメッセージ
            \Session::flash('err_msg', 'データがありません。')
            return redirect(route('books'));
        }
        return view('book.detail', ['book' => $book]);
    }

}
