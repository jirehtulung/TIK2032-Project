<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jireh Tulung</title>
    <!-- Box-icon -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
         <div class="nav container">
            <a href="#" class="logo">My <span>Blog</span></a>
        </div>
    </header>

    <section class="home" id="home">
        <div class="home-text container">
            <h2 class="home-title">Jireh Tulung</h2>
            <span class="home-subtitle">Your source of great content</span>
        </div>
    </section>

    <section class="about container" id="about">
        <div class="contentBx">
            <h2 class="titleText">Jireh Tulung</h2>
            <p class="title-text">
                Hello, my name is Jireh Tulung, I am 19 years old and I live in Winangun, I study at Sam Ratulangi University and major in Information Engineering, I like reading books and listening to music, sometimes I also like cooking.
                <br>This is my blog which contains general information, here my contact is also listed, enjoy my blog guys..
            </p>
            <a href="#" class="btn2">Read more</a>
        </div>
        <div class="imgBx">
            <img src="images/about.png" alt="" class="fitBg">
        </div>
    </section>

    <div class="post-filter container">
        <span class="filter-item active-filter" data-filter="all">One Direction</span>
    </div>

    <div class="post container">
        <?php
        include 'db_connect.php'; // Menyertakan file koneksi

        // Query untuk mengambil data dari tabel
        $sql = "SELECT id, nama_gambar, href, teks FROM nama_tabel"; // ganti dengan nama tabel yang sesuai
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<div class="post-box">';
                echo '<img src="images/' . $row['nama_gambar'] . '" alt="" class="post-img">';
                echo '<a href="' . $row['href'] . '" class="post-title">' . $row['teks'] . '</a>';
                echo '</div>';
            }
        } else {
            echo "0 results";
        }

        $conn->close();
        ?>
    </div>

    <footer>
        <div class="footer-container">
            <div class="sec aboutus">
                <h2>About Us</h2>
                <p>Jireh Alessandra Tulung</p>
                <ul class="sci">
                    <li><a href="#"><i class="bx bxl-facebook"></i></a></li>
                    <li><a href="https://www.instagram.com/jtulungs?igsh=MWdsbmgxODI0ZWZlcQ=="><i class="bx bxl-instagram"></i></a></li>
                    <li><a href="#"><i class="bx bxl-twitter"></i></a></li>
                    <li><a href="#"><i class="bx bxl-linkedin"></i></a></li>
                </ul>
            </div>
            <div class="sec quicklinks">
                <h2>Quick Links</h2>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                </ul>
            </div>
            <div class="sec contactBx">
                <h2>Contact Info</h2>
                <ul class="info">
                    <li>
                        <span><i class='bx bxs-map'></i></span>
                        <span> <br> Winangun, jln Rawasari <br> Manado</span>
                    </li>
                    <li>
                        <span><i class='bx bx-envelope' ></i></span>
                        <p><a href="jirehtulung26@student.unsrat.ac.id">jirehtulung26@student.unsrat.ac.id</a></p>
                    </li>
                </ul>
            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="main.js"></script>
</body>
</html>
