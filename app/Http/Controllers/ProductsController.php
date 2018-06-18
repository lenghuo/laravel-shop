<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
    //
    public function index(Request $request)
    {
      // $products = Product::query()->where('on_sale', true)->paginate(16);
      $builder = Product::query()->where('on_sale', true);

      // 判断是否有提交 search 参数，如果有就赋值给 search变量
      // search 参数用来模糊搜索商品
      if ($search = $request->input('search', '')) {
        $like = '%'.$search.'%';
        
      }
      return view('products.index', [
        'products' => $products
      ]);
    }
}