<?php

class Chapter extends Eloquent {
    protected $table = 'chapter';

    public static function getAllData(){
           $Chapter=self::all();
           $bookChapter=array();
        foreach($Chapter as $key=>$value){
            array_push($bookChapter,$value['original']);
        }
       return $bookChapter;

}


}