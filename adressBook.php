<?php

$fileName = "book.json";

if (file_exists($fileName)) {
  $person = json_decode(file_get_contents($fileName), true);
} else {
  echo "Файл недоступен";
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <h1>Адресная Книга</h1>
  <table border="1" width="100%">
    <tr>
      <th>Имя</th>
      <th>Фамилия</th>
      <th>Адрес</th>
      <th>Номер телефона</th>
    </tr>
    <?php foreach ($person as $item) { ?>
    <tr>
      <td><?php echo $item['firstName'];?></td>
      <td><?php echo $item['lastName'];?></td>
      <td><?php echo $item['address'];?></td>
      <td><?php echo $item['phoneNumber'];?></td>
    </tr>
    <?php } ?>
    </table>
  </body>
</html>
