<?php


session_start();

//Flash message helper

function isLoggedIn()
{
    if (isset($_SESSION['username'])) {
        return true;
    }
    return false;
}
