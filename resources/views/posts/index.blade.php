@extends('layouts.app')

@section('title', 'Books')

@section('content')
<div class="container">
    <h2>Book List</h2>
    <div id="book-list" class="row"></div>
</div>
<script>
document.addEventListener('DOMContentLoaded', () => {
    displayBooks();
});
</script>
@endsection