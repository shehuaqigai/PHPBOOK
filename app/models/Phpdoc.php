<?php

class Phpdoc extends Eloquent {
     protected $table = 'phpdoc';

    public static function getAllData(){

        $content=self::all();
        $category=array();
        foreach($content as $value){
            $row=$value['original'];
            unset($row['created_at']);
            unset($row['updated_at']);
            unset($row['id']);

            array_push($category,$row);
        }

        return $category;

    }

}