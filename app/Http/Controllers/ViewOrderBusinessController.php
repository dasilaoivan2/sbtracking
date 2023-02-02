<?php

namespace App\Http\Controllers;

use App\Models\Orderbusiness;
use Illuminate\Http\Request;

class ViewOrderBusinessController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function view($id)
    {
        $orderbusiness = Orderbusiness::find($id);

        return view('orderbusiness.view', compact('orderbusiness'));
    }
}
