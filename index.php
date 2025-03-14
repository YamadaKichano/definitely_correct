<?php
// ข้อมูลสำหรับเชื่อมต่อฐานข้อมูล (เปลี่ยนตามข้อมูลจริงของคุณ)
    $host = "sql107.infinityfree.com";         // ชื่อโฮสต์ (ดูใน MySQL Databases)
    $username = "if0_38519477";        // ชื่อผู้ใช้ (Username)
    $password = "tSxcSpoM6Wdrj"; // รหัสผ่านของบัญชีโฮสติ้ง
    $database = "if0_38519477_DefinitelyCorrect";   // ชื่อฐานข้อมูล

// สร้างการเชื่อมต่อกับฐานข้อมูล
$conn = mysqli_connect($host, $username, $password, $database);

// ตรวจสอบว่าการเชื่อมต่อสำเร็จหรือไม่
if (!$conn) {
    die("การเชื่อมต่อล้มเหลว: " . mysqli_connect_error());
} else {
    echo "เชื่อมต่อฐานข้อมูลสำเร็จ!";
}

// คุณสามารถเพิ่มโค้ดอื่นๆ ต่อจากนี้ เช่น การดึงข้อมูลหรือบันทึกข้อมูล
// เช่น: $query = "SELECT * FROM table_name";

// ปิดการเชื่อมต่อ (ถ้าไม่ต้องการใช้ต่อ)
mysqli_close($conn);
?>
