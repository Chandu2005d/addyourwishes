<!DOCTYPE html>
<html>
<body>
    <h1>Location Data</h1>
    <p id="location"></p>

    <script>
        // Parse the query parameters to get lat and long
        const params = new URLSearchParams(window.location.search);
        const lat = params.get("lat");
        const long = params.get("long");

        if (lat && long) {
            document.getElementById("location").innerText = `Latitude: ${lat}, Longitude: ${long}`;
        } else {
            document.getElementById("location").innerText = "No location data received.";
        }
    </script>
</body>
</html>
