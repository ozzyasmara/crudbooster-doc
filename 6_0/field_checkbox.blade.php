@extends("layout")
@section("content")

    <h1>Field: Checkbox</h1>

    <p>This type of field is to make a checkbox button</p>

    <p>
        <pre><code class="language-php">public function cbInit() {
    // ...

    // Using fruits column
    $this->addCheckbox("Fruits","fruits")->options([
        "apple"  => "Apple",
        "mango" => "Mango",
        "cucumber"  => "Cucumber"
    ]);
}</code></pre>
    </p>

    <p>Please make sure the field column has enough of field length to save the option string. <br> The saved value will be "apple; mango; cucumber".</p>
@endsection