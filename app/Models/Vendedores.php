<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vendedores extends ModelPadrao
{
    protected $table = "tb_vendedores";

    protected $fillable=[
        'vc_name',
        'vc_cpf',
        'idade'
    ];
}
