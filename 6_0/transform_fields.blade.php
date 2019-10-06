@extends("layout")
@section("content")

    <h1>Transform Fields</h1>

    <p>Transform fields enable you to modify the display of field, instead from table column.</p>

    <p>
        <pre><code class="language-php">public function cbInit() {
    // ...
    // To modify the display on grid table
    $this->addText("Name","first_name")->indexDisplayTransform(function($row) {
        return $row->first_name." ".$row->last_name;
    });

    // To modify the display on detail page
    $this->addText("Name","first_name")->detailDisplayTransform(function($row) {
        return $row->first_name." ".$row->last_name;
    });
    // ...
}</code></pre>
    </p>

@endsection