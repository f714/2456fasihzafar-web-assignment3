<?php
include('Include/config.php');


?>

<html>
<head>
    <title>New Order</title>

    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>
<div class="container header shadow_bottom">
    <header class="width">
        <div class="logo">
            <img src="images/logo1.jpg" alt="My Tiffin">
        </div>
        <div class="nav">
            <ul>

                <li><a href="manageproducts.php">View Product</a></li>
                <li><a href="addorder.php">New Order</a></li>
                <li><a href="print_pdf.php">PDF </a></li>
                <li><a href="print_excel.php">Excel </a></li>
                <li><a href="managecustomer.php">View User</a></li>
                <li><a href="logout.php">LOGOUT</a></li>

            </ul>
            <CENTER><h1>  Add New Order  </h1>

            </CENTER>
<!--            --><?php
//
//            ?>


            <?php
            $conn = new mysqli($DBserver,$dbuser,$dbpassword,$dbname);
            if($conn->connect_error){
                trigger_error('Database connection failed: '. $conn->connect_error,E_USER_ERROR);
            }
            $sql_cart="select * from cart";
            $result=mysqli_query($conn, $sql_cart);
            ?>
            <form method="post" action="add_to_cart_action.php" enctype="multipart/form-data">
                <?php
                echo "<table>";
                echo "<thead>";
                echo "<tr>";
                echo "<td></td>";
                echo "<td> id  </td>";
                echo "<td> Name  </td>";
                echo "<td> Quantity  </td>";
                echo "<td> price </td>";
                echo "<td> Category </td>";

                echo "</tr>";
                echo "</thead>";
                echo "<tbody>";

                while ($row=mysqli_fetch_array($result)) {
                    $sql = "SELECT  * from  products where id=" . $row['id_products'];
                    $stmt = $conn->prepare($sql);
                    if ($stmt == false) {
                        trigger_error('Wrong SQL ' . $sql . 'Error' . $conn->error);
                    }

                    $stmt->execute();
                    $stmt->store_result();

                    $stmt->bind_result($id, $Name, $Quantity, $price, $Category);
                    while ($stmt->fetch()) {
                        echo "<tr>";
                        echo "<td><input type='checkbox' name='ids[]' value='$id'></td>";
                        echo "<td> $id  </td>";
                        echo "<td> $Name  </td>";
                        echo "<td> $Quantity  </td>";
                        echo "<td> $price </td>";
                        echo "<td> $Category </td>";


                    }
                }
                echo "</tbody></table>";



                ?>

            <!-- <h2>
  <?php

            //  if($_GET["status"]=="PU")
            // {
            //    echo "Product is updated successfully";
            // }
            // if($_GET["status"]=="PD")
            // {
            //    echo "Product is Deleted successfully";
            //}



            ?>
</h2> -->
        </div>
    </header>
</div>
</body>
</html>




