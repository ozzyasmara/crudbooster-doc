@extends("layout")
@section("content")

    <h1>Field: Hidden</h1>

    <p>This type of field is to make an input hidden</p>

    <p>
        <pre><code class="language-php">public function cbInit() {
    // ...

    // Using the "foo" column
    $this->addHidden("Foo","foo")->defaultValue("Bar");

}</code></pre>
    </p>

@endsection