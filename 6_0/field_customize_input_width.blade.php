@extends("layout")
@section("content")

    <h1>Input Width</h1>

    <p>To set the width of input.</p>

    <p>
        <pre><code class="language-php">public function cbInit() {
    // ...

    // Width 4 is equivalent with bootstrap grid system col-sm-4
    // It means you can only set range of width is 1 ~ 12
    $this->addText("First Name","first_name")->inputWidth(4);

}</code></pre>
    </p>

@endsection