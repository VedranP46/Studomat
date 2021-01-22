<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Direction extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'nativ_name',
        
    ];

    /**
     * Get the college for the direction.
     */
    public function college()
    {
        return $this->belongsTo(College::class);
    }
}
