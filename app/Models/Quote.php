<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    use HasFactory;

    protected string $text = '';
    protected int $person_id;
    protected int $source_id;
    protected $fillable = [
        'text',
        'person_id',
        'source_id'
    ];

    public function person()
    {
        return $this->belongsTo(Person::class);
    }

    public function source()
    {
        return $this->belongsTo(Source::class);
    }

}
