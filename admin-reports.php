<?php 

use \Hcode\PageAdmin;
use \Hcode\Model\User;
use \Hcode\Model\Category;
use \Hcode\Model\Product;
use \Hcode\Model\Order;
use \Hcode\Model\Cart;

$app->get('/admin/pie-report', function() {

	User::verifyLogin();

	$page = new PageAdmin();

	$report = new Product();

	$page->setTpl("pie-report", [
		'report'=>$report->getBestSellers()
	]);
});

$app->get('/admin/clients-report', function() {

	User::verifyLogin();

	$page = new PageAdmin();

	$report = new User();

	$page->setTpl("clients-report", [
		'report'=>$report->getClients()
	]);
});

$app->get('/admin/buyers-report', function() {

	User::verifyLogin();

	$page = new PageAdmin();

	$report = new User();

	$page->setTpl("buyers-report", [
		'report'=>$report->getBestBuyers()
	]);
});

$app->get('/admin/category-report', function() {

	User::verifyLogin();

	$page = new PageAdmin();

	$report = new Product();

	$page->setTpl("category-report", [
		'report'=>$report->getProductsCategory()
	]);
});

 ?>