<?php require_once "koneksi.php"?>

<?php if(isset($_GET['id_perusahaan'])){
    
    if(hapus_data($_GET['id_perusahaan'])){
        header('Location: index.php');

    }
    else echo " gagal menghapus data";
}

?>