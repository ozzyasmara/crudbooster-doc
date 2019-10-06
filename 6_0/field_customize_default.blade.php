@extends("layout")
@section("content")

    <h1>Default Value</h1>

    <p>You may set the default value of input</p>

    <p>
        <pre><code class="language-php">public function cbInit() {
    // ...

    $this->addText("Order No","order_no")->defaultValue("001");

}</code></pre>
    </p>

@endsection