<?php
$conn = mysqli_connect("localhost","root","","blog");
if(!$conn){
    echo "<h3 class='container bg-whitesmoke text-center p-3 text-warning rounded-lg mt-5'>not able to establish database connection</h3";
     }
$sql="SELECT * FROM data";
$query = mysqli_query($conn, $sql);

if(isset($_REQUEST["new_post"])){

    $title=$_POST["title"];
    $content=$_POST["content"];

    $sql= "INSERT INTO data(title, content) VALUES('$title','$content')";

      mysqli_query($conn, $sql);

       header("location: index.php?");
        exit();


}

if(isset($_REQUEST['id'])){
    $id =$_REQUEST['id'];

    $sql ="select * from data where id=$id";
    $query = mysqli_connect($conn, $sql);

}



?>
