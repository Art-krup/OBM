<?php

namespace App\Http\Controllers\Admin\Create;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        return view('admin.create.index');
    }
}
