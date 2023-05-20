<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <style>
        /* CSS untuk slide menu */
        .slide-menu {
            width: 200px;
            height: 100%;
            background-color: #f2f2f2;
            position: fixed;
            top: 0;
            left: 0;
            overflow-x: hidden;
            padding-top: 20px;
        }

        .slide-menu a {
            display: block;
            padding: 10px;
            color: #000;
            text-decoration: none;
        }

        .slide-menu a:hover {
            background-color: #ddd;
        }

        .content {
            margin-left: 220px; /* Lebar slide menu + jarak */
            padding: 20px;
        }

        #map {
            height: 400px;
        }
    </style>
    <!-- Script untuk inisialisasi dan pengaturan slide menu -->
    <script>
        function openSlideMenu() {
            document.getElementById('slide-menu').style.width = '200px';
            document.getElementById('content').style.marginLeft = '220px';
        }

        function closeSlideMenu() {
            document.getElementById('slide-menu').style.width = '0';
            document.getElementById('content').style.marginLeft = '20px';
        }
    </script>
    <!-- Script untuk pengaturan tampilan peta -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCCfBvEKtf9NGNJK0PBuxWFRcu3yiTkp-k"></script>
    <script>
        function initMap() {
            var location = { lat: -6.1513274514330645, lng: 106.82280959294752 }; // Ganti dengan koordinat lokasi yang diinginkan
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 10,
                center: location
            });
            var marker = new google.maps.Marker({
                position: location,
                map: map
            });
        }
    </script>
</head>
<body>
    <!-- Slide Menu -->
    <div id="slide-menu" class="slide-menu">
        <a href="#" onclick="closeSlideMenu()">Close</a>
        <a href="#home">Home</a>
        <a href="abudemen">Abudemen</a>
        <a href="#about">About</a>
        <a href="#location">Location</a>
    </div>

    <!-- Tombol untuk membuka slide menu -->
    <div id="content">
        <span style="font-size:30px;cursor:pointer" onclick="openSlideMenu()">&#9776; Menu</span>
    </div>

    <!-- Konten Halaman -->
    <div id="home" class="content">
        <h1>Welcome to Our Website!</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </div>

    <div id="about" class="content">
        <h2>About Us</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in consequat justo. Donec dictum, lectus id scelerisque vestibulum, neque dui fringilla dui, a iaculis magna lorem et diam. Duis ac enim in dui finibus cursus.</p>
    </div>

    <div id="location" class="content">
        <h2>Our Location</h2>
        <div id="map"></div>
    </div>

    <script>
    // Panggil fungsi inisialisasi peta saat halaman selesai dimuat
    window.onload = function() {
        initMap();
    };
</script>
</body>
</html>
