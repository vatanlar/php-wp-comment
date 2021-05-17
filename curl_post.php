<?php

function post_comment(){
    $data['comment'] = 'Çok güzel bir içerik olmuş. Teşekkür ederim.';
    $data['author'] = 'Mehmet Poster';
    $data['email'] = "mymail@gmail.com";
    $data['url'] = "https://mywebsite.com";
    $data['wp-comment-cookies-consent'] = "1";

    $data['comment_parent'] = "0";
    $data['comment_post_ID'] = "17201";

    $ch = curl_init('https://www.remotewp.com/wp-comments-post.php');
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $server_output = curl_exec($ch);
    curl_close ($ch);

    var_dump($server_output);
}

// post-17201 
