<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'cms_categories';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'alias',
        'enabled',
        'created_at',
        'updated_at'
    ];

    public function getMenu()
    {
        return $this::where('is_menu', 1)
               ->orderBy('sort_menu', 'asc')
               ->get();
    }
}
