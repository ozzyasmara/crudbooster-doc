@extends("layout")
@section("content")

    <h1>Field: Money</h1>

    <p>This type of field is to make an input money</p>

    <p>
        <pre><code class="language-php">public function cbInit() {
    // ...

    // Using price column
    $this->addMoney("Price","price");

    // Add prefix on index display
    $this->addMoney("Price","price")->prefix("IDR");

    // Set input precision
    $this->addMoney("Price","price")->precision(2);

    // Set thousand separator
    $this->addMoney("Price","price")->thousandSeparator(",");

    // Set decimal separator
    $this->addMoney("Price","price")->decimalSeparator(".");

}</code></pre>
    </p>
@endsection