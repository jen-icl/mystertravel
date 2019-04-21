<?php

require_once('config.php');

$trips_id = $_GET['trips_id'];

$end_trip_query = "SELECT t.`trips_name`, t.`region`,
    SUM(b.`price`) AS 'total_budget',
        (SELECT `entry`
        FROM `notes`
        WHERE `trips_id` = t.`id`
        ORDER BY `entry_date` DESC
        LIMIT 1)
        AS 'last_entry'
    FROM `trips` AS t
    JOIN `budget` AS b
        ON t.`id` = b.`trips_id`
    WHERE t.`id` = ?
";

$end_trip_statement = mysqli_prepare($conn, $end_trip_query);
mysqli_stmt_bind_param($end_trip_statement, 'd', $trips_id);
mysqli_stmt_execute($end_trip_statement);

$end_trip_result = mysqli_stmt_get_result($end_trip_statement);

if (!$end_trip_result) {
    throw new Exception(mysqli_error($conn));
}

if (mysqli_num_rows($end_trip_result) === 0) {
    $output['success'] = true;
    $output['tasks'] = 'No summary yet';
    print(json_encode($output));
    exit();
}

$row = mysqli_fetch_assoc($update_result);

$output['success'] = true;
$output['data'] = [
    'trips_name' => $row['trips_name'],
    'region' => $row['region'],
    'total_budget' => $row['total_budget'],
    'last_entry' => $row['last_entry']
];

print(json_encode($output));

?>