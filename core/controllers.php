<?php
function homeController()
{
    $shops = [
        "budaors" => [
            "phone" => "+36709044891",
            "name" => "Budaörs",
            "shop-name" => "Budaörsön",
            "cim" => "Budaörs, 2040, Sport u. 2-4",
            "email" => "fullgsmbudaors@gmail.com"
        ],
        "soroksar" => [
            "phone" => "+36706314596",
            "name" => "Soroksár",
            "shop-name" => "Soroksáron",
            "cim" => "Budapest, 1239, Bevásárló u. 2",
            "email" => "fullgsmsoroksar@gmail.com"
        ],
        "maglod" => [
            "phone" => "+36706314648",
            "name" => "Maglód",
            "shop-name" => "Maglódon",
            "cim" => "Maglód, 2234, Eszterházy János u. 1",
            "email" => "fullgsmmaglod@gmail.conm"
        ],
    ];

    if (array_key_exists("shop", $_SESSION)) {
        $shop = $shops[$_SESSION["shop"]];
    } else {
        return [
            "redirect:/shop", []
        ];
    }

    return [
        "home",
        [
            "title" => $shop["name"],
            "shop" => $shop
        ]
    ];
}


// shop selection section -------------

function shopController()
{
    return [
        "shop", [
            "title" => "Válassz üzleteink közül"
        ]
    ];
}

function shopParamsController($params)
{
    $_SESSION["shop"] = $params["shop"];
    return [
        "redirect:/",
        []
    ];
}


function budaorsSessionController()
{
    $shop_session  = $_POST['event'];
    $_SESSION["shop"] = $shop_session;
    return [
        "redirect:/",
        []
    ];
}

function maglodSessionController()
{
    $shop_session  = $_POST['event'];
    $_SESSION["shop"] = $shop_session;
    return [
        "redirect:/",
        []
    ];
}

function soroksarSessionController()
{
    $shop_session  = $_POST['event'];
    $_SESSION["shop"] = $shop_session;
    return [
        "redirect:/",
        []
    ];
}


function sendMessageEditController()
{
    $userName = $_POST['userName'];
    $userEmail = $_POST['userEmail'];
    $userSubject = $_POST['userSubject'];
    $userMessage = $_POST['userMessage'];
    $connention = getConnection();
    sendMessage($connention, $userName, $userEmail, $userSubject, $userMessage);
    return [
        "redirect:/",
        []
    ];
}


function notFoundController()
{
    return [
        "404", [
            "title" => "A keresett oldal nem található."
        ]
    ];
}
