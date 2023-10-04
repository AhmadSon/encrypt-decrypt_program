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

- [Mengenal polyalphabetic cipher](#mengenal-polyalphabetic-cipher)
- [Daftar Isi](#daftar-isi)
- [Penjelasan Program halaman encryp](#penjelasan-program-halaman-encrypt)
- [Penjelasan Program halaman decrypt](#penjelasan-program-halaman-decrypt)
- [Selesai](#terimakasih)


##  Penjelasan Program halaman encrypt
Program PHP ini merupakan implementasi dari sistem enkripsi Polyalphabetic Cipher. Berikut penjelasan cara kerja program dan komponen-komponennya:

1. <b>HTML Form</b>: Program dimulai dengan HTML Form yang memungkinkan pengguna memasukkan teks biasa dan tiga kunci enkripsi berbeda (Kunci 1, Kunci 2, dan Kunci 3). Pengguna dapat mengirimkan formulir untuk mengenkripsi teks biasa menggunakan kunci ini.

2. <b>PHP Processing</b>: Saat pengguna mengirimkan formulir, skrip PHP di bagian atas file memproses input. Ia memeriksa apakah formulir telah dikirimkan (menggunakan `isset($_POST["submit"])`) dan kemudian mengambil teks biasa dan tiga kunci enkripsi dari input formulir.

3. <b>Encryption Function (`encipher`)</b>: Inti dari proses enkripsi adalah fungsi `encipher`. Fungsi ini menggunakan teks biasa, kunci, dan tanda (`$is_encode`) sebagai parameter. Ia melakukan operasi enkripsi.

   - Fungsi ini terlebih dahulu mengubah teks dan kunci menjadi huruf besar untuk memastikan konsistensi.
   - Kemudian melakukan iterasi melalui teks biasa, menghapus karakter non-huruf dan menyimpan hasilnya dalam variabel `$dest`.
   - Untuk setiap huruf dalam teks biasa yang dibersihkan, ini menghitung huruf yang sesuai dalam teks tersandi berdasarkan kunci dan apakah itu encoding atau decoding.
   - Huruf ciphertext yang dihitung ditambahkan ke variabel `$dest`.

4. <b>Encryption Process</b>: Program memanggil fungsi `encipher` tiga kali, masing-masing dengan kunci enkripsi berbeda. Ini menyimpan hasil dalam variabel `$cod1`, `$cod2`, dan `$cod3`. Hasil enkripsi akhir disimpan dalam variabel `$result`, yang menyimpan hasil enkripsi ketiga.

5. <b>Output HTML</b>: Program menampilkan hasil enkripsi dalam kartu di dalam halaman HTML. Ini menunjukkan teks biasa asli, tiga kunci enkripsi yang digunakan, dan teks terenkripsi.


Singkatnya, program ini memungkinkan pengguna untuk mengenkripsi sepotong teks dengan tiga kunci berbeda, dan menampilkan hasil enkripsi. Logika enkripsi inti diimplementasikan dalam fungsi `encipher`, yang memproses teks masukan dan kunci untuk menghasilkan teks terenkripsi.



##  Penjelasan Program halaman decrypt
Program PHP ini merupakan implementasi dari sistem dekripsi Polyalphabetic Cipher. Hal ini dimaksudkan untuk mendekripsi teks yang sebelumnya telah dienkripsi menggunakan Polyalphabetic Cipher dengan tiga kunci dekripsi yang berbeda (Kunci 1, Kunci 2, dan Kunci 3). Berikut penjelasan cara kerja program dan komponen-komponennya:

1. <b>HTML Form</b>: Mirip dengan program enkripsi, program ini dimulai dengan HTML Form. Hal ini memungkinkan pengguna untuk memasukkan teks terenkripsi dan tiga kunci dekripsi. Pengguna dapat mengirimkan formulir untuk mendekripsi teks terenkripsi menggunakan kunci ini.

2. <b>PHP Processing</b>: Saat pengguna mengirimkan formulir, skrip PHP di bagian atas file memproses input. Ia memeriksa apakah formulir telah dikirimkan (menggunakan `isset($_POST["submit"])`) dan kemudian mengambil teks terenkripsi dan tiga kunci dekripsi dari input formulir.

3. <b>Decryption Function (`encipher`)</b>: Inti dari proses dekripsi adalah fungsi `encipher` yang sama dengan yang digunakan dalam program enkripsi, dengan sedikit modifikasi. Dibutuhkan teks terenkripsi, kunci, dan tanda (`$is_encode`) sebagai parameter. Fungsi ini melakukan operasi dekripsi, yang pada dasarnya merupakan kebalikan dari proses enkripsi.

   - Fungsi ini terlebih dahulu mengubah teks dan kunci menjadi huruf besar untuk memastikan konsistensi.
   - Kemudian melakukan iterasi melalui teks terenkripsi, menghapus karakter non-huruf dan menyimpan hasilnya dalam variabel `$dest`.
   - Untuk setiap huruf dalam teks terenkripsi yang dibersihkan, ini menghitung huruf yang sesuai dalam teks biasa berdasarkan kunci dan apakah itu encoding atau decoding (dalam hal ini, decoding).
   - Huruf teks biasa yang dihitung ditambahkan ke variabel `$dest`.

4. <b>Decryption Process</b>: Program memanggil fungsi `encipher` tiga kali, masing-masing dengan kunci dekripsi berbeda. Ini menyimpan hasil dalam variabel `$dec1`, `$dec2`, dan `$dec3`. Hasil akhir dekripsi disimpan dalam variabel `$result`, yang menampung hasil dekripsi ketiga.

5. <b>HTML Output</b>: Program menampilkan hasil dekripsi dalam kartu di dalam halaman HTML. Ini menunjukkan teks terenkripsi asli, tiga kunci dekripsi yang digunakan, dan teks yang didekripsi (teks biasa).

Singkatnya, program ini memungkinkan pengguna untuk mendekripsi teks terenkripsi sebelumnya menggunakan tiga kunci dekripsi berbeda. Logika dekripsi inti diimplementasikan dalam fungsi `encipher`, yang memproses masukan teks dan kunci terenkripsi untuk menghasilkan teks biasa yang didekripsi.


# TERIMAKASIH
Itu saja dari penjelasan kami. Untuk ke atas silahkan naik rocket ini:<P>
[![](asset/giphy.gif)](#daftar-isi)

