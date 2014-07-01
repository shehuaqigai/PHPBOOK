<?php

class AdminController extends BaseController {

    /*
    |--------------------------------------------------------------------------
    | Default Admin Controller
    |--------------------------------------------------------------------------
    |
    | You may wish to use controllers instead of, or in addition to, Closure
    | based routes. That's great! Here is an example controller method to
    | get you started. To route to this controller, just add the route:
    |
    |
    */
    public function indexAction(){
        return View::make('Admin.index');
    }
    public function validateAction(){

        $user=Input::get('userName');
        $pwd=Input::get('password');
        if(!empty($user) && !empty($pwd)){
             $users = DB::table('user')
                   ->where('userName', '=',$user)
                   ->orWhere('password', $pwd)
                   ->get();
             if(empty($users)){
                    echo "error";
             }
             else{
                 $timeMd5=md5(time());
                 Session::put('user',$user);
                 Session::put($user.'timemd5', $timeMd5);
                 echo $timeMd5;
             }

        }
    }


    public function adminPageAction($md5){
        $user=Session::get('user');
        $value = Session::get($user.'timemd5');
        if(!empty($value) && $md5 == $value){

            return View::make('Admin.adminPage');


        }else{

            return Redirect::to('/admin')->with('message', '你还没有登录!');
        }




    }



}
