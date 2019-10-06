@extends("layout")
@section("content")

    <h1>Validation</h1>

    <p>This validation is extended from laravel validation. But in this helper included the flash message for CRUDBooster.</p>

    <p>
        <pre><code class="language-php">
public function postSaveData() {
    try {
        // In this example we want to validate the name input to be required
        cb()->validation(["name" => "required"]);

        // Or if you only validate the require, you can ignore the required string
        cb()->validation(["name","email"]);

    } catch (CBValidationException $e) {
        // Call redirect back and send the error message
        return cb()->redirectBack($e->getMessage());
    }
}
        </code></pre>
    </p>

    <p>
        Because we use <code>CBValidationException</code> as catch class. You need to import CBValidationException class at above of class.
    </p>
    <pre><code class="language-php">use crocodicstudio\crudbooster\exceptions\CBValidationException;</code></pre>
@endsection