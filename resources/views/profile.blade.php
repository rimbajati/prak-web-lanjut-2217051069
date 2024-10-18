<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
    <style>
    body {
        font-family: 'Roboto', sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        background-color: #e9ecef;
    }

    .profile-card {
        width: 340px;
        border-radius: 20px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        background: linear-gradient(135deg, #ffffff, #f7f7f7);
        overflow: hidden;
        text-align: center;
        transition: transform 0.4s ease, box-shadow 0.4s ease;
    }

    .profile-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 16px 40px rgba(0, 0, 0, 0.3);
    }

    .profile-photo {
        width: 150px;
        height: 150px;
        margin: 30px auto;
        position: relative;
        background-color: #ddd;
        overflow: hidden;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
    }

    .profile-photo img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .profile-info {
        padding: 20px;
        background-color: #ffffff;
    }

    .profile-info p {
        margin: 12px 0;
        font-size: 18px;
        background-color: #007bff;
        color: #ffffff;
        padding: 12px;
        border-radius: 10px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        transition: background-color 0.4s, box-shadow 0.4s;
    }

    .profile-info p:hover {
        background-color: #0056b3;
        box-shadow: 0 6px 16px rgba(0, 0, 0, 0.2);
    }

    .profile-info p:first-child {
        margin-top: 0;
    }

    .profile-info p:last-child {
        margin-bottom: 0;
    }

    .profile-info strong {
        font-size: 18px;
        color: #ffc107;
        display: block;
        margin-bottom: 8px;
    }

    .info {
        margin-bottom: 15px;
        padding: 15px;
        background: #f7f7f7;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        transition: background-color 0.3s ease, transform 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .info::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, rgba(0, 123, 255, 0.3), rgba(0, 123, 255, 0));
        transform: scaleX(0);
        transform-origin: left;
        transition: transform 0.4s ease;
        z-index: 0;
    }

    .info:hover::before {
        transform: scaleX(1);
        transform-origin: right;
    }

    .info p {
        margin: 0;
        font-size: 16px;
        z-index: 1;
        position: relative;
        color: #333;
        font-weight: 500;
        letter-spacing: 0.5px;
    }

    .info .label {
        font-size: 14px;
        font-weight: 700;
        color: #007bff;
        margin-bottom: 5px;
    }

    .info .value {
        font-size: 18px;
        font-weight: 600;
        color: #555;
    }

    .info:hover {
        background-color: #e3f2fd;
        transform: translateY(-5px);
        box-shadow: 0 6px 16px rgba(0, 123, 255, 0.2);
    }

    </style>
</head>
<body>
    <div class="profile-card">
        <div class="profile-photo">
            <img src="{{ asset('assets/upload/img/' . $user->foto) }}" class="card-img-top" alt="">
        </div>
        
        <div class="info">
            <p class="label">Nama :</p>
            <p class="value">{{ $user->nama }}</p>
        </div>
        <div class="info">
            <p class="label">NPM :</p>
            <p class="value">{{ $user->npm }}</p>
        </div>
        <div class="info">
            <p class="label">Kelas :</p>
            <p class="value">{{ $user->nama_kelas ?? 'Kelas Tidak Ditemukan' }}</p>
        </div>
    </div>
</body>
</html>