@extends("layout")
@section("content")

    <h1>Placeholder</h1>

    <p>To make a placeholder on Text, Text Area, Date, Date & Time, and Number</p>

    <p>
        <pre><code class="language-php">public function cbInit() {
    // ...

    $this->addText("First Name","first_name")->placeholder("Enter the first name");

    $this->addTextArea("Description","description")->placeholder("Enter the description here");

}</code></pre>
    </p>

@endsection