<?php

function generate_calendar($month, $year) {
    $firstDayOfMonth = strtotime("$year-$month-01");
    $daysInMonth = date('t', $firstDayOfMonth);
    $startDay = date('N', $firstDayOfMonth);
    
    echo "<h2>" . date('F Y', $firstDayOfMonth) . "</h2>";
    echo "<table border='1'>";
    echo "<tr><th>Mon</th><th>Tue</th><th>Wed</th><th>Thu</th><th>Fri</th><th>Sat</th><th>Sun</th></tr>";

    echo "<tr>";
    $day = 1;
    for ($i = 1; $i < $startDay; $i++) {
        echo "<td></td>";
    }

    while ($day <= $daysInMonth) {
        for ($i = $startDay; $i <= 7 && $day <= $daysInMonth; $i++) {
            echo "<td>$day</td>";
            $day++;
        }
        if ($i < 8) {
            for ($i; $i <= 7; $i++) {
                echo "<td></td>";
            }
        }
        if ($day <= $daysInMonth) {
            echo "</tr><tr>";
        }
        $startDay = 1;
    }

    echo "</tr>";
    echo "</table>";
}

// Get the current month and year
$currentMonth = date('m');
$currentYear = date('Y');


function dd($value) {
    echo("<pre>");
var_dump($value);
echo("</pre>");
die();
}