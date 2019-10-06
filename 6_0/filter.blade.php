@extends("layout")
@section("content")

    <h1>Filter</h1>

    <p>You may add a filter to the input type. The filter will created automatically.</p>

    <p>
        <pre><code class="language-php">public function cbInit() {
    // ...

    // This text input will have a filter. Enable the filter by set the value to True.
    $this->addText("First Name","first_name")->filterable(true);

}</code></pre>
    </p>

    <div class="alert alert-info">
        <strong>Notice</strong>
        <p>The types that have filterable only : <br/> text, text_area, checkbox, radio, date, datetime, email, money, number, select_option, select_table, time, wysiwyg</p>
    </div>

@endsection