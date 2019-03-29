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
            <p id="judul_form">jasa web</p>
            <?php while($row= mysqli_fetch_assoc($jasaweb)):?>
        <div class="jasaweb">
            
            <h2><a href="single.php?id_perusahaan=<?= $row['id_perusahaan'];?>"><?= $row['nama_perusahaan']; ?></a></h2>
            <p id="kategori"><?= excerpt($row['kategori']);?></p>
            <p id="no_hp">Waktu : <?= $row['no_hp'];?></p>
            <p id="alamat">Tag : <?= $row['alamat']; ?></p>
            
            <?php if($login == true):?>
                <a href="edit.php?id_perusahaan=<?= $row['id_perusahaan'];?>">Edit |</a>
                   
                <a href="hapus.php?id_perusahaan=<?= $row['id_perusahaan'];?>"> Hapus</a>

            <?php endif;?>
        </div>
      <?php endwhile;?>
            </div>
            <?php require_once "sidebar.php";?>
    </div>  


<?php require_once "footer.php";