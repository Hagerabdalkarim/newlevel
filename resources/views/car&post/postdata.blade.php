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
  <h2>Add Post</h2>
  <form action="{{route('storepost')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="posttitle">Post Title:</label>
      <input type="text" class="form-control" id="posttitle" placeholder="Enter posttitle" name="posttitle"value="{{ old('posttitle')}}">
       @error('posttitle')
      {{ $message }}
      @enderror
    </div>
    <div class="form-group">
      <label for="author">Author:</label>
      <input type="text" class="form-control" id="author" placeholder="Enter Author" name="author"value="{{ old('author')}}">
       @error('author')
      {{ $message }}
      @enderror
    </div>
    <div class="form-group">
      <label for="description">Description:</label>
      <textarea class="form-control"name="description" id="description" cols="60" rows="3">{{ old('description') }}</textarea>
       @error('description')
      {{ $message }}
      @enderror
      <div class="form-group">
      <label for="image">Image:</label>
      <input type="file" class="form-control" id="image" placeholder="Enter image" name="image">
      @error('image')
        {{ $message }}
      @enderror
    </div>
    </div>
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="published"> Published me
      </label>
    </div>
    <button type="submit" class="btn btn-primary">Insert</button>
  </form>
</div>

</body>
</html>
