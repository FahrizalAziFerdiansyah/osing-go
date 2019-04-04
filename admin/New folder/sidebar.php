<?php  
        require_once "koneksi.php";
?>
<?php 
    $side = tampilkan_side();
    ?>
<style media="screen">
    .sidebar{
    width: 99%;
    height: auto;
    background: white;
}
    .jasaweb_side{
        width: 90%;
        height: auto;
        background: white;
        text-align: center;
        margin: 0 auto;
    }
        #nama_perusahaan_side{
    width: 90%;
    height: auto;
    margin: 5px auto;
    background: white;
    padding: 10px 0; 
    color: black;
    margin-left: 0;
    border-bottom: 0.5px solid #dddddd;
    color: green;
}
    #nama_perusahaan_side a{
        color: gray;
    }
    
    .side_top{
        float: right;
        width: 20%;
        height: auto;
        background: white;
    }
</style>
<div class="side_top">
<div class="sidebar">
                <div id="top_sidebar">
                    <p id="teks_top_sidebar">Profil tempat</p>
                </div>
                <?php while($row= mysqli_fetch_assoc($side)):?>
                <div class="jasaweb_side">
                    
                    <p id="jnama_perusahaan_side"><a href="single.php?id_perusahaan=<?= $row['id_perusahaan'];?>"><?= $row['nama_perusahaan'];?></a></p>
                </div>
                <?php endwhile;?>
            </div>
    </div>