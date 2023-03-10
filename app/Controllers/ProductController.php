<?php 

namespace App\Controllers;

use App\Models\Product;
use Symfony\Component\Routing\RouteCollection;

class ProductController
{
	public function showAction(int $id, RouteCollection $routes)
	{
        $routeToProduct = str_replace('{id}', 1, $routes->get('product')->getPath());
        $product_model = new Product();
        $product = $product_model->getProduct($id);

        require_once APP_ROOT . '/views/product.php';
	}

    public function index(RouteCollection $routes){
        require_once APP_ROOT . '/views/products.php';
    }
    
}