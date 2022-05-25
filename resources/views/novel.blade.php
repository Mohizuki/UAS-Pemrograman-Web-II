@extends('layouts.listnovel')

@section('content')
    <br/>
    <div class="crudbutton">
		<a href="genre/create"><button class="create">Create</button></a>
        <button class="remove" onclick="deleteFunction()">Remove</button>
	</div>
	<div class="novellist">
		<div class="gamnov">
			<img src="images/cover1.jpg" alt="">
		</div>
		<div class="detnov">
			<div class="judnov">
				<h1>Suka-Suka</h1>
			</div>
			<div class="gennov">
				<h2>Action</h2>
				<h2>Fantasy</h2>
			</div>
			<div class="descnov">
				<h3>Suka-Suka kamu merupakan........</h3>
			</div>
		</div>
		<div class="delbutdiv">
			<button class="delbutap">Delete</button>
		</div>
	</div>
	<div class="novellist">
		<div class="gamnov">
			<img src="images/cover2.jpg" alt="">
		</div>
		<div class="detnov">
			<div class="judnov">
				<h1>Suka-Suka</h1>
			</div>
			<div class="gennov">
				<h2>Action</h2>
				<h2>Fantasy</h2>
			</div>
			<div class="descnov">
				<h3>Suka-Suka merupakan........</h3>
			</div>
		</div>
		<div class="delbutdiv">
			<button class="delbutap">Delete</button>
		</div>
	</div>
	<div class="novellist">
		<div class="gamnov">
			<img src="images/cover3.jpg" alt="">
		</div>
		<div class="detnov">
			<div class="judnov">
				<h1>Suka-Suka</h1>
			</div>
			<div class="gennov">
				<h2>Action</h2>
				<h2>Fantasy</h2>
			</div>
			<div class="descnov">
				<h3>Suka-Suka merupakan........</h3>
			</div>
		</div>
		<div class="delbutdiv">
			<button class="delbutap">Delete</button>
		</div>
	</div>
	@foreach($datas as $value)
	<div class="novellist">
		<div class="gamnov">
			<img src="images/cover3.jpg" alt="">
		</div>
		<div class="detnov">
			<div class="judnov">
				<h1>{{ $value['judul'] }}</h1>
			</div>
			<div class="gennov">
				<h2>{{ $value['genre'] }}</h2>
				<h2>Fantasy</h2>
			</div>
			<div class="descnov">
				<h3>{{ $value['desc_novel'] }}</h3>
			</div>
		</div>
		<div class="delbutdiv">
			<button class="delbutap">Delete</button>
			<a href="{{ url('novel/'.$value->novelid.'/edit') }}"><button type="button" class="btn btn-info">Update</button></a>
		</div>
	</div>
	@endforeach
@endsection