@extends("layout")
@section("content")

    <h1>Field: Text</h1>

    <p>This type of field is to make an input text</p>

    <p>
        <pre><code class="language-php">public function cbInit() {
    // ...

    // Using the "first_name" column
    $this->addText("First Name","first_name");

    // or You can set the first parameter only,
    // then the second parameter will be slug the first parameter as column name
    $this->addText("First Name");

    // Limit characters on index table
    $this->addText("First Name","first_name")->strLimit(20);

    // Limit maximum characters on input
    $this->addText("First Name","first_name")->maxLength(20);

    // Limit minimum characters on input
    $this->addText("First Name","first_name")->minLength(5);

}</code></pre>
    </p>
    <p></p>

    <div class="alert alert-info">
        <strong>Tips.</strong> You may combine all those chain options.
    </div>
@endsection