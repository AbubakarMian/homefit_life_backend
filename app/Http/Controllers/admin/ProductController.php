<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {

        $product = Product::paginate(5, ['id', 'name', 'email', 'role_id']);
        return \View::make('admin.modules.product.index', compact('product'));
    }
}