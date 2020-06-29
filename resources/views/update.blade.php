@include('includes.header');
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<form method="PUT" action="{{ url('/edit', array($articles->id)) }}">
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
			      <input type="title" name="title" value="<?php echo $articles->title; ?>" class="form-control" placeholder="Enter title">
			    </div>
			    <div class="form-group">
			      <label>Description</label>
			      <textarea name="description" class="form-control" placeholder="Description"><?php echo $articles->description; ?></textarea>
			    </div>
			    <button type="submit" class="btn btn-primary">Update</button>
			    <a href="{{ url('/' )}}" class="btn btn-primary">Back</a>
			  </fieldset>
			</form>
		</div>
	</div>
</div>
@include('includes.footer');