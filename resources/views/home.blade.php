@include('includes.header')
	@if(session('info'))
	<div class="alert alert-success">{{session('info')}}</div>
	@endif
	<table id="myTable" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
		<thead>
		<tr>
			<th scope="col">ID</th>
			<th scope="col">Title</th>
			<th scope="col">Description</th>
			<th scope="col">Action</th>
		</tr>
		</thead>
		<tbody>
		@if(count($articles)>0)
			@foreach($articles->all() as $article)
			
		<tr class="table-active">
			<td>{{ $article->id}}</td>
			<td>{{ $article->title}}</td>
			<td>{{ $article->description}}</td>
			<td>
				<a href='{{ url("/read/{$article->id}") }}' class="badge badge-primary">Read</a> |
				<a href='{{ url("/update/{$article->id}") }}' class="badge badge-success">Update</a>|
				<a href='{{ url("/delete/{$article->id}") }}' class="badge badge-danger">Delete</a>
			</td>
		</tr>
		@endforeach
		@endif
		</tbody>
	</table> 
@include('includes.footer')