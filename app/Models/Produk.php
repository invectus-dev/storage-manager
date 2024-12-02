<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $table = 'produk'; // Define the table name (optional, Laravel will automatically pluralize the model name)

    protected $fillable = [
        'name_produk',
        'description',
        'harga_produk',
        'stock_produk',
        'image',
    ];
}
