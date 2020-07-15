<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\AsSource;
use Orchid\Filters\Filterable;

class Student extends Model
{
  use AsSource, Filterable;

  protected $fillable = [
      'first_name', 'last_name', 'email', 'phone', 'level', 'module'
  ];
}
