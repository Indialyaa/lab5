<?php
require_once("header.php");
$mod = @$_REQUEST["mod"];
switch ($mod) {
    case "tambah":
        $page = 'tambah';
        break;
    case "home":
        $page = 'home';
        break;
    case "ubah":
        $page =  'ubah';
        break;
    case "hapus":
        $page = "hapus";
        break;
    case "about":
        $page = "about";
        break;
    case "contact":
        $page = "contact";
        break;
    default:
        $page = 'home';
        break;
}

require $page . '.php';