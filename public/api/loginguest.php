<?php
$guest_id_query = "INSERT INTO `users`
        SET `is_guest` = 1
";

$guest_id_result = mysqli_query($conn, $guest_id_query);

if (!$guest_id_result) {
    throw new Exception(mysqli_error($conn));
}

if (mysqli_affected_rows($conn) !== 1) {
    throw new Exception('Unable to add guest');
}

$users_id = mysqli_insert_id($conn);

$connect_query = "INSERT INTO
        `user_connections`
    SET
        `token` = '$token',
        `users_id` = $users_id,
        `created` = NOW(),
        `ip_address` = '{$_SERVER['REMOTE_ADDR']}'
    ";

$connect_result = mysqli_query($conn, $connect_query);

if (!$connect_result) {
    throw new Exception(mysqli_error($conn));
}

if (mysqli_affected_rows($conn) !== 1) {
    throw new Exception('Cannot log in: connection not saved.');
}

?>