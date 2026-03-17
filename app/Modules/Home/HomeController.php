<?php
namespace App\Modules\Home;

use App\Core\View;

class HomeController {
    public function index() {
        View::render('home', [
            'title' => 'Home',
            'msg' => 'Welcome!'
        ]);
    }
}