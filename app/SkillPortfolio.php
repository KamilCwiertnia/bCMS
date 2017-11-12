<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SkillPortfolio extends Model
{
	protected $fillable = [
		'name', 
		'display_name',
		'description',
	];

	public function portfolios()
	{
		return $this->belongsToMany('App\Portfolio')->withTimestamps();
	}
}
