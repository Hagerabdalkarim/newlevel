<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Posts</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="{{ route('posts') }}">Posts List</a></li>
      <li><a href="{{ route('createpost') }}">Insert post</a></li>
      <li><a href="{{ route('trashedPost') }}">Trashed</a></li>
      <li><a href="#">Page 3</a></li>
    </ul>
  </div>
</nav>