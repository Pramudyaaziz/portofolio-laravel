<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class metadata extends Model
{
    use HasFactory;
    protected $table = 'metadatas';
    protected $fillable = ['meta_key', 'meta_value'];
}
