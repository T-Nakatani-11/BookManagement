<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">書籍</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="{{route('books')}}">書籍一覧 <span class="sr-only"></span></a>
      <a class="nav-item nav-link" href="{{route('create')}}" >書籍追加</a>
    </dev>
    <div class="col-md-6">
    <div id="custom-search-input">
      <form class="input-group col-md-12" action="{{route('search')}}" method="post">
      @csrf
        <input type="text" class="form-control input-lg" name="search" placeholder="書類名を入力してください" size="100" style="height:3em"/>
        <span class="input-group-btn">
          <button class="btn btn-info btn-lg" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </span>
      </form>
    </div>
	</div>
</div>
</nav>