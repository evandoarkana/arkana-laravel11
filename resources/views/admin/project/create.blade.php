<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Proyek Baru</title>
    <style>
        /* Style untuk tema merah neon dan hitam */
        body {
            background-color: #0f0f0f; /* Latar belakang hitam gelap */
            color: #ffffff; /* Teks putih */
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        h1 {
            color: #A10808; /* Judul dengan warna merah neon */
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        form {
            background-color: #1a1a1a; /* Latar belakang form yang lebih terang dari hitam */
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
            max-width: 400px;
            width: 90%;
        }

        div {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #ffffff;
        }

        input[type="text"], textarea, input[type="file"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #555;
            border-radius: 4px;
            background-color: #333;
            color: #ffffff;
            font-size: 1rem;
        }

        textarea {
            resize: vertical;
            min-height: 80px;
        }

        button {
            background-color: #A10808; /* Tombol dengan warna merah neon */
            color: #ffffff;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            width: 100%;
            font-size: 1rem;
        }

        button:hover {
            background-color: #ff1a1a; /* Warna merah lebih terang saat hover */
        }

        a {
            color: #A10808;
            text-decoration: none;
            font-size: 0.9rem;
            display: inline-block;
            margin-top: 10px;
            text-align: center;
        }

        a:hover {
            text-decoration: underline;
        }

        /* Pesan sukses */
        form div[style="color: green;"] {
            background-color: #0a390a;
            border: 1px solid #0f0;
            padding: 10px;
            border-radius: 4px;
            margin-bottom: 15px;
        }

        /* Pesan error */
        form div[style="color: red;"] {
            background-color: #390a0a;
            border: 1px solid #f00;
            padding: 5px;
            border-radius: 4px;
            margin-top: 5px;
        }

        footer {
            margin-top: 20px;
            text-align: center;
            font-size: 0.9rem;
            color: #A10808;
        }
    </style>
</head>
<body>
    <h1>Tambah Proyek Baru</h1>

    <!-- Menampilkan pesan sukses setelah form berhasil disubmit -->
    @if(session('success'))
        <div style="color: green;">
            <p>{{ session('success') }}</p>
        </div>
    @endif

    <form action="{{ route('admin.project.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div>
            <label for="title">Judul Proyek:</label>
            <input type="text" name="title" id="title" required value="{{ old('title') }}">
            @error('title')
                <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="description">Deskripsi:</label>
            <textarea name="description" id="description" required>{{ old('description') }}</textarea>
            @error('description')
                <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="tools">Alat/Tools (Opsional):</label>
            <input type="text" name="tools" id="tools" value="{{ old('tools') }}">
            @error('tools')
                <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="image">Gambar (Opsional):</label>
            <input type="file" name="image" id="image">
            @error('image')
                <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <button type="submit">Simpan Proyek</button>
        </div>
    </form>

    <footer>
        <a href="{{ route('admin.project.index') }}">Kembali ke Daftar Proyek</a>
    </footer>
</body>
</html>
