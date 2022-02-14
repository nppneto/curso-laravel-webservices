<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $primaryKey = 'product_id';

    protected $fillable = ['name', 'description'];

    public function rules()
    {
        return [
            'name' => 'required|min:3|max:100|unique:products',
            'description' => 'min:3|max:255',
        ];
    }
}
