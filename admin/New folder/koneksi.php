<?php 
    

    session_start();



    $koneksi = mysqli_connect ("localhost", "root", "", "sig");

    function tampilkan(){
        $query = "SELECT * FROM jasaweb";
        return result($query);
    }

    function tampilkan_side(){
        $query = "SELECT * FROM jasaweb";
        return result($query);
    }
    
    function tampilkan_id($id_perusahaan){
        $query = "SELECT * FROM jasaweb WHERE id_perusahaan=$id_perusahaan";
        return result($query);
    }
    function hasil_cari($cari){
        $query = "SELECT * FROM jasaweb WHERE nama_perusahan LIKE '%$cari%'";
        return result($query);
    }
    function result($query){
        global $koneksi;
        if($result = mysqli_query($koneksi, $query)){
            return $result;
        }
    }
   
    function edit_data($nama_perusahaan, $kategori, $website, $no_hp, $alamat, $kota, $provinsi, $id_perusahaan){
        $query = "UPDATE jasaweb SET nama_perusahaan='$nama_perusahaan', kategori='$kategori', website='$website', no_hp='$no_hp', alamat='$alamat', kota='$kota', provinsi='$provinsi' WHERE id_perusahaan=$id_perusahaan ";
        return run($query);
    }
    function hapus_data($id_perusahaan){
        $query = "DELETE FROM jasaweb WHERE id_perusahaan=$id_perusahaan";
        return run($query);
    }
 
 

//       function cek_status($nama){
//           
//        $query = "SELECT status FROM login WHERE username='$nama";
//           global $koneksi;
//            if($result = mysqli_query($koneksi, $query)){
//                while($row= mysqli_fetch_assoc($result)){
//                    $status = $row['status'];
//                    
//                }
//                
//                return $status;
//            }
//        
//}

    function run($query){
        global $koneksi;
        if(mysqli_query($koneksi, $query)) return true;
        else return false;
        
    }
 
    
    function excerpt($string){
        $string = substr($string, 0, 200);
        return $string. "....";
    }   

  

    
?>