@extends("layout")
@section("content")

    <h1>Javascript & Style CSS</h1>

    <p>If you want to add your own javascript and style css.</p>

    <p>
        <pre><code class="language-php">public function cbInit() {
    // ...

    $this->javascript(function() {
        return "
            function showModal() {
                $('#modal-dummy').modal('show');
            }
            ";
    });

    $this->style(function() {
        return "
            .dummy_class {
                font-weight:bold;
                size: 20px;
            }
            ";
    });

}</code></pre>
    </p>

@endsection