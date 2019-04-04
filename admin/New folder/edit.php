<?php 
   
    require_once "koneksi.php";
?>

<?php 
$error = "";
    $id_perusahaan = $_GET['id_perusahaan'];

    if(isset($_GET['id_perusahaan'])){
        $jasaweb2 = tampilkan_id_perusahaan($id_perusahaan);
        while($row= mysqli_fetch_assoc($jasaweb)){
            
            $nama_perusahaan = $row['nama_perusahaan'];
            $kategori   = $row['kategori'];
            $website   = $row['website'];
            $no_hp   = $row['no_hp'];
            $alamat   = $row['alamat'];
            $kota   = $row['kota'];
            $provinsi   = $row['provinsi'];
        }
    }
    if(isset($_POST['submit'])){
        $nama_perusahaan = $_POST['nama_perusahaan'];
        $kategori   = $_POST['kategori'];
        $website   = $_POST['website'];
        $no_hp   = $_POST['no_hp'];
        $alamat   = $_POST['alamat'];
        $kota   = $_POST['kota'];
        $provinsi   = $_POST['provinsi'];
        
        if(!empty(trim($nama_perusahaan)) && !empty(trim($kategori))){
            if(edit_data($nama_perusahaan, $kategori, $website, $no_hp, $alamat, $kota, $provinsi)){
                header('Location: index.php');
            }else{
                $error = "ada masalah saat edit data";
            }
        }else{
            $error = "data harus diisi";
        }
    }

?>

    <style media="screen">
        
        .form_tambah{
            width: 80%;
            height: 900px;
            background: white;
            float: left;
            border-right: 0.5px solid #dddddd;
            box-sizing: border-box;
            padding-top: 20px;
            padding-left: 150px;
}
        
        
        .input{
            width: 400px;
            height: 30px;
            background: #dfdfdf;
            font-size: 18px;
        }
        .isi{
            width: 70%;
            height: 400px;
            background: #dfdfdf;
            font-size: 18px;
        }
        .submit{
            width: 400px;
            height: 30px;
            background: #50a8a9;
            border: none;
            color: white;
            font-size: 18px;
            cursor: pointer;
        }
        .submit:hover{
            background: #249697;
        }
        .error{
            color: red;
        }
    </style>
<div class="wrapper">
<div class="form_tambah">
<form action="" method="post">
    <label for="nama_perusahaan">Nama perusahaan</label><br>
    <input class="input" type="text" name="nama_perusahaan" value="<?=$nama_perusahaan_awal;?>"><br><br>
    
    <label for="kategori">kategori</label><br>
    <input class="input" type="text" name="kategori" value="<?=$kategori_awal;?>"><br><br><br><br>
    
    <label for="website">website</label><br>
    <input class="input" type="text" name="website" value="<?=$website_awal;?>"><br><br>
    <label for="no_hp">No Hp</label><br>
    <input class="input" type="text" name="no_hp" value="<?=$no_hp_awal;?>"><br><br>
    <label for="alamat">Alamat</label><br>
    <input class="input" type="text" name="alamat" value="<?=$alamat_awal;?>"><br><br>
    <label for="kota">kota</label><br>
    <input class="input" type="text" name="kota" value="<?=$kota_awal;?>"><br><br>
    <label for="provinsi">Provinsi</label><br>
    <input class="input" type="text" name="provinsi" value="<?=$provinsi_awal;?>"><br><br>

    
    <div class="error"><br>
        <?= $error;?>
    </div>
    <br>
    <input class="submit" type="submit" name="submit" value="Update data"><br>
    

    </form>
    </div>
    <div class="sidebar"></div>
    <div class="sidebar2"></div>
    </div>
<?php require_once "footer.php";?>