@section('title','書籍編集')
@extends('layout')
@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h2>書籍編集</h2>
        <form method="POST" action="{{ route('update') }}" onSubmit="return checkSubmit()" enctype="multipart/form-data">
        @csrf
            <input type="hidden" name ="id" value="{{$book->id}}">
            <div class="form-group">
                <label for="title">
                    タイトル
                </label>
                <input
                    id="title"
                    name="title"
                    class="form-control"
                    value="{{ $book->title }}"
                    type="text"
                >
                @if ($errors->has('title'))
                    <div class="text-danger">
                        {{ $errors->first('title') }}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="content">
                    本文
                </label>
                <textarea
                    id="content"
                    name="content"
                    class="form-control"
                    rows="4"
                >{{ $book->content }}</textarea>
                @if ($errors->has('content'))
                    <div class="text-danger">
                        {{ $errors->first('content') }}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="image">
                    画像
                </label>
                <label>
                    {{ $book->image }}
                </label>
            </div>
            <input type="file" name="image">
            <div class="mt-5">
                <a class="btn btn-secondary" href="{{ route('books') }}">
                    キャンセル
                </a>
                <button type="submit" class="btn btn-primary">
                    更新する
                </button>
            </div>
        </form>
    </div>
</div>
<script>
function checkSubmit(){
if(window.confirm('更新してよろしいですか？')){
    return true;
} else {
    return false;
}
}
</script>
@endsection