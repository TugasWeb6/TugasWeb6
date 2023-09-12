<!DOCTYPE html>
<html>
     <head>
       <title>contoh list dengan php</title>
     </head> 
<body>
<h2>Daftar absensi siswa</h2>
  <ol>
     <?php  
     for ($i= 1; $i <= 100; $i++)
       {
        echo "<li> Nama mahasiswa ke-$i</li>";
       }
     ?>
   </ol>
   </boby>
   </html>