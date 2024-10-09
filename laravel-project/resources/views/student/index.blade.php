<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Student</h1>
    {{ $nama }}
    <br/>
    {{ $kelas }} 
    <br/>
    {!! $prodi !!}

    <h3>control structures</h3>
    @if($kelas == 'IF D 22')
        Kelas D 22
    @else
        Bukan Kelas D 22
    @endif

    <h3>Pengulangan</h3>
    @foreach($alphabets as $alphabet)
        No. {{$loop->iteration }}
        @if($loop->last)
            {{ $alphabet}}
        @else
        {{ $alphabet}},
        @endif
        <br/>
    @endforeach

    <form method="post" action="#">
        @csrf
        @method('PUT')
    </form>

    @php
        $str = 'lorem';

        echo $str;
    @endphp
</body>
</html>