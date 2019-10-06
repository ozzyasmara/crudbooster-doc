@extends("layout")
@section("content")

    <h1>Route Controller</h1>

    <p>Do you remember with old laravel helper Route::controller(...) ? yes, CRUDBooster has bring it back to you.
        This helper is useful for making automatic routing for all methods, on the desired controller.
    </p>

    <div class="alert alert-info">
        <strong>Notice</strong>. This route controller only works on method that has "get" and "post" prefix.
    </div>
    <p>
        <pre><code class="language-php">
// The routing pattern for this bellow method is /detail-data with only accept GET method request
public function getDetailData() {
    //...
}

// The routing pattern for this bellow method is /save-data with only accept POST method request
public function postSaveData() {
    //...
}
        </code></pre>
    </p>

    <p>
        <pre><code class="language-php">// File Routes/web.php
cb()->routeController("users","AdminUsersController");
        </code></pre>
    </p>
@endsection