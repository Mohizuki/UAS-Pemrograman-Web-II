@extends('layouts.listwelcome')

@section('content1')
	@foreach($secone as $secones)
	<div class="course-col">
		<h3>{{$secones['judul']}}</h3>
		<img src="{{ $secones->gambar->gambar }}" alt="">
		<p>{{$secones['caption']}}</p>
		<p>{{$secones->detailgambar}}</p>
	</div>
	@endforeach
@endsection

@section('content2')
		<div class="bawahcon-col">
			<img src="images/cover1.jpg" alt="">
			<div class="layer">
				<h3>Volume 1<br>Shuumatsu Nani Shitemasu ka? Iden: Leila Asprey</h3>
			</div>
		</div>
		<div class="bawahcon-col">
			<img src="images/cover2.jpg" alt="">
			<div class="layer">
				<h3>Volume 1<br>Shuumatsu Nani Shitemasu ka? Mou Ichido dake, Aemasu ka?</h3>
			</div>
		</div>
		<div class="bawahcon-col">
			<img src="images/cover3.jpg" alt="">
			<div class="layer">
				<h3>Volume 2<br>Shuumatsu Nani Shitemasu ka? Mou Ichido dake, Aemasu ka?</h3>
			</div>
		</div>
@endsection

@section('content3')
		<div class="bawahlagi-col">
			<img src="images/cover4.jpg" alt="">
			<h3>“Shuumatsu Nani Shitemasu ka?” series of books.</h3>
			<p>Sukasuka Vol. EX officially on June 2020.</p>
		</div>
		<div class="bawahlagi-col">
			<img src="images/cover5.jpg" alt="">
			<h3>“Shuumatsu Nani Shitemasu ka?” series of books.</h3>
			<p>Specifically, this is a story about an incident in spring. It dates back to the year of 415 in the common calendar of Regul Aire, almost 30 years before Feodor Jessman would meet four certain Leprechaun girls.</p>
		</div>
		<div class="bawahlagi-col">
			<img src="images/cover6.jpg" alt="">
			<h3>“Shuumatsu Nani Shitemasu ka?” series of books.</h3>
			<p>[Sukamoka Vol. 4] A Self-Indulgent Fantasy</p>
		</div>
@endsection
