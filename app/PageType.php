<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PageType extends Model
{
	protected $table = 'page_types';

    public function pageContents()
    {
    	return $this->hasMany('App\PageContent');
    }

}
