<?php
define('DATABASE_HOST','localhost');
define('DATABASE_USERNAME','root');
define('DATABASE_PASSWORD','');
define('DATABASE_DB','school');

mysql_connect(DATABASE_HOST,DATABASE_USERNAME,DATABASE_PASSWORD) or die('Connect DB Error');
mysql_select_db(DATABASE_DB) or die('DB Error');
mysql_query('SET NAMES "utf8"');

?>
