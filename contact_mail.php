<?php

  $contact_name = $_POST['contact_name'];
  $contact_email = $_POST['contact_email'];
  $contact_subject = $_POST['contact_subject'];
  $contact_message = $_POST['contact_message'];

  $contact_mailheader = "From: " . $contact_name . "<" . $contact_email . ">\r\n";

  $recipient = "ajju6533@gmail.com";

  mail($recipient, $contact_subject, $contact_message, $contact_mailheader) or die("Error!");

  echo '
    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      <style>
        body {
          display: flex;
          justify-content: center;
          align-items: center;
        }
        .container {
          border: 2px solid black;
          padding: 30px;
          border-radius: 20px;
        }
        button {
          width: 90px;
          height: 40px;
          border-radius: 5px;
        }
        button:hover {
          background: green;
          color: white;
          
        }
      </style>
    </head>
    <body>
      <div class="container">
          <center><h1 style= >Thank you for contacting with us. We will get back to you in a while.</h1></center>
          <center><a href="index.php"><button> Go Back </button></a></center>
      </div>
    </body>
    </html>
  ';

?>