<?php session_start();?>

<?php
include "{$_SERVER['DOCUMENT_ROOT']}/dary/lib/user.php";
include "{$_SERVER['DOCUMENT_ROOT']}/dary/lib/cosa_db.php";
include "{$_SERVER['DOCUMENT_ROOT']}/dary/config/config.php";
    
    $db = Database::connect_default();
    $user_id = $_SESSION['user_id'];
  
    $user = new User;
    $stock = $user->getUserStock()->availableStock($db,$user_id);


     ?>
<!DOCTYPE html>
<html lang="en">
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>statistics</title>
    <link rel="stylesheet" href="../styles/bootsrap/css/bootstrap.min.css">
    <script src="../styles/fontawesome/js/all.js"></script>
    
        
</head>
<body>
    
    <!-- header-->
    <?php include "{$_SERVER['DOCUMENT_ROOT']}/dary/include_files/header.php";?>
    <!-- end of header-->
    <!-- table head-->

    <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">product name</th>
            <th scope="col">price</th>
            <th scope="col">units</th>
            </tr>
        </thead>

    <!-- end of table head-->
   
        <tbody>
        <?php if(count($stock) > 0): ?>
      <?php foreach($stock as $user_stock):?>

        <tr>
                <th scope="row"><?php echo $user_stock['product_id'] ?></th>
                <td><?php echo $user_stock['product_name'] ?></td>
                <td>&dollar;<?php echo $user_stock['buying_price'] ?></td>
                <td><a href="#" class=" btn btn-primary"><?php echo $user_stock['units'] ?>
                    <span class="text-warning"><i class="fas fa-check-circle"></i></span>
                </td>
        </tr>
      
      <?php endforeach; ?>
      <?php else:?>
        <tr>
				<td colspan="4">no sales stats available</td>
			</tr>


   <?php endif; ?>

    
        </tbody>
</table>


<script src="../js/jqery.js"></script>
<script src="../styles/bootsrap/js/bootstrap.min.js"></script>
</body>
</html>
