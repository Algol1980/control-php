<?php
/**
 * Created by PhpStorm.
 * User: design interioir
 * Date: 20.06.2016
 * Time: 19:01
 */

if (isset($_POST['task1']) && !empty($_POST['text'])) {
    $patterns = ['/\s{2,}/' => ' ', '/[\.\!\?]\s/' => '.  '];
    $str = preg_replace(array_keys($patterns), array_values($patterns), $_POST['text']);
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Task-1</title>
</head>
<body>
<form action="" method="post">
    <label for="text">Insert text:</label>
    <textarea name="text" id="" cols="30" rows="10"></textarea>
    <input type="submit" name="task1">
</form>
<p><?php echo isset($str) ? $str : ''; ?></p>
</body>
</html>
