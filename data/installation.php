<?php
if (strtolower($message['text']) == "teach me" || strtolower($message['text']) == "介紹") {
    $client->replyMessage(array(
        'replyToken' => $event['replyToken'],
        'messages' => array(
            array(
                'type' => 'text', //訊息類型 (文字)
                'text' => 'These are all you need!' //回復訊息
            ),
            array(
                "type" => "flex",
                "altText" => "helo",
                "contents" => array(
                    "type" => "carousel",
                    "contents" => array(
                        array(
                            "type" => "bubble",
                            "size" => "micro",
                            "hero" => array(
                                "type" => "image",
                                "url" => "https://i2.wp.com/www.yuworkstation.com/wp-content/uploads/2018/06/%D0%9B%D0%BE%D0%B3%D0%BE_%D0%B6%D0%B0%D0%B2%D0%B0.png?fit=1024%2C576",
                                "size" => "full",
                                "aspectMode" => "cover",
                                "aspectRatio" => "320:213"
                            ),
                            "body" => array(
                                "type" => "box",
                                "layout" => "vertical",
                                "contents" => array(
                                    array(
                                        "type" => "text",
                                        "text" => "Java JDK",
                                        "weight" => "bold",
                                        "size" => "sm",
                                        "wrap" => true
                                    ),
                                    array(
                                        "type" => "box",
                                        "layout" => "vertical",
                                        "contents" => array(
                                            array(
                                                "type" => "box",
                                                "layout" => "baseline",
                                                "spacing" => "sm",
                                                "contents" => array(
                                                    array(
                                                        "type" => "text",
                                                        "text" => "install it first",
                                                        "wrap" => true,
                                                        "color" => "#8c8c8c",
                                                        "size" => "xs",
                                                        "flex" => 5
                                                    )
                                                )
                                            )
                                        )
                                    ),
                                    array(
                                        "type" => "button",
                                        "action" => array(
                                            "type" => "uri",
                                            "label" => "link",
                                            "uri" => "https://www.oracle.com/java/technologies/javase-downloads.html"
                                        )
                                    )
                                ),
                                "spacing" => "sm",
                                "paddingAll" => "13px"
                            )
                        ),
                        array(
                            "type" => "bubble",
                            "size" => "micro",
                            "hero" => array(
                                "type" => "image",
                                "url" => "https://i2.wp.com/www.footmark.info/wp-content/uploads/2015/04/198b7dbe428b4bfe0e840f8960537f77.png?fit=600%2C315&ssl=1",
                                "size" => "full",
                                "aspectMode" => "fit",
                                "aspectRatio" => "320:213"
                            ),
                            "body" => array(
                                "type" => "box",
                                "layout" => "vertical",
                                "contents" => array(
                                    array(
                                        "type" => "text",
                                        "text" => "Eclipse",
                                        "weight" => "bold",
                                        "size" => "sm",
                                        "wrap" => true
                                    ),
                                    array(
                                        "type" => "box",
                                        "layout" => "vertical",
                                        "contents" => array(
                                            array(
                                                "type" => "box",
                                                "layout" => "baseline",
                                                "spacing" => "sm",
                                                "contents" => array(
                                                    array(
                                                        "type" => "text",
                                                        "text" => "your IDE",
                                                        "wrap" => true,
                                                        "color" => "#8c8c8c",
                                                        "size" => "xs",
                                                        "flex" => 5
                                                    )
                                                )
                                            )
                                        )
                                    ),
                                    array(
                                        "type" => "button",
                                        "action" => array(
                                            "type" => "uri",
                                            "label" => "link",
                                            "uri" => "https://www.eclipse.org/downloads/"
                                        )
                                    )
                                ),
                                "spacing" => "sm",
                                "paddingAll" => "13px"
                            )
                        )
                    )
                )
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
                    "body" => array(
                        "type" => "box",
                        "layout" => "vertical",
                        "contents" => array(
                            array(
                                "type" => "image",
                                "size" => "full",
                                "aspectMode" => "cover",
                                "aspectRatio" => "1:1",
                                "gravity" => "center",
                                "url" => "https://i.pinimg.com/564x/a9/db/00/a9db004baef4f905cc0fd433ec887fc6.jpg"
                            ),
                            array(
                                "type" => "box",
                                "layout" => "vertical",
                                "contents" => array(),
                                "position" => "absolute",
                                "background" => array(
                                    "type" => "linearGradient",
                                    "angle" => "0deg",
                                    "endColor" => "#00000000",
                                    "startColor" => "#00000099"
                                ),
                                "width" => "100%",
                                "height" => "40%",
                                "offsetBottom" => "0px",
                                "offsetStart" => "0px",
                                "offsetEnd" => "0px"
                            ),
                            array(
                                "type" => "box",
                                "layout" => "horizontal",
                                "contents" => array(
                                    array(
                                        "type" => "box",
                                        "layout" => "vertical",
                                        "contents" => array(
                                            array(
                                                "type" => "text",
                                                "text" => "I won't let you go",
                                                "color" => "#FFFFFF",
                                                "align" => "center"
                                            ),
                                            array(
                                                "type" => "text",
                                                "text" => "unless you say that you love me",
                                                "color" => "#FFFFFF",
                                                "align" => "center"
                                            )
                                        ),
                                        "spacing" => "xs"
                                    )
                                ),
                                "position" => "absolute",
                                "offsetBottom" => "0px",
                                "offsetStart" => "0px",
                                "offsetEnd" => "0px",
                                "paddingAll" => "20px"
                            )
                        ),
                        "paddingAll" => "0px"
                    )
                )
            )
            
        )
    ));
    // $myfile = fopen("var.txt", "w") or die("Unable to open file!");
    // $txt = "saysomething";
    // fwrite($myfile, $txt);
    // fclose($myfile);  
    $sth = $connect->prepare('UPDATE line_state SET line_state = :hp WHERE line_id = 1');
    $sth->bindValue(':hp','saysomething');
    $sth->execute();     
}