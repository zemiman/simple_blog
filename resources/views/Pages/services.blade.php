 @extends('Layouts.app')
 @section('content')
	 <h1 style="text-align: center;">{{$title}} </h1>
	@if(count($services)>0)
	  <ul>
		   @foreach($services as $service)
		      <li class="list-group-item" style="padding: 8px; margin-top: 8px; text-align: center; font-size: 17px; font-style: italic;">{{$service}}</li>

		   @endforeach
	   </ul>


	@endif
  @endsection
         
    