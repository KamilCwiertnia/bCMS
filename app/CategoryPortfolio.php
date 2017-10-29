<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryPortfolio extends Model
{
	protected $fillable = [
		'name', 
		'display_name',
		'description',
	];
}
