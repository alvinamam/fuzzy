@extends('layout.master')
@section('title')
	Beranda
@endsection
@section('content')
		<div id="head">
			<div class="content">
			<h1>selamat datang di beranda sistem perangkingan daerah</h1>
				<p>Metode yang digunakan adalah Logika fuzzy Database Model Tahani</p>
				<button> <a href="{{ url('/data/create') }}">Mulai</a> </button>
			</div>
			<div class="pic"></div>
		</div>
	
@endsection