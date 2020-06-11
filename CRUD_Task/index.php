
<?php
require_once __DIR__ . '/vendor/autoload.php';
require_once 'app/config/db_connection.php';
require_once 'app/model/Pages.class.php';
require_once 'app/template/header.php';


if (empty($_GET['p'])) {
    $page = 'home';
} else {

    $page = $_GET['p'];
}
$pageView = new Page;

$pageView->$page();






require_once 'app/template/footer.php';

?> 