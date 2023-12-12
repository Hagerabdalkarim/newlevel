<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add Car</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
@include('includes.nav')
<div class="container">
  <h2>Add New Car Data</h2>
  <form action="{{ route('storeCar') }}" method="post">
    @csrf
    <div class="mb-3">
      <label for="title">Title:</label>
      <input class="form-group"type="text" class="form-control" id="title" placeholder="Enter title" name="title">
    </div>
    <div class="mb-3">
      <label for="description">Description:</label>
      <textarea class="form-group"name="description" id="description" cols="60" rows="3"></textarea>
    </div>
    <div class="checkbox">
      <label><input class="form-check-input" type="checkbox" name="published"> Published me</label>
    </div>
    <button type="submit" class="btn btn-primary">Insert</button>
  </form>
</div>

</body>
</html>