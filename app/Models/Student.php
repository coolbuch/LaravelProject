<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['first_name', 'second_name', 'third_name', 'date_birth', 'course'];
    protected $visible = ['id', 'first_name', 'second_name', 'third_name', 'date_birth', 'course'];

    protected $hidden = ["created_at", "updated_at"];

    protected static function boot()
    {
        parent::boot();

        // Order by name ASC
        static::addGlobalScope('order', function (Builder $builder) {
            $builder->orderBy('id', 'asc');
        });
    }

    use HasFactory;
}
