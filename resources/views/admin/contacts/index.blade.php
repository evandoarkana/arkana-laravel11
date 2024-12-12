<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.5.2/dist/sweetalert2.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #000; /* Black background */
            color: #FFA500; /* Orange text */
            font-family: 'Roboto', sans-serif;
        }

        .container {
            background-color: #333; /* Dark grey background for the container */
            border: 2px solid #FFA500; /* Orange border */
            border-radius: 10px;
            padding: 30px;
            max-width: 1200px;
            margin: auto;
        }

        h1 {
            text-align: center;
            color: #FFA500; /* Orange text */
            font-size: 2.5rem;
        }

        .btn {
            color: #000; /* Black text */
            border: 2px solid #FFA500; /* Orange border */
            background-color: #FFA500; /* Orange background */
            font-weight: bold;
            padding: 10px 20px;
            border-radius: 25px;
        }

        .btn:hover {
            background-color: #e67e22; /* Darker orange on hover */
        }

        .card {
            background-color: #444; /* Dark grey background for cards */
            border: 2px solid #FFA500; /* Orange border */
            border-radius: 10px;
            margin-bottom: 20px;
            padding: 20px;
        }

        .card-title {
            color: #FFA500; /* Orange text */
            font-size: 1.5rem;
            margin-bottom: 10px;
        }

        .card-body p {
            color: #ecf0f1; /* Light grey text */
        }

        .back-arrow-btn {
            background-color: #FFA500; /* Orange button */
            color: #fff;
            border: 2px solid #FFA500;
            border-radius: 50%;
            font-size: 18px;
            position: absolute;
            top: 10px;
            left: 10px;
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
    <h1>Contact List</h1>
    <div class="text-center mb-4">
        <a href="{{ route('admin.contacts.create') }}" class="btn">
            <i class="fas fa-user-plus"></i> Add New Contact
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="row">
        @foreach($contacts as $contact)
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            <i class="fas fa-user"></i> {{ $contact->name }}
                        </h5>
                        <p><strong>Email:</strong> {{ $contact->email }}</p>
                        <p><strong>Phone:</strong> {{ $contact->notelp }}</p>
                        <p>{{ $contact->description }}</p>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('admin.contacts.edit', $contact->id) }}" class="btn">
                            <i class="fas fa-edit"></i> Edit
                        </a>

                        <form action="{{ route('admin.contacts.destroy', $contact->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn">
                                <i class="fas fa-trash-alt"></i> Delete
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.5.2/dist/sweetalert2.all.min.js"></script>

<script>
    // SweetAlert for success message
    @if(session('success'))
        Swal.fire({
            icon: 'success',
            title: 'Success!',
            text: '{{ session('success') }}',
            showConfirmButton: true,
        });
    @endif

    // SweetAlert for delete confirmation
    document.querySelectorAll('.delete-form').forEach(form => {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'Cancel',
                reverseButtons: true
            }).then(result => {
                if (result.isConfirmed) {
                    form.submit();
                }
            });
        });
    });
</script>

</body>
</html>
