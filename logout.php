<?php
session_start();
session_destroy();
echo 'je bent uitgelogd';
echo "terug naar <a href='menu.php'> hoofdmenu</a>
<br> <a href='index.php'>inloggen</a>";

