@extends('layout.template')

@section('content')
    <div id="layoutAuthentication_content">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-5 col-lg-6 col-md-8 col-sm-11">
                        <!-- Social login form-->
                        <div class="card my-5">
                            <div class="card-body p-5 text-center">
                                <div class="h3 font-weight-light mb-2">Login</div>
                            </div>
                            @if (Session::has('message'))
                                <div class="alert alert-danger text-center" role="alert">
                                    {{ Session::get('message') }}
                                </div>
                            @endif
                            <div class="card-body p-5">
                                <!-- Login form-->
                                <form action="/login" method="post">
                                    @csrf
                                    <!-- Form Group (email address)-->
                                    <div class="form-group">
                                        <label class="text-gray-600 small" for="emailExample">Email</label>
                                        <input class="form-control form-control-solid py-4" type="email" name="email"
                                            aria-label="Email Address" aria-describedby="emailExample"
                                            value="{{ old('email') }}" placeholder="Email" />
                                    </div>
                                    <!-- Form Group (password)-->
                                    <div class="form-group">
                                        <label class="text-gray-600 small" for="passwordExample">Password</label>
                                        <input class="form-control form-control-solid py-4" type="password" name="password"
                                            aria-label="Password" aria-describedby="passwordExample"
                                            placeholder="Password" />
                                    </div>
                                    <div class="form-group d-flex align-items-center justify-content-center mb-0">
                                        <button class="btn btn-primary" type="submit">Login</button>
                                    </div>
                                </form>
                            </div>
                            <hr class="my-0" />
                            <div class="card-body px-5 py-4">
                                <div class="small text-center">
                                    Belum punya akun?
                                    <a href="/register">Daftar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <div id="layoutAuthentication_footer">
        <footer class="footer mt-auto footer-dark">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 small">Copyright &#xA9; Your Website 2020</div>
                    <div class="col-md-6 text-md-right small">
                        <a href="#!">Privacy Policy</a>
                        &#xB7;
                        <a href="#!">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
@endsection
