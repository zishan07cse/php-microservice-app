<?php
namespace App\Modules\Product;

use App\Core\View;

class ProductController {
    public function index() {
        $products = ['Laptop', 'Mouse', 'Keyboard'];

        View::render('products', [
            'title' => 'Products',
            'products' => $products
        ]);
    }
}