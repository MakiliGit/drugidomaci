<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'meat', 'item_id'];

    public function item()
    {
        return $this->belongsTo(Item::class);
    }
}
