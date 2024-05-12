<?php
session_start();
session_unset();
session_destroy();
include('../Templates/SharedConfig.php');
include($ConnectContrl);
header('Location: ' . $LoginView);
