<?php

use App\controllers\ProductController;
use App\controllers\AuthController;
$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : null;
$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : null;
$productController = new ProductController();
$authcontroller = new AuthController();
switch ($page) {
    case 'products':
        switch ($action) {
            case 'list':
                $pg = $_REQUEST['pg'];
                $productController->index($pg);
            break;
            case 'add':
                $productController->add();
            break;
            case 'delete':
                $productController->delete();
            break;
            case 'edit':
                $productController->edit();
            break;
            case 'search':
                $value = $_POST['search'];
//                var_dump($value);
//                die();
                $productController->search($value);
            break;
            case 'detail':
                $productController->detail();
            break;
            case 'logout':
                $authcontroller->logout();
        }
    break;
}
