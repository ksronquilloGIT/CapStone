<x-layout>

    <!-- login -->
<div class="row justify-content-center mt-5 mb-5">
        <div class="col-md-9 col-lg-12 col-xl-10">
            <div class="card shadow-lg o-hidden border-0 my-5">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-flex">
                            <img src="{{ URL('images/images.png') }}" alt="logo">
                        </div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h4 class="text-dark mb-4">Welcome</h4>
                                </div>
                                <form action="login.php" method="post">
                                    <div class="mb-3"><input id="exampleInputEmail" class="form-control form-control-user" type="text" placeholder="Enter username..." name="username" /></div>
                                    <div class="mb-3"><input id="exampleInputPassword" class="form-control form-control-user" type="password" placeholder="Password" name="password" /></div>
                                    <div class="mb-3">
                                        <div class="custom-control custom-checkbox small">
                                            <div class="form-check"><input id="formCheck-1" class="form-check-input custom-control-input" type="checkbox" /><label class="form-check-label custom-control-label" for="formCheck-1">Remember Me</label></div>
                                        </div>
										<label>Login As:</label>
										<input type="radio" name="user_type" value="admin" checked> Admin
										<input type="radio" name="user_type" value="agent"> Agent
                                    </div><button class="btn btn-primary d-block btn-user w-100" type="submit">Login</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</x-layout>