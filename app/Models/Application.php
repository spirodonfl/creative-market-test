<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;
    public $fillable = ['first_name', 'last_name', 'category', 'portfolio_link', 'online_store', 'online_stores', 'answer_quality', 'answer_experience', 'answer_understanding'];
}
