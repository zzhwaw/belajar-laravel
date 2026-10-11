
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Skills</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 40px 20px;
            background: #f4f7fb;
            color: #1f2937;
        }

        .container {
            max-width: 900px;
            margin: auto;
        }

        h1 {
            margin-bottom: 8px;
        }

        .subtitle {
            color: #64748b;
            margin-bottom: 30px;
        }

        .skills {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 18px;
        }

        .card {
            background: white;
            padding: 22px;
            border-radius: 12px;
            box-shadow: 0 4px 12px #0000000d;
        }

        .card h2 {
            font-size: 20px;
            margin-top: 0;
        }

        .status {
            display: inline-block;
            margin-top: 10px;
            padding: 6px 10px;
            background: #dcfce7;
            color: #166534;
            border-radius: 20px;
            font-size: 13px;
        }

        a {
            color: #2563eb;
        }
    </style>
</head>
<body>
    <main class="container">
        <h1>My Developer Skills</h1>
        <p class="subtitle">
            Daftar teknologi yang sedang saya pelajari untuk menjadi Full Stack Developer.
        </p>

        <section class="skills">
            <article class="card">
                <h2>HTML & CSS</h2>
                <p>Membangun struktur dan tampilan website.</p>
                <span class="status">Dasar</span>
            </article>

            <article class="card">
                <h2>JavaScript</h2>
                <p>Mempelajari logika dan interaksi website.</p>
                <span class="status">Sedang Belajar</span>
            </article>

            <article class="card">
                <h2>PHP & Laravel</h2>
                <p>Membangun backend dan aplikasi web.</p>
                <span class="status">Sedang Belajar</span>
            </article>

            <article class="card">
                <h2>SQL</h2>
                <p>Mempelajari pengelolaan basis data.</p>
                <span class="status">Sedang Belajar</span>
            </article>
        </section>

        <p><a href="/">Kembali ke halaman utama</a></p>
    </main>
</body>
</html>
