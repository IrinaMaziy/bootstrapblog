<?php

namespace App\Services;

use App\Models\Category;

final class GetAllCategoriesService {
	public function GetAllCategories()
	{
		return Category::all('title');
		//return ['html', 'css', 'java'];


	}

}