<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $connection = 'stu_khs';
    protected $table = 'laraveltest_authors';
    public $timestamps = false;
}
