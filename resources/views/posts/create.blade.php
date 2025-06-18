@extends('layouts.app')

@section('title', 'Add Book')

@section('content')
<div class="container">
    <h2>Add New Book</h2>
    <form id="book-form" method="POST" action="{{ route('books.store') }}">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="mb-3">
            <label for="author" class="form-label">Author</label>
            <input type="text" class="form-control" id="author" name="author" required>
        </div>
        <div class="mb-3">
            <label for="isbn" class="form-label">ISBN</label>
            <input type="text" class="form-control" id="isbn" name="isbn" required>
        </div>
        <button type="submit" class="btn btn-primary">Add Book</button>
    </form>
</div>
<script>
document.getElementById('book-form').addEventListener('submit', (e) => {
    e.preventDefault();
    addBook();
});
</script>
@endsection