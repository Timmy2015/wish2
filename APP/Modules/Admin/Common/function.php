<?php
//递归函数要好好理解下了
  function node_merge($node,$access=null,$pid=0){
    $arr=array();
    foreach ($node as $v){
    	if(is_array($access)){
    		$v['access']=in_array($v['id'],$access)?1:0;
    	}
    	if($v['pid']==$pid){
    		$v['child']=node_merge($node,$access,$v['id']);
    		$arr[]=$v;
    	}
    }
    return $arr;
  }


/*function node_merge($node,$access=null,$pid=0){
    $arr=array();
    foreach ($node as $v){
    	if(is_array($access)){
    		$v['access']=in_array($v['id'],$access)?1:0;
    	}
    	if($v['pid']==$pid){
    		$v['child']=node_merge($node,$access,$v['id']);
    		$arr[]=$v;
    	}
    }
    return $arr;
  }
  */
//  //network in order to fix $_SESSION can't show problem 3.2.3
//  function check_code($code, $id = ""){  
//    $verify = new \Think\Verify();  
//    return $verify->check($code, $id);  
// } 
 
?>