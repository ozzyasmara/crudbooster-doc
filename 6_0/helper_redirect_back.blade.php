@extends("layout")
@section("content")

    <h1>Redirect Back</h1>

    <p>If you want to redirect user to last page. You can use this redirect back helper.</p>

    <p>
        <pre><code class="language-php">
public function postSaveData() {
    // ...
            
    // First parameter for message, Second parameter for alert type (success, warning, info, primary, danger)
    return cb()->redirectBack("The data has been updated!", "success");
}
        </code></pre>
    </p>
@endsection