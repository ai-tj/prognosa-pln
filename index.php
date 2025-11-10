<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <title>Dashboard</title>
    <style>
        /* @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;700&display=swap');

        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }

        body {
            height: 100vh;
            font-family: 'Quicksand', sans-serif;
            margin: 0;

            display: flex;
            flex-direction: column;
        }

        header.navbar-container {
            max-width: 1200px;
            width: 100%;
            margin-inline: auto;
            display: flex;
            justify-content: space-around;
            align-items: center;

            padding-block: 1rem;
            z-index: 999;
        }

        header.navbar-container .logo img {
            width: 150px;
        }

        header.navbar-container .nav-list ul {
            padding-left: 0;
            display: flex;
            justify-content: center;
            gap: 2rem 1rem;
        }

        header.navbar-container .nav-list li {
            list-style-type: none;
        }

        header.navbar-container .nav-list li a {
            text-decoration: none;
            font-size: 1.05rem;
            font-weight: 500;
            color: black;
            padding: .5rem 1.5rem;
            border-radius: 999px;
            transition: all .2s ease-in-out;
        }

        header.navbar-container .nav-list li:hover a {
            background-color: #425c77;
            color: white;
        }

        main {
            max-width: 1200px;
            width: 100%;
            margin-inline: auto;
            padding: 2rem 4rem;
            flex: 1;

            display: flex;
            align-items: center;
        }

        main .content {
            flex: 1;
            display: flex;
            align-items: center;
        }

        main .content .content-description {
            flex: 1 1;
        }

        main .content .content-description .title {
            font-size: 3.5rem;
            margin-block: 1rem;
        }

        main .content .content-description p {
            line-height: 1.7rem;
            font-size: 1.2rem;
        }

        main .content .content-description button {
            padding: .8rem 2.5rem;
            margin-block-start: 1rem;
            text-transform: uppercase;
            font-weight: 700;
            font-size: 1rem;
            font-family: 'Quicksand', sans-serif;
            color: white;

            border: 3px solid transparent;
            border-radius: 999px;
            background-color: #2D3E50;
            cursor: pointer;
            transition: all .15s ease-in;
        }

        main .content .content-description button:hover {
            border: 3px solid #2D3E50;
            color: #2D3E50;
            background-color: transparent;
        }

        main .content .content-image {
            flex: 1;
            display: flex;
        }

        main .content .content-image img {
            margin: auto;
            min-width: 250px;
            width: 350px;
        }

        @media screen and (max-width: 768px) {
            header.navbar-container {
                flex-direction: column;
            }
        }

        header.navbar-container {
            flex-direction: column;
        }

        footer {
            text-align: center;
        } */

/* DESAIN KEDUA ---------*/

        @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;700&display=swap');

*,
*::before,
*::after {
    box-sizing: border-box;
}

body {
    height: 100vh;
    font-family: 'Quicksand', sans-serif;
    margin: 0;
    display: flex;
    flex-direction: column;
}

header.navbar-container {
    max-width: 1200px;
    width: 100%;
    margin: 0 auto;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 1rem 2rem;
    background-color: #2D3E50; /* Dark blue background color */
    color: white; /* Text color */
}

header.navbar-container .logo img {
    width: 150px;
}

header.navbar-container .nav-list ul {
    padding: 0;
    display: flex;
    gap: 2rem;
    list-style: none;
}

header.navbar-container .nav-list li {
    list-style-type: none;
}

header.navbar-container .nav-list li a {
    text-decoration: none;
    font-size: 1.1rem;
    font-weight: 500;
    color: white;
    padding: .5rem 1rem;
    border-radius: 5px;
    transition: background-color 0.3s ease-in-out;
}

header.navbar-container .nav-list li a:hover {
    background-color: #425c77; /* Darker blue on hover */
}

main {
    max-width: 1200px;
    width: 100%;
    margin: 2rem auto;
    padding: 2rem;
    display: flex;
    align-items: center;
}

main .content {
    flex: 1;
    display: flex;
    align-items: center;
}

main .content .content-description {
    flex: 1 1;
}

main .content .content-description .title {
    font-size: 2.5rem;
    margin-bottom: 1rem;
}

main .content .content-description p {
    line-height: 1.7rem;
    font-size: 1.1rem;
    color: #555;
}

main .content .content-description button {
    padding: .8rem 2.5rem;
    margin-top: 1rem;
    text-transform: uppercase;
    font-weight: 700;
    font-size: 1rem;
    color: white;
    border: 3px solid transparent;
    border-radius: 5px;
    background-color: #2D3E50;
    cursor: pointer;
    transition: all 0.15s ease-in;
}

main .content .content-description button:hover {
    border: 3px solid #2D3E50;
    color: #2D3E50;
    background-color: transparent;
}

main .content .content-image {
    flex: 1;
    display: flex;
    justify-content: center;
}

main .content .content-image img {
    width: 80%;
    max-width: 350px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}

@media screen and (max-width: 768px) {
    header.navbar-container {
        flex-direction: column;
        align-items: center;
    }
    header.navbar-container .nav-list ul {
        flex-direction: column;
        align-items: center;
    }
}

footer {
    text-align: center;
    background-color: #2D3E50;
    color: white;
}

    </style>

<script>
        function redirectToCreatePage() {
            window.location.href = 'create.php';
        }

        function logout() {
            window.location.href = 'logout.php';
            var result = confirm("Apakah kamu yakin keluar dari akun ini?");
            if (result) {
                window.location.href = 'logout.php?id=' + id;
            }
        }
    </script>
</head>

<body>
    <header class="navbar-container">
        <div class="logo">
            <img src="img/pln.svg" alt="" />
        </div>
        <nav class="nav-list">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="create.php">Buat Laporan Prognosa</a></li>
                <li><a href="recap.php">Hasil Prognosa</a></li>
                <li><a href="#" onclick="logout()">Logout</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="content">
            <div class="content-description">
                <h1 class="title">KinerjaCepat.com</h1>
                <p>KinerjaCepat.com adalah sebuah sistem platform website prognosa PLN yang dibangun untuk membantu manajer dan analis di Perusahaan Listrik Negara (PLN) 
                    dalam melakukan analisis, prediksi, dan perencanaan untuk mendukung keputusan yang strategis. Website ini menyediakan data yang relevan, akurat, dan terintegrasi 
                    untuk mempermudah proses analisis dan keputusan manajer.
                </p>

                <!-- <button><a href="create.php">Lanjut</a></button> -->
                <button onclick="redirectToCreatePage()">Lanjut</button>
            </div>
            </div>

            <div class="content-image">
                <img src="img/home.png" alt="Prognosa">
            </div>
        </div>

    </main>

    <footer>
        <p>&copy; 2024 PLN UIP SUMBAGUT</p>
    </footer>

</body>

</html>