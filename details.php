<?php
include_once 'back.php';
?>

<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
 
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />


        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <link rel="stylesheet" href="details.css">
    </head>

    <body>
        <header>

        </header>
        <main>
        <div class="container-fluid mt-5 mb-5 w-50 text-center w-75">
            <div class="card shadow">
                <div class="row">
                    <div class="col-md-12">
                    <div class="card-header bg-success text-white">
                    <h4 class="text-center mb-0">Scheduled Events</h4>
                </div>
                <div class="card-body">
                    <?php
                    if (file_exists("events.txt")) {
                        $events = file("events.txt");
                        if (count($events) > 0) {
                            echo '<div class="table-responsive">';
                            echo '<table class="table table-hover table-striped">';
                            echo '<thead class="table-success">';
                            echo '<tr>';
                            echo '<th>Event</th>';
                            echo '<th>Date</th>';
                            echo '<th>Time</th>';
                            echo '<th>Venue</th>';
                            echo '<th>Organizer</th>';
                            echo '<th>Contact</th>';
                            echo '<th>Delegates</th>';
                            echo '</tr>';
                            echo '</thead>';
                            echo '<tbody>';
                            
                            foreach ($events as $event) {
                                $parts = explode(" | ", $event);
                                echo '<tr>';
                                foreach ($parts as $part) {
                                    $value = explode(": ", $part)[1];
                                    echo "<td>$value</td>";
                                }
                                echo '</tr>';
                            }
                            
                            echo '</tbody>';
                            echo '</table>';
                            echo '</div>';
                        } else {
                            echo '<div class="alert alert-info">No events scheduled yet.</div>';
                        }
                    } else {
                        echo '<div class="alert alert-info">No events file found.</div>';
                    }
                    ?>
                    <div class="d-flex justify-content-center">
                    <hr class="w-50">
                    </div>
                    <a href="index.php">
                        <button type="button" class="btn btn-success my-3 w-25">Schedule an Event</button>
                    </a>
                </div>
                    </div>
                </div>
            </div>
        </div>
        </main>
        <footer>
       
        </footer>
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
