# *:information_source: SISTEM INFORMASI PENCATATAN KEUANGAN*
Sistem ini merupakan implementasi dari project laravel yang dirancang untuk memudahkan pencatatan pemasukan dan pengeluaran keuangan suatu organisasi atau perusahaan dengan menggunakan Framework Laravel 6.2 dan PHP Versi 7.2. 

# *:gear: Requirement*
## Berikut beberapa aplikasi yang perlu diinstal terlebih dahulu:
1. XAMPP 7.2.x (https://sourceforge.net/projects/xampp/files/XAMPP%20Windows/)
2. Composer (https://getcomposer

# *➡️ FLOWCHART*
![flowchart SIA](https://github.com/AditiyaRizqi/Sistem-Pencatatan-Keuangan/assets/151179136/dd3068ea-4ba9-42a7-9573-abd3c9eb5dff)
# *➡️ ERD*
![image (6)](https://github.com/AditiyaRizqi/Sistem-Pencatatan-Keuangan/assets/151179136/0479c554-3317-4c95-87ed-ab24ed98e74c)
# *➡️ DATABASE*
![Screenshot (515)](https://github.com/AditiyaRizqi/Sistem-Pencatatan-Keuangan/assets/151179136/c355417b-bcdc-457f-a130-86bbb679ead9)
# *➡️ STRUCTURE*
![Screenshot (514)](https://github.com/AditiyaRizqi/Sistem-Pencatatan-Keuangan/assets/151179136/4cc01368-d300-468a-8956-9562b6017316)


# *ℹ️: LANGKAH-LANGKAH*
## 1. Clone Project File / Download File
Clone Project dengan perintah terminal `gitbash` sebagai berikut:
```
git clone https://github.com/AditiyaRizqi/Sistem-Pencatatan-Keuangan.git
```
Atau bisa klik tombol download Zip dan extrak file tersebut
## 2. Buat Database
Buat Database dengan nama `laravel`
## 3. Ubah File ENV
Ubah file dari `.env.example` menjadi `.env`

## 4. Set Up
Buka Terminal di proyek folder Anda dan jalankan perintah dibawah ini:
```
composer install
```
```
composer update
```

Bila Muncul informasi 'requirements could not be resolved to an installable-set' masukan perintah di bawah ini:
```
composer update --ignore-platform-reqs
```
```
php artisan key:generate
```
```
php artisan migrate
```
```
php artisan serve
```

Copy Paste Link Tertampil ke Browser Anda
```
http://127.0.0.1:8000/
```


# *➡️ TAMPILAN*
## Home
![Screenshot (492)](https://github.com/AditiyaRizqi/Sistem-Pencatatan-Keuangan/assets/151179136/cb1a0bad-327e-4239-9c92-f41e41bb1753)
## Kategori
![Screenshot (493)](https://github.com/AditiyaRizqi/Sistem-Pencatatan-Keuangan/assets/151179136/c60b6075-2366-4250-8577-7e84167c2fb2)
## Transaksi
![Screenshot (494)](https://github.com/AditiyaRizqi/Sistem-Pencatatan-Keuangan/assets/151179136/4daf64ad-82fc-473d-8cbc-80df89e5a01e)
