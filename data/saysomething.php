<?php
if (strtolower($message['text']) == "getback" || strtolower($message['text']) == "介紹") {
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
                                "url" => "https://pm1.narvii.com/7140/4efdd77233e0f72eaf90b4c380c2cc62530085dar1-930-1020v2_uhq.jpg"
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
                                                "text" => "I have told you",
                                                "color" => "#FFFFFF",
                                                "align" => "center"
                                            ),
                                            array(
                                                "type" => "text",
                                                "text" => "don't make me say it twice",
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
}
else if (strtolower($message['text']) == "love you" || strtolower($message['text']) == "介紹") {
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
                                "url" => "https://i.pinimg.com/564x/79/17/8a/79178ad0c4b6fa56b952b43620a37adb.jpg"
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
                                                "text" => "love you too!",
                                                "color" => "#FFFFFF",
                                                "align" => "center"
                                            ),
                                            array(
                                                "type" => "text",
                                                "text" => "can't wait to see you again T T",
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
                    ),
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