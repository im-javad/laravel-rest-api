<?php

namespace App\Models;

use App\Support\Traits\HasModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory , HasModel;

    public function author()
    {
        return $this->belongsTo(User::class);
    }
}
