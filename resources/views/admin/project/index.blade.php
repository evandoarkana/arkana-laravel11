<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Proyek</title>

    <!-- Link to Google Fonts and Font Awesome -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> <!-- SweetAlert2 Script -->

    <!-- SimpleLightbox CSS -->
    <link href="https://cdn.jsdelivr.net/npm/simplelightbox@2.4.1/dist/simple-lightbox.min.css" rel="stylesheet">

    <!-- SimpleLightbox JS -->
    <script src="https://cdn.jsdelivr.net/npm/simplelightbox@2.4.1/dist/simple-lightbox.min.js"></script>

    <style>
        /* Reset margin and padding */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Body styling */
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #121212; /* Dark background */
            color: #ff6a00; /* Light orange text color */
            padding: 40px 0;
        }

        h1 {
            text-align: center;
            color: #ff6a00; /* Orange text */
            margin-bottom: 30px;
            font-size: 2.5rem;
            border-bottom: 2px solid #ff6a00; /* Orange bottom border */
            padding-bottom: 10px;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            border: 2px solid #ff6a00; /* Orange border */
            padding: 20px;
            border-radius: 8px;
        }

        /* Success message */
        .alert {
            background-color: #27ae60;
            color: #fff;
            padding: 12px;
            margin-bottom: 20px;
            border-radius: 8px;
            border: 1px solid #2ecc71;
            text-align: center;
        }

        /* Add Project Button */
        .add-project-btn {
            display: block;
            width: 240px;
            margin: 20px auto;
            padding: 14px 22px;
            background-color: #e74c3c;
            color: white;
            font-weight: 600;
            text-align: center;
            border-radius: 8px;
            text-decoration: none;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .add-project-btn:hover {
            background-color: #c0392b;
            transform: translateY(-3px);
        }

        /* Card container */
        .card-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }

        .card {
            background-color: #34495e; /* Dark card background */
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); /* Soft, elegant shadow */
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: 2px solid #ff6a00; /* Orange border */
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3); /* Enhanced hover shadow */
        }

        .card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-bottom: 3px solid #ff6a00; /* Orange bottom border for the image */
        }

        .card-body {
            padding: 20px;
            color: #ff6a00; /* Orange text inside the card */
        }

        .card h3 {
            font-size: 1.8rem;
            margin-bottom: 10px;
            font-weight: 600;
        }

        .card p {
            font-size: 1rem;
            color: #ff6a00; /* Orange description text */
            margin-bottom: 15px;
        }

        .card .tools {
            font-size: 0.9rem;
            color: #ff6a00; /* Orange text for tools */
            font-weight: bold;
            margin-bottom: 15px;
        }

        .card .actions {
            display: flex;
            justify-content: space-evenly;
            margin-top: 20px;
        }

        .btn {
            display: inline-block;
            padding: 8px 16px;
            border-radius: 5px;
            font-size: 1rem;
            font-weight: 600;
            color: white;
            text-align: center;
            text-decoration: none;
            transition: background-color 0.3s ease;
            text-transform: capitalize;
        }

        .btn-edit {
            background-color: #3498db; /* Blue for Edit */
        }

        .btn-edit:hover {
            background-color: #2980b9;
        }

        .btn-delete {
            background-color: #e74c3c; /* Red for Delete */
        }

        .btn-delete:hover {
            background-color: #c0392b;
        }

        /* Responsive design */
        @media (max-width: 768px) {
            .card-container {
                grid-template-columns: 1fr;
            }
        }

        /* Style untuk thumbnail gambar yang bisa diklik */
        .project-thumbnail {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-bottom: 3px solid #ff6a00; /* Orange bottom border */
            cursor: pointer;
            transition: transform 0.3s ease;
        }

        .project-thumbnail:hover {
            transform: scale(1.05);
        }

        .back-arrow-btn {
            padding: 10px;
            background-color: #00D1FF;
            color: #fff;
            border: 2px solid #00D1FF;
            border-radius: 50%;
            font-size: 18px;
            cursor: pointer;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin: 15px;
            position: absolute;
            top: 3px; /* Mengatur posisi ke atas */
            left: 1px; /* Mengatur posisi ke kiri */
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
        }

    </style>
</head>
<body>
    <a href="{{ route('admin.dashboard') }}">
        <button class="back-arrow-btn">
            <i class="fas fa-arrow-left"></i>
        </button>
    </a>

    <div class="container">
        <h1>Daftar Project</h1>

        <!-- Success message -->
        @if(session('success'))
            <div class="alert">
                <p>{{ session('success') }}</p>
            </div>
        @endif

        <!-- Add Project Button -->
        <a href="{{ route('admin.project.create') }}" class="add-project-btn">
            <i class="fas fa-plus-circle"></i> Tambah Proyek Baru
        </a>

        <!-- Card container -->
        <div class="card-container">
            @foreach($projects as $project)
                <div class="card">
                    <!-- Link ke gambar dalam ukuran besar untuk lightbox -->
                    <a href="{{ asset('storage/' . $project->image_path) }}" class="project-image" data-lightbox="project-gallery" data-title="{{ $project->title }}">
                        <img src="{{ asset('storage/' . $project->image_path) }}" alt="Image" class="project-thumbnail">
                    </a>
                    <div class="card-body">
                        <h3>{{ $project->title }}</h3>
                        <p>{{ Str::limit($project->description, 100) }}</p>
                        <div class="tools">{{ $project->tools ?? 'N/A' }}</div>
                        <div class="actions">
                            <a href="{{ route('admin.project.edit', $project->id) }}" class="btn btn-edit">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                            <form action="{{ route('admin.project.destroy', $project->id) }}" method="POST" style="display:inline;" id="delete-form-{{ $project->id }}">
                                @csrf
                                @method('DELETE')
                                <button type="button" onclick="confirmDelete({{ $project->id }})" class="btn btn-delete">
                                    <i class="fas fa-trash-alt"></i> Hapus
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <script>
        // Konfirmasi Hapus Proyek
        function confirmDelete(projectId) {
            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: "Data ini akan dihapus permanen!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Batal',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    // Submit the form to delete the project
                    document.getElementById('delete-form-' + projectId).submit();
                }
            });
        }

        // Menampilkan SweetAlert setelah sukses edit proyek
        @if(session('success'))
            Swal.fire({
                title: 'Sukses!',
                text: '{{ session('success') }}',
                icon: 'success',
                confirmButtonText: 'OK'
            });
        @endif

        // Inisialisasi SimpleLightbox untuk galeri gambar proyek
        var lightbox = new SimpleLightbox('.project-image', {
            captionSelector: 'data-title',
            captionsData: 'title',
            captionDelay: 300
        });
    </script>

</body>
</html>
