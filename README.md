<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

#เกี่ยวกับ Short URL Generator
โปรเจ็กต์ Short URL Generator ในรุ่นนี้ถูกพัฒนาขึ้นโดยใช้ Laravel เป็นกรอบการพัฒนาเว็บแอปพลิเคชัน PHP ที่มีประสิทธิภาพสูงและใช้งานง่าย. โปรเจ็กต์นี้ช่วยให้ผู้ใช้สามารถสร้าง URL ย่อ (Short URL) ได้อย่างง่ายและรวดเร็วเพื่อใช้ในการแชร์ลิงก์ในสื่อโซเชียลมีเดียหรือที่อื่น ๆ ที่ต้องการลิงก์ที่สั้นและสะดวก.

#การติดตั้ง
สำหรับการติดตั้ง Short URL Generator ที่พัฒนาด้วย Laravel 10 คุณสามารถทำตามขั้นตอนดังนี้:

1.ดาวน์โหลดโปรเจ็กต์จาก GitHub หรือใช้คำสั่ง git clone: https://github.com/Next-Tolatto/Short_URL.git

2.เข้าไปในไดเรกทอรีของโครงการ cd Short_URL

3.ติดตั้ง dependencies โดยใช้ Composer: composer install

4.สร้างไฟล์ .env โดยคัดลอก .env.example และปรับแก้ค่าที่จำเป็น เช่น การเชื่อมต่อฐานข้อมูล

5.สร้างโครงสร้างฐานข้อมูล: php artisan migrate

6.รันแอพพลิเคชัน: php artisan serve

7.เข้าใช้งานแอพพลิเคชันผ่านเบราว์เซอร์โดยไปที่ http://localhost:8000

#การใช้งาน

หน้าหลักของแอพพลิเคชันจะแสดงแบบฟอร์มให้คุณใส่ URL ที่คุณต้องการย่อ

คลิกปุ่ม "Shorten" เพื่อสร้าง Short URL และ QR Code สำหรับ URL ที่คุณใส่

Short URL ที่สร้างขึ้นจะแสดงหน้าเว็บไซต์และคุณสามารถคัดลอกและแชร์ได้ ส่วน QR Code สามารถสแกนและไปยังหน้าเว็บไซต์ที่ต้องการได้