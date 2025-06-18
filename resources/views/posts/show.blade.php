@extends('layouts.app')

@section('title', 'Book Details')

@section('content')
<div class="container">
    <h2>Book Details</h2>
    <div id="book-details"></div>
    <a href="{{ route('books.index') }}" class="btn btn-secondary mt-3">Back to Books</a>
</div>

<script>
// Usando PHP puro para evitar conflictos con Blade
var bookId = <?php echo json_encode($id); ?>;

document.addEventListener('DOMContentLoaded', function() {
    if (typeof displayBookDetails === 'function') {
        displayBookDetails(bookId);
    } else {
        console.error('Function displayBookDetails not found');
        document.getElementById('book-details').innerHTML = 
            '<div class="alert alert-danger">Error loading book details</div>';
    }
});
</script>
@endsection