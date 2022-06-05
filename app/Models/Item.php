<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'price', 'meat', 'item_group_id'];
    protected $with = ['ingredients'];
    public function ingredients()
    {
        return $this->hasMany(Ingredient::class);
    }

    public function itemGroup()
    {
        return $this->belongsTo(ItemGroup::class);
    }
}
