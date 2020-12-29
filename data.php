<?php
// include 'example_bot.php';
// $myfile = fopen("var.txt", "r") or die("Unable to open file!");
// $curstate=fread($myfile,filesize("var.txt"));
// fclose($myfile);
$connect = new PDO('mysql:host=localhost;dbname=line;charset=utf8mb4', 'travisedward2', 'edward25');
$sth = $connect->prepare('SELECT line_state FROM line_state WHERE line_id = 1');
$sth->execute();
$curstate = $sth->fetch();
switch($curstate[0]){
    case 'closed'://只能使用 start 使其轉換 state
        require_once('data/closed.php');
        break;
    case "opened":
        require_once('data/opened.php');
        break;
    case "installation":
        require_once('data/installation.php');
        break;
    case "functions" :
        require_once('data/functions.php');
        break;
    case "saysomething":
         require_once('data/saysomething.php');   
         break;
    case "courses":
       require_once('data/courses.php');            
        break;
    case "references":
        require_once('data/references.php'); 
        break;
    
}

if(strtolower($message['text']) == 'restart'){
    $sth = $connect->prepare('UPDATE line_state SET line_state = :hp WHERE line_id = 1');
    $sth->bindValue(':hp','closed');
    $sth->execute(); 
}

            // if (strtolower($message['text']) == "查看" || strtolower($message['text']) == "list")  {
            //     $client->replyMessage(array(
            //         'replyToken' => $event['replyToken'],
            //         'messages' => array(
            //             array(
            //                 "type" => "flex",
            //                 "altText" => "Input your income and expense!",
            //                 "contents" => 
            //                 array(
            //                     "type" => "bubble",
            //                     "body" => array(
            //                         "type" => "box",
            //                         "layout" => "vertical",
            //                         "contents" => array(
            //                             array(
            //                                 "type" => "box",
            //                                 "layout" => "vertical",
            //                                 "contents" => array(
            //                                     array(
            //                                         "type" => "text",
            //                                         "text" => "String",
            //                                         "weight" => "bold",
            //                                         "margin" => "md"
            //                                     ),
            //                                     array(
            //                                         "type" => "text",
            //                                         "text" => "toString()",
            //                                         "contents" => array(),
            //                                         "margin" => "md"
            //                                     ),
            //                                     array(
            //                                         "type" => "text",
            //                                         "text" => "split()",
            //                                         "margin" => "md"
            //                                     ),
            //                                     array(
            //                                         "type" => "text",
            //                                         "text" => "charAt()",
            //                                         "margin" => "md"
            //                                     )
            //                                 ),
            //                                 "margin" => "md",
            //                                 "spacing" => "sm"
            //                             ),
            //                             array(
            //                                 "type" => "box",
            //                                 "layout" => "vertical",
            //                                 "contents" => array(
            //                                     array(
            //                                         "type" => "text",
            //                                         "text" => "Read/Write",
            //                                         "weight" => "bold",
            //                                         "margin" => "md"
            //                                     ),
            //                                     array(
            //                                         "type" => "text",
            //                                         "text" => "BufferReader",
            //                                         "margin" => "md"
            //                                     ),
            //                                     array(
            //                                         "type" => "text",
            //                                         "text" => "BufferWriter",
            //                                         "margin" => "md"
            //                                     )
            //                                 ),
            //                                 "margin" => "md"
            //                             ),
            //                             array(
            //                                 "type" => "text",
            //                                 "text" => "more...",
            //                                 "margin" => "md"
            //                             ),
            //                             array(
            //                                 "type" => "spacer"
            //                             )
            //                         )
            //                     )
            //                 )
            //             )
                        
            //         )
            //     ));
               
            // }else if (strtolower($message['text']) == "tostring")  {
            //     $client->replyMessage(array(
            //         'replyToken' => $event['replyToken'],
            //         'messages' => array(
            //             array(
            //                 "type" => "flex",
            //                 "altText" => "Input your income and expense!",
            //                 "contents" => 
            //                 array(
            //                     "type" => "bubble",
            //                     "body" => array(
            //                         "type" => "box",
            //                         "layout" => "vertical",
            //                         "contents" => array(
            //                             array(
            //                                 "type" => "text",
            //                                 "text" => "println(Integer.toString(12));"
            //                             ),
            //                             array(
            //                                 "type" => "text",
            //                                 "text" => "> 12"
            //                             )
            //                         )
            //                     )
            //                 )
            //             )
                        
            //         )
            //     ));
               
            // }else if (strtolower($message['text']) == "split")  {
            //     $client->replyMessage(array(
            //         'replyToken' => $event['replyToken'],
            //         'messages' => array(
            //             array(
            //                 "type" => "flex",
            //                 "altText" => "Input your income and expense!",
            //                 "contents" => 
            //                 array(
            //                     "type" => "bubble",
            //                     "body" => array(
            //                         "type" => "box",
            //                         "layout" => "vertical",
            //                         "contents" => array(
            //                             array(
            //                                 "type" => "text",
            //                                 "text" => "String string = \"004-034556\";"
            //                             ),
            //                             array(
            //                                 "type" => "text",
            //                                 "text" => "String[] parts = string.split(\"-\");"
            //                             ),
            //                             array(
            //                                 "type" => "text",
            //                                 "text" => "String part1 = parts[0]; // 004"
            //                             ),
            //                             array(
            //                                 "type" => "text",
            //                                 "text" => "String part2 = parts[1]; // 034556"
            //                             )
            //                         )
            //                     )
            //                 )
            //             )
                        
            //         )
            //     ));
               
            // }else if (strtolower($message['text']) == "charat")  {
            //     $client->replyMessage(array(
            //         'replyToken' => $event['replyToken'],
            //         'messages' => array(
            //             array(
            //                 "type" => "flex",
            //                 "altText" => "Input your income and expense!",
            //                 "contents" => 
            //                 array(
            //                     "type" => "bubble",
            //                     "body" => array(
            //                         "type" => "box",
            //                         "layout" => "vertical",
            //                         "contents" => array(
            //                             array(
            //                                 "type" => "text",
            //                                 "text" => "String s = \"Strings are immutable\";"
            //                             ),
            //                             array(
            //                                 "type" => "text",
            //                                 "text" => "char result = s.charAt(8);"
            //                             ),
            //                             array(
            //                                 "type" => "text",
            //                                 "text" => "System.out.println(result);"
            //                             ),
            //                             array(
            //                                 "type" => "text",
            //                                 "text" => "> a"
            //                             )
            //                         )
            //                     )
            //                 )
            //             )
                        
            //         )
            //     ));
               
            // }else if (strtolower($message['text']) == "bufferwriter")  {
            //     $client->replyMessage(array(
            //         'replyToken' => $event['replyToken'],
            //         'messages' => array(
            //             array(
            //                 "type" => "flex",
            //                 "altText" => "Input your income and expense!",
            //                 "contents" => 
            //                 array(
            //                     "type" => "bubble",
            //                     "body" => array(
            //                         "type" => "box",
            //                         "layout" => "vertical",
            //                         "contents" => array(
            //                             array(
            //                                 "type" => "text",
            //                                 "text" => "FileWriter fw "
            //                             ),
            //                             array(
            //                                 "type" => "text",
            //                                 "text" => "     = new FileWriter(\"1.txt\");"
            //                             ),
            //                             array(
            //                                 "type" => "text",
            //                                 "text" => "BufferedWriter bw"
            //                             ),
            //                             array(
            //                                 "type" => "text",
            //                                 "text" => "     = new BufferedWriter(fw); "
            //                             ),
            //                             array(
            //                                 "type" => "text",
            //                                 "text" => "bw.write(\"hello world !\");"
            //                             ),
            //                             array(
            //                                 "type" => "text",
            //                                 "text" => "bw.newLine(); // "
            //                             )
            //                         )
            //                     )
            //                 )
            //             )
                        
            //         )
            //     ));
               
            // }else if (strtolower($message['text']) == "marked")  {
            //     $client->replyMessage(array(
            //         'replyToken' => $event['replyToken'],
            //         'messages' => array(
            //             array(
            //                 "type" => "flex",
            //                 "altText" => "Input your income and expense!",
            //                 "contents" => 
            //                 array(
            //                     "type" => "bubble",
            //                     "body" => array(
            //                         "type" => "box",
            //                         "layout" => "vertical",
            //                         "contents" => array(
            //                             array(
            //                                 "type" => "text",
            //                                 "text" => "I often forget ",
            //                                 "weight" => "bold"
            //                             ),
            //                             array(
            //                                 "type" => "box",
            //                                 "layout" => "vertical",
            //                                 "contents" => array(
            //                                     array(
            //                                         "type" => "text",
            //                                         "text" => "split()",
            //                                         "margin" => "md"
            //                                     ),
            //                                     array(
            //                                         "type" => "text",
            //                                         "text" => "interface",
            //                                         "margin" => "md"
            //                                     ),
            //                                     array(
            //                                         "type" => "text",
            //                                         "text" => "tostring()"
            //                                     )
            //                                 ),
            //                                 "margin" => "md",
            //                                 "spacing" => "sm"
            //                             ),
            //                             array(
            //                                 "type" => "spacer"
            //                             )
            //                         )
            //                     )
            //                 )
            //             )
                        
            //         )
            //     ));
               
            // }else if (strtolower($message['text']) == "official" || $message['text'] == "官方"
            // || $message['text'] == "doc"|| $message['text'] == "document"||strtolower($message['text']) == "more") {
            //     $client->replyMessage(array(
            //         'replyToken' => $event['replyToken'],
            //         'messages' => array(
            //             array(
            //                 'type' => 'text', //訊息類型 (文字)
            //                 'text' => 'https://docs.oracle.com/en/java/' //回復訊息
            //             ),array(
            //                 'type' => 'text', //訊息類型 (文字)
            //                 'text' => 'http://itmyhome.com/java-api/' //回復訊息
            //             ),array(
            //                 'type' => 'text', //訊息類型 (文字)
            //                 'text' => 'https://www.apiref.com/java11-zh/' //回復訊息
            //             )
            //         )
            //     ));
            // }else if (strtolower($message['text']) == "version" || strtolower($message['text']) == "latest")  {
            //     $client->replyMessage(array(
            //         'replyToken' => $event['replyToken'],
            //         'messages' => array(
            //             array(
            //                 "type" => "flex",
            //                 "altText" => "Input your income and expense!",
            //                 "contents" => 
            //                 array(
            //                     "type" => "bubble",
            //                     "body" => array(
            //                         "type" => "box",
            //                         "layout" => "vertical",
            //                         "contents" => array(
            //                             array(
            //                                 "type" => "text",
            //                                 "text" => "Java SE 15"
            //                             ),
            //                             array(
            //                                 "type" => "text",
            //                                 "text" => "Realease September, 15th 2020"
            //                             )
                                        
            //                         )
            //                     )
            //                 )
            //             )
                        
            //         )
            //     ));
               
            // }else if (strtolower($message['text']) == "download" || strtolower($message['text']) == "下載")  {
            //     $client->replyMessage(array(
            //         'replyToken' => $event['replyToken'],
            //         'messages' => array(
            //             array(
            //                 "type" => "flex",
            //                 "altText" => "Input your income and expense!",
            //                 "contents" => 
            //                 array(
            //                     "type" => "bubble",
            //                     "body" => array(
            //                         "type" => "box",
            //                         "layout" => "vertical",
            //                         "contents" => array(
            //                             array(
            //                                 "type" => "text",
            //                                 "text" => "下載地址 ▼"
            //                             )
            //                         )
            //                     )
            //                 )
            //             ),
            //             array(
            //                 'type' => 'text', //訊息類型 (文字)
            //                 'text' => 'https://www.java.com/zh-TW/download/' //回復訊息
            //             )
                        
            //         )
            //     ));
               
            // }else if (strtolower($message['text']) == "fsm") {
            //     $client->replyMessage(array(
            //         'replyToken' => $event['replyToken'],
            //         'messages' => array(
            //             array(
            //                 'type' => 'image', //訊息類型 (圖片)
            //                 'originalContentUrl' => 'https://i.imgur.com/HfrLKbb.jpg', //回復圖片
            //                 'previewImageUrl' => 'https://i.imgur.com/HfrLKbb.jpg' //回復的預覽圖片
            //             )
            //         )
            //     ));
            // }
            // elseif (strtolower($message['text']) == "var" ) {
               
                
            //     $client->replyMessage(array(
            //         'replyToken' => $event['replyToken'],
            //         'messages' => array(
            //             array(
            //                 'type' => 'text', //訊息類型 (文字)
            //                 'text' => $var //回復訊息
            //             )
            //         )
            //     ));
               
            // }