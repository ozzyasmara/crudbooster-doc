@extends("layout")
@section("content")

    <h1>Field: Upload File</h1>

    <p>This type of field is to make an input file</p>

    <p>
        <pre><code class="language-php">public function cbInit() {
    // ...

    // Using document column
    $this->addFile("Document","document");

    // Add encrypt filename
    $this->addFile("Document","document")->encrypt(true);

    // Disable encrypt filename
    $this->addFile("Document","document")->encrypt(false);

}</code></pre>
    </p>
@endsection