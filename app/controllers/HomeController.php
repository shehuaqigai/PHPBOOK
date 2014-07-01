<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|
	*/
    public function indexAction(){
        //获取内容表的所有内容
        $content =Content::getAllData();
        //获取章节表的所有内容
        $Chapter =Chapter::getAllData();
        //获取phpdoc表中的分类信息
        $category=Phpdoc::getAllData();
        $bookData=array();
        $bookData['content']=$content;
        $bookData['chapter']=$Chapter;
        $bookData['category']=$category;

        return View::make('Home/index')->with("bookData",json_encode($bookData));
    }

}
