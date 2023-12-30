<!DOCTYPE html>
<html lang="en">
<head>
  <title>Post Create</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
@include('includes.nav')
<div class="container">
  <h2>Update Data</h2>
  <form action="{{ route('update',$post->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="form-group">
      <label for="posttitle">Post Title:</label>
      <input type="text" class="form-control" id="posttitle" placeholder="Enter posttitle" name="posttitle"value="{{ $post->posttitle }}">
    </div>
    <div class="form-group">
      <label for="author">Author:</label>
      <input type="text" class="form-control" id="author" placeholder="Enter Author" name="author" value="{{ $post->author }}">
    </div>
    <div class="form-group">
      <label for="description">Description:</label>
      <textarea class="form-control"name="description" id="description" cols="60" rows="3">{{ $post->description }}</textarea>
    </div>
    <div class="form-group">
      <label for="image">Image:</label>
      <input type="file" class="form-control" id="image" name="image">
      <img src="{{ asset('assets/images/'.$post->image ) }}" alt="post" style="width:200px;">
      @error('image')
        {{ $message }}
      @enderror
    </div>
   <input type="hidden" name="oldImage" value="{{$post->image}}">
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="published"@checked($post->published)> Published me
      </label>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
  </form>
</div>

</body>
</html>
