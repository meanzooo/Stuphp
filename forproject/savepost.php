
<?php 
    $con = mysqli_connect("localhost", "meanzoo", "buyby2020!", "meanzoo");
    mysqli_query($con,'SET NAMES utf8');

    $title = $_POST["TITLE"];
    $subtitle = $_POST["SUBTITLE"];
    $price = $_POST["PRICE"];
    $content = $_POST["CONTENT"];
    $writer = $_POST["WRITER"];

    $statement = mysqli_prepare($con, "INSERT INTO POST(TITLE,SUBTITLE,PRICE,CONTENT,WRITER) VALUES (?,?,?,?,?)");
    mysqli_stmt_bind_param($statement, "ssisi", $title, $subtitle, $price, $content, $writer);
    mysqli_stmt_execute($statement);


    $response = array();
    $response["success"] = true;
 
   
    echo json_encode($response);

?>
