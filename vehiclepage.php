<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taxi Reservation System</title>
    <link rel="stylesheet" href="styles/vehiclepage.css">
</head>

<body>
    <header>
        <h1>CABWAVE</h1>
    </header>
    <section id="vehicle-search">
        <h2>Search for a Vehicle</h2>
        <form id="search-form">
            <label for="pickup-location">Pickup Location:</label>
            <input type="text" id="pickup-location" required>
            <label for="dropoff-location">Dropoff Location:</label>
            <input type="text" id="dropoff-location" required>
            <button type="submit">Search</button>
        </form>
        <div id="search-results">
            <!-- Search results will be displayed here -->
        </div>
    </section>
    <section id="reservation-form">
        <h2>Reservation Details</h2>
        <form id="reservation-details-form">
            <label for="vehicle-type">Select a Vehicle:</label>
            <select id="vehicle-type" required>
                <option value="economy">Economy</option>
                <option value="standard">Standard</option>
                <option value="luxury">Luxury</option>
            </select>
            <label for="pickup-date">Pickup Date:</label>
            <input type="date" id="pickup-date" required>
            <label for="pickup-time">Pickup Time:</label>
            <input type="time" id="pickup-time" required>
            <button type="submit">Reserve</button>
        </form>
    </section>
    <script src="js/vehiclepage.js"></script>
</body>

</html>