@extends("layout")
@section("content")

    <h1>Field: Radio</h1>

    <p>This type of field is to make a radio button</p>

    <p>
        <pre><code class="language-php">public function cbInit() {
    // ...

    // Using gender column
    $this->addRadio("Gender","gender")->options([
        "male"  => "Male",
        "female" => "Female"
    ]);
}</code></pre>
    </p>
@endsection