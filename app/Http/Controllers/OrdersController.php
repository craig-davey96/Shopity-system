<?php

namespace App\Http\Controllers;

use App\ShopOrders;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

class OrdersController extends Controller
{

    public function index()
    {
        $orders = ShopOrders::all();
        return View('orders.list')->with('orders' , $orders);
    }

    public function profile($id)
    {
        $order = ShopOrders::where('id' , $id);
        return View('orders.order')->with('order' , $order);
    }

    public function create()
    {
        return View('orders.create');
    }

}
