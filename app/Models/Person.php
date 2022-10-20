<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;
    protected string $name = '';
    protected ?string $first_name = '';
    protected ?string $last_name = '';
    protected $fillable = [
        'name',
        'first_name',
        'last_name'
    ];

    public function works()
    {
        return $this->hasMany(Source::class);
    }

    public function quotes()
    {
        return $this->hasMany(Quote::class);
    }
}
