<?php
/**
 * Created by PhpStorm.
 * User: angie
 * Date: 2019-05-13
 * Time: 09:49
 */


require_once '../../vendor/autoload.php';


$load = new Twig_Loader_Filesystem(__DIR__ . '/../src/View');
$twig = new Twig_Environment($load);

$products = ['product1', 'product2', 'product3', 'product4', 'product5'];

echo $twig->render("hello.html.twig");
echo $twig->render("index.html.twig",[ 'array' => $products]);
