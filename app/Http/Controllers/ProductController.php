<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $product;
    private $products;

    public function index()
    {
        return view('admin.product.add');
    }
    public function create(Request $request)
    {
        Product::newProduct($request);

        return redirect('/add-user')->with('message', 'Product Created Successfully');
    }
    public function manage()
    {
        $this->products = Product::all();
        return view('admin.product.manage',['products' => $this->products ]);
    }
    public function edit($id)
    {
        $this->product = Product::find($id);

        return view('admin.product.edit', ['product'=>$this->product]);
    }
    public function update(Request $request,$id)
    {
        Product::updateProduct($request,$id);

        return redirect('/manage-product')->with('message', 'Info Updated Successfully');
    }
    public function delete($id)
    {
        $this->product = Product::find($id);

        if (file_exists($this->product->image))
        {
            unlink($this->product->image);
        }
        $this->product->delete();
        return redirect('/manage-product')->with('message', 'Category Deleted Successfully');
    }
}
