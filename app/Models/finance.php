<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class finance extends Model
{
    use HasFactory;

    protected $fillable = [
        'cash_flow',
        'charts',
        'margin',
        'document_files'
    ];
}
