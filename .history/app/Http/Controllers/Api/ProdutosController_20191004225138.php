<?php

namespace App\Http\Controllers\Api;
use App\ProdutosModel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    private $produtos;
    
    public function __construct(ProdutosModel $produtos){
        $this->produtos = $produtos; 
    }

    public  function index(){
        return response()->json($this->produtos->paginate(null));
    }
    
    public function show($id){
        $data = ['data'=> $id];
        return response()->json($this->produtos->($data));
    }

}
