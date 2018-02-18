<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    protected $fillable = ['name', 'active_constituent', 'ar_name', 'dose', 'type', 'usage', 'company', 'price','capacity','image','usage_arabic','dose_arabic'];
}
