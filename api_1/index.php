<html>
<head><meta charset="utf-8" />
  <body>
<?php
require_once 'config.php';

mysql_query ('INSERT INTO students
            (name,lastname)
            VALUES
            ("นายดำ", "นะ")  ');
$query= mysql_query('SELECT id, name, lastname FROM students')or die ('error');
while($arr = mysql_fetch_assoc($query))
{
  echo $arr['id'];
  echo '';
  echo $arr['name'];
  echo '';
  echo $arr['lastname'];
  echo '<br>';
}
?>
</body>
</html>


