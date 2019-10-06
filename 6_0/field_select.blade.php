@extends("layout")
@section("content")

    <h1>Field: Select</h1>

    <p>This type of field is to make a select box</p>

    <p>
        <pre><code class="language-php">public function cbInit() {
    // ...

    // Using addSelectTable to make a select from table
    $this->addSelectTable("City","cities_id",[
                "table"         => "cities",
                "value_option"  => "id",
                "display_option" => "name",
                "sql_condition" => null
            ]);

    // Using sql_condition to make a condition
    $this->addSelectTable("City","cities_id",[
                "table"         => "cities",
                "value_option"  => "id",
                "display_option" => "name",
                "sql_condition" => "name != 'Jakarta'"
            ]);
}</code></pre>
    </p>

    <p>You can also make a select box from your defined array. Use <code>addSelectOption</code></p>

    <p>
    <pre><code class="language-php">public function cbInit() {
    // ...

    // Using addSelectOption to make a select from defined array
    $this->addSelectOption("Fruit","fruit_name",[
            "apple" => "Apple",
            "mango" => "Mango"
        ]);
}</code></pre>
    </p>

@endsection