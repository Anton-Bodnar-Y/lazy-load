<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
	public function index()
	{
		return view('welcome', []);
	}
	
	public function getAll($offset, $limit)
	{
		// return 654654654654654;
		
		$article = new Article;
		$articleCount = $article->count();
		
		
		
		$array = [
			$articleCount,
			$article->offset($offset)->limit($limit)->get(),
		];
		
		return $array;
	}
}
