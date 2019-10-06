@extends("layout")
@section("content")

    <h1>Field: WYSIWYG</h1>

    <p>This type of field is to make a WYSIWYG Rich Text Editor</p>

    <p>By default, CRUDBooster use <a href="https://summernote.org/" target="_blank" rel="nofollow">Summernote</a> plugin for this WYSIWYG</p>

    <p>
        <pre><code class="language-php">public function cbInit() {
    // ...

    // Using content column
    $this->addWysiwyg("Content","content");

    // Limit characters on index display
    $this->addWysiwyg("Content","content")->strLimit(100);

}</code></pre>
    </p>
@endsection