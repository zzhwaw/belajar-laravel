
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Projects</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            margin: 0;
            padding: 40px 20px;
            color: #222;
        }

        .container {
            max-width: 900px;
            margin: auto;
        }

        h1 {
            text-align: center;
            margin-bottom: 10px;
        }

        .subtitle {
            text-align: center;
            color: #666;
            margin-bottom: 35px;
        }

        .projects {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 20px;
        }

        .card {
            background: white;
            padding: 24px;
            border-radius: 12px;
            box-shadow: 0 4px 12px #0000000d;
        }

        .card h2 {
            font-size: 20px;
        }

        .card p {
            line-height: 1.6;
            color: #555;
        }

        .tag {
            display: inline-block;
            background: #e0e7ff;
            color: #3730a3;
            padding: 6px 10px;
            border-radius: 6px;
            font-size: 12px;
        }
        .status-completed {
        background-color: #dcfce7;
        color: #166534;
        border: 1px solid #86efac;
        }.status-progress {
            background-color: #dbeafe;
            color: #1d4ed8;
            border: 1px solid #93c5fd;
        }

        .status-planned {
            background-color: #f3f4f6;
            color: #374151;
            border: 1px solid #d1d5db;
        }
    </style>
</head>
<body>
    <main class="container">
        <h1>My Projects</h1>
        <p class="subtitle">
            Beberapa proyek yang sedang saya pelajari dan kembangkan.
        </p>
            <section class="card project-overview">
        <h2>Project Overview</h2>
        <p>
            This portfolio showcases my journey in learning
            full-stack web development, from frontend design
            to backend development and database management.
        </p>
        <p>Built with curiosity, practice, and continuous learning.</p>
    </section>

        <section class="projects">
            <article class="card">
                <h2>Website Profil TK</h2>
                <p>
                    Website informasi sekolah dan pendaftaran
                    peserta didik baru.
                </p>
                <span class="tag">HTML & CSS</span>
                <span class="tag status-completed">Completed</span>
            </article>

            <article class="card">
                <h2>Developer Skills</h2>
                <p>
                    Halaman untuk menampilkan teknologi
                    yang sedang saya pelajari.
                </p>
                <span class="tag">Laravel</span>
                <span class="tag status-progress">In Progress</span>
            </article>

            <article class="card">
                <h2>Belajar Full Stack</h2>
                <p>
                    Proyek latihan untuk memahami pengembangan
                    aplikasi web dari frontend hingga backend.
                </p>
                <span class="tag">Full Stack</span>
                <span class="tag status-planned">Planned</span>
            </article>
        </section>
        
        <section class="card">
            <h2>About This Portfolio</h2>
            <p>
                A collection of projects I'm building while learning
                full-stack development.
            </p>

            <h2>Tech Stack</h2>
            <span class="tag">HTML</span>
            <span class="tag">CSS</span>
            <span class="tag">JavaScript</span>
            <span class="tag">PHP</span>
            <span class="tag">Laravel</span>
            <span class="tag">MySQL</span>
        </section>
    </main>
</body>
</html>
