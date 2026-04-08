# 📚 Sistem Manajemen Data Sekolah

Project ini merupakan implementasi **REST API menggunakan Laravel** yang diintegrasikan dengan **Frontend JQuery AJAX** untuk mengelola data sekolah.

Project ini dibuat untuk memenuhi tugas **Praktikum API**.

---

## 🚀 Fitur Utama

✔ Menampilkan Data Sekolah (GET API)  
✔ Menambahkan Data Sekolah (POST API)  
✔ Melihat Detail Sekolah (GET by ID)  
✔ Integrasi **Laravel API + JQuery AJAX**  
✔ Tampilan modern menggunakan **HTML, CSS, FontAwesome**

---

## 🖥️ Preview Tampilan

### Dashboard

![Dashboard](https://via.placeholder.com/900x400?text=Dashboard+Sekolah)

### Detail Data

![Detail](https://via.placeholder.com/500x300?text=Detail+Sekolah)

---

## ⚙️ Teknologi yang Digunakan

- PHP
- Laravel
- JQuery
- AJAX
- HTML
- CSS
- FontAwesome

Framework utama:
👉 https://laravel.com

---

## 📂 Struktur Project


API_Sekolah
│
├── app
├── database
├── routes
│ └── api.php
│
├── public
│ └── frontend
│ └── index.html
│
└── README.md


---

## 🔗 API Endpoint

### 1️⃣ Menampilkan Semua Data


GET /api/sekolah


Response:

```json
[
{
"id":1,
"nama_sekolah":"SMA Negeri 1",
"alamat":"Yogyakarta"
}
]
2️⃣ Menambahkan Data
POST /api/sekolah

Body:

{
"nama_sekolah":"SMA Negeri 2",
"alamat":"Yogyakarta",
"kepala_sekolah":"Budi Santoso",
"email":"sma2@mail.com"
}
3️⃣ Detail Data
GET /api/sekolah/{id}

Contoh:

GET /api/sekolah/1
▶️ Cara Menjalankan Project

1️⃣ Clone repository

git clone https://github.com/Averroes098/api-sekolah.git

2️⃣ Masuk ke folder project

cd api-sekolah

3️⃣ Install dependency

composer install

4️⃣ Jalankan server Laravel

php artisan serve

5️⃣ Buka frontend

public/frontend/index.html
👨‍💻 Author

Muhammad Nafi Averroes
Mahasiswa Teknologi Informasi
Universitas Negeri Yogyakarta

GitHub:
https://github.com/Averroes098

⭐ Tujuan Project

Project ini dibuat untuk mempelajari:

REST API
Integrasi Backend dan Frontend
AJAX Request
Pengelolaan Data menggunakan Laravel
📜 License

Project ini menggunakan lisensi MIT.


---

# ✨ Tampilan README di GitHub

Nanti di :contentReference[oaicite:1]{index=1} akan terlihat seperti ini:

📚 **Sistem Manajemen Data Sekolah**

🚀 Fitur  
🖥️ Preview  
⚙️ Teknologi  
📂 Struktur Project  
🔗 API Endpoint  
▶️ Cara Menjalankan  
👨‍💻 Author

Ini terlihat **jauh lebih profesional daripada README default Laravel**.

---

💡 Kalau kamu mau, saya juga bisa membuat **README level mahasiswa skripsi** dengan tambahan:

- 📸 **Screenshot asli dari project kamu**
- 🗄 **Diagram API**
- 🧠 **Penjelasan arsitektur sistem**
- 📊 **Flow AJAX → Laravel → Database**

Biasanya ini yang membuat **repo GitHub kamu terlihat seperti portfolio developer**.
