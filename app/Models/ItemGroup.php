<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemGroup extends Model
{
    use HasFactory;
    protected $fillable = ['name'];
    protected $with = ['items'];

    public function items()
    {
        return $this->hasMany(Item::class);
    }
}
