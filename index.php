<?php

//ex.1:
$userProfile = [
    "name"    => null,
    "surname" => null,
    "age"     => null,
    "gender"  => null,
];

foreach ($userProfile as $param => $value) {
    echo $param . " " . $value . '<br />';
}

echo "<hr />";

function changeUserData(&$user) {
    $user["name"] = "Natalie";
    $user["surname"] = "Tbilieli";
    $user["age"] = 24;
    $user["gender"] = "female";
}

changeUserData($userProfile);
foreach ($userProfile as $param => $value) {
    echo $param . ":" . " " . $value . '<br />';
}

//ex.2:
/*
$array = [1, 2, 3, null, 'hello', ['Yo'], true, 3.4, 10, false];

function countSum($arr) {
    $sum = 0;
    foreach ($arr as $elem) {
        if (is_int($elem) === false) {
            $elem = 0;
        }
        $sum += $elem;
    }
    return $sum;
}

echo countSum($array);
*/

//    ex.3:
/*
function dayOfTheWeek($day) {
    if ($day === 1) {
        echo "Hello, today is Monday.";
    } else if ($day === 2) {
        echo "Hello, today is Tuesday.";
    } else if ($day === 3) {
        echo "Hello, today is Wednesday.";
    } else if ($day === 4) {
        echo "Hello, today is Thursday.";
    } else if ($day === 5) {
        echo "Hello, today is Friday.";
    } else if ($day === 6) {
        echo "Hello, today is Saturday.";
    } else if ($day === 7) {
        echo "Hello, today is Sunday.";
    } else if ($day > 7 || $day === 0) {
        echo "There are only 7 days in a week!";
    } else {
        echo "Only numbers, please.";
    }
}

dayOfTheWeek(0);
dayOfTheWeek(1);
dayOfTheWeek(10);
dayOfTheWeek(null);
*/

//ex.4:
/*
function dayOfTheWeek($day) {
    switch ($day) {
        case 1:
            echo "Hello, today is Monday.";
            break;
        case 2:
            echo "Hello, today is Tuesday.";
            break;
        case 3:
            echo "Hello, today is Wednesday.";
            break;
        case 4:
            echo "Hello, today is Thursday.";
            break;
        case 5:
            echo "Hello, today is Friday.";
            break;
        case 6:
            echo "Hello, today is Saturday.";
            break;
        case 7:
            echo "Hello, today is Sunday.";
            break;
        default:
            echo "There are only 7 days in a week!";
    }
}

dayOfTheWeek(0);
dayOfTheWeek(1);
dayOfTheWeek(10);
dayOfTheWeek(null);
*/

/*
function dayOfTheWeek($day) {
    $week = [
        1 => 'Monday',
        2 => 'Tuesday',
        3 => 'Wednesday',
        4 => 'Thursday',
        5 => 'Friday',
        6 => 'Saturday',
        7 => 'Sunday',
    ];

    if (array_key_exists($day, $week)) {
        return "Hello, today is $week[$day]";
    } else {
        return "There are only 7 days in a week!";
    }
};

echo dayOfTheWeek(4);
echo dayOfTheWeek(8);
*/

//ex.5:
/*
function countFactorial($num) {
    return $num ? $num * countFactorial($num - 1) : 1;
}

echo countFactorial(7);
*/