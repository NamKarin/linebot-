 <?php
  

function send_LINE($msg){
 $access_token = 'HfnSmBlVMunz39ggqzJa69ySgb3kP3kpZyZWdXQjYhqP1WLdStU6RKHtq2Jw+jqyaiHpY+G3mVo0C5tWGE/OIHcgY/8cNfaael+FJfoAyatrd8sv/dYN4hFsu5QPalOpd+VGv1fAYzBzjiipBhQrvgdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'a3eb980bb4889982747aebed0e9feac4',
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n"; 
}

?>
