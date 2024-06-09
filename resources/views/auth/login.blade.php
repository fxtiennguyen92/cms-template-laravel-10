@extends('template.base')

@push('wrapper')
    <section id="wrapper">
        <div class="login-register">
            <div class="login-box card">
                <div class="card-body">
                    <!-- Log in -->
                    <form class="form-horizontal form-material" id="loginform" action="index.html">
                        <h2 class="text-center m-b-20 m-t-20">Sign In</h2>
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" required="" placeholder="Username">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control" type="password" required="" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <div class="d-flex no-block align-items-center">
                                    <div class="ms-auto">
                                        <a href="javascript:void(0)" id="to-recover" class="text-muted">
                                            <i class="ti-lock m-r-5"></i> Forgot password?</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <div class="col-xs-12">
                                <button class="btn w-100 btn-lg btn-info text-white" type="submit">Log
                                    In</button>
                            </div>
                        </div>
                    </form>

                    <!-- Forgot password -->
                    <form class="form-horizontal" id="recoverform" action="">
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <h2 class="m-t-20">Recover Password</h2>
                                <p class="text-muted">Enter your email account and reset link will be sent to you! </p>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" required="" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group text-center m-t-20">
                            <div class="col-xs-12">
                                <button class="btn btn-primary btn-lg w-100 text-uppercase waves-effect waves-light"
                                    type="submit">Reset</button>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <div class="d-flex no-block align-items-center">
                                    <div class="ms-auto">
                                        <a href="javascript:void(0)" id="to-login" class="text-muted">
                                            <i class="ti-control-backward m-r-5"></i> Back to Log in</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endpush

@push('css')
    <link href="dist/css/pages/login-register-lock.css" rel="stylesheet">
@endpush

@push('js')
    <script type="text/javascript">
        $(function() {
            $(".preloader").fadeOut();
        });
        $(function() {
            $('[data-bs-toggle="tooltip"]').tooltip()
        });

        $('#to-recover').on("click", function() {
            $("#loginform").slideUp();
            $("#recoverform").fadeIn();
        });

        $('#to-login').on("click", function() {
            $("#recoverform").slideUp();
            $("#loginform").fadeIn();
        });
    </script>
@endpush
