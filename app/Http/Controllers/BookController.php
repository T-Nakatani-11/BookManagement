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
        if ($request->hasFile('image') == true) {
            $filename = $inputs['image']->store('public/image');
            $path = basename($filename);
            $inputs['image'] = $path;
          }
          else{
            $inputs['image'] = "";
          }

        \DB::beginTransaction();
        try {
            Book::create($inputs);
            \DB::commit();
        } catch(\Throwable $e) {
            \DB::rollback();
            // abort(500);
        }
        \Session::flash('err_msg', '書籍を登録しました。');
        return redirect(route('books'));
    }

    /**
     * 書籍編集表示
     * @param int $id
     * @return view
     */
    public function showEdit($id)
    {
        $book = Book::find($id);
        if(is_null($book)){
            // エラーメッセージ
            \Session::flash('err_msg', 'データがありません。');
            return redirect(route('books'));
        }
        return view('book.edit', ['book' => $book]);
    }

    /**
     * 書籍更新
     * @return view
     */
    public function exeUpdate(BookRequest $request)
    {
        // 書籍のデータを受け取る
        $inputs = $request->all();
        // $inputs['image']->isValid()

        if ($request->hasFile('image') == true) {
            $book = new Book;
            $filename = $inputs['image']->store('public/image');
            $path = basename($filename);
            $inputs['image'] = $path;
          }
          else{
            $inputs['image'] = "";
          }

        \DB::beginTransaction();
        try {
            // 書籍更新
            $book = Book::find($inputs['id']);
            $book->fill([
                'title'   => $inputs['title'],
                'content' => $inputs['content'],
                'image' => $inputs['image']
            ]);
            $book->save();
            \DB::commit();
        } catch(\Throwable $e) {
            \DB::rollback();
            abort(500);
        }
        \Session::flash('err_msg', '書籍を更新しました。');        
        return redirect(route('books'));
    }

    /**
     * 書籍削除
     * @param int $id
     * @return view
     */
    public function exeDelete($id)
    {
        if(empty($id)){
            // エラーメッセージ
            \Session::flash('err_msg', 'データがありません。');
            return redirect(route('books'));                
        }
        try {
            // 書籍削除
            Book::destroy($id);
        } catch(\Throwable $e) {
            abort(500);
        }
        \Session::flash('err_msg', '削除しました。');
        return redirect(route('books'));
    }

    /**
     * 書籍検索
     * @param int $id
     * @return view
     */
    public function exeSearch(Request $request)
    {
        $inputs = $request->all();
        $keyword = $inputs['search'];

        #クエリ生成
        $query = Book::query(); 
        $books = $query->where('title','like','%'.$keyword.'%')->orWhere('content','like','%'.$keyword.'%')->get();
        
        if($books === ""){
            \Session::flash('err_msg', '一致しませんでした。');
        }
        return view('book.list', ['books' => $books]);
    }
}
