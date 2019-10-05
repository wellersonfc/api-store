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
    //Listagem de todos os produtos
    public  function index(){
        return response()->json($this->produtos->paginate(null));
    }
    
    //Listagem de produtos por ID
    public function show(ProdutosModel $id){
        $data = ['data'=> $id];
        return response()->json($data);
    }

    //Cadastro de Produtos
    public function store(Request $request){
        try{
            $produtosData = $request->all();
            $this->produtos->create($produtosData);
            
            return respnse()->json(['msg'=>'Criado com sucesso!']);
        }
        catch(\Exception $e){
            
            return respnse()->json(['msg'=>'Erro na Criação']);
        }
        
    }

    //Cadastro de Atualizando
    public function update(Request $request, $id){
            $produtosData = $request->all();
            $produto = $this->produtos->find($id);
            $produtos->update($produtosData);

            return response()->json(['msg'=>'Atualizado!']);
            
    }

}
