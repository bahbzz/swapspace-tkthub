@extends ('layout.slave')
@section ('title') @endsection
@section ('content')

 <div class="inner cover">

    <form class="form-signin" action="" method="">
        <h2 class="form-signin-heading">Please Fill The Form</h2>
        <label for="Firstname" class="sr-only">Firstame</label>
        <input type="Text" name="firstname" class="form-control" placeholder="First Name" required autofocus>
        <label for="Lastname" class="sr-only">Lastame</label>
        <input type="Text" name="Lastname" class="form-control" placeholder="Last Name" required autofocus>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Confirm Email address" required autofocus>

        <!-- <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required> -->
        <!-- <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div> -->
        <button class="btn btn-lg btn-primary btn-block" type="submit">Proceed To Payment</button>
      </form>

    </div> <!-- /container -->

@stop
