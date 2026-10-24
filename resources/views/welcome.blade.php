<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - ITE311 Laravel Project</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background: #f4f7fb;
            color: #263238;
        }

        nav {
            background: #087f8c;
            padding: 18px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            gap: 25px;
        }

        nav a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }

        nav a:hover {
            text-decoration: underline;
        }

        .hero {
            text-align: center;
            padding: 90px 20px;
            background: white;
        }

        .hero h1 {
            color: #087f8c;
            font-size: 36px;
            margin-bottom: 15px;
        }

        .hero p {
            font-size: 17px;
            line-height: 1.7;
        }

        .button {
            display: inline-block;
            background: #087f8c;
            color: white;
            padding: 12px 20px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            margin-top: 20px;
        }

        .button:hover {
            background: #065f68;
        }

        .features {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
            padding: 35px 20px;
        }

        .feature-card {
            background: white;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 2px 8px #ddd;
            text-align: center;
            width: 280px;
            max-width: 100%;
        }

        .feature-card h2 {
            color: #087f8c;
            font-size: 21px;
        }

        footer {
            background: #087f8c;
            color: white;
            text-align: center;
            padding: 18px;
        }

        @media (max-width: 600px) {
            .hero {
                padding: 55px 18px;
            }

            .hero h1 {
                font-size: 28px;
            }

            nav {
                gap: 18px;
            }
        }
    </style>
</head>

<body>

    <nav aria-label="Main navigation">
        <a href="{{ url('/') }}">Home</a>
        <a href="{{ url('/about') }}">About</a>
        <a href="{{ url('/contact') }}">Contact</a>
        <a href="{{ route('students.index') }}">Student Directory</a>
    </nav>

    <main>
        <section class="hero">
            <h1>Welcome to My Laravel Website</h1>

            <p>
                This is the homepage of my ITE311 Laravel project.
            </p>

            <p>
                Explore the About and Contact pages using the
                navigation menu, or manage student information
                through the Student Directory.
            </p>

            <a class="button" href="{{ route('students.index') }}">
                View Student Directory
            </a>
        </section>

        <section class="features" aria-label="Website features">
            <article class="feature-card">
                <h2>About Us</h2>
                <p>Learn more about this Laravel project and its purpose.</p>
                <a href="{{ url('/about') }}">Learn More</a>
            </article>

            <article class="feature-card">
                <h2>Contact Us</h2>
                <p>Visit our Contact page for more information.</p>
                <a href="{{ url('/contact') }}">Contact Us</a>
            </article>

            <article class="feature-card">
                <h2>Student Directory</h2>
                <p>View, search, register, edit, and manage student records.</p>
                <a href="{{ route('students.index') }}">View Students</a>
            </article>
        </section>
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} ITE311 Laravel Project</p>
    </footer>

</body>
</html>