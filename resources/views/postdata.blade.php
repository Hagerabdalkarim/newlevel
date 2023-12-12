<!DOCTYPE html>
<html lang="en">
<head>
  <title>Post Create</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
@include('includes.nav')
<div class="container">
  <h2>Add Post</h2>
  <form action="{{route('storepost')}}" method="post">
    @csrf
    <div class="form-group">
      <label for="posttitle">Post Title:</label>
      <input type="text" class="form-control" id="posttitle" placeholder="Enter posttitle" name="posttitle">
    </div>
    <div class="form-group">
      <label for="author">Author:</label>
      <input type="text" class="form-control" id="author" placeholder="Enter Author" name="author">
    </div>
    <div class="form-group">
      <label for="description">Description:</label>
      <textarea class="form-control"name="description" id="description" cols="60" rows="3"></textarea>
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
