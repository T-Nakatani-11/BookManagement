<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">書籍</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="{{route('books')}}">書籍一覧 <span class="sr-only"></span></a>
      <a class="nav-item nav-link" href="{{route('create')}}">書籍追加</a>
      <div class="container">
    	  <div class="row">
          <div class="col-md-100">
            <div id="custom-search-input">
                 <div class="input-group col-md-100">
                    <input type="text" class="form-control input-lg" placeholder="書籍名を入力" />
                    <span class="input-group-btn">
                        <button class="btn btn-info btn-lg" type="button">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </span>
                </div>
           </div>
        </div>
      </div>
	  </div>
</div>



  </div>
</nav>