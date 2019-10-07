@extends("layout")
@section("content")

    <h1>Additional Index Button</h1>

    <p>This is not add action button in grid data, instead of add more button on top of grid table data. If you want to add more index button with your custom action, you can use this method</p>

    <p>
        <pre><code class="language-php">public function cbInit() {
// ...

$this->addIndexActionButton("Export", url("download"), "fa fa-download", ButtonColor::class);

}</code></pre>
    </p>

    <p>
        To use ButtonColor, you have to "use" the ButtonColor class at the top of class <br/>
        <code>use crocodicstudio\crudbooster\controllers\partials\ButtonColor;</code>
    </p>

@endsection