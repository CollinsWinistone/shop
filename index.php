

<?php
session_start();
include "{$_SERVER['DOCUMENT_ROOT']}/shop/lib/user.php";
include "{$_SERVER['DOCUMENT_ROOT']}/shop/lib/cosa_db.php";
include "{$_SERVER['DOCUMENT_ROOT']}/shop/config/config.php";
    
    $db = Database::connect_default();
    $user_id = $_SESSION['user_id'];
  
    $user = new User;
    $stock = $user->getUserStock()->availableStock($db,$user_id);


     ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/index.css">
    <link rel="stylesheet" href="styles/header/header.css">
    <link rel="stylesheet" href="styles/bootsrap/css/bootstrap.min.css">
    <script src="styles/fontawesome/js/all.js"></script>
    
</head>

<body>

<!-- header-->
<?php include "include_files/header.php"; ?>

<!-- header-->
    
    

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Product name</th>
      <th scope="col">Price</th>
      <th scope="col">Units</th>
      <th scope="col">Sell</th>
    </tr>
  </thead>

    <!-- php script to retrieve records from database-->
    <tbody>

   <?php if(count($stock) > 0): ?>
      <?php foreach($stock as $user_stock):?>

        <tr class="table_data">
                <th scope="row" class="t_data p_id"><?php $pi = $user_stock['product_id']; echo $pi; ?></th>
                <td class="t_data"><?php echo $user_stock['product_name']; ?></td>
                <td class="t_data">&dollar;<?php echo $user_stock['buying_price']; ?></td>
                <td class="t_data units req_units"><input type="number" required placeholder="units sold" class="input_textbox"></td>
                <td class="t_btn"><a href="login/login.php" class=" btn btn-primary sell_button">sell 
                    <span class="text-warning"><i class="fas fa-check-circle"></i></span>
                    </a>
                </td>
        </tr>
      
      <?php endforeach; ?>
      <?php else:?>
        <tr>
				<td colspan="4">cannot find any records</td>
			</tr>


   <?php endif; ?>

   
    
   

  </tbody>
</table>

    
    
<script src="js/jqery.js"></script>
<script src="styles/bootsrap/js/bootstrap.min.js"></script>
<script src="js/index.js"></script>
    
</body>
</html>