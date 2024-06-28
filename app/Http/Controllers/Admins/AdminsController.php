<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Models\Admin\Admin;
use App\Models\Product\Category;
use App\Models\Product\Order;
use App\Models\Product\Product;
//use Illuminate\Http\File;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;

class AdminsController extends Controller
{
    public function viewLogin()
    {
        return view('admins.login');
    }

    public function checkLogin(Request $request)
    {
        $remember_me = $request->has('remember_me') ? true : false;
        if (auth()->guard('admin')->attempt(['email' => $request->input('email'), 'password' => $request->input('password')], $remember_me)){
            return redirect()->route('admins.dashboard');
        }
        return redirect()->back()->with(['error' => 'error logging in']);
    }

    public function index()
    {
        $productsCount = Product::select()->count();
        $ordersCount = Order::select()->count();
        $categoriesCount = Category::select()->count();
        $adminsCount = Admin::select()->count();
        return view('admins.index' , compact('productsCount','ordersCount','categoriesCount','adminsCount'));
    }


    public function displayAdmins()
    {

        $allAdmins = Admin::all();
        return view('admins.allAdmins' , compact('allAdmins'));
    }

    public function createAdmins()
    {
        return view('admins.createadmins');
    }

    public function storeAdmins(Request $request)
    {
        $storeAdmins = Admin::create([
            'email' => $request->email,
            'name' => $request->name,
            'password' => Hash::make($request->password),
        ]);
        if ($storeAdmins){
            return Redirect::route('admins.all')->with(['success' => 'Admin Created successfully']);
        }
    }

    public function displayCategories()
    {
        $allcategories = Category::select()->orderby('id','desc')->get();
        return view('admins.allcategories',compact('allcategories'));
    }

    public function createCategories()
    {
        return view('admins.createcategories');
    }

    public function storeCategories(Request $request)
    {
        $destinationPath = 'assets/img/';
        $myimage = $request->image->getClientOriginalName();
        $request->image->move(public_path($destinationPath),$myimage);
        $storeCategories = Category::create([
            'icon' => $request->icon,
            'name' => $myimage,
            'image' => Hash::make($request->password),
        ]);
        if ($storeCategories){
            return Redirect::route('categories.all')->with(['success' => 'Category Created successfully']);
        }
    }

    public function editCategories($id)
    {
        $category = Category::find($id);
        return view('admins.editcategories' , compact('category'));
    }

    public function updateCategories(Request $request,$id)
    {
        $category = Category::find($id);
        $category->update($request->all());
        if ($category){
            return Redirect::route('categories.all')->with(['update' => 'Category Updated successfully']);
        }
    }

    public function deleteCategories($id)
    {
        $category = Category::find($id);

        if (File::exists(public_path('assets/img/' . $category->image))){
            File::delete(public_path('assets/img/' . $category->image));
        }

        $category->delete();

        if ($category){
            return Redirect::route('categories.all')->with(['delete' => 'Category Deleted successfully']);
        }
    }

    public function displayProducts()
    {
        $allproducts = Product::select()->orderby('id','desc')->get();
        return view('admins.allproducts',compact('allproducts'));
    }

    public function createProducts()
    {
        $allcategories = Category::all();
        return view('admins.createroducts' , compact('allcategories'));
    }

    public function storeProducts(Request $request)
    {
        $destinationPath = 'assets/img/';
        $myimage = $request->image->getClientOriginalName();
        $request->image->move(public_path($destinationPath),$myimage);
        $storeProducts = Product::create([
            'price' => $request->price,
            'name' => $request->name,
            'description' => $request->description,
            'category_id' => $request->category_id,
            'exp_date' => $request->exp_date,
            'image' => $myimage
        ]);
        if ($storeProducts){
            return Redirect::route('products.all')->with(['success' => 'Product Created successfully']);
        }
    }

    public function deleteProducts($id)
    {
        $product = Product::find($id);

        if (File::exists(public_path('assets/img/' . $product->image))){
            File::delete(public_path('assets/img/' . $product->image));
        }

        $product->delete();

        if ($product){
            return Redirect::route('products.all')->with(['delete' => 'Product Deleted successfully']);
        }
    }

    public function allOrders()
    {
        $allorders = Order::select()->orderby('id','desc')->get();
        return view('admins.allorders',compact('allorders'));
    }

    public function editOrders($id)
    {
        $order = Order::find($id);
        return view('admins.editorders' , compact('order'));
    }

    public function updateOrders(Request $request,$id)
    {
        $order = Order::find($id);
        $order->update($request->all());
        if ($order){
            return Redirect::route('orders.all')->with(['update' => 'Order Updated successfully']);
        }
    }
}


