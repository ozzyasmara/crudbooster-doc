@extends("layout")
@section("content")

    <h1>Required</h1>

    <p>To make the input field to be required</p>

    <p>
        <pre><code class="language-php">public function cbInit() {
    // ...

    // Set the input to be required
    $this->addText("First Name","first_name")->required(true);

    // Set the input to be non required
    $this->addText("First Name","first_name")->required(false);

}</code></pre>
    </p>

@endsection