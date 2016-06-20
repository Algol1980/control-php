<?php
/**
 * Created by PhpStorm.
 * User: design interioir
 * Date: 20.06.2016
 * Time: 19:24
 */


if (isset($_POST['task2']) && !empty($_POST['page'])) {
    $pattern = '/<img src="(.*)".*?>/';
    if ($page = file_get_contents($_POST['page'])) {
        preg_match_all($pattern, $page, $matches);
    }

}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Task-2</title>
</head>
<body>
<form action="" method="post">
    <label for="text">Insert page:</label>
    <input type="text" name="page"/>
    <input type="submit" name="task2">
</form>
<?php if (isset($matches[1])): ?>
    <?php foreach ($matches[1] as $image): ?>\
        <?php if (strpos($image, 'http') != 0){?>
            <img src="<?php echo $_POST['page'] . $image; ?>" alt=""/>
        <?php }
        else {?>
            <img src="<?php echo $image ?>" alt=""/>
        <?php }?>
    <?php endforeach;
endif; ?>
</body>
</html>
