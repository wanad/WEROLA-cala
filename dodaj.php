<?php require("check.php"); ?>
<?php

    session_start();

    function redirect($url, $permanent = false)
    {
        if (headers_sent() === false)
        {
            header('Location: ' . $url, true, ($permanent === true) ? 301 : 302);
            setFlash('Dodano Refleksjê');
        }

        exit();
    }

    function setFlash($message)
    {
        $_SESSION['message'] = $message;
    }

    function sendApiEmail($title, $reflection)
    {
        $url = 'https://mandrillapp.com/api/1.0/messages/send.json';
        $params = [
            'message' => array(
                'subject' => $title,
                'text' => $reflection,
                'html' => '<p>'.$reflection.'</p>',
                'from_email' => 'weronika-0@wp.pl',
                'to' => array(
                    array(
                        'email' => 'werdus2237@gmail.com',
                        'name' => 'pb'
                    )
                )
            )
        ];

        $params['key'] = 'HEpZLrPrRBEa7W9fLAJKeQ';
        $params = json_encode($params);
        $ch = curl_init(); 

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $params);

        $head = curl_exec($ch); 
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE); 
        curl_close($ch); 
    }

    $ref = $_SERVER['HTTP_REFERER'];
    $to      = 'weronika-0@wp.pl';
    $subject = 'the subject';
    $message = 'hello';
    $headers = 'From: webmaster@example.com' . "\r\n" .
        'Reply-To: webmaster@example.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);

    sendApiEmail($_POST['title'], $_POST['reflection']);

    $con = mysqli_connect("10.254.94.2", "s173137", "8UxHFRjU", "s173137");// Check connection

    if (mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    mysqli_query(
        $con,
        sprintf(
            "INSERT INTO Reflection (title, reflection) VALUES ('%s', '%s')",
            $_POST['title'],
            $_POST['reflection']
        )
    );

    mysqli_close($con);
    redirect($ref, false);
?>



