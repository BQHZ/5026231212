@extends('template')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Simple Linktree</title>
  <style>
    /* body {
      background-color: #121212;
      color: #fff;
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      display: flex;
      min-height: 100vh;
      align-items: center;
      justify-content: center;
      flex-direction: column;
    } */
    .container {
      width: 100%;
      max-width: 400px;
      padding: 20px;
      text-align: center;
    }
    .profile-pic {
      width: 120px;
      height: 120px;
      border-radius: 50%;
      object-fit: cover;
      border: 3px solid #00bcd4;
      margin-bottom: 20px;
    }
    h1 {
      margin: 0 0 10px;
      font-weight: 700;
      font-size: 1.8rem;
    }
    p {
      color: #bbb;
      margin: 0 0 30px;
    }
    .links {
      display: flex;
      flex-direction: column;
      gap: 15px;
    }
    .links a {
      background-color: #00bcd4;
      color: #121212;
      text-decoration: none;
      padding: 14px 20px;
      border-radius: 10px;
      font-weight: 600;
      transition: background-color 0.3s ease;
    }
    .links a:hover {
      background-color: #0097a7;
      color: #fff;
    }
    @media (max-width: 450px) {
      .container {
        padding: 10px;
      }
      .profile-pic {
        width: 100px;
        height: 100px;
      }
      .links a {
        padding: 12px 16px;
        font-size: 0.9rem;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <img
      src="./bqhz_photo.jpg"
      alt="Profile Picture"
      class="profile-pic"
    />
    <h1>BAQHIZ FARUQ S</h1>
    <p>@bqhz</p>

    <div class="links">
      <a href="tugas1" target="_blank" rel="noopener noreferrer">Tugas 1</a>
      <a href="latihanlayout" target="_blank" rel="noopener noreferrer">Login Layout</a>
      <a href="topikcss" target="_blank" rel="noopener noreferrer">Topik CSS</a>
      <a href="linktree" target="_blank" rel="noopener noreferrer">Linktree</a>
      <a href="bootstrap" target="_blank" rel="noopener noreferrer">bootstrap</a>
      <a href="js1" target="_blank" rel="noopener noreferrer">js1</a>
      <a href="js2" target="_blank" rel="noopener noreferrer">js2</a>
    </div>
  </div>
</body>
</html>

@endsection
