@extends('master')
@section("content")


<div class="container custom-login">
	<div class="row">
		<div class="col-sm-4 col-sm-offset-4">
		<form>
			  <div class="form-group">
			    <label for="formGroupExampleInput">Email Address</label>
			    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Email">
			  </div>
			  <div class="form-group">
			    <label for="formGroupExampleInput2">Password</label>
			    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Password">
			  </div>
			  <button type="submit" class="btn btn-default">Submit</button>
		</form>			
		</div>
	</div>
</div>
@endsection