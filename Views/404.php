<?php 
header('HTTP/1.0 404 Not Found');
?>
<!DOCTYPE html>
<html lang="fa">
<head>
  <meta charset="UTF-8">
  <title>صفحه یافت نشد | 404</title>
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    body {
      background-color: #f4f4f4;
      color: #333;
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      padding: 20px;
    }

    .container {
      max-width: 500px;
    }

    h1 {
      font-size: 120px;
      color: #ff6b6b;
    }

    h2 {
      font-size: 28px;
      margin-bottom: 20px;
    }

    p {
      font-size: 18px;
      margin-bottom: 30px;
    }

    a {
      display: inline-block;
      text-decoration: none;
      background-color: #007bff;
      color: white;
      padding: 10px 25px;
      border-radius: 5px;
      transition: background-color 0.3s;
    }

    a:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>404</h1>
    <h2>صفحه‌ای که دنبال آن هستید پیدا نشد</h2>
    <p>ممکن است آدرس را اشتباه تایپ کرده باشید یا صفحه حذف شده باشد.</p>
    <a href="/WebProgramming/">بازگشت به صفحه اصلی</a>
  </div>
</body>
</html>