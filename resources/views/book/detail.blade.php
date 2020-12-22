@section('title','書籍詳細')
@extends('layout')
@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h2>{{$book->title}}</h2>
        <span>作成日：{{$book->created_at}}</span>
        <br>
        <span>更新日：{{$book->updated_at}}</span>
        <table class="table table-striped">
            <tr>
                <th>内容</th>
            </tr>
            <tr>
                <td>{{$book->content}}</td>
            </tr>
        </table>
    </div>
</div>
@endsection