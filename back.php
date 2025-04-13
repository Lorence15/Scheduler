<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $event = $_POST['event'];
    $date = $_POST['eventdate'];
    $start_time = $_POST['time1'];
    $end_time = $_POST['time2'];
    $venue = $_POST['venue'];
    $organizer = $_POST['organizer'];
    $contact = $_POST['contact'];
    $delegates = $_POST['delegates'];

    $date = date("F-Y-d", strtotime($date));
    $start_time = date("H:i:s", strtotime($start_time));
    $end_time = date("H:i:s", strtotime($end_time));
    $event_data = "Event: $event | Date: $date | Time: $start_time - $end_time | Venue: $venue | Organizer: $organizer | Contact: $contact | Delegates: $delegates\n";
    file_put_contents("events.txt", $event_data, FILE_APPEND);
    header("Location: details.php");

    exit();
}