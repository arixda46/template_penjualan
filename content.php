<?php
$page = "home";
if(isset($_GET['page'])) 
{
    if(empty($_GET['page']) == FALSE) 
    {
        $page = $_GET['page'];
    }
}

if ($page == "home") {
    include "home.php";
} elseif ($page == "about") {
    include "about.php";
} elseif ($page == "kontak") {
    include "kontak.php";
} elseif ($page == "product") {
    include "product.php";
} elseif ($page == "detail_product") {
    include "detail_product.php";
}
else {
    include "home.php";
}
?>