<?php
echo "Sample application for CICD<br>";
$ENV = getenv("ENV");
echo "Version: 0.0.1<br>";
echo "Environment:" . $ENV . "<br>";
?>