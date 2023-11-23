<?php
    require("./config.php");
    if(!empty($_GET)){
        $soil_value = $_GET['soil']; // soil dryness is arduino data
        $time = date('h:i:s a');
        $date = date('d-m-Y');
        $query = mysqli_query($connection, "INSERT INTO data (soil_data, time_, date_) VALUES ('$soil_value', '$time', '$date')");
        if($query){
            echo "Data Inserted Successfully";
        }
        else{
            echo "Failed to insert data";
        }
    }
?>