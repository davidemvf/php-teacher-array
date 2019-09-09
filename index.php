<!-- Utilizzare questo array: https://pastebin.com/CkX3680A
Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. -->

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title></title>
    <?php

    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];
    ?>
  </head>
  <body>
    <div class="items">
      <div class="gray">
        <?php
          foreach ($db as $role => $people) {
            if ($role == "teachers") {
              echo  "<h1>".$role."</h1>";
              foreach ($people as $data) {
              $name = $data["name"];
              echo "<p>".$name."</p>";
              }
            };
          } ?>
      </div>
      <div class="green">
        <?php
          foreach ($db as $role => $people) {
            if ($role == "pm") {
              echo  "<h1>".$role."</h1>";
              foreach ($people as $data) {
              $name = $data["name"];
              echo "<p>".$name."</p>";
              }
            };
          } ?>
      </div>
    </div>
</html>
