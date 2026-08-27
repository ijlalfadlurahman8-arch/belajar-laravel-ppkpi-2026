<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Belajar Laravel</title>
</head>

<body>
    <h1>Selamat Datang di Kelas Junior Web Programming</h1>
    <p>Materi Laravel - Pengurangan</p>

    <form action="{{route('action-pengurangan')}}" method="post">
        @csrf
        {{-- 419: page expired --}}
        <div class="mb-3">
            <label for="">Angka 1</label>
            <input type="number" name="angka1" placeholder="Masukkan angka">
        </div>
        <div class="mb-3">
            <label for="">Angka 2</label>
            <input type="number" name="angka2" placeholder="Masukkan angka">
        </div>
        <button type="submit">Prosess</button>
    </form>

    <h3>Hasilnya adalah: {{ $jumlah }}</h3>
</body>
</html>
