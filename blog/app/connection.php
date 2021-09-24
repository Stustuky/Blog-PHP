<?php

function getConnection(): PDO
{
    return new PDO(
        'mysql:host=localhost;dbname=stustuky_blog;charset=UTF8', 
        'root', 
        '', [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    );
}
