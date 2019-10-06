@extends("layout")
@section("content")

    <h1>Readonly</h1>

    <p>To make the input field to be readonly</p>

    <p>
        <pre><code class="language-php">public function cbInit() {
    // ...

    $this->addText("First Name","first_name")->readonly();

}</code></pre>
    </p>

@endsection