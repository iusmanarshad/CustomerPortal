<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientQuestionnaire extends Model
{
    use HasFactory;

    protected $table = 'client_questionnaires';
    protected $guarded = [];
}
