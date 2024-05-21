// // execute the code when the page is loaded
// document.addEventListener("DOMContentLoaded", () => {
//   // define the variable for element in html
//   const addBook = document.getElementById("add-book");
//   const inputRowBook = document.querySelectorAll(".input-row-book");

//   // add event click to button
//   addBook.addEventListener("click", () => {
//     // duplicate the row to their parent
//     inputRowBook[0].parentElement.appendChild(
//       inputRowBook[inputRowBook.length - 1].cloneNode(true),
//     );
//   });

//   // // method 1 = akses id secara langsung
//   // id.onkeyup = () => {
//   //     alert("halo");
//   // }

//   // method 2
//   // define id
//   const id = document.getElementById("id");

//   //   set event to the input box
//   id.addEventListener("keyup", () => {
//     // find the data from database using value from the input

//   });
// });
