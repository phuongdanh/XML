
<?php

header('Content-Type: text/html; charset=utf-8');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once('database.php');
create_table('table',array('name','content','time')); 
//for($i=1;$i<=10;$i++){add_data('table',array('tên '.$i,'nội dung '.$i,time()));} 

//$data = get_data('table', '*', '');
//foreach($data as $a){echo $a['name'].'<br/ >';
//}
//
//$customer = get_all();
//$j = json_encode($customer);
//var_dump($j);
//echo '<hr />';
//$a = json_decode($j,true);
//var_dump($a);
//echo '<br />';
//echo $a["table"][0]['name'];
//del_data('table','name',array('tên 1','tên 2')); 
//update_data('table',array('name','tên 3'),array('tên mới','nội dung mới'),time()); 
?>