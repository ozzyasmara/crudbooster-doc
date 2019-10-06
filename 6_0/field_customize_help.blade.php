@extends("layout")
@section("content")

    <h1>Help Text</h1>

    <p>To make additional text under the input field</p>

    <p>
        <pre><code class="language-php">public function cbInit() {
    // ...

    $this->addText("First Name","first_name")->help("Enter the first name");

}</code></pre>
    </p>

@endsection