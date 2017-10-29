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
		'category_id',
		'project_date',
	];

    public function categories()
    {
        return $this->hasOne('App\CategoryPortfolio', 'id', 'category_id');
    }
}
