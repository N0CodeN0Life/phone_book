<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="phone"> 
    
  <div class="add">

    <h1>Добавить номер</h1>

    <form action="add_contact.php" method="post">
        <input type="text" id="name" name="name" placeholder="Имя" required><br><br>
        <input type="tel" id="phone" name="phone" placeholder="Телефон" required><br><br>
        <button type="submit" class="butt">Добавить</button>
    </form>

  </div>

  <div class="echo">

    <h1>Список контактов</h1>

        <?php
        $contacts = json_decode(file_get_contents('contacts.json'), true);

        foreach ($contacts as $contact) {
        echo "<div class='num'>{$contact['name']}: {$contact['phone']} <a class='btn' href='delete_contact.php?id={$contact['id']}'>Удалить</a></div>";
        }
        ?>
  </div>
</div>

</body>
</html>
