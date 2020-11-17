
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
</head>
<body>
    
        
     

        <div class="container-fluid bg-dark">

            <div class="row">
                <div class="col">
                    <h1 class=" w-100 text-light text-left text-center">
                        <?php if(isset($_SESSION['first_name']))
                        {
                            echo "{$_SESSION['first_name']}";
                        } 
                        else
                        {
                            echo "cosa";
                        }
                        ?>
                    </h1>
                    
                </div>
                
            </div>
            <div class="container w-100 mx-auto">

                <nav class="nav justify-content-center">
                    <a class="nav-link active" href="http://192.168.43.130:8080/dary/index.php">products</a>
                    <a class="nav-link" href="http://192.168.43.130:8080/dary/statistics/statistics.php">statistics</a>
                    <a class="nav-link" href="http://192.168.43.130:8080/dary/login/login.php">log in</a>
                    <a class="nav-link" href="http://192.168.43.130:8080/dary/registration/registration.php">register</a>
                    <a class="nav-link" href="http://192.168.43.130:8080/dary/stock/stock.php">stock</a>
                    
                    
                </nav>

            </div>

        </div>

<!-- end of pag header-->
</body>
</html>