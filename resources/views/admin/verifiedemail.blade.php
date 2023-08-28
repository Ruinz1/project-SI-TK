<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Pendaftaran</title>
</head>
<body>
    <p>Hallo <b>{{$details['nama']}}</b> berikut ini adalah Pendaftaran TKTI Al-Qolam:</p>
    <table>
      <tr>
        <td>Nama Lengkap</td>
        <td>:</td>
        <td>{{$details['nama']}}</td>
      </tr>
      <tr>
        <td>Email</td>
        <td>:</td>
        <td>{{$details['email']}}</td>
      </tr>
    </table>
    <p>Selamat <b>{{$details['nama']}}</b> telah Berhasil Mendaftar.</p>
    <p>Masuk ke grup wa untuk informasi lebih lanjut : https://chat.whatsapp.com/CZt1VdpVPKfG5aTTSF7UDQ</p>
</body>
</html>