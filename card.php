<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div class="container text-center p-4">
        <div class="row">

<?php

include('config.php');

$sql = "SELECT * FROM product";
$result = mysqli_query($conn,$sql);
if($result)
{
    while($row = mysqli_fetch_assoc($result))
    { ?>

<div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="<?php echo $row['product_image']  ?>" class="card-img-top h-50 w-50 m-auto" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['product_name']  ?></h5>
                        <p class="card-text">rs:-<?php echo $row['product_price']  ?></p>
                        <a href="cart.php?id=<?= $row['id']    ?>" class="btn btn-warning">Add to Cart<i class="fa-solid fa-cart-shopping"></i></a>
                    </div>
                </div>
            </div>
           

   <?php }
}

?>

            
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>