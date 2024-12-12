<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Gacor</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Arial', sans-serif;
            background-color: #121212;
            color: #e0e0e0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        .sidebar {
            width: 200px;
            background-color: #1a1a1a;
            color: #f4f4f4;
            padding: 20px;
            position: fixed;
            height: 100%;
            top: 0;
            left: 0;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.8);
        }
        .sidebar h2 {
            font-size: 1.2rem;
            text-align: center;
            margin-bottom: 1rem;
            color: #ff4500;
        }
        .sidebar a {
            display: block;
            color: #f4f4f4;
            text-decoration: none;
            margin: 10px 0;
            padding: 10px;
            border-radius: 4px;
            font-size: 0.9rem;
            transition: background 0.3s ease;
        }
        .sidebar a:hover {
            background-color: #333;
            color: #ff4500;
        }
        .main-content {
            margin-left: 200px;
            padding: 20px;
            flex: 1;
        }
        .header {
            margin-bottom: 20px;
            padding: 10px;
            background-color: #1a1a1a;
            color: #ff4500;
            text-align: center;
            border-radius: 4px;
            font-size: 1.5rem;
        }
        button {
            padding: 10px;
            background-color: #ff4500;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 0.9rem;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #cc3700;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: #1a1a1a;
            color: #f4f4f4;
        }
        table th, table td {
            border: 1px solid #444;
            padding: 8px;
            text-align: left;
        }
        table th {
            background-color: #333;
            font-weight: bold;
        }
        table tr:hover {
            background-color: #222;
        }
        .card {
            background-color: #2c2c2c;
            color: #fff;
            padding: 15px;
            border-radius: 5px;
            text-align: center;
            margin-bottom: 20px;
        }
        .card h3 {
            margin-bottom: 10px;
        }
        @media (max-width: 768px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: static;
            }
            .main-content {
                margin-left: 0;
            }
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <h2>Admin Panel</h2>
        <a href="{{ route('admin.about.index') }}"><i class="fas fa-info-circle"></i> About</a>
        <a href="{{ route('admin.project.index') }}"><i class="fas fa-project-diagram"></i> Project</a>
        <a href="{{ route('skill.index') }}"><i class="fas fa-pencil-alt"></i> Edit Skill</a>
        <a href="{{ route('admin.certificate.index') }}"><i class="fas fa-scroll"></i> Certificate</a>
        <a href="{{ route('admin.contacts.index') }}" class="btn btn-primary"><i class="fas fa-address-book"></i> Lihat Kontak</a>
        <a href="{{ route('login') }}"><i class="fas fa-sign-out-alt"></i> Logout</a>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <div class="header">Welcome to the Haunted Admin Dashboard</div>

        <!-- Statistics Section -->
        <div style="display: flex; gap: 20px; margin-bottom: 20px;">
            <div class="card">
                <h3>Active Users</h3>
                <p>102</p>
            </div>
            <div class="card">
                <h3>Completed Tasks</h3>
                <p>58</p>
            </div>
            <div class="card">
                <h3>New Messages</h3>
                <p>7</p>
            </div>
        </div>

        <!-- Task List -->
        <div style="margin-bottom: 20px;">
            <h2 style="color: #fff;">Tasks to Complete</h2>
            <ul style="list-style: none; padding: 0;">
                <li style="background: #3a3a3a; color: #fff; margin-bottom: 10px; padding: 10px; border-radius: 5px;">
                    <input type="checkbox" style="margin-right: 10px;"> Exorcise the Phantom Entry
                </li>
                <li style="background: #3a3a3a; color: #fff; margin-bottom: 10px; padding: 10px; border-radius: 5px;">
                    <input type="checkbox" style="margin-right: 10px;"> Summon Database Entities
                </li>
                <li style="background: #3a3a3a; color: #fff; margin-bottom: 10px; padding: 10px; border-radius: 5px;">
                    <input type="checkbox" style="margin-right: 10px;"> Cast Protection Spells
                </li>
            </ul>
        </div>

        <!-- Interactive Buttons -->
        <div style="margin-bottom: 20px;">
            <h2 style="color: #fff;">Actions</h2>
            <button>Summon Report</button>
            <button>Start Investigation</button>
        </div>

        <!-- Activity Chart -->
        <div style="background: #1d3557; color: #fff; padding: 15px; border-radius: 5px;">
            <h2>Activity Chart</h2>
            <p>Data loading...</p>
            <div style="height: 200px; background: #fff; border-radius: 5px;"></div>
        </div>
    </div>

</body>
</html>
