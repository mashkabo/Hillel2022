<html>
<head></head>
<body>
<?php
$shoppinglist = array('bread', 'milk', 'coffee', 'sugar', 'potato', 'grape', 'dog food', 'water');
foreach ($shoppinglist as $row) {
    echo '<ul><li>' . implode('</li><li>', $shoppinglist) . '</li></ul>';
}
?>
</body>
</html>

