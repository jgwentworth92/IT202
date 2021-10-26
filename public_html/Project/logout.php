<?php
session_start();
require(__DIR__ . "/../../lib/functions.php");
reset_session();
session_start();

flash("Successfully logged out", "success");
header("Location: login.php");
