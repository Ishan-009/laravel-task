<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::paginate(10);
        return view('items.index', compact('items'));
    }

    public function create()
    {
        return view('items.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:60',
            'email' => 'required|email',
            'password'=>'required',
            'confirm_password'=>'required|same:password',
            'country'=>'required',
            'state'=>'required',
            'address'=>'required',
            'gender'=>'required',
            'dob'=>'required',
        ]);
        $item = Item::create($validatedData);
        return redirect('/items');
    }

    public function show($id)
    {
        $item = Item::findOrFail($id);
        return view('items.show', compact('item'));
    }

    public function edit($id)
    {
        $item = Item::findOrFail($id);
        return view('items.edit', compact('item'));
    }

    public function update(Request $request, $id)
{
    $validatedData = $request->validate([
        'name' => 'required|max:60',
        'email' => 'required|email',
        'password'=>'required',
        'confirm_password'=>'required|same:password',
        'country'=>'required',
        'state'=>'required',
        'address'=>'required',
        'gender'=>'required',
        'dob'=>'required',
    ]);
    Item::whereId($id)->update($validatedData);
    return redirect('/items');
}

    public function destroy($id)
    {
        $item = Item::findOrFail($id);
        $item->delete();
        return redirect('/items');
    }
}
