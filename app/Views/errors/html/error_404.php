<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Tidak Ditemukan - 404 Not Found</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif
        }

        body {
            width: 100vw;
            height: 100vh;
            background-image: url(/assets/images/error-pages/background.svg);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 16px
        }

        .container figure.not-found-img img {
            width: 500px;
            height: 279px;
            filter: drop-shadow(3px 3px 2px rgb(0 0 0 / .45))
        }

        .container h1 {
            font-size: 1.5rem;
            color: #fff;
            text-shadow: 1.5px 2px rgb(0 0 0 / .5)
        }

        .container a.home-link {
            padding: 8px 18px;
            background-color: oklch(55.8% .288 302.321);
            text-decoration: none;
            color: #fff;
            border-radius: 4px;
            transition: .15s ease-in;
            border: 2px solid oklch(55.8% .288 302.321);
            margin-block-start: 8px;
            font-size: .95rem;
            font-weight: 700;
            letter-spacing: .055em;
            font-family: 'Segoe UI'
        }

        .container a:hover {
            background-color: oklch(49.6% .265 301.924)
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Oops! Halaman yang kamu cari... sepertinya belum ada disemesta ini!</h1>
        <figure class="not-found-img">
            <img src="/assets/images/error-pages/404-text.webp" alt="404 Not Found Image" />
        </figure>
        <a href="/" class="home-link">KEMBALI KE ASAL</a>
    </div>
</body>

</html>