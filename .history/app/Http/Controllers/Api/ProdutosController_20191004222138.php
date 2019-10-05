<?php

namespace App\Http\Controllers\Api;
use App\ProdutosModel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public  function index(){
        return ProdutosModel::all();
    }
    public function show(){
        return "entrei";
    }
}
