<?php
if (strtolower($message['text']) == "version" || strtolower($message['text']) == "介紹") {
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
                                "url" => "https://vignette.wikia.nocookie.net/oregairu/images/8/8d/Yukinoshita_Yukino-0.png/revision/latest?cb=20170220081121&path-prefix=zh",
                                "size" => "full",
                                "aspectMode" => "cover",
                                "aspectRatio" => "1:1",
                                "gravity" => "center"
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
                                                "type" => "box",
                                                "layout" => "vertical",
                                                "contents" => array(
                                                    array(
                                                        "type" => "text",
                                                        "text" => "java se 11.0.9",
                                                        "size" => "xl",
                                                        "color" => "#ffffff",
                                                        "align" => "center"
                                                    ),
                                                    array(
                                                        "type" => "text",
                                                        "text" => "This is the latest version I know",
                                                        "color" => "#ffffff",
                                                        "align" => "center"
                                                    )
                                                )
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
}
else if (strtolower($message['text']) == "fsm" || $message['text'] == "圖片") {
    $client->replyMessage(array(
        'replyToken' => $event['replyToken'],
        'messages' => array(
            array(
                'type' => 'image', //訊息類型 (圖片)
                'originalContentUrl' => 'https://i.imgur.com/MDkPMaq.png', //回復圖片
                'previewImageUrl' => 'https://i.imgur.com/MDkPMaq.png' //回復的預覽圖片
            )
        )
    ));
}
else if(strtolower($message['text']) == "search functions"){
   
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
                                    "url" => "https://fs.mingpao.com/pns/20200408/s00092/5bfcfd62dc3de0db8151b52dafd7bf16.jpg",
                                    "size" => "full",
                                    "aspectMode" => "fit",
                                    "aspectRatio" => "1:1",
                                    "gravity" => "center"
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
                                                    "type" => "box",
                                                    "layout" => "vertical",
                                                    "contents" => array(
                                                        array(
                                                            "type" => "text",
                                                            "text" => "what function do you need ?",
                                                            "color" => "#ffffff",
                                                            "align" => "center"
                                                        )
                                                    )
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
    // $txt = "functions";
    // fwrite($myfile, $txt);
    // fclose($myfile);   
    $sth = $connect->prepare('UPDATE line_state SET line_state = :hp WHERE line_id = 1');
    $sth->bindValue(':hp','functions');
    $sth->execute();
}
else if(strtolower($message['text']) == "libraries"){
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
                                "url" => "https://i.pinimg.com/564x/00/b0/87/00b087f2bfaf4cf413e69056e35bfc32.jpg",
                                "size" => "full",
                                "aspectMode" => "fit",
                                "aspectRatio" => "1:1",
                                "gravity" => "center"
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
                                                "type" => "box",
                                                "layout" => "vertical",
                                                "contents" => array(
                                                    array(
                                                        "type" => "text",
                                                        "text" => "These websites I have may help you",
                                                        "color" => "#ffffff",
                                                        "align" => "center",
                                                        "contents" => array()
                                                    )
                                                )
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
                        "paddingAll" => "0px",
                        "backgroundColor" => "#0099FF"
                    ),
                    "footer" => array(
                        "type" => "box",
                        "layout" => "vertical",
                        "contents" => array(
                            array(
                                "type" => "text",
                                "text" => "Java standard libraries",
                                "weight" => "bold"
                            ),
                            array(
                                "type" => "text",
                                "text" => "JHipster",
                                "weight" => "bold"
                            ),
                            array(
                                "type" => "text",
                                "text" => "Maven",
                                "weight" => "bold"
                            ),
                            array(
                                "type" => "text",
                                "text" => "Java Tutorial",
                                "weight" => "bold"
                            )
                        ),
                        "backgroundColor" => "#0088FF"
                    )
                )
            )
            
        )
    ));
    // $myfile = fopen("var.txt", "w") or die("Unable to open file!");
    // $txt = "references";
    // fwrite($myfile, $txt);
    // fclose($myfile); 
    $sth = $connect->prepare('UPDATE line_state SET line_state = :hp WHERE line_id = 1');
    $sth->bindValue(':hp','references');
    $sth->execute();  
}
else if(strtolower($message['text']) == "courses"){
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
                                "url" => "https://i.pinimg.com/originals/19/94/d3/1994d3895c298920121e38fd4d4038b8.jpg",
                                "size" => "full",
                                "aspectMode" => "fit",
                                "aspectRatio" => "1:1",
                                "gravity" => "center"
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
                                                "type" => "box",
                                                "layout" => "vertical",
                                                "contents" => array(
                                                    array(
                                                        "type" => "text",
                                                        "text" => "I'll teach you one to one",
                                                        "color" => "#ffffff",
                                                        "align" => "center",
                                                        "contents" => array()
                                                    )
                                                )
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
                        "paddingAll" => "0px",
                        "backgroundColor" => "#EEEEEE"
                    ),
                    "footer" => array(
                        "type" => "box",
                        "layout" => "vertical",
                        "contents" => array(
                            array(
                                "type" => "button",
                                "action" => array(
                                    "type" => "uri",
                                    "label" => "Java Selinium",
                                    "uri" => "https://www.youtube.com/watch?v=WzuJANOPLyQ"
                                )
                            ),
                            array(
                                "type" => "text",
                                "text" => "you can use it to find me on website",
                                "align" => "center",
                                "size" => "sm"
                            ),
                            array(
                                "type" => "button",
                                "action" => array(
                                    "type" => "uri",
                                    "uri" => "https://www.youtube.com/watch?v=duEkh8ZsFGs",
                                    "label" => "Java connecting Database"
                                )
                            ),
                            array(
                                "type" => "text",
                                "text" => "can you recall the nice days with me ?",
                                "align" => "center",
                                "size" => "sm"
                            ),
                            array(
                                "type" => "button",
                                "action" => array(
                                    "type" => "uri",
                                    "label" => "Java Threads Tutorial",
                                    "uri" => "https://www.youtube.com/watch?v=TCd8QIS-2KI"
                                )
                            ),
                            array(
                                "type" => "text",
                                "text" => "you're with me in parallel world",
                                "align" => "center",
                                "size" => "sm"
                            )
                        ),
                        "backgroundColor" => "#EEEEEE"
                    )
                )
            )
            
        )
    ));
    // $myfile = fopen("var.txt", "w") or die("Unable to open file!");
    // $txt = "courses";
    // fwrite($myfile, $txt);
    // fclose($myfile);
    $sth = $connect->prepare('UPDATE line_state SET line_state = :hp WHERE line_id = 1');
    $sth->bindValue(':hp','courses');
    $sth->execute();     
}
else if(strtolower($message['text']) == "ide"){
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
                                "url" => "https://i.pinimg.com/564x/71/fa/ee/71faee0d008a6c88d2fe2715d4855b14.jpg",
                                "size" => "full",
                                "aspectMode" => "fit",
                                "aspectRatio" => "1:1",
                                "gravity" => "center"
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
                                                "type" => "box",
                                                "layout" => "vertical",
                                                "contents" => array(
                                                    array(
                                                        "type" => "text",
                                                        "text" => "Let's get to work",
                                                        "color" => "#ffffff",
                                                        "align" => "center",
                                                        "contents" => array()
                                                    ),
                                                    array(
                                                        "type" => "text",
                                                        "text" => "I will help install all the things you need",
                                                        "size" => "sm",
                                                        "color" => "#ffffff",
                                                        "align" => "center"
                                                    )
                                                )
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
                        "paddingAll" => "0px",
                        "backgroundColor" => "#EEEEEE"
                    )
                )
            )
            
        )
    ));
    // $myfile = fopen("var.txt", "w") or die("Unable to open file!");
    // $txt = "installation";
    // fwrite($myfile, $txt);
    // fclose($myfile); 
    $sth = $connect->prepare('UPDATE line_state SET line_state = :hp WHERE line_id = 1');
    $sth->bindValue(':hp','installation');
    $sth->execute();    
}
