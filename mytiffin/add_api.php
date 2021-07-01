<?php

include('Include/config.php');


if(!empty($_POST['Name'])
    &&!empty($_POST['Price'])
    &&!empty($_POST['Quantity'])
    &&!empty($_POST['Catogary'])
){
    $pName=$_POST['Name'];
    $pPrice=$_POST['Price'];
    $pQuantity=$_POST['Quantity'];
    $pCatogary=$_POST['Catogary'];

    $sql = "INSERT INTO inventory (pName, pPrice, pQuantity,pCatogary)
      VALUES ('$pName',$pPrice,$pQuantity, '$pCatogary')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

}else{
    echo"Please fill the required field";
}
?>
