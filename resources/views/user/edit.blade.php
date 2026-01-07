@extends('layouts.app')

@section('title', 'Edit User Dawuan')

@section('content')

<div class="container">
	<a href="/admin/user" class="btn btn-primary mb-3">Kembali</a>
	<div class="row">
		<div class="col-md-12">
			<form action="{{ route('user.update', $user->id) }}" method="POST" enctype="multipart/form-data">
				@method('PUT')
				@csrf

				<div class="form-group">
					<label for="">Name</label>
					<input type="text" class="form-control" name="name" placeholder="Nama" value="{{ $user->name }}">
				</div>
				@error('name')
				<small style="color:red">{{$message}}</small>
				@enderror

				<div class="form-group">
					<label for="">Level</label>
					<select class="form-control" name="level">
						<option value="admin" {{ $user->level == 'admin' ? 'selected' : '' }}>Admin</option>
						<option value="superadmin" {{ $user->level == 'superadmin' ? 'selected' : '' }}>Superadmin</option>
					</select>
				</div>
				@error('level')
				<small style="color:red">{{$message}}</small>
				@enderror

				<div class="form-group">
					<label for="">Email</label>
					<input type="text" class="form-control" name="email" placeholder="Email" value="{{ $user->email }}">
				</div>
				@error('email')
				<small style="color:red">{{$message}}</small>
				@enderror

				<div class="form-group">
					<label for="">Password</label>
					<input type="password" class="form-control" name="password" placeholder="Isi password baru jika ingin mengganti">
				</div>
				@error('password')
				<small style="color:red">{{$message}}</small>
				@enderror

				<div class="form-group mt-3">
					<button type="submit" class="btn btn-primary btn-block">Submit</button>
				</div>
			</form>
		</div>
	</div>
</div>

@endsection