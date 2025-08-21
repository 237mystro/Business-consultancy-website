<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./schedulling.css">
    <script src="./schedulling.js" defer></script>
</head>
<!-- scduling body style -->
 
<body>
    <div class="calender-container">
        <h2>Schedule your lessons</h2>
        <div class="calender">
            <div class="month-nav">
                <button class="prev-month" id="prev-month">Prev</button>
                <h3 id="month-year"></h3>
                <button id="next-month">Next</button>
            </div>
            <div class="weekdays">
                <div>sunday</div>
                <div>monday</div>
                <div>tuesday</div>
                <div>wednesday</div>
                <div>thursday</div>
                <div>friday</div>
                <div>saturday</div>
            </div>
            <div id="calender-days"></div>
        </div>
        <div id="schedule-modal" class="schedule-modal">
            <input id="schedule-input" type="text" placeholder="enter your event">
            <button id="schedule-confirm">Confirm</button>
            <button id="schedule-cancel">Cancel</button>
        </div>
        <div id="event-details">
        </div>
    </div>
</body>
</html>