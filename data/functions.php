<?php
 if (strtolower($message['text']) == "tostring" || $message['text'] == "圖片") {
    $client->replyMessage(array(
        'replyToken' => $event['replyToken'],
        'messages' => array(
            array(
                'type' => 'image', //訊息類型 (圖片)
                'originalContentUrl' => 'https://i.imgur.com/nRw4TMs.png', //回復圖片
                'previewImageUrl' => 'https://i.imgur.com/nRw4TMs.png' //回復的預覽圖片
            )
        )
    ));
}
else if (strtolower($message['text']) == "time" || $message['text'] == "圖片") {
    $client->replyMessage(array(
        'replyToken' => $event['replyToken'],
        'messages' => array(
            array(
                'type' => 'image', //訊息類型 (圖片)
                'originalContentUrl' => 'https://i.imgur.com/TR5f7b8.png', //回復圖片
                'previewImageUrl' => 'https://i.imgur.com/TR5f7b8.png' //回復的預覽圖片
            )
        )
    ));
}
else if (strtolower($message['text']) == "readfile" || $message['text'] == "圖片") {
    $client->replyMessage(array(
        'replyToken' => $event['replyToken'],
        'messages' => array(
            array(
                'type' => 'image', //訊息類型 (圖片)
                'originalContentUrl' => 'https://i.imgur.com/GXl7WoV.png', //回復圖片
                'previewImageUrl' => 'https://i.imgur.com/GXl7WoV.png' //回復的預覽圖片
            )
        )
    ));
}
else if (strtolower($message['text']) == "getback" || strtolower($message['text']) == "介紹") {
    $client->replyMessage(array(
        'replyToken' => $event['replyToken'],
        'messages' => array(
            array(
                "type" => "flex",
                "altText" => "helo",
                "contents" => array(
                    "type" => "bubble",
                    "hero" => array(
                        "type" => "image",
                        "url" => "https://storage.inewsdb.com/10e0f6dacf19892b012078da1f99fa6f.jpeg"
                    ),
                    "body" => array(
                        "type" => "box",
                        "layout" => "vertical",
                        "contents" => array(
                            array(
                                "type" => "text",
                                "weight" => "bold",
                                "color" => "#1DB446",
                                "size" => "sm",
                                "text" => "Java God"
                            ),
                            array(
                                "type" => "text",
                                "text" => "Let me help",
                                "weight" => "bold",
                                "size" => "xxl",
                                "margin" => "md"
                            ),
                            array(
                                "type" => "separator",
                                "margin" => "xxl"
                            ),
                            array(
                                "type" => "box",
                                "layout" => "vertical",
                                "margin" => "xxl",
                                "spacing" => "sm",
                                "contents" => array(
                                    array(
                                        "type" => "box",
                                        "layout" => "vertical",
                                        "contents" => array(
                                            array(
                                                "type" => "text",
                                                "text" => "version",
                                                "size" => "lg",
                                                "color" => "#000099",
                                                "flex" => 0,
                                                "margin" => "sm"
                                            ),
                                            array(
                                                "type" => "text",
                                                "text" => "Let me tell you newest version of Java",
                                                "size" => "sm"
                                            )
                                        ),
                                        "margin" => "sm"
                                    ),
                                    array(
                                        "type" => "box",
                                        "layout" => "vertical",
                                        "contents" => array(
                                            array(
                                                "type" => "text",
                                                "text" => "FSM",
                                                "size" => "lg",
                                                "color" => "#000099",
                                                "flex" => 0
                                            ),
                                            array(
                                                "type" => "text",
                                                "text" => "The way I\'ve been given birth "
                                            )
                                        ),
                                        "margin" => "sm"
                                    ),
                                    array(
                                        "type" => "box",
                                        "layout" => "vertical",
                                        "contents" => array(
                                            array(
                                                "type" => "text",
                                                "text" => "search functions",
                                                "size" => "lg",
                                                "margin" => "none",
                                                "color" => "#000099"
                                            ),
                                            array(
                                                "type" => "text",
                                                "text" => "I have functions to share with you",
                                                "size" => "sm"
                                            )
                                        ),
                                        "margin" => "sm"
                                    )
                                )
                            ),
                            array(
                                "type" => "box",
                                "layout" => "vertical",
                                "contents" => array(
                                    array(
                                        "type" => "text",
                                        "text" => "libraries",
                                        "size" => "lg",
                                        "color" => "#000099",
                                        "margin" => "none"
                                    ),
                                    array(
                                        "type" => "text",
                                        "text" => "Learn more from me"
                                    )
                                ),
                                "margin" => "sm"
                            ),
                            array(
                                "type" => "box",
                                "layout" => "vertical",
                                "contents" => array(
                                    array(
                                        "type" => "text",
                                        "text" => "courses",
                                        "margin" => "sm",
                                        "size" => "lg",
                                        "color" => "#000099"
                                    ),
                                    array(
                                        "type" => "text",
                                        "text" => "I can be your personal teacher"
                                    )
                                ),
                                "margin" => "sm"
                            ),
                            array(
                                "type" => "box",
                                "layout" => "vertical",
                                "contents" => array(
                                    array(
                                        "type" => "text",
                                        "text" => "IDE",
                                        "size" => "lg",
                                        "color" => "#000099"
                                    ),
                                    array(
                                        "type" => "text",
                                        "text" => "let me be with you"
                                    )
                                ),
                                "margin" => "sm"
                            )
                        )
                    ),
                    "styles" => array(
                        "footer" => array(
                            "separator" => true
                        )
                    )
                )
            )
            
        )
    ));
    // $myfile = fopen("var.txt", "w") or die("Unable to open file!");
    // $txt = "opened";
    // fwrite($myfile, $txt);
    // fclose($myfile);
    $sth = $connect->prepare('UPDATE line_state SET line_state = :hp WHERE line_id = 1');
    $sth->bindValue(':hp','opened');
    $sth->execute(); 

}