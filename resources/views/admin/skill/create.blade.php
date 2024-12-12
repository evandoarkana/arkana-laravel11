<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Skill</title>
    <style>
        body {
            background-color: #000; /* Latar belakang hitam */
            color: #FFA500; /* Teks oranye */
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            background-color: #111; /* Latar belakang kontainer */
            border: 2px solid #FFA500; /* Stroke oranye */
            border-radius: 10px;
            padding: 30px;
            margin: auto;
            box-shadow: 0 4px 20px rgba(255, 165, 0, 0.2); /* Bayangan lembut */
        }

        h1 {
            text-align: center;
            color: #FFA500; /* Judul oranye */
            margin-bottom: 20px;
            font-size: 2em;
            font-weight: bold;
        }

        .form-label {
            font-weight: bold;
            margin-bottom: 5px;
            color: #FFA500;
            display: block;
        }

        .form-control {
            background-color: #222; /* Latar belakang input */
            color: #FFA500; /* Teks input */
            border: 1px solid #FFA500; /* Border input */
            border-radius: 5px;
            padding: 10px;
            width: 100%;
            margin-bottom: 15px;
            font-size: 1em;
            box-sizing: border-box;
        }

        .form-control::placeholder {
            color: #FFA500; /* Placeholder oranye */
        }

        .form-control:focus {
            border-color: #FF8C00; /* Warna border saat fokus */
            outline: none;
            background-color: #333; /* Latar belakang saat fokus */
        }

        .btn-success {
            background-color: #FFA500; /* Tombol oranye */
            color: #000; /* Teks hitam */
            border: none;
            border-radius: 5px;
            padding: 12px;
            width: 100%;
            cursor: pointer;
            font-weight: bold;
            font-size: 1em;
            text-transform: uppercase;
        }

        .btn-success:hover {
            background-color: #FF8C00; /* Warna tombol saat hover */
        }

        .form-group {
            margin-bottom: 15px;
        }

        @media (max-width: 600px) {
            .container {
                padding: 20px;
            }

            h1 {
                font-size: 1.8em;
            }

            .btn-success {
                font-size: 0.9em;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Create Skill</h1>

        <form action="{{ route('skill.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name" class="form-label">Skill Name</label>
                <input type="text" name="name" class="form-control" required placeholder="Enter skill name">
            </div>
            <div class="form-group">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" class="form-control" placeholder="Enter skill description" rows="4"></textarea>
            </div>
            <button type="submit" class="btn btn-success">Create Skill</button>
        </form>
    </div>
</body>

</html>
