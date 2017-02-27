@extends ('layout.slave')
@section ('title') @endsection
@section ('content')

 <div class="inner cover">

    <form class="form-signin" action="/proceed/{!! $prody->show_id !!}/" method="POST">
        <h2 class="form-signin-heading">Please Fill The Form</h2>

         @if (count($errors) > 0)
                    <div class="alert alert-danger">                
                        @foreach ($errors->get('firstname') as $error)<span class='err'>{{ $error }}</span>@endforeach
                    </div>
                    @endif
        <label for="Firstname" class="sr-only">Firstame</label>
        <input type="Text" name="firstname" class="form-control" placeholder="First Name" required autofocus>

         @if (count($errors) > 0)
                    <div class="alert alert-danger">                
                        @foreach ($errors->get('lastname') as $error)<span class='err'>{{ $error }}</span>@endforeach
                    </div>
                    @endif
        <label for="Lastname" class="sr-only">Lastame</label>
        <input type="Text" name="lastname" class="form-control" placeholder="Last Name" required autofocus>

        
         @if (count($errors) > 0)
                    <div class="alert alert-danger">                
                        @foreach ($errors->get('email') as $error)<span class='err'>{{ $error }}</span>@endforeach
                    </div>
                    @endif
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus>

        @if (count($errors) > 0)
                    <div class="alert alert-danger">                
                        @foreach ($errors->get('confirm_email') as $error)<span class='err'>{{ $error }}</span>@endforeach
                    </div>
                    @endif
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" name="confirm_email" class="form-control" placeholder="Confirm Email address" required autofocus>

        <!-- <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required> -->
        <!-- <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div> -->
        <input type="hidden" value="{{ Session::token()}}" name="_token">
        <button class="btn btn-lg btn-primary btn-block" type="submit">Proceed To Payment</button>
      </form>

    </div> <!-- /container -->

@stop
