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
                            <div class="h3 font-weight-light mb-3">Register</div>
                        </div>
                        <div class="card-body p-5">
                            <!-- registrasi form-->
                            <form action="/register" method="post">
                                @csrf
                                <!-- Form Group (nama)-->
                                <div class="form-group">
                                    <label class="text-gray-600 small" for="emailExample">Name</label>
                                    <input class="form-control form-control-solid py-4" type="text" name="name" placeholder="name"
                                        aria-label="Email Address" aria-describedby="emailExample" value="{{old('name')}}" />
                                </div>
                                <!-- Form Group (username)-->
                                <div class="form-group">
                                    <label class="text-gray-600 small" for="passwordExample">username</label>
                                    <input class="form-control form-control-solid py-4" type="text" name="username"
                                        placeholder="username" aria-label="username" aria-describedby="usernameExample" value="{{old('username')}}" />
                                </div>
                                <!-- Form Group (email)-->
                                <div class="form-group">
                                    <label class="text-gray-600 small" for="passwordExample">email</label>
                                    <input class="form-control form-control-solid py-4" type="email" name="email"
                                        placeholder="email" aria-label="email" aria-describedby="emailExample" value="{{old('email')}}"  />
                                </div>
                                <!-- Form Group (password)-->
                                <div class="form-group">
                                    <label class="text-gray-600 small" for="passwordExample">password</label>
                                    <input class="form-control form-control-solid py-4" type="password" name="password"
                                        placeholder="password" aria-label="password" aria-describedby="passwordExample" />
                                </div>
                                <div class="form-group d-flex align-items-center justify-content-center mb-0">
                                    <button type="submit" class="btn btn-primary">Daftar</button>
                                </div>
                            </form>
                        </div>
                        <hr class="my-0" />
                        <div class="card-body px-5 py-4">
                            <div class="small text-center">
                                Sudah punya akun?
                                <a href="/login">Login</a>
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