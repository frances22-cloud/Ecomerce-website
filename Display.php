<?php
require("connect.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Page</title>
    <link rel="stylesheet" href="style2.css">
</head>

<body>

    <?php
    $sql1 = "select * from tbl_categories";
    $tbl_categories = mysqli_query($conn, $sql1);
    $num = mysqli_num_rows($tbl_categories);
    if ($num > 0) {
        while ($row1 = mysqli_fetch_array($tbl_categories)) {

            $category_name = $row1['category_name'];
            $category_id = $row1['category_id'];

    ?>

            <div class="catalogueTitle">
                <h2><?php echo $category_name; ?> </h2>
                <p>AFFORDABLE DESIGNER <?php echo $category_name; ?> OUTFITS</p>
            </div>
            <div class="section-body">
                <?php
                $sql2 = "SELECT *FROM tbl_products INNER JOIN tbl_categories ON
				tbl_products.category_id=tbl_categories.category_id WHERE tbl_products.product_id='$category_id'";

                $result = mysqli_query($conn, $sql2);
                echo mysqli_error($conn);
                $num2 = mysqli_num_rows($result);
                if ($num2 > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $img_url = $row['product_image'];
                        $product_name = $row['product_name'];
                        $product_price = $row['unit_price'];
                        $category_name = $row['category_name'];

                        echo "
                   <span> <a href='productDetails.php'>
                        <div class='product-card'>
                       
                        <img src='$img_url' alt='' height='100px' width='100px'>

                        <!.....<div class='product-card-details'>
                        <p class='product-gender'>
                            $category_name
                        </p>
                        <p class='product_name'>$product_name </p>
                                           
                        <p class='unit_price'><small>Ksh:$product_price</small></p>
                        </div>
                        
                        </div>
                        </a>
                        </span>
                        ";
                ?>




                <?php
                    }
                } ?>
            </div>
    <?php
        }
    }

    ?>

</body>

</html>
