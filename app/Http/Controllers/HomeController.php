<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $guest_name = 'Budi';

        return view('home', compact('guest_name'));
    }

    public function getGuest($id, $serial_number=-1)
    {
        // if ($id<0){
        //     abort(401);
        // }
        return view('guest-detail', compact('id', 'serial_number'));
    }

    public function store(Request $request)
    {
        // dd($request);

        // return 'Berhasil simpan data';
        $validated = $request->validate([
            'name' => 'required|min:10'
        ]);

        return $request->name;
    }
}
