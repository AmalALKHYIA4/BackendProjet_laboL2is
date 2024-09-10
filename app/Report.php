<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{protected $table = 'reports';
    protected $fillable = [
        'title',
        'author',
        'summary',
        'DOI',
        'id_user',
    ];
}
