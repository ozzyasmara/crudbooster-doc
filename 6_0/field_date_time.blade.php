@extends("layout")
@section("content")

    <h1>Field: Date & Time</h1>

    <p>This type of field is to make an input date & time</p>

    <p>
        <pre><code class="language-php">public function cbInit() {
    // ...

    // Using registration_open_at column
    $this->addDateTime("Registration Open At","registration_open_at");

    // Change date default format Y-m-d H:i:s to d/m/Y H:i:s
    $this->addDateTime("Registration Open At","registration_open_at")->format("d/m/Y H:i:s");

}</code></pre>
    </p>

    <p>
        For more date format you can <a href="https://www.php.net/manual/en/function.date.php" target="_blank">check here</a>.
    </p>
@endsection