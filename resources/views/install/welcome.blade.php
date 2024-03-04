@extends('install.layout')
@section('content')
    <div class="card" id="v_1_2">
        <div class="card-header">
            <img src="/images/LaraAdminfy_banner.png" alt="LaraAdminfy" class="img-fluid">
            <h5 class="mb-3">Welcome to LaraAdminfy</h5>
            <span class="text-muted">Version 1.0.0</span>
        </div>
        <div class="card-block">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Why LaraAdminify?</h4>
                                <p class="card-text">
                                    <b class="font-weight-bold">LaraAdminify</b> is more than just software - it's your gateway to effortless admin panel creation. Craft stunning dashboards, manage plugins, themes, and much more with ease.
                                </p>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <b class="font-weight-bold">Easy to Use:</b> LaraAdminify is designed to be user-friendly and intuitive. You don't need to be a tech expert to use it.
                                    </li>
                                    <li class="list-group-item">
                                        <b class="font-weight-bold">Customizable:</b> LaraAdminify is highly customizable. You can create your own plugins, themes, and more.
                                    </li>
                                    <li class="list-group-item">
                                        <b class="font-weight-bold">Secure:</b> LaraAdminify is built with security in mind. It's designed to keep your data safe and secure.
                                    </li>
                                    <li class="list-group-item">
                                        <b class="font-weight-bold">Community:</b> LaraAdminify has a large and active community. You can get help, share your work, and more.
                                    </li>
                                    <li class="list-group-item">
                                        <b class="font-weight-bold">Open Source:</b> LaraAdminify is open source. You can use it for free, and you can contribute to its development.
                                    </li>
                                    <li class="list-group-item">
                                        <b class="font-weight-bold">Documentation:</b> LaraAdminify has extensive documentation. You can find everything you need to know about it.
                                        <a href="https://docs.laraadminify.com" target="_blank">Read Documentation</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button type="button" class="btn btn-primary mt-3"
                onclick="window.location.href='/laradmin/install/check-requirements'">Get Started</button>
            <p class="mt-3">
                <span class="text-muted">Developed by <a href="https://umeskiasoftwares.com" target="_blank">Umeskia
                        Softwares</a> &copy; 2024 -
                    <script>
                        document.write(new Date().getFullYear())
                    </script>
                </span>
            </p>

        </div>
    </div>
@endsection
