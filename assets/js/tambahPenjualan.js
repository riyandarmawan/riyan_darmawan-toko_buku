// take the button and the node
const addBook = document.getElementById('add-book');
const chooseBookContainer = document.querySelector('.choose-book-container');

addBook.addEventListener('click', () => {
    chooseBookContainer.parentElement.appendChild(chooseBookContainer.cloneNode(true));
});