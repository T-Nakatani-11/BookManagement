@section('title','書籍一覧')
@extends('layout')
@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h2>書籍投稿</h2>
        <form method="POST" action="{{ route('store') }}" onSubmit="return checkSubmit()" enctype="multipart/form-data">
        @csrf
            <div class="form-group">
                <label for="title">
                    タイトル
                </label>
                <input
                    id="title"
                    name="title"
                    class="form-control"
                    value="{{ old('title') }}"
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
                >{{ old('content') }}</textarea>
                @if ($errors->has('content'))
                    <div class="text-danger">
                        {{ $errors->first('content') }}
                    </div>
                @endif
            </div>
            <input type="file" name="image" enctype="multipart/form-data">
            <div class="mt-5">
                <a class="btn btn-secondary" href="uploads/{{ route('books') }}">
                    キャンセル
                </a>
                <button type="submit" class="btn btn-primary">
                    投稿する
                </button>
            </div>
        </form>
    </div>
</div>
<script>
function checkSubmit(){
if(window.confirm('送信してよろしいですか？')){
    return true;
} else {
    return false;
}
}
</script>
@endsection