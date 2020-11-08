<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>assign_two</title>
  </head>
  <body>
    <?php
        // echo "<h1>Hello world</h1>";
        // echo "<br>";
        // echo "<br>";
        class User{

          public $name;
          public $username;
          public $email;

          function addFriend($name){
            echo "$name" , " added a friend. ";
            // echo "<br>";
          }
          function postStatus($name){
            echo "$name" . " posted a status. <br>";
          }
        }
        $example = new User();
        echo $example->addFriend('<h3>Shailyn Joyce P Sa-an</h3s>');
        echo "<br>";
        echo $example->postStatus('Shailyn Joyce P. Sa-an');
     ?>

  </body>
</html>
