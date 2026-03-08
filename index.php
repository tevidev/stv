<?php

$botToken = "8174540783:AAH0IS64YQa32Ue6LOD9LTqAm0YUgmDkRJo";

$website = "https://api.telegram.org/bot".$botToken;
$update = file_get_contents('php://input');
//echo $update;
$update = json_decode($update, TRUE);
//global $website;
$e = print_r($update);
$update["message"]["chat"]["title"]; 
$newusername     = $update["message"]["new_chat_member"]["username"];
$newgId          = $update["message"]["new_chat_member"]["id"];
$newfirstname    = $update["message"]["new_chat_member"]["first_name"];
$new_chat_member = $update["message"]["new_chat_member"];
$message         = $update["message"]["text"];
$message_id      = $update["message"]["message_id"];
$chatId          = $update["message"]["chat"]["id"];
$username2       = $update["message"]["from"]["username"];
$firstname       = $update["message"]["from"]["first_name"];
$cdata2          = $update["callback_query"]["data"];
$cchatid2        = $update["callback_query"]["message"]["chat"]["id"]; 
$username2       = $update["callback_query"]["from"]["username"];
$firstname2      = $update["callback_query"]["from"]["first_name"];
$userId2         = $update["callback_query"]["from"]["id"];
$cmessage_id2    = $update["callback_query"]["message"]["message_id"]; 
$username3       = ('@'.$username);
// $username3       = '@'.$username2;
 $info            = json_encode($update, JSON_PRETTY_PRINT); 
$emojid = '❌';
$emojil = '✅';
$owner = '<code>@Stxthunder</code>';
$botu = "𝘽𝙊𝙏 𝙐𝙋𝘿𝘼𝙏𝙀𝙎 ↯ @Starkxnetwork";
$bota = "<b>|×| 𝘿𝙀𝙑 ↯ @St_thunder</b>";$eror = "<b>Error ❌</b>";

$dd = "𝗗𝗲𝗰𝗹𝗶𝗻𝗲𝗱 ❌";
$live = "𝗔𝗽𝗽𝗿𝗼𝘃𝗲𝗱 ⚡";


$cofuid = '1212';
$cofuid2 = '1212';
$cofuid3 = '1212';
#FIN DE LA CAPTURA

$update = json_decode(file_get_contents("php://input"));

$chat_id = $update->message->chat->id;

$userId = $update->message->from->id;

$userIdd = $update->message->reply_to_message->from->id;

$firstnamee = $update->message->reply_to_message->from->first_name;

$firstname = $update->message->from->first_name;

$lastname = $update->message->from->last_name;

$username = $update->message->from->username;

$chattype = $update->message->chat->type;

$replytomessageis = $update->message->reply_to_message->text;

$replytomessagei = $update->message->reply_to_message->from->id;

$replytomessageiss = $update->message->reply_to_message;

$data = $update->callback_query->data;

$callbackfname = $update->callback_query->from->first_name;

$callbacklname = $update->callback_query->from->last_name;

$callbackusername = $update->callback_query->from->username;

$callbackchatid = $update->callback_query->message->chat->id;

$callbackuserid = $update->callback_query->message->reply_to_message->from->id;

$callbackmessageid = $update->callback_query->message->message_id;

$callbackfrom = $update->callback_query->from->id;

$callbackmessage = $update->callback_query->message->text;

$callbackid = $update->callback_query->id;

$text = $update->message->text;
$owner = '<code>@Starkxnetwork</code>';



/////Cmd Back2 \\\\

if ($cdata2 == "back2") {
    $gatesText = "𝗪𝗲𝗹𝗰𝗼𝗺𝗲 𝗧𝗼 Checker. ⚠️ Buy The Plan First.";


    $gatesKeyboard = json_encode([
    'inline_keyboard' => [
        [
            ['text' => '𝙂𝙖𝙩𝙚𝙬𝙖𝙮𝙨', 'callback_data' => 'gates'],
            ['text' => '𝙏𝙤𝙤𝙡𝙨', 'callback_data' => 'herr'],
        ]
    ]
]);


    $videoUrl = "https://t.me/ST_THUNDER/14";

    $inputMediaVideo = json_encode([
        'type' => 'video',
        'media' => $videoUrl,
        'caption' => $gatesText,
        'parse_mode' => 'HTML'
    ]);

    file_get_contents("https://api.telegram.org/bot$botToken/editMessageMedia?chat_id=$cchatid2&message_id=$cmessage_id2&media=" . urlencode($inputMediaVideo) . "&reply_markup=" . urlencode($gatesKeyboard));
}

/////End Code\\\\

//// Buy \\\

if ($cdata2 == "buy") {
    $gatesText = "
╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍
💸 𝙎𝙐𝘽𝙎𝘾𝙍𝙄𝙋𝙏𝙄𝙊𝙉 𝙈𝙀𝙉𝙐 💸
╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍
× 1 𝘞𝘌𝘌𝘒  - 1.5$ (100Rs)
× 2 𝘞𝘌𝘌𝘒𝘚 - 2.5$ (190Rs)
× 3 𝘞𝘌𝘌𝘒𝘚 - 5$ (400Rs)
━━━━━━━━━━━━━━━━━━
• <b>3</b> 𝘽𝙀𝙉𝙀𝙁𝙄𝙏𝙎 •
× 𝘈𝘓𝘓 𝘎𝘈𝘛𝘌𝘚 𝘈𝘊𝘊𝘌𝘚𝘚 ✅
× 𝘕𝘖 𝘈𝘕𝘛𝘐 𝘚𝘗𝘈𝘔 ✅
× 24/7 𝘊𝘜𝘚𝘛𝘖𝘔𝘌𝘙 𝘊𝘈𝘙𝘌 ✅

━━━━━━━━━━━━━━━━━━
• 𝙋𝘼𝙔𝙈𝙀𝙉𝙏 𝙈𝙀𝙏𝙃𝙊𝘿 •
  🔸UPI - <code> Available</code>
  🔸BTC - <code>Available</code>
  🔸USDT - <code>Available</code>
  🔸BNB - <code>Not Available</code>
  and other Coins also <b>Accepted</b> ✅
━━━━━━━━━━━━━━━━━━
⚠️ 𝘕𝘰𝘵𝘦- 𝘈𝘍𝘛𝘌𝘙 𝘗𝘈𝘠𝘐𝘕𝘎 𝘊𝘓𝘐𝘊𝘒 𝘖𝘕 𝘝𝘌𝘙𝘐𝘍𝘠 𝘗𝘈𝘠𝘔𝘌𝘕𝘛 𝘉𝘜𝘛𝘛𝘖𝘕 𝘈𝘕𝘋 𝘚𝘌𝘕𝘋 𝘚𝘊𝘙𝘌𝘌𝘕𝘚𝘏𝘖𝘛 ⚠️
⚠️ 𝘛𝘏𝘐𝘚 𝘛𝘖𝘗-𝘜𝘗s 𝘈𝘙𝘌 𝘕𝘖𝘕 𝘙𝘌𝘍𝘜𝘕𝘋𝘈𝘉𝘓𝘌 ⚠️";


                                 $gatesKeyboard = json_encode([
                                 'inline_keyboard' => [
                                     [                     ['text' => '• 𝙑𝙀𝙍𝙄𝙁𝙔 𝙋𝘼𝙔𝙈𝙀𝙉𝙏 •', 'url' => 'https://t.me/Stxthunder'],   ], ]
  ]);


    $videoUrl = "https://t.me/ST_THUNDER/14";

    $inputMediaVideo = json_encode([
        'type' => 'video',
        'media' => $videoUrl,
        'caption' => $gatesText,
        'parse_mode' => 'HTML'
    ]);

    file_get_contents("https://api.telegram.org/bot$botToken/editMessageMedia?chat_id=$cchatid2&message_id=$cmessage_id2&media=" . urlencode($inputMediaVideo) . "&reply_markup=" . urlencode($gatesKeyboard));
}

//////// End\\\\\\\


//=======inline keyboard========//
$keyboard = json_encode([
    'inline_keyboard' => [
        [
            ['text' => "↯ 𝘽𝙐𝙔 𝘼𝘾𝘾𝙀𝙎𝙎", 'url' => "https://t.me/Stxthunder"],
        ],
    ]
]);

//=======Inline Keyboard for "BACK" button========//

if ($cdata2 == "back") {
    // Go back to the welcome page
    $gatesText = "<b>𖣘 𝙂𝘼𝙏𝙀𝙒𝘼𝙔𝙎 𖣘

╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ 
× 𝘾𝙃𝘼𝙍𝙂𝙀 𝙂𝘼𝙏𝙀𝙒𝘼𝙔𝙎 : <code>15</code>
× 𝘼𝙐𝙏𝙃 𝙂𝘼𝙏𝙀𝙒𝘼𝙔𝙎 : <code>5</code>
× 𝙏𝙊𝙏𝘼𝙇 : <code>20</code>
╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍

$bota</b>";

    $gatesKeyboard = json_encode([
    'inline_keyboard' => [
        [['text' => "𝘼𝙐𝙏𝙃 𝙂𝘼𝙏𝙀𝙒𝘼𝙔𝙎", 'callback_data' => 'premium'], ['text' => "𝘾𝙃𝘈𝙍𝙂𝙀 𝙂𝘼𝙏𝙀𝙒𝘼𝙔𝙎", 'callback_data' => 'free']],
        [['text' => '𝙂𝙊 𝘽𝘼𝘾𝙆', 'callback_data' => 'back2']]
    ]
]);

    $videoUrl = "https://t.me/ST_THUNDER/14";

    $inputMediaVideo = json_encode([
        'type' => 'video',
        'media' => $videoUrl,
        'caption' => $gatesText,
        'parse_mode' => 'HTML'
    ]);


    file_get_contents("https://api.telegram.org/bot$botToken/editMessageMedia?chat_id=$cchatid2&message_id=$cmessage_id2&media=" . urlencode($inputMediaVideo) . "&reply_markup=" . urlencode($gatesKeyboard));
}


//============GATES START===========//

if ($cdata2 == "gates") {
    $gatesText = "<b>𖣘 𝙂𝘼𝙏𝙀𝙒𝘼𝙔𝙎 𖣘

╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ 
× 𝘾𝙃𝘼𝙍𝙂𝙀 𝙂𝘼𝙏𝙀𝙒𝘼𝙔𝙎 : <code>15</code>
× 𝘼𝙐𝙏𝙃 𝙂𝘼𝙏𝙀𝙒𝘼𝙔𝙎 : <code>5</code>
× 𝙏𝙊𝙏𝘼𝙇 : <code>20</code>
╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍

$bota</b>";


     $gatesKeyboard = json_encode([
    'inline_keyboard' => [
        [['text' => "𝘼𝙐𝙏𝙃 𝙂𝘼𝙏𝙀𝙒𝘼𝙔𝙎", 'callback_data' => 'premium'], ['text' => "𝘾𝙃𝘼𝙍𝙂𝙀 𝙂𝘼𝙏𝙀𝙒𝘼𝙔𝙎", 'callback_data' => 'free']],
        [['text' => '𝙂𝙊 𝘽𝘼𝘾𝙆', 'callback_data' => 'back2']]
    ]
]);


    $videoUrl = "https://t.me/ST_THUNDER/14";

    $inputMediaVideo = json_encode([
        'type' => 'video',
        'media' => $videoUrl,
        'caption' => $gatesText,
        'parse_mode' => 'HTML'
    ]);

    file_get_contents("https://api.telegram.org/bot$botToken/editMessageMedia?chat_id=$cchatid2&message_id=$cmessage_id2&media=" . urlencode($inputMediaVideo) . "&reply_markup=" . urlencode($gatesKeyboard));
}





//=========Back===========//

$premiumButton = json_encode([
'inline_keyboard' => [
                                 [['text' => "⥫ 𝘽𝘼𝘾𝙆 𝙋𝘼𝙂𝙀 𝟎", 'callback_data' => 'mm'], ['text' => "𝟐 𝙉𝙀𝙓𝙏 𝙋𝘼𝙂𝙀 ⥭", 'callback_data' => 'freec']],
                                 [['text' => '𝙃𝙊𝙈𝙀', 'callback_data' => 'gates']]
                             ]

]);

if ($cdata2 == "free") {
    $freeText = "𝙋𝘼𝙂𝙀 𝙉𝙊. ↯ 𝟏

╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍ 
<b>× 𝙂𝘼𝙏𝙀𝙒𝘼𝙔 - 𝙋𝘼𝙔𝙋𝘼𝙇 0.01$</b>
<b>• 𝙐𝙎𝘼𝙂𝙀 - <code>/pp cc|mm|yy|cvv</code></b>
<b>× 𝙍𝘼𝙉𝙆 - <code>SPECIAL GRADE</code></b>
<b>• 𝙎𝙏𝘼𝙏𝙐𝙎 - <code>𝙊𝙉 ✅</code></b>
╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍ 
<b>× 𝙂𝘼𝙏𝙀𝙒𝘼𝙔 - 𝙎𝙏𝙍𝙄𝙋𝙀 15$</b>
<b>• 𝙐𝙎𝘼𝙂𝙀 - <code>/str cc|mm|yy|cvv</code></b>
<b>× 𝙍𝘼𝙉𝙆 - <code>SPECIAL GRADE</code></b>
<b>• 𝙎𝙏𝘼𝙏𝙐𝙎 - <code>𝙊𝙉 ✅</code></b>
╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍ 
<b>× 𝙂𝘼𝙏𝙀𝙒𝘼𝙔 - 𝘼𝙐𝙏𝙃𝙊𝙍𝙄𝙕𝙀 𝙉𝙀𝙏 25$</b>
<b>• 𝙐𝙎𝘼𝙂𝙀 - <code>/atf cc|mm|yy|cvv</code></b>
<b>× 𝙍𝘼𝙉𝙆 - <code>SPECIAL GRADE</code></b>
<b>• 𝙎𝙏𝘼𝙏𝙐𝙎 - <code>𝙊𝙉 ✅</code></b>
╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍ 

$bota";

    // Replace this with your video URL
    $videoUrl = "https://t.me/ST_THUNDER/14";

    $inputMediaVideo = json_encode([
        'type' => 'video',
        'media' => $videoUrl,
        'caption' => $freeText,
        'parse_mode' => 'HTML'
    ]);

    file_get_contents("https://api.telegram.org/bot$botToken/editMessageMedia?chat_id=$cchatid2&message_id=$cmessage_id2&media=" . urlencode($inputMediaVideo) . "&reply_markup=" . urlencode($premiumButton));
}

//////=====Second Page Of Charge=======\\\\\

$premiumcButton = json_encode([
'inline_keyboard' => [
                                 [['text' => "⥫ 𝘽𝘼𝘾𝙆 𝙋𝘼𝙂𝙀 𝟏", 'callback_data' => 'free'], ['text' => "𝟑 𝙉𝙀𝙓𝙏 𝙋𝘼𝙂𝙀 ⥭", 'callback_data' => 'freea']],
                                 [['text' => '𝙃𝙊𝙈𝙀', 'callback_data' => 'gates']]
                             ]

]);

if ($cdata2 == "freec") {
    $freeText = "𝙋𝘼𝙂𝙀 𝙉𝙊. ↯ 𝟐

╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍ 
<b>× 𝙂𝘼𝙏𝙀𝙒𝘼𝙔 - 𝙎𝙃𝙊𝙋𝙄𝙁𝙔 10$</b>
<b>• 𝙐𝙎𝘼𝙂𝙀 - <code>/sh cc|mm|yy|cvv</code></b>
<b>× 𝙍𝘼𝙉𝙆 - <code>SPECIAL GRADE</code></b>
<b>• 𝙎𝙏𝘼𝙏𝙐𝙎 - <code>𝙊𝙉 ✅</code></b>
╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍ 
<b>× 𝙂𝘼𝙏𝙀𝙒𝘼𝙔 - 𝙎𝙃𝙊𝙋𝙄𝙁𝙔+𝙎𝙋𝙍𝙀𝙀𝘿𝙇𝙔 6$</b>
<b>• 𝙐𝙎𝘼𝙂𝙀 - <code>/sd cc|mm|yy|cvv</code></b>
<b>× 𝙍𝘼𝙉𝙆 - <code>SPECIAL GRADE</code></b>
<b>• 𝙎𝙏𝘼𝙏𝙐𝙎 - <code>𝙊𝙉 ✅</code></b>
╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍ 
<b>× 𝙂𝘼𝙏𝙀𝙒𝘼𝙔 - 𝘼𝙐𝙏𝙃𝙊𝙍𝙄𝙕𝙀 𝙉𝙀𝙏 7$</b>
<b>• 𝙐𝙎𝘼𝙂𝙀 - <code>/asd cc|mm|yy|cvv</code></b>
<b>× 𝙍𝘼𝙉𝙆 - <code>SPECIAL GRADE</code></b>
<b>• 𝙎𝙏𝘼𝙏𝙐𝙎 - <code>𝙊𝙉 ✅</code></b>
╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍ 

$bota";

    // Replace this with your video URL
    $videoUrl = "https://t.me/ST_THUNDER/14";

    $inputMediaVideo = json_encode([
        'type' => 'video',
        'media' => $videoUrl,
        'caption' => $freeText,
        'parse_mode' => 'HTML'
    ]);

    file_get_contents("https://api.telegram.org/bot$botToken/editMessageMedia?chat_id=$cchatid2&message_id=$cmessage_id2&media=" . urlencode($inputMediaVideo) . "&reply_markup=" . urlencode($premiumcButton));
}

/////=====END====\\\\


//////===== 3 PAGE OF CHARGE GATES ===\\\

$premiumaButton = json_encode([
'inline_keyboard' => [
                                 [['text' => "⥫ 𝘽𝘼𝘾𝙆 𝙋𝘼𝙂𝙀 𝟐", 'callback_data' => 'freec'], ['text' => "𝟒 𝙉𝙀𝙓𝙏 𝙋𝘼𝙂𝙀 ⥭", 'callback_data' => 'freeg']],
                                 [['text' => '𝙃𝙊𝙈𝙀', 'callback_data' => 'gates']]
                             ]

]);

if ($cdata2 == "freea") {
    $freeText = "𝙋𝘼𝙂𝙀 𝙉𝙊. ↯ 𝟑

╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍ 
<b>× 𝙂𝘼𝙏𝙀𝙒𝘼𝙔 - 𝙎𝙃𝙊𝙋𝙄𝙁𝙔 8.25$</b>
<b>• 𝙐𝙎𝘼𝙂𝙀 - <code>/si cc|mm|yy|cvv</code></b>
<b>× 𝙍𝘼𝙉𝙆 - <code>SPECIAL GRADE</code></b>
<b>• 𝙎𝙏𝘼𝙏𝙐𝙎 - <code>𝙊𝙉 ✅</code></b>
╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍ 
<b>× 𝙂𝘼𝙏𝙀𝙒𝘼𝙔 - 𝙎𝙏𝙍𝙄𝙋𝙀 8.61$</b>
<b>• 𝙐𝙎𝘼𝙂𝙀 - <code>/sec cc|mm|yy|cvv</code></b>
<b>× 𝙍𝘼𝙉𝙆 - <code>SPECIAL GRADE</code></b>
<b>• 𝙎𝙏𝘼𝙏𝙐𝙎 - <code>𝙊𝙉 ✅</code></b>
╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍ 
<b>× 𝙂𝘼𝙏𝙀𝙒𝘼𝙔 - 𝙎𝙃𝙊𝙋𝙄𝙁𝙔+𝙎𝙏𝙍𝙄𝙋𝙀 54$</b>
<b>• 𝙐𝙎𝘼𝙂𝙀 - <code>/sy cc|mm|yy|cvv</code></b>
<b>× 𝙍𝘼𝙉𝙆 - <code>SPECIAL GRADE</code></b>
<b>• 𝙎𝙏𝘼𝙏𝙐𝙎 - <code>𝙊𝙉 ✅</code></b>
╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍ 

$bota";

    // Replace this with your video URL
    $videoUrl = "https://t.me/ST_THUNDER/14";

    $inputMediaVideo = json_encode([
        'type' => 'video',
        'media' => $videoUrl,
        'caption' => $freeText,
        'parse_mode' => 'HTML'
    ]);

    file_get_contents("https://api.telegram.org/bot$botToken/editMessageMedia?chat_id=$cchatid2&message_id=$cmessage_id2&media=" . urlencode($inputMediaVideo) . "&reply_markup=" . urlencode($premiumaButton));
}


///////======END======\\\\\\




////// PAGE 4 OF CHARGED GATE \\\\\

$premiumgButton = json_encode([
'inline_keyboard' => [
                                 [['text' => "⥫ 𝘽𝘼𝘾𝙆 𝙋𝘼𝙂𝙀 𝟑", 'callback_data' => 'freea'], ['text' => "5 𝙉𝙀𝙓𝙏 𝙋𝘼𝙂𝙀 ⥭", 'callback_data' => 'freeh']],
                                 [['text' => '𝙃𝙊𝙈𝙀', 'callback_data' => 'gates']]
                             ]

]);

if ($cdata2 == "freeg") {
    $freeText = "𝙋𝘼𝙂𝙀 𝙉𝙊. ↯ 𝟒

╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍ 
<b>× 𝙂𝘼𝙏𝙀𝙒𝘼𝙔 - 𝙎𝙃𝙊𝙋𝙄𝙁𝙔 + 𝙋𝘼𝙔𝙀𝙀𝙕𝙔 17$</b>
<b>• 𝙐𝙎𝘼𝙂𝙀 - <code>/py cc|mm|yy|cvv</code></b>
<b>× 𝙍𝘼𝙉𝙆 - <code>SPECIAL GRADE</code></b>
<b>• 𝙎𝙏𝘼𝙏𝙐𝙎 - <code>𝙊𝙉 ✅</code></b>
╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍ 
<b>× 𝙂𝘼𝙏𝙀𝙒𝘼𝙔 - 𝙎𝙏𝙍𝙄𝙋𝙀 49$</b>
<b>• 𝙐𝙎𝘼𝙂𝙀 - <code>/dep cc|mm|yy|cvv</code></b>
<b>× 𝙍𝘼𝙉𝙆 - <code>SPECIAL GRADE</code></b>
<b>• 𝙎𝙏𝘼𝙏𝙐𝙎 - <code>𝙊𝙉 ✅</code></b>
╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍ 
<b>× 𝙂𝘼𝙏𝙀𝙒𝘼𝙔 - 𝙎𝙃𝙊𝙋𝙄𝙁𝙔 + 𝙎𝙏𝙍𝙄𝙋𝙀 10$</b>
<b>• 𝙐𝙎𝘼𝙂𝙀 - <code>/sc cc|mm|yy|cvv</code></b>
<b>× 𝙍𝘼𝙉𝙆 - <code>SPECIAL GRADE</code></b>
<b>• 𝙎𝙏𝘼𝙏𝙐𝙎 - <code>𝙊𝙉 ✅</code></b>
╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍ 

$bota";

    // Replace this with your video URL
    $videoUrl = "https://t.me/st_thunder/14";

    $inputMediaVideo = json_encode([
        'type' => 'video',
        'media' => $videoUrl,
        'caption' => $freeText,
        'parse_mode' => 'HTML'
    ]);

    file_get_contents("https://api.telegram.org/bot$botToken/editMessageMedia?chat_id=$cchatid2&message_id=$cmessage_id2&media=" . urlencode($inputMediaVideo) . "&reply_markup=" . urlencode($premiumgButton));
}



////// END CODE \\\\\

////// Charge Gate Page 5 /\\\\\
$premiumgButton = json_encode([
'inline_keyboard' => [
                                 [['text' => "⥫ 𝘽𝘼𝘾𝙆 𝙋𝘼𝙂𝙀 𝟒", 'callback_data' => 'freeg'], ['text' => "𝙀𝙉𝘿 𝙋𝘼𝙂𝙀 ⥭", 'callback_data' => 'gates']],
                                 [['text' => '𝙃𝙊𝙈𝙀', 'callback_data' => 'gates']]
                             ]

]);

if ($cdata2 == "freeh") {
    $freeText = "𝙋𝘼𝙂𝙀 𝙉𝙊. ↯ 5

╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍ 
<b>× 𝙂𝘼𝙏𝙀𝙒𝘼𝙔 - 𝙋𝘼𝙔𝙋𝘼𝙇 2$</b>
<b>• 𝙐𝙎𝘼𝙂𝙀 - <code>/lul cc|mm|yy|cvv</code></b>
<b>× 𝙍𝘼𝙉𝙆 - <code>SPECIAL GRADE</code></b>
<b>• 𝙎𝙏𝘼𝙏𝙐𝙎 - <code>ON ✅</code></b>    
╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍ 
<b>× 𝙂𝘼𝙏𝙀𝙒𝘼𝙔 - 𝙎𝙏𝙍𝙄𝙋𝙀 2$</b>
<b>• 𝙐𝙎𝘼𝙂𝙀 - <code>/sor cc|mm|yy|cvv</code></b>
<b>× 𝙍𝘼𝙉𝙆 - <code>SPECIAL GRADE</code></b>
<b>• 𝙎𝙏𝘼𝙏𝙐𝙎 - <code>ON ✅</code></b>
╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍ 
<b>× 𝙂𝘼𝙏𝙀𝙒𝘼𝙔 - 𝘼𝙐𝙏𝙃𝙊𝙍𝙄𝙕𝙀 𝙉𝙀𝙏 200$</b>
<b>• 𝙐𝙎𝘼𝙂𝙀 - <code>/anh cc|mm|yy|cvv</code></b>
<b>× 𝙍𝘼𝙉𝙆 - <code>SPECIAL GRADE</code></b>
<b>• 𝙎𝙏𝘼𝙏𝙐𝙎 - <code>𝙊𝙉 ✅</code></b>
╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍ 


$bota";

    // Replace this with your video URL
    $videoUrl = "https://t.me/st_thunder/14";

    $inputMediaVideo = json_encode([
        'type' => 'video',
        'media' => $videoUrl,
        'caption' => $freeText,
        'parse_mode' => 'HTML'
    ]);

    file_get_contents("https://api.telegram.org/bot$botToken/editMessageMedia?chat_id=$cchatid2&message_id=$cmessage_id2&media=" . urlencode($inputMediaVideo) . "&reply_markup=" . urlencode($premiumgButton));
}

//// End Code \\\\

//========Premium and free=======//

$freeButton = json_encode([
'inline_keyboard' => [
                                 [['text' => "⥫ 𝘽𝘼𝘾𝙆 𝙋𝘼𝙂𝙀 𝟎", 'callback_data' => 'premium'], ['text' => "𝟐 𝙉𝙀𝙓𝙏 𝙋𝘼𝙂𝙀 ⥭", 'callback_data' => 'premiump']],
                                 [['text' => '𝙃𝙊𝙈𝙀', 'callback_data' => 'gates']]
                             ]

]);

if ($cdata2 == "premium") {
   $premiumText = "𝙋𝘼𝙂𝙀 𝙉𝙊.↯ 𝟏

╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍ 
<b>× 𝙂𝘼𝙏𝙀𝙒𝘼𝙔 - 𝘽𝙍𝘼𝙄𝙉𝙏𝙍𝙀𝙀 3𝘿 𝙇𝙊𝙊𝙆𝙐𝙋</b>
<b>• 𝙐𝙎𝘼𝙂𝙀 - <code>/vbv cc|mm|yy|cvv</code></b>
<b>× 𝙍𝘼𝙉𝙆 - <code>SPECIAL GRADE</code></b>
<b>• 𝙎𝙏𝘼𝙏𝙐𝙎 - <code>𝙊𝙉 ✅</code></b>
╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍ 
<b>× 𝙂𝘼𝙏𝙀𝙒𝘼𝙔 - 𝘼𝙐𝙏𝙃𝙊𝙍𝙄𝙕𝙀 𝙉𝙀𝙏 0$</b>
<b>• 𝙐𝙎𝘼𝙂𝙀 - <code>/auz cc|mm|yy|cvv</code></b>
<b>× 𝙍𝘼𝙉𝙆 - <code>SPECIAL GRADE</code></b>
<b>• 𝙎𝙏𝘼𝙏𝙐𝙎 - <code>𝙊𝙉 ✅</code></b>
╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍ 
<b>× 𝙂𝘼𝙏𝙀𝙒𝘼𝙔 - 𝘽𝙍𝘼𝙄𝙉𝙏𝙍𝙀𝙀 𝘼𝙐𝙏𝙃 [𝙑2]</b>
<b>• 𝙐𝙎𝘼𝙂𝙀 - <code>/bu cc|mm|yy|cvv</code></b>
<b>× 𝙍𝘼𝙉𝙆 - <code>SPECIAL GRADE</code></b>
<b>• 𝙎𝙏𝘼𝙏𝙐𝙎 - <code>Low 🔅</code></b>
╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍ 

$bota";

    // Replace this with your video URL
    $videoUrl = "https://t.me/st_thunder/14";

    $inputMediaVideo = json_encode([
        'type' => 'video', 
        'media' => $videoUrl,
        'caption' => $premiumText,
        'parse_mode' => 'HTML'
    ]);

    file_get_contents("https://api.telegram.org/bot$botToken/editMessageMedia?chat_id=$cchatid2&message_id=$cmessage_id2&media=" . urlencode($inputMediaVideo) . "&reply_markup=" . urlencode($freeButton));
}




//// Auth Page 2 \\\\

$freeButton = json_encode([
'inline_keyboard' => [
                                 [['text' => "⥫ 𝘽𝘼𝘾𝙆 𝙋𝘼𝙂𝙀 𝟐", 'callback_data' => 'premium'], ['text' => "𝙀𝙉𝘿 𝙋𝘼𝙂𝙀⥭", 'callback_data' => 'gates']],
                                 [['text' => '𝙃𝙊𝙈𝙀', 'callback_data' => 'gates']]
                             ]

]);

if ($cdata2 == "premiump") {
   $premiumText = "𝙋𝘼𝙂𝙀 𝙉𝙊. ↯ 𝟐

╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍ 
<b>× 𝙂𝘼𝙏𝙀𝙒𝘼𝙔 - 𝙎𝙏𝙍𝙄𝙋𝙀 𝘼𝙐𝙏𝙃</b>
<b>• 𝙐𝙎𝘼𝙂𝙀 - <code>/ss cc|mm|yy|cvv</code></b>
<b>× 𝙍𝘼𝙉𝙆 - <code>SPECIAL GRADE</code></b>
<b>• 𝙎𝙏𝘼𝙏𝙐𝙎 - <code>𝙊𝙉 ✅</code></b>
╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍ 
<b>× 𝙂𝘼𝙏𝙀𝙒𝘼𝙔 - 𝙎𝙌𝙐𝘼𝙍𝙀 𝘼𝙐𝙏𝙃</b>
<b>• 𝙐𝙎𝘼𝙂𝙀 - <code>/sq cc|mm|yy|cvv</code></b>
<b>× 𝙍𝘼𝙉𝙆 - <code>SPECIAL GRADE</code></b>
<b>• 𝙎𝙏𝘼𝙏𝙐𝙎 - <code>𝙊𝙉 ✅</code></b>
╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍ 


$bota";

    // Replace this with your video URL
    $videoUrl = "https://t.me/st_thunder/14";

    $inputMediaVideo = json_encode([
        'type' => 'video', 
        'media' => $videoUrl,
        'caption' => $premiumText,
        'parse_mode' => 'HTML'
    ]);

    file_get_contents("https://api.telegram.org/bot$botToken/editMessageMedia?chat_id=$cchatid2&message_id=$cmessage_id2&media=" . urlencode($inputMediaVideo) . "&reply_markup=" . urlencode($freeButton));
}



//////=====End====\\\

//=======Premium and free end=====//




//==============TOOLS===============//
$toolKeyboard = json_encode([
    'inline_keyboard' => [
        [['text' => "𝙂𝘼𝙏𝙀𝙒𝘼𝙔𝙎", 'callback_data' => 'gates']], 
        [['text' => "𝙂𝙊 𝘽𝘼𝘾𝙆", 'callback_data' => 'back2']]
    ]
]);



if ($cdata2 == "herr") {

  $toolcmds = "<b>📍 𝑻𝒐𝒐𝒍𝒔 </b>
<b>
╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍ 
× 𝙐𝙎𝙀𝙍 𝙄𝙉𝙁𝙊 - <code>/info</code>
• 𝙐𝙎𝘼𝙂𝙀 - <code>/info</code>
× 𝙎𝙏𝘼𝙏𝙐𝙎 - <code>𝙊𝙉 ✅</code>
╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍ 
× 𝙄𝙋 𝙇𝙊𝙊𝙆𝙐𝙋 - <code>/ip</code>
• 𝙐𝙎𝘼𝙂𝙀 - <code>/ip 1.1.1.1</code>
× 𝙎𝙏𝘼𝙏𝙐𝙎 - <code>𝙊𝙉 ✅</code>
╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍ 
× 𝘽𝙄𝙉 𝙇𝙊𝙊𝙆𝙐𝙋 - <code>/bin</code>
• 𝙐𝙎𝘼𝙂𝙀 - <code>/bin 435546</code>
× 𝙎𝙏𝘼𝙏𝙐𝙎 - <code>𝙊𝙉 ✅</code>
╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍ 
× 𝘾𝘾 𝙂𝙀𝙉- <code>/gen</code>
• 𝙐𝙎𝘼𝙂𝙀 - <code>/gen 509786</code>
× 𝙎𝙏𝘼𝙏𝙐𝙎 - <code>𝙊𝙉 ✅</code>
╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍ 
× 𝙋𝙍𝙊𝙓𝙔 𝙂𝙀𝙉- https-socks4-socks5
• 𝙐𝙎𝘼𝙂𝙀- <code>/http</code>, <code>/socks4</code>, <code>/socks5</code>
× 𝙎𝙏𝘼𝙏𝙐𝙎 - <code>𝙊𝙉 ✅</code>  
╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍ 
× 𝘾𝙍𝙀𝘿𝙄𝙏𝙎 𝘾𝙃𝙀𝘾𝙆- <code>/credits</code>
• 𝙐𝙎𝘼𝙂𝙀 - <code>/credits check</code>
× 𝙎𝙏𝘼𝙏𝙐𝙎 - <code>𝙊𝙉 ✅</code>
╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍ 
× 𝙁𝘼𝙆𝙀 𝘼𝘿𝘿𝙍𝙀𝙎𝙎 - <code>/fake</code>
• 𝙐𝙎𝘼𝙂𝙀 - <code>/fake us</code>
× 𝙎𝙏𝘼𝙏𝙐𝙎 - <code>𝙊𝙉 ✅</code>
╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍ 
× 𝙎𝙆 𝘾𝙃𝙀𝘾𝙆𝙀𝙍 - <code>/sk</code>
• 𝙐𝙎𝘼𝙂𝙀 - <code>/sk sk_live</code>
× 𝙎𝙏𝘼𝙏𝙐𝙎 - <code>𝙊𝙉 ✅</code>
╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍ </b>

<b>|×| 𝘿𝙀𝙑 </b>- @stxthunder";

    // Change this to your video URL
    $videoUrl = "https://t.me/st_thunder/14";

    $inputMediaVideo = json_encode([
        'type' => 'video',
        'media' => $videoUrl,
        'caption' => $toolcmds,
        'parse_mode' => 'HTML'
    ]);

    file_get_contents("https://api.telegram.org/bot$botToken/editMessageMedia?chat_id=$cchatid2&message_id=$cmessage_id2&media=" . urlencode($inputMediaVideo) . "&reply_markup=" . urlencode($toolKeyboard));
}



//=============TOOLS END============//

//=============PRICE===============//




//=============PRICE END============//







//========finalize end=========//
$channel = json_encode([
    'inline_keyboard' => [
        [['text' => "𝙊𝙒𝙉𝙀𝙍", 'url' => "t.me/Stxthunder"], ['text' => "𝘾𝙃𝘼𝙉𝙉𝙀𝙇", 'url' => "https://t.me/statkxnetwork"]],
        [['text' => "𝙂𝙊 𝘽𝘼𝘾𝙆 ", 'callback_data' => 'back2']]
    ]
]);

if ($cdata2 == "channel") {
    $channelText = "𝙅𝙊𝙄𝙉 𝙈𝙔 𝘾𝙃𝘼𝙉𝙉𝙀𝙇𝙎 𝙁𝙊𝙍 𝘽𝙊𝙏 𝙐𝙋𝘿𝘼𝙏𝙀𝙎.";

    // Change this to your video URL
    $videoUrl = "https://t.me/ST_THUNDER/14";

    $inputMediaVideo = json_encode([
        'type' => 'video',
        'media' => $videoUrl,
        'caption' => $channelText,
        'parse_mode' => 'HTML'
    ]);

file_get_contents("https://api.telegram.org/bot$botToken/editMessageMedia?chat_id=$cchatid2&message_id=$cmessage_id2&media=" . urlencode($inputMediaVideo) . "&reply_markup=" . urlencode($channel));
}



//==========back and close========//
if ($cdata2 == "back2") {
    $backtxt = ("Welcome click /price to buy the Premium plan ✅");

    // Change this to your video url
    $backVideoUrl = "https://t.me/st_thunder/14"; 

    $keyboard2 = json_encode([
    'inline_keyboard' => [
        [
            ['text' => '𝙂𝘼𝙏𝙀𝙒𝘼𝙔𝙎', 'callback_data' => 'gates'],
            ['text' => '𝙏𝙊𝙊𝙇𝙎', 'callback_data' => 'herr'],
        ],
        [
            ['text' => 'Bot Updates', 'callback_data' => 'channel'],
        ],
    ]
]);


    $mediaArray = json_encode([
        'type' => 'video',
        'media' => $backVideoUrl,
        'caption' => $backtxt,
        'parse_mode' => 'HTML'
    ]);

    file_get_contents("https://api.telegram.org/bot$botToken/editMessageMedia?chat_id=$cchatid2&message_id=$cmessage_id2&media=" . urlencode($mediaArray) . "&reply_markup=$keyboard2");
}


//========back and close end=======//

//=========functions started=========//

///=====Function Sendphoto======//
function sendPhotox($chatId, $photo, $caption, $keyboard = null) {
    global $website;
    $url = $website."/sendPhoto?chat_id=".$chatId."&photo=".$photo."&caption=".$caption."&parse_mode=HTML";

    if ($keyboard != null) {
        $url .= "&reply_markup=".$keyboard;
    }

    return file_get_contents($url);
}

///======function sendVideo========///
function sendVideox($chatId, $videoURL, $caption, $keyboard) {
    global $botToken;
    $url = "https://api.telegram.org/bot$botToken/sendVideo?chat_id=$chatId&video=$videoURL&caption=" . urlencode($caption) . "&parse_mode=HTML&reply_markup=$keyboard";
    file_get_contents($url);
}



function reply_tox($chatId,$message_id,$keyboard,$message) {
    global $website;
    $url = $website."/sendMessage?chat_id=".$chatId."&text=".$message."&reply_to_message_id=".$message_id."&parse_mode=HTML&reply_markup=".$keyboard."";
    return file_get_contents($url);
}

function deleteM($chatId,$message_id){
    global $website;
    $url = $website."/deleteMessage?chat_id=".$chatId."&message_id=".$message_id."";
    file_get_contents($url);
}


function edit_message($chatId,$message,$message_id_1) {
  sendChatAction($chatId,"type");
   $url = $GLOBALS['website']."/editMessageText?chat_id=".$chatId."&text=".$message."&message_id=".$message_id."&parse_mode=HTML&disable_web_page_preview=True";
  file_get_contents($url);
}


function multiexplode($delimiters, $string)
{
  $one = str_replace($delimiters, $delimiters[0], $string);
  $two = explode($delimiters[0], $one);
  return $two;
}

function gibarray($message){
    return explode("\n", $message);
}

function sendMessage ($chatId, $message, $messageId){
  sendChatAction($chatId,"type");
$url = $GLOBALS['website']."/sendMessage?chat_id=".$chatId."&text=".$message."&parse_mode=html&disable_web_page_preview=True";
file_get_contents($url);

};
function delMessage ($chatId, $messageId){
$url = $GLOBALS['website']."/deleteMessage?chat_id=".$chatId."&message_id=".$messageId."";
file_get_contents($url);
};

function sendChatAction($chatId, $action)
{

$data = array("type" => "typing", "photo" => "upload_photo", "rcvideo" => "record_video", "video" => "upload_video", "rcvoice" => "record_voice", "voice" => "upload_voice", "doc" => "upload_document", "location" => "find_location", "rcvideonote" => "record_video_note", "uvideonote" => "upload_video_note");
$actiontype = $data["$action"];
$url = $GLOBALS['website']."/sendChatAction?chat_id=".$chatId."&action=".$actiontype."&parse_mode=HTML";
file_get_contents($url);

}

function answerCallbackQuery($data) {
    global $botToken; // Use the global bot token

    $url = "https://api.telegram.org/bot$botToken/answerCallbackQuery";

    $options = [
        'http' => [
            'header' => "Content-Type: application/x-www-form-urlencoded\r\n",
            'method' => 'POST',
            'content' => http_build_query($data)
        ]
    ];

    $context = stream_context_create($options);
    $result = file_get_contents($url, false, $context);

}

function bot($method, $datas = [])
{
    global $botToken;
    $url = "https://api.telegram.org/bot" . $botToken . "/" . $method;

    $ch = curl_init();
    curl_setopt_array($ch, [
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => json_encode($datas),
        CURLOPT_HTTPHEADER => ['Content-Type: application/json'],
    ]);

    $response = curl_exec($ch);
    $error = curl_error($ch);
    curl_close($ch);

    if ($error) {
        // Manejar el error de cURL
        return false;
    } else {
        // Decodificar la respuesta
        $result = json_decode($response, true);

        if ($result['ok']) {
            // La solicitud fue exitosa
            return $result['result'];
        } else {
            // Manejar el error de la API de Telegram
            return false;
        }
    }
}

//=========Functions end===========//


foreach (glob("tools/*.php") as $filename)
{
    include $filename;
} 

foreach (glob("function/*.php") as $filename)
{
    include $filename;
} 

foreach (glob("gates/*.php") as $filename)
{
    include $filename;
} 

foreach (glob("admin/*.php") as $filename)
{
    include $filename;
} 



//==========foreach end============//



?>

