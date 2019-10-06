@extends("layout")
@section("content")

    <h1>Field: Password</h1>

    <p>This type of field is to make an input password</p>

    <p>By default, the password input show on form only. Its value will be converted to Laravel Hash.</p>

    <p>
        <pre><code class="language-php">public function cbInit() {
    // ...

    // Using the "password" column
    $this->addPassword("Password","password");

}</code></pre>
    </p>

@endsection