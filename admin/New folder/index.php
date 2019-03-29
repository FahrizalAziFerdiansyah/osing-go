<?php 
    require_once "koneksi.php";
        ?>

<?php $jasaweb = tampilkan(); ?>

     <?php 
        
    if(isset($_GET['search'])){
                $cari  = $_GET['search'];
            $jasaweb  = hasil_cari($cari);
        }
?>
<div class="wrapper">
   <nav>
            <form  action="" method="get">
        <input class="search" type="search" name="search" placeholder="Search......">    
            </form>
                </nav>
  <div class="form2">
            <p id_perusahaan="judul_form">nama perusahaan</p>
            <?php while($row= mysqli_fetch_assoc($jasaweb)):?>
        <div class="jasaweb2">
            
            <h2><a href="single.php?id=<?= $row['id_perusahaan'];?>"><?= $row['nama_perusahaan']; ?></a></h2>
            <p id_perusahaan="no_hp">No Hp :<?= excerpt($row['no_hp']);?></p>
            <p id_perusahaan="alamat">alamat : <?= $row['alamat'];?></p>
            <p id_perusahaan="kategori">kategori : <?= $row['kategori']; ?></p>
            <p id_perusahaan="kota">kota : <?= $row['kota']; ?></p>
            
           
                <a href="edit.php?id_perusahaan=<?= $row['id_perusahaan'];?>">Edit |</a>
                   
                <a href="hapus.php?id_perusahaan=<?= $row['id_perusahaan'];?>"> Hapus</a>

        </div>
      <?php endwhile;?>
            </div>
            <?php require_once "sidebar.php";?>
    </div>  


