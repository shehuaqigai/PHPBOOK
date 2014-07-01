<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
        <link href="./packages/css/custom/reset.css" rel="stylesheet"/>
        <link href="./packages/css/lib/iconmoon.css" rel="stylesheet"/>
        <script src="./packages/js/lib/jquery-2.0.2.js"></script>
        <title>PHP手册后台管理</title>
        <style>
            #section{

                border:1px solid green;
                width:50rem;
                height:30rem;
                margin:20rem auto;
                border-radius:0.6rem;
                background:rgba(45,23,10,0.5);

            }
            #section p{
                width:100%;
                font-size:2.5rem;
                height:5rem;
                line-height: 5rem;
                text-align:center;
                margin:2rem 0 0 0;


            }
            #section p button{

                width:15rem;
                height:5rem;
                border-radius:0.4rem;
                border:none;
            }
            #section .prompt{

                color:red;
                font-size:1.6rem;

            }
        </style>
    </head>
    <body>
        <section id="section">
               <p>username:<input type="text" name="userName" placeholder="用户名"/></p>
               <p>password:<input type="password" name="password" placeholder="密码"/></p>
               <p><button>登录</button></p>
               <p class="prompt"></p>
        </section>
        <script>
            (function(){
                //登录初始化绑定事件
                function loginInit(){
                    var $section=$('#section');
                    var $button=$section.find('button');
                    var $prompt=$section.find('.prompt');
                    $button.on('click',function(e){
                       var $user=$section.find('input[name=userName]').val();
                       var $pwd=$section.find('input[name=password]').val();

                        if($user && $pwd){
                            loginValite($user,$pwd,$prompt);

                        }else{

                            $prompt.html("用户名或密码错误!");

                        }
                    });



                }
                //登录的请求验证
                function loginValite(user,pwd,prompt){
                    $.ajax('./admin/validate',{
                        data:{userName:user,password:pwd},
                        type:'post',
                        dataType:'text',
                        success:function(result){
                            if(result=='error'){
                                prompt.html("用户名或密码错误!");
                            }
                            else{
                                location.href='./admin/index/'+result;
                            }
                        },
                        error:function(result){
                            prompt.html('服务器请求失败,检查网络是否正常,稍后再试!');
                        }
                    });
                }

                //如果是登录页面就执行登录功能初始化
                loginInit();


            })();
        </script>
    </body>
</html>

