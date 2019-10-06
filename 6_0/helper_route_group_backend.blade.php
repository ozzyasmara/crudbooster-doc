@extends("layout")
@section("content")

    <h1>Route Group Backend</h1>

    <p>If you want to limiting access user. Only certain users that can access the backend area. You don't need to make a middleware manually, because CRUDBooster has a helper to do that. You can use this helper.</p>

    <p>
        <pre><code class="language-php">// File Routes/web.php

cb()->routeGroupBackend(function() {

    // You can use the following helper, it's same with Route::get()
    cb()->routeGet("users", "AdminUsersController@getIndex");

    // You can use the following helper, it's same with Route::post()
    cb()->routePost("users/save", "AdminUsersController@postSave");

},'App\Http\Controllers');
        </code></pre>
    </p>
@endsection