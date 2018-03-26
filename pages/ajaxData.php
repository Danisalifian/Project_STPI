<?php
//Include database configuration file
include('koneksi.php');

if(isset($_POST["id_provinsi"]) && !empty($_POST["id_provinsi"])){
    //Get all state data
    $query = $con->query("SELECT * FROM kota WHERE ID_PROV = '".$_POST['id_provinsi']."'");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    
    //Display states list
    if($rowCount > 0){
        echo '<option value="">Select state</option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['ID_KOTA'].'">'.$row['NAMA_KOTA'].'</option>';
        }
    }else{
        echo '<option value="">State not available</option>';
    }
}


?>