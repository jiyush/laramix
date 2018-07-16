@if(Auth::guard('web')->check())
	<p class="text-success" style="color: green;">
		Your are Login As <strong>USER</strong>
	</p>
@else
	<p class="text-danger">
		Your are Logout As <strong>USER</strong>
	</p>
@endif

@if(Auth::guard('admin')->check())
	<p class="text-success" style="color: green;">
		Your are Login As <strong>ADMIN</strong>
	</p>
@else
	<p class="text-danger">
		Your are Logout As <strong>ADMIN</strong>
	</p>
@endif