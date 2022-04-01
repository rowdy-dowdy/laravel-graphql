<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\MenuItem;

class Menu extends Model
{
    use HasFactory;

    public function menu_items()
    {
        return $this->hasMany(MenuItem::class);
    }
}
