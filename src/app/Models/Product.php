<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'price', 'image', 'description'];

    public function seasons()
    {
        return $this->belongsToMany(Season::class);
    }



    public function scopeNameSearch($query, $keyword)
    {
        if (!empty($keyword)) {
         return $query->where('name', 'like', '%' . $keyword . '%');
        }
        return $query;
    }


    public function scopePriceOrder(Builder $query, $order)
    {
        if ($order == 'price') {
            return $query->orderBy('price', 'asc');
        } 
        
        elseif ($order == '-price') {
            return $query->orderBy('price', 'desc');
        }
        return $query;
    }
}
