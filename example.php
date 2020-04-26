<?php
require './DB.php';

$db = new DB('localhost','watermark_bot','root','','utf8mb4');
/*
 * databasega yangi data yuklash
 *
 * $query = "INSERT INTO bot_message (user_id,type,message) VALUES (?,?,?)";
 * $params = ['1', 'text', 'Hello World'];
 * end yuklash ishlami
 */

/*
 * Taxrirlash ishlami
 *
 * $query = "UPDATE bot_message SET message=:message WHERE user_id= :user_id";
 * $params = ['message' => 'Hello World (edited)','user_id' => '1'];
 * end taxrirlash
 */

/*
 * O'chirish ishlami
 *
 * $query = "DELETE FROM bot_form_step WHERE user_id =:user_id";
 * $params = ['user_id' => '1'];
 * end ochirish
 */
 $tdata = $db->query_cruid($query, $params);

 if ($tdata){
     echo "ok";
 }else{
     echo "err";
 }