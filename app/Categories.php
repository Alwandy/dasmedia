<?php

namespace App;

class Categories extends BaseModel 
{
    protected $table = 'categories';
	protected $fillable = ['cat_name','cat_desc'];
	public $timestamps = false;
}
