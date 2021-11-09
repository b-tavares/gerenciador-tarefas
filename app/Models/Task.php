<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'priority',
        'deadline',
        'person_id',
        'description',
    ];

    public function persons()
    {
        return $this->hasMany(Person::class);
    }

}