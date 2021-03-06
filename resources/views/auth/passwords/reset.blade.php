
@extends('inc.main')
@section('title', '| Reset Password')


@section('style')
<style>

    .field-icon {
        float: right;
        margin-right: -17px;
        color: #0b75c9;
        margin-top: 9px;
        position: relative;
        z-index: 2;
        cursor:pointer;
    }

</style>

@endsection

@section('content')
<div class="login-page ">
    <div class="page-header header-filter" filter-color="warning" data-parallax="true">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 ml-auto mr-auto">
                    <div class="card card-login">
                        <form class="form-horizontal" method="POST" action="{{ route('password.request') }}">
                            {{ csrf_field() }}

                            <input type="hidden" name="token" value="{{ $token }}">

                            <div class="card-header card-header-warning text-center">
                                <h4 class="card-title">Reset Password</h4>
                            </div>


                            <div class="card-body">
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                                      <span class="input-group-text">
                                                        <i class="material-icons">mail</i>
                                                      </span>
                                        </div>
                                        <input type="email"
                                               class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                                               value="{{ old('email') }}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email..."  required>
                                        @if ($errors->has('email'))
                                        <span class="invalid-feedback">
                                             <strong style="padding-left: 20px;" class="text-center">{{ $errors->first('email') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                          <i class="material-icons">lock_outline</i>
                                        </span>
                                    </div>
                                    <input id="password-field" type="password" value="{{ old('password') }}"
                                           class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                           name="password" placeholder="password..." required>
                                    <span toggle="#password-field" class="fa fa-lg fa-eye-slash field-icon toggle-password" title="show password"></span>
                                    @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                            <strong style="padding-left: 20px;" class="text-center">{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                          <i class="material-icons">lock_outline</i>
                                        </span>
                                    </div>
                                    <input id="password_confirmation" type="password" value="{{ old('password_confirmation') }}"
                                           class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}"
                                           name="password_confirmation" placeholder="Confirm password..." required>

                                    @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong style="padding-left: 20px;" class="text-center">{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                    @endif
                                </div>

                            </div>
                            <br>
                            <div class="submit text-center">
                                <button class="btn btn-warning btn-raised btn-round" type="submit">
                                          <span class="btn-label">
                                            <i class="material-icons">fingerprint</i>
                                          </span>
                                    <b>Reset Password</b>
                                </button>
                            </div>
                            <br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @include('inc._footer')
    </div>
</div>
@endsection

@section('scripts')

<!-- Show password -->
<script>

    $(".toggle-password").click(function() {
        $(this).toggleClass("fa-eye fa-eye-slash");
        var input = $($(this).attr("toggle"));
        if (input.attr("type") == "password") {
            input.attr("type", "text");
        } else {
            input.attr("type", "password");
        }
    });
</script>
@endsection
