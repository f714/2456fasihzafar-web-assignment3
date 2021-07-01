<?php

require_once __DIR__ . '/vendor/autoload.php';

include('Include/config.php');


if($_GET['option']==1)
{

    $sql="SELECT * FROM inventory WHERE Catogary ='curry' ";

}elseif ($_GET['option']==2)
{
    # code...
    $sql="SELECT * FROM inventory WHERE Catogary ='curry' ";
}elseif ($_GET['option']==3)
{
    # code...
    $sql="SELECT * FROM inventory WHERE Catogary ='curry' ";
}elseif($_GET['option']==4)
{
    $sql="SELECT * FROM inventory WHERE Catogary ='curry' ";

}

$result =$conn->query($sql);

$out = "<table border='1' width='100%'>
            		<tr>
		              <th>Item ID</th>
		              <th>Item Name</th>
		              <th>Item Quantity</th>
		              <th>Item Price</th>
            		</tr>
            		";

if($result->num_rows > 0)
{
    while($row = $result->fetch_assoc()){

        $out.=" <tr>
                        <td>".$row['ID']."</td>
                        <td>".$row['Item_Name']."</td>
                        <td>".$row['Item_Quantity']."</td>
                        <td>".$row['Item_Price']."</td>
                        
                      </tr>";
    }


}
else
{
    echo"<tr><td>Inventory is Empty</td></tr>";
}
$out .="</table>";



$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($out);
$mpdf->Output();


?>