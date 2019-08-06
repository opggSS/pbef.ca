<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PageContent extends Model
{
    public function pageType(){
    	return $this->belongsTo('App\PageType');
    }
}
