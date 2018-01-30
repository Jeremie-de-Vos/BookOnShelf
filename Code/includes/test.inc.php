<!DOCTYPE html>
<html>
  <head>
    <title>Test</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
  </head>
  <body>

    <div id="content">
      <?php   include "php/books.php"; ?>
      <div id="books_count">
        <div id="book">
          <img src="images/Book.jpg" alt="Book img">
          <p>Name:
          </br> Author:
        </br> Status: </p>
        <?php //if (text === !already borrowed) ?>
        <button type="status" name="Borrow"></button>
        <?php //else ?>
        <button type="status" disabled>Click me</button>
        </div>
      </div>
    </div>
  </body>
</html>


if ($row['status'] === 'already borrowed') {
  <button type="status" name="Borrow" disabled></button>
}else {
  <button type="status" name="Borrow"></button>
}
