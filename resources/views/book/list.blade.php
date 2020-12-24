@section('title','書籍一覧')
@extends('layout')
@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h2>書籍一覧</h2>
        @if(session('err_msg'))
            <p class="text-danger">{{session('err_msg')}}</p>
        @endif
        <table class="table table-striped">
            <tr>
                <th>書籍番号</th>
                <th>タイトル</th>
                <th>日付</th>
                <th></th>
            </tr>
            @foreach($books as $book)
            <tr>
                <td>{{$book->id}}</td>
                <td><a href="/book/{{$book->id}}">{{$book->title}}</a></td>
                <td>{{$book->updated_at}}</td>
                <td><button type="button" class="btn btn-primary" onClick="location.href='/book/edit/{{$book->id}}'">編集</button></td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection