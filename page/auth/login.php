<?php

if(session_id()) session_start();

if (isset($_POST['submit'])) {
    require_once '../../controller/loginController.php';

    $loginModel = new loginController;

    $loginModel->login();
}

?>

<?php require_once '../../layout/header-login.php' ?>

<div class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
    <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
            <div class="col-md-8 col-lg-6 col-xxl-3">
                <div class="card mb-0">
                    <div class="card-body">
                        <div class="text-nowrap logo-img py-3 w-full flex justify-center">
                            <img src="../../assets/image/logos/dark-logo.svg" width="180" alt="">
                        </div>
                        <p class="text-center">Your Social Campaigns</p>
                        <form action="" method="post">
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control <?= isset($_SESSION['username']) ? 'invalid' : '' ?>" id="username" name="username" required autocomplete="off" autofocus>
                                <p class="text-invalid <?= isset($_SESSION['username']) ? '' : 'hidden' ?>">* <?= isset($_SESSION['username']) ? $_SESSION['username'] : '' ?></p>
                            </div>
                            <div class="mb-4">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control <?= isset($_SESSION['password']) ? 'invalid' : '' ?>" id="password" name="password" required autocomplete="off">
                                <p class="text-invalid <?= isset($_SESSION['password']) ? '' : 'hidden' ?>">* <?= isset($_SESSION['password']) ? $_SESSION['password'] : '' ?></p>
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once '../../layout/footer.php' ?>

<?php
// if (isset($_SESSION['username']) || isset($_SESSION['password'])) {
//     unset($_SESSION['username']);
//     unset($_SESSION['password']);
// }
?>