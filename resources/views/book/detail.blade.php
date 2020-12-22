@section('title','書籍詳細')
@extends('layout')
@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h2>書籍</h2>
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