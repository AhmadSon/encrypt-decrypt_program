# Kelompok
<body>
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>NIM</th>
            <th>Kelas</th>
        </tr>
        <tr>
            <td>Ahmad Syukron</td>
            <td>312110056</td>
            <td>TI.21.A.1</td>
        </tr>
        <tr>
        </tr>
    </table>
</body>
 
## Mengenal polyalphabetic cipher
<p>polyalphabetic cipher (Penyandian polialfabetik) adalah sebuah berbagai jenis penyandian yang berdasarkan pada metode substitusi, dengan menggunakan beberapa huruf subtitusi. Penyandian Vigenère dapat dikatakan sebagai salah satu penyandian polialfabetik yang paling dikenal, meskipun berupa penyandian sederhana. Mesin Enigma melakukan penyandian secara lebih kompleks. Tetapi, secara konsep masih merupakan penyandian substitusi polialfabetik.</p>

# Daftar Isi

- [Server DEMO](#server-demo)
  - [Video Penjelasan Aplikasi](#video-penjelasan-aplikasi)
- [Langkah Pembuatan](#langkah-pembuatan)
  - [Langkah 1: Install Codeigniter 4](#langkah-1-instal-codeigniter-4)
  - [Langkah 2: Create ERD](#langkah-2-create-erd)
  - [Langkah 3: Create the Database](#langkah-3-create-the-database)
  - [Langkah 4: Configuration](#langkah-4-configuration)
  - [Langkah 5: Create Model](#langkah-5-create-model)
  - [Langkah 6: Create Controller](#langkah-6-create-controller)
  - [Langkah 7: Create Views](#langkah-7-create-views)
  - [Langkah 8: Routes](#langkah-8-routes)
  - [Membuat Menu LOGIN](#membuat-menu-login)
- [Selesai](#terimakasih)


##  Penjelasan Program
Program PHP ini merupakan implementasi dari sistem enkripsi Polyalphabetic Cipher. Berikut penjelasan cara kerja program dan komponen-komponennya:

1. <b>HTML Form</b>: Program dimulai dengan HTML Form yang memungkinkan pengguna memasukkan teks biasa dan tiga kunci enkripsi berbeda (Kunci 1, Kunci 2, dan Kunci 3). Pengguna dapat mengirimkan formulir untuk mengenkripsi teks biasa menggunakan kunci ini.

2. <b>PHP Processing</b>: Saat pengguna mengirimkan formulir, skrip PHP di bagian atas file memproses input. Ia memeriksa apakah formulir telah dikirimkan (menggunakan <b>`isset($_POST["submit"])`</b>) dan kemudian mengambil teks biasa dan tiga kunci enkripsi dari input formulir.

3. <b>Fungsi Enkripsi (`encipher`)<b>: Inti dari proses enkripsi adalah fungsi `encipher`. Fungsi ini menggunakan teks biasa, kunci, dan tanda (`$is_encode`) sebagai parameter. Ia melakukan operasi enkripsi.

   - Fungsi ini terlebih dahulu mengubah teks dan kunci menjadi huruf besar untuk memastikan konsistensi.
   - Kemudian melakukan iterasi melalui teks biasa, menghapus karakter non-huruf dan menyimpan hasilnya dalam variabel `$dest`.
   - Untuk setiap huruf dalam teks biasa yang dibersihkan, ini menghitung huruf yang sesuai dalam teks tersandi berdasarkan kunci dan apakah itu dikodekan atau didekode.
   - Huruf ciphertext yang dihitung ditambahkan ke variabel `$dest`.

4. <b>Proses Enkripsi<b>: Program memanggil fungsi `encipher` tiga kali, masing-masing dengan kunci enkripsi berbeda. Ini menyimpan hasil dalam variabel `$cod1`, `$cod2`, dan `$cod3`. Hasil enkripsi akhir disimpan dalam variabel `$result`, yang menyimpan hasil enkripsi ketiga.

5. <b>Output HTML<b>: Program menampilkan hasil enkripsi dalam kartu di dalam halaman HTML. Ini menunjukkan teks biasa asli, tiga kunci enkripsi yang digunakan, dan teks terenkripsi.

6. <b>Footer<b>: Program ini menyertakan footer yang menampilkan nama pembuat kode dan ikon kecil.

Singkatnya, program ini memungkinkan pengguna untuk mengenkripsi sepotong teks dengan tiga kunci berbeda, dan menampilkan hasil enkripsi. Logika enkripsi inti diimplementasikan dalam fungsi `encipher`, yang memproses teks masukan dan kunci untuk menghasilkan teks terenkripsi.


# TERIMAKASIH
Itu saja dari penjelasan kami. Untuk ke atas silahkan naik rocket ini:<P>
[![](asset/giphy.gif)](#daftar-isi)

