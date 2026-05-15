<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
          rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        ::-webkit-scrollbar {
            display: none;
        }

        html,
        body {
            scrollbar-width: none;
            /* Firefox */
            -ms-overflow-style: none;
            /* Internet Explorer/Edge */
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: #f5f7fb;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 40px 20px;
        }

        .container {
            width: 100%;
            max-width: 1000px;
            background: white;
            padding: 50px;
            border-radius: 24px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.08);
            text-align: center;
        }

        .badge {
            display: inline-block;
            background: #eef2ff;
            color: #4f46e5;
            padding: 8px 18px;
            border-radius: 999px;
            font-size: 14px;
            font-weight: 500;
            margin-bottom: 20px;
        }

        h1 {
            font-size: 42px;
            color: #111827;
            margin-bottom: 10px;
        }

        .subtitle {
            color: #6b7280;
            font-size: 16px;
            line-height: 1.7;
            margin-bottom: 40px;
        }

        .section-title {
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 25px;
            color: #1f2937;
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 20px;
        }

        .card {
            text-decoration: none;
            background: #f9fafb;
            border: 1px solid #e5e7eb;
            border-radius: 20px;
            padding: 35px 25px;
            transition: 0.25s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            border-color: #4f46e5;
        }

        .emoji {
            font-size: 42px;
            margin-bottom: 15px;
        }

        .card h2 {
            color: #111827;
            margin-bottom: 10px;
            font-size: 22px;
        }

        .card p {
            color: #6b7280;
            font-size: 14px;
            line-height: 1.7;
        }

        /* Hidden Section */
        .more-projects {
            display: none;
            margin-top: 20px;
        }

        #toggle-projects:checked ~ .more-projects {
            display: grid;
        }

        .view-more-btn {
            display: inline-block;
            margin-top: 30px;
            background: #4f46e5;
            color: white;
            padding: 14px 28px;
            border-radius: 12px;
            cursor: pointer;
            font-weight: 500;
            transition: 0.2s ease;
        }

        .view-more-btn:hover {
            background: #4338ca;
        }

        #toggle-projects {
            display: none;
        }

        .footer {
            margin-top: 45px;
            color: #9ca3af;
            font-size: 14px;
        }

        @media (max-width: 600px) {
            .container {
                padding: 35px 25px;
            }

            h1 {
                font-size: 30px;
            }
        }
    </style>
</head>

<body>

    <div class="container">

        <div class="badge">
            Laravel Blade Tutorial
        </div>

        <h1>Learning PHP with Sir Andy</h1>

        <p class="subtitle">
            Learn Laravel CRUD step-by-step using beginner-friendly examples and projects.
        </p>

        <div class="section-title">
            CRUD Projects
        </div>

        <!-- Main Projects -->
        <div class="cards">

            <a href="{{ route('books.index') }}" class="card">
                <div class="emoji">📚</div>

                <h2>Book CRUD</h2>

                <p>
                    Learn CRUD operations using a simple book management system.
                </p>
            </a>

            <a href="{{ route('products.index') }}" class="card">
                <div class="emoji">🛒</div>

                <h2>Product CRUD</h2>

                <p>
                    Practice managing products with Laravel and Blade.
                </p>
            </a>

        </div>

        <!-- Toggle -->
        <input type="checkbox" id="toggle-projects">

        <label for="toggle-projects" class="view-more-btn">
            View More Projects
        </label>

        <!-- Hidden Projects -->
        <div class="cards more-projects">

            <a href="#" class="card">
                <div class="emoji">🎓</div>

                <h2>Student CRUD</h2>

                <p>
                    Manage student information using Laravel CRUD functionality.
                </p>
            </a>

            <a href="{{ route('teachers.index') }}" class="card">
                <div class="emoji">👨‍🏫</div>

                <h2>Teacher CRUD</h2>

                <p>
                    Learn how to handle teacher records and data management.
                </p>
            </a>

            <a href="#" class="card">
                <div class="emoji">🏢</div>

                <h2>Company CRUD</h2>

                <p>
                    Build a company management system with Laravel Blade.
                </p>
            </a>

        </div>

        <div class="footer">
            Built with Laravel & Blade • Beginner Friendly Tutorial
        </div>

    </div>

</body>
</html>