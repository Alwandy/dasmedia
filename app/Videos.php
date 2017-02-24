<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Videos extends BaseModel 
{
        protected $table = 'videos';
		protected $fillable = ['sub_id','vid_name', 'vid_desc', 'vid_path'];
		public $timestamps = false;
}
