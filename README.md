# Online Course Management System

## Deskripsi

Online Course Management System adalah aplikasi berbasis web yang dikembangkan menggunakan Laravel. Aplikasi ini memungkinkan pengguna untuk mengelola kursus dan materi dengan fitur CRUD (Create, Read, Update, Delete). Pengguna dapat menambahkan, mengedit, dan menghapus kursus serta materi, serta melihat daftar kursus dan materi yang tersedia.

## Fitur

- **Kursus**: 
  - Menambah kursus baru
  - Melihat daftar kursus
  - Mengedit informasi kursus
  - Menghapus kursus

- **Materi**:
  - Menambahkan materi ke dalam kursus
  - Melihat daftar materi dalam kursus
  - Mengedit informasi materi
  - Menghapus materi

- **Autentikasi**:
  - Login
  - Register
  - Pengaturan profil

## Gambar Tampilan
### Halaman Login

![Login Dashboard](https://github.com/user-attachments/assets/612f9042-bcd0-489e-9646-6366d86885ad)

### Halaman Register

![Register Dashboard](https://github.com/user-attachments/assets/0a7cdeac-1cb5-4376-9696-1531b34e6f90)

### Halaman Dashboard dan Daftar Kursus

![Daftar Kursus](https://github.com/user-attachments/assets/807c96d8-b0d5-4500-a479-f36fddc7e39b)

### Halaman Tambah Kursus

![Tambah Kursus](https://github.com/user-attachments/assets/4a085214-95ed-4203-81f0-f7ba17ec2751)

### Halaman Edit Kursus

![Edit Kursus](https://github.com/user-attachments/assets/62e981a5-6281-4374-a847-a768ec6b6c51)

### Alert Hapus Kursus

![Hapus Kursus](https://github.com/user-attachments/assets/d558b28f-2b02-4850-a243-0e76f9fd3172)

### Halaman Materi

![Daftar Materi](https://github.com/user-attachments/assets/47ad8ec1-f9f9-4c31-be3f-c95ff7d59533)

### Halaman Tambah Materi

![Tambah Materi](https://github.com/user-attachments/assets/92c552ff-448b-436c-82fe-7811633c100e)

### Halaman Edit Materi

![Edit Materi](https://github.com/user-attachments/assets/e348be6f-02a5-4564-b4ce-72448a32d60d)

### Alert Hapus Materi

![Hapus Materi](https://github.com/user-attachments/assets/36a4e832-8bd3-4ba8-bb34-c46860bf2da7)

### Halaman Profile

![Profile](https://github.com/user-attachments/assets/0a156531-83ed-4528-af2e-3a90aaac8a1b)
![Profile 2](https://github.com/user-attachments/assets/5ffe695b-6783-4bfe-b3de-b02a9237e51c)


## Prerequisites

Sebelum menjalankan aplikasi ini, pastikan bahwa Anda memiliki:

- PHP >= 8.0
- Composer
- Laravel >= 9.0
- MySQL atau database lain yang didukung

## Instalasi

1. **Clone Repository**:
    ```bash
    git clone https://github.com/username/repository.git
    ```
   
2. **Masuk ke Direktori Proyek**:
    ```bash
    cd repository
    ```

3. **Instal Dependensi**:
    ```bash
    composer install
    ```

4. **Konfigurasi Environment**:
    Salin file `.env.example` ke `.env` dan sesuaikan konfigurasi database dan lainnya:
    ```bash
    cp .env.example .env
    ```

5. **Generate Key**:
    ```bash
    php artisan key:generate
    ```

6. **Migrasi Database**:
    ```bash
    php artisan migrate
    ```

7. **Jalankan Aplikasi**:
    ```bash
    php artisan serve
    ```
    Akses aplikasi melalui `http://localhost:8000`.

## Penggunaan

1. **Login**: Akses halaman login bisa melalui `/login` atau `localhost:8000`.
2. **Dashboard**: Setelah login, akses dashboard di `/dashboard` untuk melihat dan mengelola kursus.
3. **Tambah Kursus**: Klik tombol "Tambah Kursus" untuk menambahkan kursus baru.
4. **Kelola Materi**: Pilih kursus dan klik "Lihat Materi" untuk mengelola materi dalam kursus tersebut.

## Lisensi

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
