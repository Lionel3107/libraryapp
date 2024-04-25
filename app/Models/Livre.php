<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livre extends Model
{
    use HasFactory;
    protected $fillable = [
        'Title',
        'Author',
        'Page_Number',
        'Book_Quality',
        'Edition',
        'Type',
        'Book_State',

    ];

    public function loans()
    {
        return $this->hasMany(Emprunt::class);
    }



}
