@extends("layout")
@section("content")

    <h1>Field: Time</h1>

    <p>This type of field is to make an input time</p>

    <p>
        <pre><code class="language-php">public function cbInit() {
    // ...

    // Using check_in_at column
    $this->addTime("Check In","check_in_at");

}</code></pre>
    </p>

@endsection