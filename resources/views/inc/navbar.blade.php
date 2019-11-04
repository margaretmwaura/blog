<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
  <a class="navbar-brand" href="/lsapp/public/posts">{{config('app.name' , 'LSAPP')}}</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/lsapp/public/about">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/lsapp/public/posts">Blog</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/lsapp/public/posts/create">Create Post</a>
      </li>
          <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="/lsapp/public/about" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
          <a class="dropdown-item" href="/lsapp/public/about">About</a>
          <a class="dropdown-item" href="/lsapp/public/posts">Blog</a>
          <a class="dropdown-item" href="/lsapp/public/posts/create">Create Post</a>
        </div>
      </li>
    </ul>
    
  </div>
</nav>