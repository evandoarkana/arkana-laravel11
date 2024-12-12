<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Halaman About</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            height: 100vh; /* Mengatur tinggi badan halaman agar 100% */
            background-color: #121212; /* Latar belakang hitam */
            color: #ff6a00; /* Tulisan oranye */
            display: flex;
            justify-content: center; /* Memusatkan secara horizontal */
            align-items: center; /* Memusatkan secara vertikal */
        }
        header {
            background-color: #121212;
            color: #ff6a00;
            text-align: center;
            padding: 20px;
            border-bottom: 2px solid #ff6a00;
        }
        h1 {
            font-size: 36px;
            margin: 0;
        }
        .content {
            margin: 30px;
            padding: 20px;
            background-color: #121212;
            border: 2px solid #ff6a00;
            border-radius: 8px;
            width: 100%;
            max-width: 600px; /* Membatasi lebar konten */
        }
        input, textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 4px;
            border: 1px solid #ff6a00; /* Border oranye */
            background-color: #1a1a1a; /* Warna latar input lebih gelap */
            color: #ff6a00; /* Teks oranye di dalam input */
        }
        button {
            padding: 10px 20px;
            background-color: #ff6a00;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 10px;
        }
        button:hover {
            background-color: #e55b00;
        }
        .back-link {
            margin-top: 20px;
            text-align: center;
        }
        .back-link a {
            color: #ff6a00;
            text-decoration: none;
        }
        .back-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <header>
        <h1>Buat Halaman About</h1>
    </header>

    <div class="content">
        <!-- Form untuk membuat halaman About baru -->
        <form action="{{ route('admin.about.store') }}" method="POST">
            @csrf
            <div>
                <label for="title">Judul</label>
                <input type="text" name="title" id="title" value="{{ old('title') }}" required>
            </div>

            <div>
                <label for="content">Isi Konten</label>
                <textarea name="content" id="content" required>{{ old('content') }}</textarea>
            </div>

            <button type="submit">Simpan</button>
        </form>

        <div class="back-link">
            <a href="{{ route('admin.about.index') }}">Kembali ke Halaman About</a>
        </div>
    </div>
</body>
</html>
