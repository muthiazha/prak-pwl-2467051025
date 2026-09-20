<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #eaf2fb;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .profile-container {
            text-align: center;
            width: 320px;
            background-color: #ffffff;
            padding: 40px 30px;
            border-radius: 16px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.08);
        }

        .profile-container h2 {
            color: #333;
            margin-bottom: 30px;
            font-size: 20px;
        }

        .avatar {
            width: 160px;
            height: 160px;
            border-radius: 50%;
            border: 3px solid #7fb3f0;
            margin: 0 auto 30px auto;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(0,0,0,0.15);
        }

        .avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .info-box {
            background-color: #eaf2fb;
            padding: 15px;
            margin-bottom: 15px;
            border-radius: 4px;
            font-size: 18px;
            font-weight: bold;
            color: #333;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="profile-container">
        <h2>Profile Mahasiswa</h2>

        <div class="avatar">
            <img src="{{ asset('images/profil.jpeg') }}" alt="Foto Profil">
        </div>

        <div class="info-box">{{ $nama }}</div>
        <div class="info-box">{{ $kelas }}</div>
        <div class="info-box">{{ $npm }}</div>
    </div>
</body>
</html>