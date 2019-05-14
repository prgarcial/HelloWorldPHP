<?php
echo 'Hello World<br>';
$host = `cat /proc/sys/kernel/hostname`;
echo 'Welcome to <b>' . $host . '</b>';
