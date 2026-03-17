<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perulangan</title>
    <link rel="stylesheet" href="css/perulangan.css">
</head>
<body>
    <!--div class="container">
    <h2>Perulangan For</h2>

    <div class="col-md-6">
        @for ($i = 0; $i < 5; $i++)
            Looping ke- {{ $i }} <br/>
        @endfor
    </div>
</div-->

<!--div class="container">
    <h2>Perulangan While</h2>

    <div class="col-md-6">
        <--?php $i = 1; ?>

        @while ($i < 5)
            Looping ke- {{ $i }} <br/>
            <--?php $i++; ?>
        @endwhile

    </div>
</div-->

<div class="container">
    <h2>Perulangan Foreach</h2>

    <div class="col-md-6">
        <h4>Nama = {{ $nama }}, NIM = {{ $nim }}</h4>

        Nilai =
        @foreach ($total_nilai as $nilai)
            <div class="alert alert-info d-inline-block">
                {{ $nilai }}
            </div>
        @endforeach
    </div>
</div>

</body>
</html>