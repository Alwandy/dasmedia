<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategories extends BaseModel 
{
    protected $table = 'subcategories';
	protected $fillable = ['sub_name','sub_desc', 'cat_id'];
	public $timestamps = false;
}
