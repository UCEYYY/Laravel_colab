@extends('master')
@section('content')
    <p>Nama : {{ $nama }}</p>
    <p>NIM : 
        @foreach($NIM as $nim)
            {{ $nim }}
        @endforeach
    </p>
    <p>Jurusan : 
        @foreach($jurusan as $jr)
            {{ $jr }}
        @endforeach
    </p>
    <p>Alamat : 
        @foreach($alamat as $al)
            {{ $al }}
        @endforeach
    </p>
    <p>Semester : 
        @foreach($semester as $sm)
            {{ $sm }}
        @endforeach
    </p>
    <h1><u>foto saya</u></h1>
    <img src="{{ asset('img/12.jpg') }}" alt="Foto Saya" />
@endsection
