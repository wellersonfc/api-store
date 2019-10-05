<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProdutosModel extends Model
{
    protected $fillable = ['nome','valor','descricao'];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'table_produtos';
}
