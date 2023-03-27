<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak PDF</title>
    <style>
        .status{
            position: absolute;left: 20px;background-color: blue;padding:10px;
        }
    </style>
</head>
<body>
    @if($aduan->status == 0)
        <p style="position: absolute;left: 20px;background-color: #3490dc;padding:10px;">Data Baru Masuk</p>
    @elseif($aduan->status == 1)
        <p style="position: absolute;left: 20px;background-color: #6cb2eb;padding:10px;">Data Sedang Dikerjakan</p>
    @else
        <p style="position: absolute;left: 20px;background-color: #38c172;padding:10px;">Data Selesai Dikerjakan</p>
    @endif
    <table>
        <tr>
            <td colspan="4">
                <img src="image/aduan/{{ $aduan->image }}" width="100%" height="65%">
            </td>
        </tr>
        <tr>
            <td>
                <p>Nama :</p>
                <p>{{ $aduan->nama }}</p>
            </td>
            <td>
                <p>NIK :</p>
                <p>{{ $aduan->nik }}</p>
            </td>
            <td>
                <p>Nomor Telepon :</p>
                <p>{{ $aduan->no_telp }}</p>
            </td>
            <td>
                <p>Tanggal Aduan :</p>
                <p>{{ $aduan->created_at }}</p>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <p>Lokasi :</p>
                <p>{{ $aduan->lokasi }}</p>
            </td>
            <td colspan="2">
                <p>Aduan :</p>
                <p>{{ $aduan->aduan }}</p>
            </td>
        </tr>
    </table>
    <!-- <p>Nama :</p>
    <p>{{ $aduan->nama }}</p>
    <p>NIK :</p>
    <p>{{ $aduan->nik }}</p>
    <p>Nomor Telepon :</p>
    <p>{{ $aduan->no_telp }}</p>
    <p>Tanggal Aduan :</p>
    <p>{{ $aduan->created_at }}</p>
    <p>Lokasi :</p>
    <p>{{ $aduan->lokasi }}</p>
    <p>Aduan :</p>
    <p>{{ $aduan->aduan }}</p> -->
</body>
</html>