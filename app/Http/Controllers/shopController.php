<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
//use Request;
use App\Shop;

class ShopController extends Controller
{
    public function index()
    {
        $shops = Shop::all();
        //dd($shops);
        return view('shop.index', compact('shops'));
    }

    public function create()
    {
        return view('shop.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'location' => 'required',
            'address' => 'required',
        ]);
        $name = $request->name;
        $location = $request->location;
        $address = $request->address;
        Shop::create([
            'name' => $name,
            'location' => $location,
            'address' => $address
        ]);

        //dd($request::all());
        return redirect()->back()->with('status','Shop Successfully Saved');
    }

    public function show($id)
    {
        $shop=Shop::find($id);
        //dd($shop);
        return view('shop.view', compact('shop'));

    }

    public function edit($id)
    {
        $shop = Shop::where('id',$id)->first(); 
        //dd($shop);
        return view('shop.edit', compact('shop'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name' => 'required',
            'location' => 'required',
            'address' => 'required',
        ]);

        $shop=Shop::find($id);
        $shop->name = $request->name;
        $shop->location = $request->location;
        $shop->address = $request->address;

        $shop->save();

        return redirect()->back()->with('status','Shop info updated');
    }
} 