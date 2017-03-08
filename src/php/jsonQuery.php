<?php
  // JSON Headers
  header('Content-Type: application/json');
  header('Cache-Control: no-cache, must-revalidate');
  header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
  
  // MySQLi Variables
  define('MYSQL_BOTH',MYSQLI_BOTH);
  define('MYSQL_NUM',MYSQLI_NUM);
  define('MYSQL_ASSOC',MYSQLI_ASSOC);
  
  $server = "localhost";   // Configuración BD
  $database = "database";
  $user = "dwc";
  $password ="dwc";
  
  // Connect to Database
  $connection=mysqli_connect($server, $user, $password) or die(mysqli_error());
  mysqli_query($connection,"SET NAMES 'utf8'");
   mysqli_select_db($connection,$database) or die(mysqli_error());
 
 
 // Params
  if (isset($_GET['option'])) 
      $opt=$_GET['option'];
  else
     if (isset($_POST['option']))
        $opt=$_POST['option'];
   

// 
switch ($opt) {
    case 01":
         $sql="select * from table01";     
         break;
    case "02":
         $sql="select * from table02";     
         break;
    case "03":
         $sql="select * from table03";
		 break;
}

  $results=mysqli_query($connection,$sql) or die(mysqli_error());
  if ($results != null){ 
     while ( $row = mysqli_fetch_array($results, MYSQL_ASSOC))
     {
         $data[]=$row;                    // Save rows into an array
        
      }
     echo json_encode($data);              // Turn array to JSON
  }
  
  mysqli_close($connection);
?>
