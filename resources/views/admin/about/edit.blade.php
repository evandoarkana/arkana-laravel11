<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Halaman About</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Arial', sans-serif;
            background-color: #121212; /* Latar belakang hitam */
            color: #ff6a00; /* Tulisan oranye */
            line-height: 1.6;
            padding: 0;
            margin: 0;
        }

        header {
            background-color: #1a1a1a; /* Sedikit lebih terang dari latar belakang */
            color: #ff6a00;
            text-align: center;
            padding: 30px 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
        }

        h1 {
            font-size: 2.5rem;
            letter-spacing: 2px;
            font-weight: bold;
        }

        .content {
            max-width: 600px;
            margin: 50px auto;
            padding: 30px;
            background-color: #1a1a1a;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.6);
        }

        .content label {
            display: block;
            color: #ff6a00;
            margin-bottom: 8px;
            font-size: 1.1rem;
        }

        .content input,
        .content textarea {
            width: 100%;
            padding: 12px;
            margin-bottom: 18px;
            background-color: #333;
            border: 1px solid #444;
            border-radius: 6px;
            color: #ff6a00;
            font-size: 1rem;
            transition: border-color 0.3s ease;
        }

        .content input:focus,
        .content textarea:focus {
            border-color: #ffcc00;
            outline: none;
        }

        .content textarea {
            height: 150px;
            resize: none;
        }

        button {
            width: 100%;
            padding: 15px;
            background-color: #ff6a00;
            color: #121212;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 1.1rem;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #ffaa00;
        }

        .back-link {
            text-align: center;
            margin-top: 30px;
        }

        .back-link a {
            color: #ffcc00;
            font-size: 1.1rem;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .back-link a:hover {
            color: #ff6a00;
            text-decoration: underline;
        }

    </style>
</head>
<body>

    <header>
        <h1>Edit Halaman About</h1>
    </header>

    <div class="content">
        <form action="{{ route('admin.about.update', $about->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div>
                <label for="title">Judul</label>
                <input type="text" name="title" id="title" value="{{ old('title', $about->title) }}" required>
            </div>

            <div>
                <label for="content">Isi Konten</label>
                <textarea name="content" id="content" required>{{ old('content', $about->content) }}</textarea>
            </div>

            <button type="submit">Update</button>
        </form>

        <div class="back-link">
            <a href="{{ route('admin.about.index') }}">Kembali ke Halaman About</a>
        </div>
    </div>

</body>
</html>
