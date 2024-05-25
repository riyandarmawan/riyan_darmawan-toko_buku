<?php

session_start();

if (!isset($_SESSION['login'])) {
    header('Location: /page/auth/login.php');
}

require_once '../../config/config.php';

require_once '../../controller/PenjualanController.php';

$penjualan = new PenjualanController();

$books = $penjualan->getBooks();

if(isset($_POST['submit'])) {
    $penjualan->insertPenjualan();
}

?>

<?php require_once '../../layout/header.php'; ?>

<div class="border rounded-md px-10 py-4 max-h-[30rem] overflow-y-scroll mx-auto">
    <form action="" method="post">
        <div class="flex justify-between mb-4">
            <!-- tanggal -->
            <div class="row g-3 align-items-center">
                <div class="col-auto">
                    <label for="date" class="col-form-label">Tanggal</label>
                </div>
                <div class="col-auto">
                    <input type="date" id="date" name="date" value="<?= date('Y-m-d') ?>" readonly class="form-control">
                </div>
            </div>

            <!-- total -->
            <div class="row g-3 align-items-center">
                <div class="col-auto">
                    <label for="total" class="col-form-label">Total</label>
                </div>
                <div class="col-auto">
                    <textarea type="text" id="total" name="total" readonly rows="2" class="form-control resize-none"></textarea>
                </div>
            </div>
        </div>

        <!-- input for books -->
        <table class="table table-sm table-striped table-bordered">
            <thead>
                <tr>
                    <th>Kode Buku</th>
                    <th>Judul</th>
                    <th>Penerbit</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                    <th>Diskon</th>
                    <th>Sub Total</th>
                </tr>
            </thead>
            <tbody>
                <tr class="input-row-book">
                    <td><input type="text" name="id[]" class="form-control id"></td>
                    <td><input type="text" name="title[]" readonly class="form-control title"></td>
                    <td><input type="text" name="publisher[]" readonly class="form-control publisher"></td>
                    <td><input type="text" name="price[]" readonly class="form-control price"></td>
                    <td><input type="number" name="amount[]" min="1" value="1" class="form-control amount"></td>
                    <td><input type="text" name="discount[]" readonly class="form-control discount"></td>
                    <td><input type="text" name="subTotal[]" readonly class="form-control sub-total"></td>
                </tr>
            </tbody>
        </table>
        <button type="button" id="add-book" class="btn btn-primary">Tambah Buku</button>
        <div class="w-full mt-4">
            <button type="submit" name="submit" class="btn btn-primary">Tambah Penjualan</button>
        </div>
    </form>
</div>

<script>
    // This part of the script handles the functionality for adding a new row of input fields when the "add-book" button is clicked.
    const addBook = document.getElementById("add-book");

    addBook.addEventListener("click", () => {
        const inputRowBook = document.querySelectorAll(".input-row-book");

        // Clone the first row of input fields
        const newRow = inputRowBook[0].cloneNode(true);

        // Reset input values in the cloned row
        newRow.querySelectorAll('input').forEach(input => {
            if (input.type === 'number') {
                input.value = 1; // Set number inputs to default value 1
            } else {
                input.value = ''; // Clear text inputs
            }
        });

        // Append the cloned row to the parent element
        inputRowBook[0].parentElement.appendChild(newRow);
    });

    // This part of the script initializes an array of books with data fetched from the server-side (PHP) and selects input fields for book information.
    let books = <?= json_encode($books) ?>

    const idInputs = document.querySelectorAll(".id");
    const title = document.querySelectorAll('.title');
    const publisher = document.querySelectorAll('.publisher');
    const price = document.querySelectorAll('.price');
    const amount = document.querySelectorAll('.amount');
    const discount = document.querySelectorAll('.discount');
    const subTotal = document.querySelectorAll('.sub-total');

    // This part of the script adds event listeners to the book ID inputs to fetch book information and calculate subtotal dynamically.
    idInputs.forEach((idInputs, index) => {
        idInputs.addEventListener('keyup', (event) => {
            const bookId = event.target.value;

            // Find the index of the book with the matching ID
            const bookIndex = books.findIndex(e => e.id_buku == bookId);

            // Function to calculate subtotal based on price, amount, and discount
            const updateSubTotal = () => price[index].value * amount[index].value - discount[index].value;

            // Populate input fields with book information
            title[index].value = books[bookIndex].judul;
            publisher[index].value = books[bookIndex].penerbit;
            price[index].value = books[bookIndex].harga_jual;
            discount[index].value = books[bookIndex].diskon;
            subTotal[index].value = updateSubTotal();

            // Add event listener to amount input to recalculate subtotal when its value changes
            amount[index].addEventListener('keyup', () => {
                subTotal[index].value = updateSubTotal();
            });
        });
    });
</script>

<?php require_once '../../layout/footer.php'; ?>