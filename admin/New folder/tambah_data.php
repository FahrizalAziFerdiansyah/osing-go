<?php 
   
    require_once "koneksi.php";
?>

<?php 
$error = "";

    if(isset($_POST['submit'])){
        $nama_perusahaan = $_POST['nama_perusahaan'];
        $kategori   = $_POST['kategori'];
        $website   = $_POST['website'];
        $no_hp   = $_POST['no_hp'];
        $alamat   = $_POST['alamat'];
        $kota   = $_POST['kota'];
        $provinsi   = $_POST['provinsi'];

        
        if(!empty(trim($nama_perusahaan)) && !empty(trim($kategori))){
            if(tambah_data($nama_perusahaan, $kategori, $website, $no_hp, $alamat, $kota, $provinsi)){
                header('Location: index.php');
            }else{
                $error = "ada masalah saat tambah data";
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
    <input class="input" type="text" name="nama_perusahaan" value=""><br><br>
    
    <label for="kategori">kategori</label><br>
    <input class="input" type="text" name="kategori" value=""><br><br><br><br>
    
    <label for="website">website</label><br>
    <input class="input" type="text" name="website" value=""><br><br>
    <label for="no_hp">No Hp</label><br>
    <input class="input" type="text" name="no_hp" value=""><br><br>
    <label for="alamat">Alamat</label><br>
    <input class="input" type="text" name="alamat" value=""><br><br>
    <label for="kota">kota</label><br>
    <input class="input" type="text" name="kota" value=""><br><br>
    <label for="provinsi">Provinsi</label><br>
    <input class="input" type="text" name="provinsi" value=""><br><br>
    
    <div class="error"><br>
        <?= $error;?>
    </div>
    <br>
    <input class="submit" type="submit" name="submit" value="Kirim"><br>
    

    </form>
    </div>
    <div class="sidebar"></div>

    </div>
