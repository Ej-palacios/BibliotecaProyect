let books = [
    { id: 1, title: "The Great Gatsby", author: "F. Scott Fitzgerald", isbn: "978-0743273565" },
    { id: 2, title: "1984", author: "George Orwell", isbn: "978-0451524935" }
];

function addBook() {
    const title = document.getElementById('title').value;
    const author = document.getElementById('author').value;
    const isbn = document.getElementById('isbn').value;
    const newBook = {
        id: books.length + 1,
        title,
        author,
        isbn
    };
    books.push(newBook);
    window.location.href = '/';
}

function displayBooks() {
    const bookList = document.getElementById('book-list');
    bookList.innerHTML = '';
    books.forEach(book => {
        const bookCard = `
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">${book.title}</h5>
                        <p class="card-text">Author: ${book.author}</p>
                        <p class="card-text">ISBN: ${book.isbn}</p>
                        <a href="/books/${book.id}" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>
        `;
        bookList.innerHTML += bookCard;
    });
}

function displayBookDetails(id) {
    const book = books.find(b => b.id === parseInt(id));
    const bookDetails = document.getElementById('book-details');
    if (book) {
        bookDetails.innerHTML = `
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">${book.title}</h5>
                    <p class="card-text">Author: ${book.author}</p>
                    <p class="card-text">ISBN: ${book.isbn}</p>
                </div>
            </div>
        `;
    } else {
        bookDetails.innerHTML = '<p>Book not found.</p>';
    }
}