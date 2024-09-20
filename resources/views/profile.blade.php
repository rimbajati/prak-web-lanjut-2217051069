<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f4f4f4;
        }

        .profile-card {
            width: 320px;
            border-radius: 16px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15);
            background-color: #ffffff;
            overflow: hidden;
            text-align: center;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .profile-card:hover {
            transform: scale(1.05);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.2);
        }

        .profile-photo {
            width: 140px;
            height: 140px;
            margin: 30px auto;
            position: relative;
            background-color: #ddd;
            border-radius: 50%;
            overflow: hidden;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
        }

        .profile-photo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .profile-info {
            padding: 20px;
            background-color: #f7f7f7;
        }

        .profile-info p {
            margin: 12px 0;
            font-size: 20px;
            background-color: #4CAF50;
            color: #ffffff;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s;
        }

        .profile-info p:hover {
            background-color: #45a049;
        }

        .profile-info p:first-child {
            margin-top: 0;
        }

        .profile-info p:last-child {
            margin-bottom: 0;
        }

        .profile-info strong {
            font-size: 18px;
            color: #ffeb3b;
            display: block;
            margin-bottom: 6px;
        }

    </style>
</head>
<body>
    <div class="profile-card">
        <div class="profile-photo">
            <img src="{{ asset('assets/img/miko.jpg') }}" alt="Deskripsi Gambar">
        </div>
        <div class="profile-info">
            <p><strong>Nama:</strong> <?= $nama ?></p>
            <p><strong>Kelas:</strong> <?= $kelas ?></p>
            <p><strong>NPM:</strong> <?= $npm ?></p>
        </div>
    </div>
</body>
</html>
