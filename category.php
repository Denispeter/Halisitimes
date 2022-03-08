<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
 $conn = mysqli_connect("localhost","root","","blog");

if (isset($_GET['id'])) {
    $id= $_GET['id'];

    $sql= "select * from data where id = '$id';";

    $result = mysqli_query($conn, $sql );

    $article= mysqli_fetch_assoc( $result);

    print_r($article);

    echo "$article";

$title = $article['title'];
$content = $article['content'];

echo "  echo
"<div class=container d-flex justify-content-center align-items-center>
<div class='card text-black bg-blue mt-5'>
<div class='card-body' style='width: 30rem;'>
<h5 class='card-title'> $title</h5>

<a href='category.php?=$id' class='btn btn-light'>read more<span class='text-danger>&rarr;'/a>
</div>
</div>

</div>";




}





?>
    
</body>
</html>