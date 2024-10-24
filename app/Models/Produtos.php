<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produtos extends ModelPadrao
{
    protected $table = "tb_produtos";

    protected $fillable= [
        'nome_produto',
        'valor_produto',
        'descricao_produto',
        'bl_produto_verificado',
        'fk_vendedor',
        'peso_produto',
        'estoque_maximo',
        'estoque_minimo'
    ];
}
