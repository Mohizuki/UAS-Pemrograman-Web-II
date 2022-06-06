@extends('layouts.listgenre')


@section('content2')
	@foreach($listgenre as $listgenres)
	<div class="course-col">
		<a href="genre/fantasy" style="color:black;text-decoration: none; background-color: none;">
		<div class="imagegenre">
		<img src="{{ $listgenres->gambar->gambar }}" alt="" style="position: absolute; width: 357px; margin-top: 1px;">
		<img src="images/cloud2.gif" alt="" style="opacity: 0.5; margin: auto;">
		</div>
		<div class="textgenre">
		<h1>{{ $listgenres['genrename']}}</h1>
		</div>
		</a>
		<p>{{ $listgenres['caption']}}</p>
	</div>
	@endforeach
@endsection