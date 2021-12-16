<?
    const DB_HOST = 'localhost';
    const DB_USER = 'vadimb';
    const DB_PASSWORD = 'root4321';
    const DB_NAME = 'bogdanovich';

    $db = new PDO(
        'mysql:host=' . DB_HOST. ';dbname=' . DB_NAME,
        DB_USER,
        DB_PASSWORD
    );