<?php
session_start();

require 'functions.php';

if (!isset($_SESSION["login"])) {
    header("Location: ../../../login");
    exit;
}

$id_dosen = $_GET["id_dosen"];

include('../../../view/header.php');
?>

<!-- Page Content -->
<div id="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="homepage">
                    <div class="text-center">
                        <h2>Maaf</h2>
                        <p>
                            Terjadi kesalahan, data tidak dapat diperharui :[
                            <br /><a href="ubah.php?id_dosen=<?= $id_dosen; ?>">Kembali</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include('../../../view/footer.php');
?>