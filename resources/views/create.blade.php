@include('includes.header');
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<form method="POST" action="{{ url('/insert') }}">
				{{csrf_field()}}
			  <fieldset>
			    <legend>CRUD-PHP</legend>
			    @if(count($errors)>0)
			    	@foreach($errors->all() as $error)
			    		<div class="alert alert-danger">{{$error}}</div>
			    	@endforeach
			    @endif
			    <div class="form-group">
			      <label>Title</label>
			      <input type="title" name="title" class="form-control" placeholder="Enter title">
			    </div>
			    <div class="form-group">
			      <label>Description</label>
			      <textarea name="description" class="form-control" placeholder="Description"></textarea>
			    </div>
			    <button type="submit" class="btn btn-primary">Create</button>
			    <a href="{{ url('/' )}}" class="btn btn-primary">Back</a>
			  </fieldset>
			</form>
		</div>
	</div>
</div>
@include('includes.footer');