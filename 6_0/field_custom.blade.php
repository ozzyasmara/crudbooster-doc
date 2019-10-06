@extends("layout")
@section("content")

    <h1>Field: Custom</h1>

    <p>This type of field is to make an input custom</p>

    <p>
        <pre><code class="language-php">public function cbInit() {
    // ...

    // Custom field with raw html
    $this->addCustom("Custom Field")->setHtml(
                "{{ "<input type='text' class='form-control' name='foo'/>" }}"
            );

    // Custom field with view render
    $this->addCustom("Custom Field")->setHtml(
                view("custom_field")->render()
            );

}</code></pre>
    </p>

    <p>You may setHtml with raw html or from view</p>
    <p>This field type can't show on the index display</p>
@endsection