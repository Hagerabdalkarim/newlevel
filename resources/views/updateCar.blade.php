<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add Car</title>
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
  <form action="{{ route('update',$car->id) }}" method="post"enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="mb-3">
      <label for="title"class="form-label">Title:</label>
      <input class="form-control"type="text" class="form-control" id="title"name="title"value="{{ $car->title }}">
    </div>
    <div class="mb-3">
      <label for="description"class="form-label">Description:</label>
      <textarea class="form-control"name="description" id="description" rows="3">{{ $car->description }}</textarea>
    </div>
    <div class="form-group">
      <label for="image">Image:</label>
      <input type="file" class="form-control" id="image" name="image">
      <img src="{{ asset('assets/images/'.$car->image ) }}" alt="car" style="width:200px;">
      @error('image')
        {{ $message }}
      @enderror
    </div>
    <input type="hidden" name="oldImage" value="{{$car->image}}">
    <div class="checkbox">
      <label><input class="form-check-input" type="checkbox" name="published" @checked($car->published)> Published me</label>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
  </form>
</div>

</body>
</html>