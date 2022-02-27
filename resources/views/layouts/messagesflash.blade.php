
@if(Session::has('success'))


<div class="alert alert-success">
<button type="button" class="close" data-dismiss="alert">×</button>
<i class="fa fa-ok-sign"></i> {{Session::get('success')}}</a>.
</div>

@endif

@if(Session::has('alert'))


<div class="alert alert-danger">
<button type="button" class="close" data-dismiss="alert">×</button>
<i class="fa fa-ban-circle"></i><strong>Alerte!</strong>  {{Session::get('alert')}}
</div>

@endif

@if(Session::has('warning'))


<div class="alert alert-warning alert-block">
<button type="button" class="close" data-dismiss="alert">×</button>
<h4><i class="fa fa-bell-alt"></i>Avertissement!</h4>
<p> {{Session::get('warning')}}</p>
</div>

@endif