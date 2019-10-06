@extends("layout")
@section("content")

    <h1>Redirect</h1>

    <p>When you use CRUDBooster, sometime you need make an alert after redirect. Instead of you create the flash session manually, you can use this helper.</p>

    <p>
        <pre><code class="language-php">
public function postSaveData() {
    // ...

    // First parameter is for URL, second parameter for message, third parameter for alert type (success, warning, info, primary, danger)
    return cb()->redirect(action("AdminUsersController@getIndex"), "The data has been updated!", "success");
}
        </code></pre>
    </p>
@endsection