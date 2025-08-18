<?php

namespace App\Http\Controllers\Admin\Delete;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        ///пока под вопросом
        return view('admin.delete.index');
    }
}
