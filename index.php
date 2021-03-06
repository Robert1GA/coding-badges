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
    <link href="https://fonts.googleapis.com/css?family=Coda" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title><?php echo $json_data['user']['username']; ?>'s Badges</title>
  </head>
  <body>
    <header>
      <?php echo $json_data['user']['username']; ?>'s Badges
    </header>
    <div class="container">
      <div class="grid">
        <?php
          foreach ($courses_completed as $course) {
            echo '<div class="grid-cell">';
            echo '<img class="badge" src="' . $course["badge"] . '" />';
            echo '<a href="' . $course["url"] . '">' . $course["title"] . '</a>';
            echo '</div>';
          }
        ?>
      </div>
    </div>
  </body>
</html>
