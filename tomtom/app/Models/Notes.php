<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Notes;

class Notes extends Model
{
        public $fillable = ['title','content'];
}
