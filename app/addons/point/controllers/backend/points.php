<?php

use Tygh\Registry;

 if(!defined('BOOTSTRAP')) {die('Acess Denied');}

 if($_SERVER['REQUEST_METHOD']== 'GET'){
    if($mode == 'manage'){
        //'sum_total_pontos'
        $chain='Select distinct(fk_user_id),  sum(total_pontos) sum_total_pontos, firstname, lastname, user_id  from cscart_points as P Inner Join cscart_users AS U on P.fk_user_id = U.user_id group by user_id';
      
        // Tygh::$app['view']->assign('item', $chain);
   
        $points_list = db_get_array($chain);
       
        Tygh::$app['view']->assign('dados', $points_list);
       // print_r($points_list);

    }
    if($mode == 'upload'){
        
        $user_id = $_GET['user_id'];

        $chain = "Select * from cscart_points as P Inner Join cscart_users AS U on P.fk_user_id = U.user_id where user_id =".$user_id;

       
        $points_list_user = db_get_array($chain);

        Tygh::$app['view']->assign('dados', $points_list_user);
       
    }

 }