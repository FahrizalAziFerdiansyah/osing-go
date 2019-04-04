<?php
      require_once "koneksi.php";

    $id_perusahaan = $_GET['id_perusahan'];

    if(isset($_GET['id-perusahaan'])){
        $jasaweb2 = tampilkan_id_perusahaan($id_perusahaan);
        
        while($row= mysqli_fetch_assoc($ajasaweb2)){
            $nama_perusahaan = $row['nama_perusahaan'];
            $kategori   = $row['kategori'];
            $website   = $row['website'];
            $no_hp   = $row['no_hp'];
            $alamat   = $row['alamat'];
            $kota   = $row['kota'];
            $provinsi   = $row['provinsi'];
        }
    }
  
?>
    <style media="screen">
    .form_tambah{
            width: 80%;
            height: 800px;
            background: white;
            float: left;
            padding: 30px;
            box-sizing: border-box;
            border-bottom: 0.5px solid #dddddd;
}
        #judul_single{
            font-size: 25px;
            font-weight: bold;
        }
        #isi_single{
            font-size: 15px;
            margin-top: 20px;
        }
        #tag_awal{
            font-size: 12px;
        }
        
            </style>
       
    <div class="wrapper">
        <div class="form_tambah">
        <p id_perusahan="nama_perusahaan"><?=$nama_perusahaan;?></p><br>

        <p id_perusahan="kategori"><?= $kategori;?></p><br>

        <p id_perusahan="website">Tag: <?= $website;?></p><br>

        <p id_perusahan="no_hp">Tag: <?= $no_hp;?></p><br>

        <p id_perusahan="alamat">Tag: <?= $alamat;?></p><br>
        <p id_perusahan="kota">Tag: <?= $kota;?></p><br>
        <p id_perusahan="provinsi">Tag: <?= $provinsi;?></p><br>
</div>
    
<?php  require_once "sidebar.php"; ?>
        </div>
<?php
        require_once "footer.php";

?>