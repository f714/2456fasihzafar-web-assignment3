<?php

include('Include/config.php');




$sql="SELECT * FROM inventory ";

$result =$conn->query($sql);

$data = array();

if($result->num_rows > 0)
{
    while($row = $result->fetch_assoc()){
        $data[] = array(
            "ID"=>$row['ID'],
            "Name"=>$row['Name'],
            "Quantity"=>$row['Item_Quantity'],
            "price"=>$row['Item_Price'],
            "catagory"=>$row['Item_Catogary']);
    }
}
else
{
    echo"<tr><td>Inventory is Empty</td></tr>";
}


echo json_encode(array("$data"=>$data));

?>