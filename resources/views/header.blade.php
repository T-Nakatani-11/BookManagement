<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>書籍</title>
        <meta rel="stylesheet" href="/css/app.css>

        <script src="/js/app.js" defer></script>
    </head>
    <body>
    <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">書籍</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="#">書籍一覧 <span class="sr-only"></span></a>
      <a class="nav-item nav-link" href="#">書籍追加</a>
    </div>
  </div>
</nav>
    </header>
    <br>
    <div class="container">
      @yield('content')
    </div>
</body>
</html>