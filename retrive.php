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
    //echo "connected";
    $name=$_POST["name"];
    $sql="SELECT * FROM form WHERE name='$name'";

    $query=mysqli_query($connection,$sql);

if($query)
{
    $r=mysqli_fetch_array($query);
     if($r>0)
     {
     echo "<table>";

     echo "<tr>";
     echo "<th>";
     echo "name";
     echo "</th>";
     echo "<th>";
     echo "surname";
     echo "</th>";
     echo "<th>";
     echo "mobile";
     echo "</th>";
     echo "</tr>";

     

    

     echo "<tr>";
     echo "<th>";
     echo $r['name'];
     echo "</th>";
     echo "<th>";
     echo $r['surname'];
     echo "</th>";
     echo "<th>";
     echo $r['mobile'];
     echo "</th>";
     echo "</tr>";

     echo "</table>";


     }
}
}