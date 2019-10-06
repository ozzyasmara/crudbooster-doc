@extends("layout")
@section("content")

    <h1>Field: Number</h1>

    <p>This type of field is to make an input number</p>

    <p>
        <pre><code class="language-php">public function cbInit() {
    // ...

    // Using age column
    $this->addNumber("Age","age");

    // Limit the minimum number
    $this->addNumber("Age","age")->min(16);

    // Limit the maximum number
    $this->addNumber("Age","age")->max(40);

    // Add step attribute
    $this->addNumber("Discount","disc")->step(1.5);

}</code></pre>
    </p>
@endsection