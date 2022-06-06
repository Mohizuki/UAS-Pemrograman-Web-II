@extends('layouts.listnovel')

@section('content')
    <br/>
    <div class="crudbutton">
		<a href="{{ route('create-genre') }}"><button class="create">Create</button></a>
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
			<button type="button" class="btn btn-info">Update</button>
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
			<button type="button" class="btn btn-info">Update</button>
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
			<button type="button" class="btn btn-info">Update</button>
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
				@if($value->genre == null)
					<p></p>
					@else

					@foreach($value->genre as $genrelist)
					<h2>{{ $genrelist }}</h2>
					@endforeach

        		@endif
			</div>
			<div class="descnov">
				<h3>{{ $value['desc_novel'] }}</h3>
			</div>
		</div>
		<div class="delbutdiv">
			<form action="{{ route('delete-genre', $value->id) }}" method="post">
				@csrf
				@method('DELETE')
			<button class="delbutap" onclick="return confirm('Are you sure you want to delete this novel ?');">Delete</button>
			</form>
			<a href="{{ route('edit-genre', $value->id) }}"><button type="button" class="btn btn-info">Update</button></a>
		</div>
	</div>
	@endforeach
@endsection