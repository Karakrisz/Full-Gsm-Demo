<?php

function logMessage($level, $message)
{
    $backtrace = debug_backtrace(DEBUG_BACKTRACE_PROVIDE_OBJECT, 2)[0];
    $file = fopen('app.log', "a");
    fwrite($file, "[$level] " . date(DATE_ISO8601) . " " . $backtrace["file"] . ":" . $backtrace["line"] .
        " $message" . PHP_EOL);
    fclose($file);
}

function getConnection()
{
    global $config;
    $connection = mysqli_connect($config['DB_HOST'], $config['DB_USER'], $config['DB_PASS'], $config['DB_NAME']);
    if (!$connection) {
        logMessage('ERROR', 'Connection error:' . mysqli_connect_error());
        errorPage();
    }
    return $connection;
}

$routes = [];

function route($action, $callable, $method = 'GET')
{
    global $routes;
    $pattern = "%^$action$%";
    $routes[strtoupper($method)][$pattern] = $callable;
}

function dispatch($action, $notFound)
{
    global $routes;
    $method = $_SERVER["REQUEST_METHOD"];
    if (array_key_exists($method, $routes)) {
        foreach ($routes[$method] as $pattern => $callable) {
            if (preg_match($pattern, $action, $matches)) {
                return $callable($matches);
            }
        }
    }
    return $notFound();
}

function esc($string)
{
    echo htmlspecialchars($string);
}

function errorPage()
{
    include "tamplates/error.php";
    die();
}


function sendMessage($connention, $userName, $userEmail, $userSubject, $userMessage)
{
    if ($statement = mysqli_prepare($connention, 'INSERT INTO your_message_to (userName, userEmail, userSubject, userMessage) VALUES (?,?,?,?)')) {
        mysqli_stmt_bind_param($statement, 'ssss', $userName, $userEmail, $userSubject, $userMessage);
        mysqli_stmt_execute($statement);
        mysqli_stmt_close($statement);
    } else {
        logMessage('ERROR', 'Query error:' . mysqli_error($connention));
        errorPage();
    }
}



