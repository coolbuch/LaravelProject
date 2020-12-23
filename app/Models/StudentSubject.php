<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentSubject extends Model
{
    use HasFactory;
    protected $fillable = ['student_id', 'subject_id'];
    protected $visible = ['id', 'student_id', 'subject_id'];

    protected $hidden = ["created_at", "updated_at"];
    protected $with = ['student', 'subject'];

    public function student()
    {
        return $this->belongsTo('App\Models\Student');
    }

    public function subject()
    {
        return $this->belongsTo('App\Models\Subject');
    }

    protected static function boot()
    {
        parent::boot();

        // Order by name ASC
        static::addGlobalScope('order', function (Builder $builder) {
            $builder->orderBy('id', 'asc');
        });
    }
}
