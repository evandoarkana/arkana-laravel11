<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skills Management</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Roboto', sans-serif;
            background-color: #121212;
            color: #f57c00; /* Orange text */
            line-height: 1.6;
            padding-bottom: 50px;
            font-size: 16px;
            overflow-x: hidden;
        }

        .header {
            background: #1a1a1a;
            color: #f57c00; /* Orange header */
            padding: 50px 20px;
            text-align: center;
            border-bottom: 3px solid #f57c00;
        }

        .header h1 {
            font-size: 3rem;
            text-transform: uppercase;
        }

        .skills-wrapper {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
            gap: 20px;
            padding: 20px;
        }

        .skill-card {
            background: #333;
            border: 1px solid #f57c00; /* Orange border */
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.3);
            text-align: center;
            transition: transform 0.3s;
        }

        .skill-card:hover {
            transform: translateY(-5px);
        }

        .skill-card h2 {
            color: #f57c00;
            font-size: 1.8rem;
            margin-bottom: 10px;
        }

        .skill-card p {
            font-size: 1rem;
            color: #ddd;
            margin-bottom: 20px;
        }

        .btn {
            background-color: #f57c00;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            text-align: center;
            display: inline-block;
            width: 100%;
            margin-bottom: 10px;
            transition: 0.3s ease;
        }

        .btn:hover {
            background-color: #e65100; /* Slightly darker orange */
            transform: scale(1.05);
        }

        .fab {
            position: fixed;
            bottom: 30px;
            right: 30px;
            background-color: #f57c00;
            padding: 15px;
            border-radius: 50%;
            color: white;
            text-align: center;
            box-shadow: 0px 5px 30px rgba(0, 0, 0, 0.3);
            transition: all 0.3s ease;
        }

        .fab:hover {
            transform: scale(1.1);
            background-color: #e65100;
        }

        .back-btn {
            display: flex;
            align-items: center;
            color: #f57c00;
            text-decoration: none;
            margin: 20px;
            font-size: 1.2rem;
            font-weight: bold;
            transition: color 0.3s ease;
        }

        .back-btn:hover {
            color: #e65100; /* Slightly darker orange */
        }

        .back-btn i {
            margin-right: 10px;
            font-size: 1.5rem;
        }

        /* Mobile Responsiveness */
        @media (max-width: 768px) {
            .header h1 {
                font-size: 2.5rem;
            }

            .skills-wrapper {
                grid-template-columns: 1fr 1fr;
                gap: 20px;
            }

            .fab {
                bottom: 20px;
                right: 20px;
            }
        }
        .back-btn {
        display: inline-flex;
        align-items: center;
        text-decoration: none;
        font-size: 1rem;
        color: #f57c00; /* Warna orange */
        margin: 20px 0;
        transition: color 0.3s ease;
    }

    .back-btn i {
        margin-right: 8px; /* Jarak antara ikon dan teks */
        font-size: 1.2rem;
    }

    .back-btn:hover {
        color: #e65100; /* Warna orange gelap saat hover */
    }
    </style>
</head>
<body>
<!-- Back Button to Dashboard -->
<a href="{{ route('admin.dashboard') }}" class="back-btn">
    <i class="fas fa-chevron-left"></i> Back to Dashboard
</a>


    <!-- Header Section -->
    <div class="header">
        <h1>Skills Management</h1>
    </div>

    <!-- Skills Cards Section -->
    <div class="skills-wrapper">
        @foreach ($skills as $skill)
        <div class="skill-card">
            <h2>{{ $skill->name }}</h2>
            <p>{{ $skill->description }}</p>

            <div>
                <a href="{{ route('skill.edit', $skill) }}" class="btn">Edit</a>
                <form action="{{ route('skill.destroy', $skill) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn" style="background-color: #d32f2f;">Delete</button>
                </form>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Floating Action Button (FAB) -->
    <a href="{{ route('skill.create') }}" class="fab">
        <i class="fas fa-plus-circle"></i> <!-- FontAwesome Icon -->
        <span style="font-size: 0.8rem; display: block; margin-top: 5px;">Create</span>
    </a>

</body>
</html>
