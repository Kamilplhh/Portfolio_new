<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\technology;

class projects extends Model
{
    use HasFactory;

    public function technology()
    {
        return $this->belongsTo(technology::class);
    }
}
