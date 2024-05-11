<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use League\Flysystem\UrlGeneration\PublicUrlGenerator;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboardcliente');
    }
    public function store(Request $request) {
        $user = User::create($request->all());
    }
}
