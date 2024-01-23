<!DOCTYPE html>
<html lang="en">
<head>
  <title>{{ __('messages.title') }}</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
@include('includes.nav')
<div class="container">
  <h2>{{__('messages.newCarData')}}</h2>
  <form action="{{ route('storeCar') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label for="title"class="form-label">{{__('messages.newCarData')}}</label>
      <input class="form-control"type="text" class="form-control" id="title"  name="title" value="{{ old('title')}}">
      @error('title')
      {{ $message }}
      @enderror
    </div>
    <div class="mb-3">
      <label for="description"class="form-label">Description:</label>
      <textarea class="form-control"name="description" id="description" rows="3">{{ old('description')}}</textarea>
      @error('description')
      {{ $message }}
      @enderror
    </div>
    <div class="form-group">
      <label for="image">Image:</label>
      <input type="file" class="form-control" id="image" placeholder="Enter image" name="image">
      @error('image')
        {{ $message }}
      @enderror
    </div>
    <div class="form-group">
      <label for="category"class="form-label">Category:</label>
      <select name="category_id" id="">
        <option value="">Select Category</option>
        @foreach($categories as $category) 
        <option value="{{$category->id}}">{{$category->cat_name}}</option>
        @endforeach 
      </select> 
      @error('category_id')
      {{ $message }}
      @enderror
    </div>
    <div class="checkbox">
      <label><input class="form-check-input" type="checkbox" name="published"> Published me</label>
    </div>
    <button type="submit" class="btn btn-primary">Insert</button>
  </form>
</div>

</body>
</html>