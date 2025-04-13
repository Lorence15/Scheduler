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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <main class="bg-light mt-5">
        <div class="container mt-5 border border-success bg-success shadow w-50 rounded">
        <form action="details.php" method="POST" class="my-5">
            <h5 class="text-center text-white">Scheduling Form</h5>
        <div class="row">
            <div class="col-md-6">
            <label for="event" class="mt-5"><i class="bi bi-bookmark-star" style="color:orange"> </i>Event Name</label>
            <input type="text" name="event" id="event" class="form-control" required>
            <label for="time1" class="mt-3"><i class="bi bi-stopwatch" style="color:#ffe066"> </i>Enter Start Time</label>
            <input type="time" name="time1" id="time1" class="form-control" required>
            </div>
            <div class="col-md-6">
                <label for="date1" class="mt-5"><i class="bi bi-calendar-check" style="color:yellow"> </i>Date of Event</label>
                <input type="date" name="eventdate" id="date1" class="form-control mb-3" required>
                <label for="time2" class="mt-3"><i class="bi bi-stopwatch" style="color:#ffe066"> </i>Enter End Time</label>
                <input type="time" name="time2" id="time2" class="form-control" required>
            </div>
        </div>
        <div class="row">
            <hr class="my-5" style="color:white">
        <div class="col-md-6">
        <label for="venue"><i class="bi bi-shop" style="color:#ffe066"> </i>Venue</label>
        <select name="venue" id="venue" class="form-select mb-3" required>
            <option value="Amphitheater">Amphitheater</option>
            <option value="Covered Court">Covered Court</option>
            <option value="Football Court">Football Court</option>
            <option value="Tennis Court">Tennis Court</option>
            <option value="Gymnasium">Gymnasium</option>
            <option value="Main Lobby">Main Lobby</option>
            <option value="Fr. Cuenca Hall">Fr. Cuenca Hall</option>
            <option value="Little Theater">Little Theater</option>
            <option value="Rich Nest">Rich Nest</option>
        </select>
        <label for="organizer"><i class="bi bi-person-square" style="color:#ffe066"> </i>Name of Organizer</label>
        <input type="text" name="organizer" id="organizer" class="form-control mb-3" required>
        </div>
        <div class="col-md-6">
        <label for="contact"><i class="bi bi-telephone-plus" style="color:#ffe066"> </i>Contact No.</label>
        <input type="tel" name="contact" id="contact" class="form-control mb-3" required>
            <label for="delegates"><i class="bi bi-people" style="color:#ffe066"> </i>No. of Delegates</label>
            <input type="number" name="delegates" id="delegates" class="form-control mb-3" required><br>
        </div>
        </div>
        <hr class="my-3" style="color:white">
        <div class="d-flex justify-content-center">
            <button type="submit" value="submit" class="btn btn-danger w-25 mt-3"><i class="bi bi-check"> </i>Schedule</button>
        </div>
        <div class="d-flex justify-content-center">
        <hr class="w-50" style="color:white">
        </div>

        </form>
        <div class="d-flex justify-content-center">
        <a href="details.php"><i class="bi bi-arrow-right-circle"> </i>View Scheduled Events</a>
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
