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
            <p id_perusahaan="judul_form">jasa web</p>
            <?php while($row= mysqli_fetch_assoc($jasaweb)):?>
        <div class="jasaweb2">
            
            <h2><a href="single.php?id_perusahaan=<?= $row['id_perusahaan'];?>"><?= $row['nama_perusahaan']; ?></a></h2>
            <p id="kategori"><?= excerpt($row['kategori']);?></p>
            <p id="no_hp">no_hp : <?= $row['no_hp'];?></p>
            <p id="alamat">alamat : <?= $row['alamat']; ?></p>
            

        </div>
      <?php endwhile;?>
            </div>
            <?php require_once "sidebar.php";?>
    </div>  


