@extends("layout")
@section("content")

    <h1>Field: Email</h1>

    <p>This type of field is to make an input email</p>

    <p>
        <pre><code class="language-php">public function cbInit() {
    // ...

    // Using the "email" column
    $this->addEmail("email","email");

}</code></pre>
    </p>

@endsection