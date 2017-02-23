@extends ('layout.showslave')
@section ('title') @endsection
@section ('content')

    @foreach($prdt as $prdt)
		 <div class="row marketing">
        <div class="col-lg-6">
          <h2 class="featurette-heading"> {!! $prdt->show_name !!}</h2> 
          <p class="lead">{!! $prdt->description !!}</p>
          <p class="lead"><b>Date: {!! $prdt->date !!}</b></p>
          <p class="lead"><b>Time: {!! $prdt->time !!}</b></p>
          <p class="lead"><b>Venue: Eko Convention Centre</b></p>
          <a href="/proceed" class="btn btn-lg btn-primary btn-block">Get Event Ticket</a>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" style="background: url::to('{!! $prdt->image !!}')"
          no-repeat center; background-size: cover; width=274px; height=438px;">
         </div>
         </div>
      @endforeach

        
@stop
