<?
    $destination = $_GET['site'];
    switch ($destination) {
        case 'fact':
            $url = 'https://fact.digital/';
            break;
        case '1c':
            $url = 'https://www.1c-bitrix.ru/';
    }
    setcookie('last_visit_page', $destination, time() + 3600 * 24 * 30, '/');
    header('Location: ' . $url);