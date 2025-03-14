<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ทดสอบหน้าเว็บ</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
            background-color: #f0f0f0;
        }
        h1 {
            color: #333;
        }
        p {
            font-size: 18px;
            color: #666;
        }
        a {
            color: #007bff;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>ยินดีต้อนรับสู่หน้าเว็บทดสอบ!</h1>
    <p>นี่คือหน้าเว็บง่ายๆ เพื่อทดสอบการทำงานของโฮสติ้ง</p>
    <p>วันที่ปัจจุบัน: <span id="date"></span></p>
    <p>ลองคลิก <a href="https://www.google.com" target="_blank">ที่นี่</a> เพื่อไปยัง Google</p>

    <script>
        // แสดงวันที่ปัจจุบัน
        const dateElement = document.getElementById("date");
        const today = new Date();
        dateElement.textContent = today.toLocaleDateString("th-TH");
    </script>
</body>
</html>
