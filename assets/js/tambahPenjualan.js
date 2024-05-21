// execute the code when the page is loaded
document.addEventListener('DOMContentLoaded', () => {
    const addBook = document.getElementById('add-book');
    const inputRowBook = document.getElementById('input-row-book');

    addBook.addEventListener('click', () => {
        inputRowBook.parentElement.appendChild(inputRowBook.cloneNode(true));
    })
});