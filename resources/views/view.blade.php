<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern UI Page</title>
    <!-- Google Fonts for modern look -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f7fa;
            color: #333;
        }
        header {
            background-color: #4f46e5;
            color: white;
            padding: 2rem;
            text-align: center;
        }
        header h1 {
            margin: 0;
            font-size: 2.5rem;
        }
        nav {
            display: flex;
            justify-content: center;
            gap: 2rem;
            background-color: #3730a3;
            padding: 1rem 0;
        }
        nav a {
            color: white;
            text-decoration: none;
            font-weight: 600;
        }
        nav a:hover {
            text-decoration: underline;
        }
        main {
            max-width: 900px;
            margin: 2rem auto;
            padding: 0 1rem;
        }
        section {
            background: white;
            padding: 2rem;
            margin-bottom: 1.5rem;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.05);
        }
        section h2 {
            margin-top: 0;
            color: #4f46e5;
        }
        footer {
            text-align: center;
            padding: 1.5rem;
            background-color: #e0e7ff;
            color: #1e3a8a;
        }
        button {
            background-color: #4f46e5;
            color: white;
            padding: 0.75rem 1.5rem;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-weight: 600;
        }
        button:hover {
            background-color: #3730a3;
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome to Modern UI</h1>
        <p>Your clean, responsive, and modern webpage</p>
    </header>

    <nav>
        <a href="#">Home</a>
        <a href="#">Features</a>
        <a href="#">About</a>
        <a href="#">Contact</a>
    </nav>

    <main>
        <section>
            <h2>About This Page</h2>
            <p>This is a modern UI template using HTML and CSS. It features a clean layout, responsive design, and modern typography for readability.</p>
            <button>Learn More</button>
        </section>

        <section>
            <h2>Features</h2>
            <ul>
                <li>Responsive design for all devices</li>
                <li>Modern font and clean typography</li>
                <li>Interactive buttons and hover effects</li>
                <li>Structured sections with card-like UI</li>
            </ul>
        </section>

        <section>
            <h2>Get Started</h2>
            <p>Use this template to build your next project with a clean and modern design. Easily customizable and visually appealing.</p>
            <button>Start Now</button>
        </section>
    </main>

    <footer>
        &copy; 2025 Modern UI Template. All rights reserved.
    </footer>
</body>
</html>
