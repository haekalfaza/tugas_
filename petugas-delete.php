<?php
// Proses Delete Data
if (isset($_GET['delete'])) {
    $id = $_GET['id'];
    $query_delete = mysqli_query($koneksi,"DELETE FROM petugas WHERE id_petugas = '$id'");
    if ($query_delete) {
        ?>
        <div class="alert alert-success">
           Data Berhasil Dihapus !!
        </div>
        <script>
    window.location.href= 'refresh:2; url=http://localhost/14_mywebsite_12RPL2/admin.php?page=petugas';
    </script>
        <?php
    }
}
?>