<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Kasi V Welcome</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
</head>

<body style="border-style: none;">
    <section style="margin-right: -99px;padding-top: 0px;margin-top: 250px;">
        <div>
            <div class="row text-center align-items-center align-content-center">
                <div class="col">
                    <div class="border-secondary d-inline-block" style="margin-right: 100px;margin-left: 50px;padding-bottom: 51px;padding-top: 50px;padding-left: 98px;padding-right: 102px;">
                        <h1 class="display-1">Kasi Suppliers</h1>
                        <p class="lead border rounded-pill" style="border-style: solid;">Official Site</p>
                        <div><button class="btn btn-outline-primary border rounded border-primary shadow" type="button" data-bs-target="#modal-1" data-bs-toggle="modal" style="padding-right: 30px;padding-left: 30px;">Get Started</button></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="modal fade text-center" role="dialog" tabindex="-1" id="modal-1">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header" style="padding-left: 185px;">
                    <h4 class="modal-title fw-light text-muted">Kasi Suppliers</h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" style="padding-top: 10px;padding-bottom: 10px;">
                    <p class="lead fs-5 fw-lighter" style="margin-bottom: 0px;">Welcome to the official site<br>Get Started by Registering or Signing In down below</p>
                </div>
                <div class="modal-footer" style="padding-left: 100px;padding-right: 140px;">
                    <div><a class="btn btn-outline-primary border rounded-pill border-primary shadow" role="button" style="margin-right: 20px;padding-left: 20px;padding-right: 20px;" href="{{route('Register')}}">Register</a><a class="btn btn-outline-secondary border rounded-pill border-secondary shadow" role="button" style="padding-left: 20px;padding-right: 20px;" href="{{route('Login')}}">Sign In</a></div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
