<?php

    $name = $_POST['name'];

    $email = $_POST['email'];

    $message = $_POST['message'];

    $from = 'From: Website contact form';

    $to = 'tyler@plihcik.com';

    $subject = 'New Contact Submission From Website';

    $body = "From: $name\n Email: $email\n Message:\n $message";
?>

<?php

    if( $_POST['submit'] )
    {
        if( mail ( $to, $subject, $body, $from ) )
        {
            echo '<p>Thanks for reaching out, I look forward to talking to you!</p>';
        }

        else
        {
            echo '<p>Something went wrong, please try again.</p>';
        }
    }
    
?>