@extends("layout")
@section("content")

    <h1>Field: Date</h1>

    <p>This type of field is to make an input date</p>

    <p>
        <pre><code class="language-php">public function cbInit() {
    // ...

    // Using birthday column
    $this->addDate("Birthday","birthday");

    // Change date default format Y-m-d to d/m/Y
    $this->addDate("Birthday","birthday")->format("d/m/Y");

}</code></pre>
    </p>

    <p>
        For more date format you can <a href="https://www.php.net/manual/en/function.date.php" target="_blank">check here</a>.
    </p>
@endsection