<?php

class TBController extends BaseController {

	public function firstPage()
	{
		//return 'Hello twitter';
		$title = "Twitter Bootstrap's example";
		$header = "Learn how to integrate twitter bootstrap into Laravel 4";
		return View::make('twitter_bootstrap.firstpage', array('title'=>$title, 'header'=>$header));
	}

}