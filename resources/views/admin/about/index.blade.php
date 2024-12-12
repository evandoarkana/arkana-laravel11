<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman About</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        /* General Styles */
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #121212; /* Latar belakang hitam */
            color: #ff6a00; /* Tulisan oranye */
        }

        /* Header Section */
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

        /* Back Arrow Button */
        .back-arrow-btn {
            padding: 10px;
            background-color: #ff6a00;
            color: white;
            border: none;
            border-radius: 50%;
            font-size: 18px;
            cursor: pointer;
            transition: all 0.3s ease;
            position: absolute;
            top: 15px;
            left: 15px;
        }

        .back-arrow-btn:hover {
            background-color: #e55b00;
        }

        /* Content Section */
        .content {
            background: #121212;
            color: #ff6a00;
            padding: 20px;
            margin: 30px;
            border: 2px solid #ff6a00;
            border-radius: 10px;
        }

        .content h2 {
            font-size: 28px;
            margin-bottom: 10px;
        }

        .content p {
            font-size: 16px;
            line-height: 1.8;
        }

        /* Button Styles */
        button {
            padding: 10px 20px;
            font-size: 14px;
            border-radius: 5px;
            border: 2px solid #ff6a00;
            background-color: transparent;
            color: #ff6a00;
            cursor: pointer;
            margin: 10px 0;
            transition: all 0.3s ease;
        }

        button:hover {
            background-color: #ff6a00;
            color: #fff;
            box-shadow: 0 0 10px #ff6a00;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .content {
                margin: 20px;
            }
        }
    </style>
</head>
<body>

    <header>
        <h1>Halaman About</h1>
    </header>

    <!-- Back Arrow Button -->
    <a href="{{ route('admin.dashboard') }}">
        <button class="back-arrow-btn">
            <i class="fas fa-arrow-left"></i>
        </button>
    </a>

    <div class="content">
        <a href="{{ route('admin.about.create') }}">
            <button>Buat Halaman About</button>
        </a>

        @if($about)
            <h2>{{ $about->title }}</h2>
            <p>{{ $about->content }}</p>

            <a href="{{ route('admin.about.edit', $about->id) }}">
                <button>Edit Halaman About</button>
            </a>

            <form action="{{ route('admin.about.destroy', $about->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus halaman ini?')">Hapus Halaman About</button>
            </form>
        @else
            <p>Belum ada informasi tentang kami.</p>
        @endif
    </div>

</body>
</html>
