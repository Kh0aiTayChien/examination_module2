
<!DOCTYPE html>
<html lang="en">
<head>
    <title>PRODUCT LIST</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-dark bg-primary vbg-danger navbar-dark">
    <a class="btn btn-outline-light btn-md" href="index.php">Home</a>
    <form class="form-inline"  method="post">
        <input class="form-control mr-sm-2" type="text" name="search" placeholder="Search Phone Name">
        <button  class="bg-dark" type="submit" name="find" style="color: whitesmoke ">Search</button>
    </form>
</nav>
<br>
<div class="container">
    <h2>Smart Phone Manager</h2>
    <a class="btn btn-outline-success" href="index.php?page=create-product">Add New Smart Phone</a>
<br>
<br>
    <table class="table">
        <thead class="">
        <tr class="table-success">
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Category</th>
            <th scope="col">Price</th>
            <th scope="col">Quantity</th>
            <th scope="col">Date</th>
            <th scope="col">Detail</th>
            <th scope="col" colspan="2">Action</th>
        </tr>
        </thead>
        <tbody>
        <?php if (isset($products)) {
            foreach ($products as $product) :?>
                <tr class="table-bordered">
                    <th scope="row"><?php echo $product->getId() ?></th>
                    <td><?php echo $product->getName() ?></td>
                    <td><?php echo $product->getCategory() ?></td>
                    <td><?php echo $product->getPrice() ?></td>
                    <td><?php echo $product->getQuantity() ?></td>
                    <td><?php echo $product->getDateCreate() ?></td>
                    <td><?php echo $product->getDetail() ?></td>
                    <td><a href="index.php?page=update-product&id=<?php echo $product->getId()?>" class="btn btn-outline-warning btn-lg">Edit</a></td>
                    <td><a  href="index.php?page=delete-product&id=<?php echo $product->getId()?>" class="btn btn-outline-danger btn-lg" onclick="return confirm('DO you want to delete this item?')">Delete</a></td>
                </tr>
            <?php endforeach;
        } ?>
        </tbody>
    </table>
</div>
</body>
</html>