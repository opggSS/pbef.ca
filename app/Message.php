<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
   public static function getUnread(){
   	$unread = self::where('status' , 0)->get();
   	$unread_count = count($unread);
   	return $unread_count;
   }

}
