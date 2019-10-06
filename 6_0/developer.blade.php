@extends("layout")
@section("content")

    <h1>Developer Area</h1>

    <p>
        Manage super admin tools like Module Generator, Role Management, User Management, etc we called Developer Area.
    </p>
    <p>To get the access you need to run the following command: </p>
    <p>
        <pre><code class="language-bash">php artisan crudbooster:developer</code></pre>
    </p>

    <p>You will get the developer area credential and url access like example bellow: </p>

    <p>
        <pre><code class="language-bash">::Developer Credential::
URL: http://localhost/crudbooster/public/developer/E7aoZdkBibDKETHB/login
Username: acwyu
Password: hDSntA5uCTTKHauE</code></pre>
    </p>
    <br>
    <div class="alert alert-info">
    <h2>What Should I Do?</h2>
    <p>Login with developer area credential above. In this developer area, you need to create module (Using Module Generator), create roles, and create user. Because this area only for super admin manage the "super master data".
    After  you have create user, you can logout and login with standard login path (not developer login path).</p>
    </div>
@endsection