@extends('dashboard')
@section('content-blog')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<table class="table table-bordered" style="font-size: 15px;">
				<thead>
					<tr>
						<th>ID</th>
						<th>Updated Time</th>
						<th>Title</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
               @foreach($posts as $post)
						<tr>
							<td>{{ $post->id }}</td>
							<td>{{ $post->updated_at }}</td>
							<td>{{ $post->title }}</td>
							<td><a href="/article/delete/{{ $post->id }}">Hapus</a></td>
						</tr>
               @endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection
