@extends('layouts.plantilla')
@section('cuerpo')



	<div class="row">

		<div class="col-sm-6 ">
			<div class="list-group" id="list-tab" role="tablist">
		      <a class="list-group-item list-group-item-action active" id="list-userprof-list" data-toggle="list" href="#list-userprof" role="tab" aria-controls="userprof">User Profile Data</a>

		      <a class="list-group-item list-group-item-action" id="list-chgpass-list" data-toggle="list" href="#list-chgpass" role="tab" aria-controls="chgpass">Change Password</a>

		      <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Messages</a>

		      <a class="list-group-item list-group-item-action" id="list-deleteaccount-list" data-toggle="list" href="#list-deleteaccount" role="tab" aria-controls="deleteaccount">Delete Account</a>

		    </div>
		</div>
		<div class="col-sm-6 ">
			<div class="tab-content" id="nav-tabContent">
		      <div class="tab-pane fade show active" id="list-userprof" role="tabpanel" aria-labelledby="list-userprof-list">
		      	
		      	<form>
  					<div class="form-group">
  						<label for="name">Name</label>
  						<input type="text" name="name" class="form-control" id="nameUser">
  						<span id="nameUserspan"></span>
  					</div>
  				</form>

		      </div>
		      <div class="tab-pane fade" id="list-chgpass" role="tabpanel" aria-labelledby="list-chgpass-list">
		      	<h2>Change Password</h2>


		      	<form class="form-horizontal" method="POST" role="form" action="{{ route('user.chgpass') }}">  
               @if (count($errors) > 0)  
                 <div class="alert alert-danger">  
                   <ul>  
                     @foreach ($errors->all() as $error)  
                       <li>{{ $error }}</li>  
                     @endforeach  
                   </ul>  
                 </div>  
               @endif  
               {{ csrf_field() }}  
               {{-- Current password --}}  
               <div class="form-group{{ $errors->has('current_password') ? ' has-error' : '' }}">  
                 <label for="current_password" class="col-md-4 control-label">Current Password</label>  
   
                 <div class="col-md-6">  
                   <input id="current_password" type="password" class="form-control" name="current_password" required autofocus>  
   
                   @if ($errors->has('current_password'))  
                     <span class="help-block">  
                     <strong>{{ $errors->first('current_password') }}</strong>  
                   </span>  
                   @endif  
                 </div>  
               </div>  
   
               {{-- New password --}}  
               <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">  
                 <label for="password" class="col-md-4 control-label">Password</label>  
   
                 <div class="col-md-6">  
                   <input id="password" type="password" class="form-control" name="password" required>  
   
                   @if ($errors->has('password'))  
                     <span class="help-block">  
                     <strong>{{ $errors->first('password') }}</strong>  
                   </span>  
                   @endif  
                 </div>  
               </div>  
   
               {{-- Confirm new password --}}  
               <div class="form-group">  
                 <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>  
   
                 <div class="col-md-6">  
                   <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>  
                 </div>  
               </div>  
   
               {{-- Submit button --}}  
               <div class="form-group">  
                 <div class="col-md-6 col-md-offset-4">  
                   <button type="submit" class="btn btn-primary">  
                     Change password  
                   </button>  
                 </div>  
               </div>  
   
             </form> 

		      </div>
		      <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">jejeje</div>
		      <div class="tab-pane fade" id="list-deleteaccount" role="tabpanel" aria-labelledby="list-deleteaccount-list">

		      	<div class="alert alert-dark" role="alert">
					<b>When you unsubscribe, all your personal data and all those related to dogs will be deleted.<b>
				</div>

			    <!-- The Modal -->
			    <div id="myModal" class="modal">

			        <!-- Modal content -->
			        <div class="mymodal-content">
			            <div class="mymodal-header">
			                <span class="close">&times;</span>
			                <h3>Mi Fiel Amigo</h3>
			            </div>
			            <div class="mymodal-body">
			                Are you sure you want to unsubscribe from <i>'Mi Fiel Amigo'</i> ?
			                <form method="post" action="{{ route('user.deleteAcc') }}">
			                	@csrf
			                	<input type="hidden" id="idUse" name="idUse" value="{{ auth()->user()->idUse }}"> 
			                	<button type="submit" class="btn btn-danger">Yes, I'm sure</button>
			            	</form>
			            </div>
			            <div class="mymodal-footer">
			            </div>
			        </div>

			    </div>

			    <!-- button to open modal -->
				<button id="myBtn" type="button" class="btn btn-danger">Unsubscribe</button>

		      </div>
		    </div>
		</div>
	</div>

@stop
