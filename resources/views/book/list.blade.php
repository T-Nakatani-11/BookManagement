@section('title','書籍一覧')
@extends('layout')
@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h2>書籍一覧</h2>
        <table class="table table-striped">
            <tr>
                <th>書籍番号</th>
                <th>日付</th>
                <th>タイトル</th>
                <th>内容</th>
            </tr>
            @foreach($books as $book)
            <tr>
                <td>{{$book->id}}</td>
                <td>{{$book->updated_at}}</td>
                <td>{{$book->title}}</td>
                <td>{{$book->content}}</td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection