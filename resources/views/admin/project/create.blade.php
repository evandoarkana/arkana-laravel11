<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Proyek Baru</title>
    <style>
        /* Global Styles */
        body {
            background-color: #121212; /* Latar belakang hitam gelap */
            color: #ff6a00; /* Teks berwarna oranye */
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
            color: #ff6a00; /* Judul dengan warna oranye */
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
            border: 2px solid #ff6a00; /* Garis tepi oranye untuk form */
        }

        div {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #ff6a00; /* Label dengan warna oranye */
        }

        input[type="text"], textarea, input[type="file"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ff6a00; /* Garis tepi oranye untuk input, textarea, dan file */
            border-radius: 4px;
            background-color: #333; /* Latar belakang hitam untuk input, textarea */
            color: #ff6a00; /* Teks oranye di dalam input */
            font-size: 1rem;
        }

        textarea {
            resize: vertical;
            min-height: 80px;
        }

        button {
            background-color: #ff6a00; /* Tombol dengan warna oranye */
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
            background-color: #e65c00; /* Hover lebih gelap dari oranye */
        }

        a {
            color: #ff6a00; /* Link berwarna oranye */
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
            color: #ff6a00; /* Footer dengan warna oranye */
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
