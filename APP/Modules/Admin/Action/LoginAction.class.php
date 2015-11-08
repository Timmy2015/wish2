<?php

/*
  后台登录控制器
 */

Class LoginAction extends Action {
    Public function index(){
   //默认是自动开始session的
//        var_dump(C('SESSION_AUTO_START'));
//        echo session_id();
               
        $this->display();
    }
    Public function login(){
//        echo $this->verify();
        echo '<br/>';
        P($_POST);

        
        var_dump( $_SESSION['vcode']);
        
//        echo '<br/>';
//        P($_POST);
    }
    //为什么读取不了验证码？第一次明明可以的啊
    Public function verify(){
        /*Why,It's OK suddenly ! I doubt it's a config problem 'SESSION_TYPE'=>'Db' cause !
         It's default is file store !
         I delete the project from netbeans ,clear the Runtime folder,change the session_type to default ! 
         */
        import('ORG.Util.Image');
        Image::buildImageVerify(2 ,1, 'png', 80, 25,'vcode');        
 
    }

    

}

?>