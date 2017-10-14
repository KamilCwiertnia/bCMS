<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
	protected $fillable = [
		'slug', 
		'name',
		'description',
		'miniature',
		'preview',
		'live_preview_url',
		'client_name',
		'status',
		'project_date',
	];
}
