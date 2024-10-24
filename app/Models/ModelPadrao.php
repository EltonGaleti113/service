<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ModelPadrao extends Model
{
    protected $primaryKey= 'sr_id';

    const CREATED_AT = 'created_at';
    const updated_at = 'updated_at';
    const Deleted_at = 'deleted_at';
}
