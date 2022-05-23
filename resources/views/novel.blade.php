@extends('layouts.listnovel')

@section('content')
    <br/>
    <div class="crudbutton">
        <button class="create">Create</button>
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
@endsection