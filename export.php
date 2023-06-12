<?php 
require_once("dbConnection.php");
 if(isset($_POST["export"]))  { 

     // $connect = mysqli_connect("localhost", "dumet", "school", "test"); 

      header('Content-Type: text/csv; charset=utf-8'); 

      header('Content-Disposition: attachment; filename=data.csv'); 

      $output = fopen("php://output", "w"); 

      fputcsv($output, array('Name', 'Age', 'Email')); 
      
      $result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");

     // $query = "SELECT * from import ORDER BY id DESC"; 

      //$result = mysqli_query($connect, $query); 

      while($row = mysqli_fetch_assoc($result)) 

      { 

           fputcsv($output, $row); 

      } 

      fclose($output); 

 }
