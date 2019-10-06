@extends("layout")
@section("content")

    <h1>Validation</h1>

    <p>To make input validation</p>

    <p>
        <pre><code class="language-php">public function cbInit() {
    // ...

    $this->addText("First Name","first_name")->validation("required|string");

}</code></pre>
    </p>

    <p>
        You can learn more about laravel validation <a href="https://laravel.com/docs/5.8/validation" target="_blank" rel="nofollow">Click here</a>.
    </p>

@endsection