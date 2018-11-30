<?php
    if (isset($_POST['jsonData'])) {
        $jsonData = $_POST['jsonData'];
        file_put_contents('assets/scheduler/events.json', $jsonData);
    }
?>