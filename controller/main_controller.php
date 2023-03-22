<?php
// Lấy giá trị controller nào đang làm việc với client
    $controller = $_GET['controller'] ?? '';
// Điều khiển controller làm gì
    $action = $_GET['action'] ?? '';
// Gọi chức năng cho Client
    switch($controller){
        case '':
            if(isset($_SESSION['user']) && isset($_SESSION['pass'])){
                require_once('Views/index.php');
            }else{
                header('location: ?controller=login&action=login');
            }
            ; break;
            case 'login' : require_once('login/login_controller.php');
            case 'user' : require_once('User/user_controller.php'); break;
            case 'product' : require_once('Product/product_controller.php');
            ; break;
    }
?>