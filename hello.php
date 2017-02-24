<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Hello</title>
</head>

<body>

Hello... <br>
<hr>
<?php echo file_get_contents('edit/data.txt'); ?>
<hr>
End...
<hr><hr>
Part 2<br>
<?php echo file_get_contents('edithours/hours.txt'); ?>
End... Part 2<br>
<hr>
Part 3..<br>
<?php echo file_get_contents('edithello/welcome.txt'); ?>
End .. part 3<br>
</body>
</html>
