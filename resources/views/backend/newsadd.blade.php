@extends('backend.layouts.master')

@section('content')
        <!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
    <h2>News Post Form</h2>
    <form action="/action_page.php">
        <div class="mb-3 mt-3">
            <label for="">Title</label>
            <input type="text" class="form-control" id="title" placeholder="Enter title" name="title">
        </div>
        <div class="mb-3">
            <label for="">Description</label>
            <input type="text" class="form-control" id="description" placeholder="Enter description" name="description">
        </div>
        <div class="mb-3">
            <label for="">Author</label>
            <input type="text" class="form-control" id="description" placeholder="Enter author" name="author">
        </div>
        <div class="mb-3">
            <label for="">Author</label>
            <input type="text" class="form-control" id="description" placeholder="Enter author" name="author">
        </div>
        <div class="mb-3">
            <label for="">Category</label>
            <input type="text" class="form-control" id="category" placeholder="Enter category" name="category">
        </div>
        <button type="submit" class="btn btn-primary">News Post</button>
    </form>
</div>

</body>
</html>
@endsection