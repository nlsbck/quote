<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    use HasFactory;

    protected ?string $by = null;
    protected string $text = '';
    protected ?string $source = null;
    protected $fillable = [
        'by',
        'text',
        'source'
    ];

}
