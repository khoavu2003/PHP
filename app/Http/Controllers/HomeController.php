<?php

namespace App\Http\Controllers; // Chữ 'A' phải viết hoa!

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome'); // Kiểm tra nếu file welcome.blade.php tồn tại
    }
}
