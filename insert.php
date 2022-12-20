<?php
//echo "hi";


if(isset($_POST['name']))
{
    $server="localhost";
    $username="root";
    $password="";
    $database="juhil";

    $connection=mysqli_connect($server,$username,$password,$database);

    if(!$connection)
    {
        die(mysqli_connect_error());
    }
   echo "connected successfully";
   echo "<br>";

   $name=$_POST['name'];
   $surname=$_POST['surname'];
   $mobile=$_POST['mobile'];
   
   $sql="INSERT INTO form (name,surname,mobile) VALUES ('$name','$surname','$mobile')";

   $query=mysqli_query($connection,$sql);

    

   if($query)
   {
    echo"data inserted";
   }
}
?>
