</body>

<script type="text/javascript" src="/public/js/main.bundle.js"></script>
<script>
    function initMap() {
        map = new google.maps.Map(document.getElementById("map"), {
            center: { lat: -34.397, lng: 150.644 },
            zoom: 8,
        });
    }
</script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC-VNhhDiJrDxB0gZhMz3vCkmeO-aTKcLM&callback=initMap"></script>

</html>