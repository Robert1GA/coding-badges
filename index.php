<?php
  $data = file_get_contents('https://www.codeschool.com/users/reggier213.json');
  $json_data = json_decode($data, true);
  // var_dump($json_data['courses']['completed']);
  $courses_completed = $json_data['courses']['completed'];
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php echo $json_data['user']['username']; ?>'s Badges</title>
  </head>
  <body>
    <?php
      foreach ($courses_completed as $course) {
        echo '<div>';
        echo '<img src="' . $course["badge"] . '" />';
        echo '<a href="' . $course["url"] . '">' . $course["title"] . '</a>';
        echo '</div>';
      }
    ?>
  </body>
</html>
