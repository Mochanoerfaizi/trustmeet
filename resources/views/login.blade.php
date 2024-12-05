<!-- resources/views/auth/login.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TrustMeet - Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        /* Dasar */
/* Elemen Dasar */
.box {
    width: 150px;
    height: 50px;
    background-color: #4CAF50;
    color: white;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 8px;
    font-weight: bold;
    cursor: pointer;
     animation: verticalShake 0.5s ease-in-out; /* Animasi berjalan otomatis sekali */

}



/* Animasi Goyang Vertikal */
@keyframes verticalShake {
    0%, 100% {
        transform: translateY(0); /* Posisi awal dan akhir */
    }
    25% {
        transform: translateY(-10px); /* Naik sedikit */
    }
    50% {
        transform: translateY(10px); /* Turun sedikit */
    }
    75% {
        transform: translateY(-5px); /* Naik kecil */
    }
}

/* Aktifkan animasi */


    </style>
</head>
<body>
<div class="box">Shake Me!</div>




</body>
</html>
