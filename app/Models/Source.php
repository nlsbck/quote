<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Source extends Model
{
    use HasFactory;
    protected string $source = '';
    protected $fillable = [
      'source'
    ];

    public function person()
    {
        return $this->belongsTo(Person::class);
    }
}
