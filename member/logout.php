<?php
session_start();
if(session_destroy()) {
    header("Location: ../Index/index-L.php");
}