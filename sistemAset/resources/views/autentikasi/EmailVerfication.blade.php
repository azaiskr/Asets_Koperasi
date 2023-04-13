<!DOCTYPE html>
<html>
<head>
    <title>Verifikasi Akun</title>
</head>
<body>
    <p>Halo <b>{{$details['name']}}</b>!</p>
    <p>Berikut ini adalah Data Anda:</p>
    <table>
      <tr>
        <td>name</td>
        <td>:</td>
        <td>{{$details['name']}}</td>
      </tr>
      <tr>
        <td>Email</td>
        <td>:</td>
        <td>{{$details['email']}}</td>
      </tr>
      <tr>
        <td>Tanggal Register</td>
        <td>:</td>
        <td>{{$details['datetime']}}</td>
      </tr>
    </table>

    <center>
      <h3>Salin link untuk verifikasi akun:</h3>
      <b style="color:blue">{{$details['url']}}</b>
    </center>

  <p>Terima kasih.</p>
</body>
</html>