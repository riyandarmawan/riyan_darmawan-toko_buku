// execute the code when the page is loaded
document.addEventListener("DOMContentLoaded", () => {
    // define the variable for element in html
    const addBook = document.getElementById("add-book");
    const inputRowBook = document.getElementById("input-row-book");

    // add event click to button
    addBook.addEventListener("click", () => {
        // duplicate the row to their parent
        inputRowBook.parentElement.appendChild(inputRowBook.cloneNode(true));
    });
});
