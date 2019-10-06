@extends("layout")
@section("content")

    <h1>Field Display Control</h1>

    <p>This is for control the display of the fields</p>

    <p>
        <pre><code class="language-php">public function cbInit() {
    // ...

    // Disable display on index
    $this->addText("First Name")->showIndex(false);

    // Disable display on edit
    $this->addText("First Name")->showEdit(false);

    // Disable display on add
    $this->addText("First Name")->showAdd(false);

    // Disable display on detail
    $this->addText("First Name")->showDetail(false);

    // You may combine all
    $this->addText("First Name")->showIndex(false)->showAdd(true)->showEdit(true)->showDetail(false);

}</code></pre>
    </p>

    <p>Remember the value of option is boolean <strong>TRUE</strong> to display on, and <strong>FALSE</strong> to display off</p>
@endsection