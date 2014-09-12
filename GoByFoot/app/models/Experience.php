<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
class Experience extends Eloquent{



	public function user() {
		return $this->belongsTo('User');
	}


	public function comments() {
		return $this->hasMany('Comment');
	}


	public function scopePublish($query) {
		return $query->where('status', '=', 'published')->orderBy('created_at', 'desc');
	}


}
