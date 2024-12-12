<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Skill</title>
    <style>
body {
    background-color: #181818; /* Warna latar belakang gelap yang netral */
    color: #f4f4f4; /* Warna teks abu terang */
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 20px;
}

.container {
    max-width: 600px;
    background-color: #202020; /* Warna kontainer gelap lembut */
    border: 1px solid #ff9800; /* Border oranye tenang */
    border-radius: 10px;
    padding: 30px;
    margin: auto;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5); /* Bayangan lembut */
}

h1 {
    text-align: center;
    color: #ff9800; /* Warna teks oranye */
    margin-bottom: 20px;
    font-size: 2em;
    font-weight: 600;
}

.form-label {
    font-weight: bold;
    margin-bottom: 5px;
    color: #ffcc80; /* Warna label oranye muda */
}

.form-control {
    background-color: #2c2c2c; /* Latar belakang input */
    color: #f4f4f4; /* Warna teks input */
    border: 1px solid #ff9800; /* Border input oranye */
    border-radius: 5px;
    padding: 12px;
    width: 100%;
    margin-bottom: 20px;
    font-size: 1em;
    box-sizing: border-box;
    resize: none;
}

textarea {
    width: 100%;
    resize: none;
}

.form-control::placeholder {
    color: #999; /* Warna placeholder abu-abu */
}

.form-control:focus {
    border-color: #ffa726; /* Warna border saat fokus */
    outline: none;
    background-color: #333; /* Latar belakang saat fokus */
}

.btn-success {
    background-color: #ff9800; /* Warna tombol oranye */
    color: #ffffff;
    border: none;
    border-radius: 5px;
    padding: 12px;
    width: 100%;
    cursor: pointer;
    font-weight: bold;
    font-size: 1em;
    margin-top: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
    transition: background-color 0.3s, transform 0.2s;
}

.btn-success:hover {
    background-color: #fb8c00; /* Warna tombol lebih gelap saat hover */
    transform: translateY(-2px);
}

.form-group {
    margin-bottom: 20px;
}

@media (max-width: 600px) {
    .container {
        padding: 20px;
    }

    h1 {
        font-size: 1.8em;
    }

    .btn-success {
        padding: 10px;
        font-size: 0.9em;
    }
}
    </style>
</head>

<body>
    <div class="container">
        <h1>Edit Skill</h1>

        <form action="{{ route('skill.update', $skill) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name" class="form-label">Skill Name</label>
                <input type="text" name="name" class="form-control" value="{{ $skill->name }}" required placeholder="Enter skill name">
            </div>
            <div class="form-group">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" class="form-control" placeholder="Enter skill description" rows="4">{{ $skill->description }}</textarea>
            </div>
            <button type="submit" class="btn btn-success">Update Skill</button>
        </form>
    </div>
</body>

</html>
