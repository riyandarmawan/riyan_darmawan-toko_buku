<?php

session_start();

if (!isset($_SESSION['login'])) {
    header('Location: /page/auth/login.php');
}

require_once '../../config/config.php';

require_once '../../controller/PenjualanController.php';

$penjualan = new PenjualanController();

$books = $penjualan->getBooks();

if (isset($_POST['submit'])) {
    $penjualan->insertPenjualan();
}

?>

<?php require_once '../../layout/header.php'; ?>

<div class="border rounded-md px-10 py-4 overflow-y-scroll mx-auto">
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

            <!-- Bayar -->
            <div class="row g-3 align-items-center">
                <div class="col-auto">
                    <label for="bayar" class="col-form-label">Bayar</label>
                </div>
                <div class="col-auto">
                    <textarea type="number" id="bayar" name="bayar" rows="2" class="form-control resize-none"></textarea>
                </div>
            </div>

            <!-- Kembalian -->
            <div class="row g-3 align-items-center">
                <div class="col-auto">
                    <label for="kembalian" class="col-form-label">Kembalian</label>
                </div>
                <div class="col-auto">
                    <textarea type="text" id="kembalian" name="kembalian" readonly rows="2" class="form-control resize-none"></textarea>
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
            <tbody id="row-container">
                <tr class="input-row-book">
                    <td><input type="text" name="id[]" required class="form-control id"></td>
                    <td><input type="text" name="title[]" readonly class="form-control title"></td>
                    <td><input type="text" name="publisher[]" readonly class="form-control publisher"></td>
                    <td><input type="text" name="price[]" readonly class="form-control price"></td>
                    <td><input type="number" name="amount[]" min="1" value="1" required class="form-control amount"></td>
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
        const rowContainer = document.getElementById('row-container');
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
        rowContainer.appendChild(newRow);
    });

    // This part of the script initializes an array of books with data fetched from the server-side (PHP).
    const books = <?= json_encode($books) ?>;

    const total = document.getElementById('total'); // Total element to update the overall total

    // Function to calculate subtotal based on price, amount, and discount
    const calculateSubTotal = (price, amount, discount) => (price * amount) - discount;

    // Function to update the total value
    const updateTotal = () => {
        let totalValue = 0;

        document.querySelectorAll('.sub-total').forEach(subTotalInput => {
            totalValue += parseInt(subTotalInput.value) || 0;
        });

        total.value = totalValue;
    };

    // Event delegation for input changes within the row container
    document.getElementById('row-container').addEventListener('keyup', (event) => {
        const row = event.target.closest('.input-row-book');

        if (event.target.classList.contains('id')) {
            const bookId = event.target.value;
            const bookIndex = books.findIndex(e => e.id_buku === bookId);

            if (bookIndex !== -1) {
                // Populate input fields with book information
                row.querySelector('.title').value = books[bookIndex].judul;
                row.querySelector('.publisher').value = books[bookIndex].penerbit;
                row.querySelector('.price').value = books[bookIndex].harga_jual;
                row.querySelector('.discount').value = books[bookIndex].diskon;
                row.querySelector('.sub-total').value = calculateSubTotal(
                    books[bookIndex].harga_jual,
                    row.querySelector('.amount').value,
                    books[bookIndex].diskon
                );
                updateTotal(); // Update total after setting values
            }
        } else if (event.target.classList.contains('amount')) {
            // Ensure amount is at least 1
            // if (event.target.value < 1) {
            //     event.target.value = 1;
            // }

            const price = row.querySelector('.price').value || 0;
            const amount = parseInt(row.querySelector('.amount').value) || 1;
            const discount = row.querySelector('.discount').value || 0;
            row.querySelector('.sub-total').value = calculateSubTotal(price, amount, discount);
            updateTotal(); // Update total after recalculating subtotal
        }
    });

    const bayar = document.getElementById('bayar');
    const kembalian = document.getElementById('kembalian');

    bayar.addEventListener('keyup', () => {
        kembalian.value = parseInt(total.value) - parseInt(bayar.value);
    });
</script>

<?php require_once '../../layout/footer.php'; ?>