<?php

require __DIR__ . '/vendor/autoload.php';

use App\Controller;

$dbconnect = new \App\Model\DBConnect();
$controller = new Controller\ProductController();
if (isset($_REQUEST['find'])){
    $controller->search();
}
$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : null;
try {
    switch ($page){
        case 'product-list':
            $controller->showAllProduct();
            break;
        case 'create-product':
            $controller->createProduct();
            break;
        case 'delete-product':
            $controller->deleteProduct();
            break;
        case 'update-product':
            $controller->updateProduct();
            break;
        default:
            $controller->showAllProduct();
    }
} catch (Exception $exception) {
    echo $exception->getMessage();
}