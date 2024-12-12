<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skills Management</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background: #000000;
            margin: 0;
            padding: 0;
            color: #333;
        }

        .container {
            max-width: 1200px;
            margin: 50px auto;
            padding: 40px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            border: 2px solid #ff9800;
        }

        h1 {
            text-align: center;
            color: #ff9800;
            font-size: 36px;
            font-weight: 700;
            margin-bottom: 30px;
        }

        .btn-primary {
            background-color: #ff9800;
            color: #fff;
            padding: 12px 25px;
            text-decoration: none;
            border-radius: 8px;
            display: inline-flex;
            align-items: center;
            font-size: 16px;
            font-weight: 600;
            transition: all 0.3s ease;
            margin-bottom: 20px;
            border: 2px solid #ff9800;
        }

        .btn-primary:hover {
            background-color: #fff;
            color: #ff9800;
            border: 2px solid #ff9800;
            transform: translateY(-2px);
        }

        .btn-primary i {
            margin-right: 10px;
        }

        .table-responsive {
            margin-top: 20px;
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            border: 1px solid #ffcc80;
        }

        th, td {
            padding: 15px;
            text-align: center;
            border-bottom: 1px solid #ffe0b2;
        }

        th {
            background-color: #ff9800;
            color: #fff;
            font-weight: 700;
        }

        td {
            color: #ff9800;
        }

        tr:hover td {
            background-color: #fff7e6;
        }

        .btn-warning, .btn-danger {
            padding: 8px 15px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: 600;
            font-size: 14px;
            display: inline-flex;
            align-items: center;
            border: 2px solid transparent;
        }

        .btn-warning {
            background-color: #fff;
            color: #ff9800;
            border: 2px solid #ff9800;
        }

        .btn-warning:hover {
            background-color: #ff9800;
            color: #fff;
        }

        .btn-danger {
            background-color: #fff;
            color: #ff5722;
            border: 2px solid #ff5722;
        }

        .btn-danger:hover {
            background-color: #ff5722;
            color: #fff;
        }

        .file-link {
            color: #ff9800;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .file-link:hover {
            color: #f57c00;
        }

        .back-arrow-btn {
            padding: 10px;
            background-color: #ff9800;
            color: #fff;
            border: 2px solid #ff9800;
            border-radius: 50%;
            font-size: 18px;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            position: absolute;
            top: 15px;
            left: 15px;
            transition: all 0.3s ease;
        }

        .back-arrow-btn:hover {
            background-color: #fff;
            color: #ff9800;
        }
    </style>
</head>

<body>
    <div class="container">
        <a href="{{ route('admin.dashboard') }}">
            <button class="back-arrow-btn">
                <i class="fas fa-arrow-left"></i>
            </button>
        </a>
        <h1>Certificate Management</h1>
        <a href="{{ route('admin.certificate.create') }}" class="btn btn-primary">
            <i class="fas fa-plus-circle"></i> Create Certificate
        </a>

        <div class="table-responsive">
            <table id="skillsTable" class="table display">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Issued By</th>
                        <th>Issued At</th>
                        <th>File</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($certificates as $certif)
                    <tr>
                        <td>{{ $certif->id }}</td>
                        <td>{{ $certif->name }}</td>
                        <td>{{ $certif->issued_by }}</td>
                        <td>{{ $certif->issued_at }}</td>
                        <td>
                            @if($certif->file)
                            <a href="{{ asset('storage/' . $certif->file) }}" target="_blank" class="file-link">View Certificate</a>
                            @else
                            No file uploaded
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('admin.certificate.edit', $certif) }}" class="btn btn-warning">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                            <form action="{{ route('admin.certificate.destroy', $certif) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">
                                    <i class="fas fa-trash-alt"></i> Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $(document).ready(function () {
            $('#skillsTable').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true
            });

            const deleteForms = document.querySelectorAll('form[method="POST"]');
            deleteForms.forEach(form => {
                form.addEventListener('submit', function (event) {
                    event.preventDefault();
                    Swal.fire({
                        title: 'Are you sure?',
                        text: "You won't be able to revert this!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#ff9800',
                        cancelButtonColor: '#f44336',
                        confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            form.submit();
                        }
                    });
                });
            });

            @if (session('success'))
            Swal.fire({
                title: 'Success!',
                text: "{{ session('success') }}",
                icon: 'success',
                confirmButtonText: 'OK'
            });
            @endif
        });
    </script>
</body>

</html>
