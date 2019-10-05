<?php

namespace App\Http\Controllers\Api;
use App\ProdutosModel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    private $produtos;
    
    public function _construct(ProdutosModel $produtos){
        $this->produtos = $produtos; 
    }

    public  function index(){
        return ProdutosModel::all();
    }
    
    public function show(ProdutosModel $id){
        return $id;
    }

}
