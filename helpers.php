<?php

session_start();

function redirect(string $path)
{
    header(header:"Location: $path");
    die();
}