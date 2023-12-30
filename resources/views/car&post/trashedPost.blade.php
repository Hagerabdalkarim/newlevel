<!DOCTYPE html>
<html lang="en">
<head>
  <title>Trashed List Posts</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
</head>
<body>
@include('includes.nav')
<div class="container">
  <h2>Trashed List Posts</h2>
  <table class="table">
    <thead>
      <tr>
        <th>Post Title</th>
        <th>Author</th>
        <th>Descripion</th>
        <th>Published</th> 
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
        @foreach($posts as $post)
      <tr class="success">
        <td>{{$post->posttitle }}</td>
        <td>{{$post->author }}</td>
        <td>{{$post->description }}</td>
        <td>@if ($post->published)
          Yes
          @else
          No
          @endif 
        </td>
        <td><a href="forceDeletePost/{{ $post->id }}" onclick="return confirm('Are you sure you want to delete ?')">Force Delete</a></td>
      </tr>      
      @endforeach
    </tbody>
  </table>
</div>

</body>
</html>
