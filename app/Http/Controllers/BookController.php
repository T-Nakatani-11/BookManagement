<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\HTTP\Requests\BookRequest;

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
    public function showDetail($id)
    {
        $book = Book::find($id);
        if(is_null($book)){
            // エラーメッセージ
            \Session::flash('err_msg', 'データがありません。');
            return redirect(route('books'));
        }
        return view('book.detail', ['book' => $book]);
    }

    /**
     * 書籍登録画面表示
     * @return view
     */
    public function showCreate()
    {
        return view('book.form');
    }

    /**
     * 書籍登録
     * @return view
     */
    public function exeStore(BookRequest $request)
    {
        // 書籍のデータを受け取る
        $inputs = $request->all();
        
        \DB::beginTransaction();
        try {
            // 書籍登録
            Book::create($inputs);
            \DB::commit();
        } catch(\Throwwable $e) {
            \DB::rollback();
            abort(500);
        }
        \Session::flash('err_msg', '書籍を登録しました。');        
        return redirect(route('books'));
    }
}
