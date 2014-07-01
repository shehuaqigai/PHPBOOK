<?php

class Content extends Eloquent {
    protected $table = 'content';

    public static function getAllData(){

        $content=self::all();
        $bookContent=array();
        foreach($content as $value){
            array_push($bookContent,$value['original']);
        }

       return $bookContent;

    }









}