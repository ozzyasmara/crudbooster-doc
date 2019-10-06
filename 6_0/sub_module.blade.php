@extends("layout")
@section("content")

    <h1>Sub Module</h1>

    <p>Sometime we need to create sub module, for example you have module Province, then you can see City Module over province module by click a button</p>

    <p>Let say this bellow is Province controller</p>
    <p>
        <pre><code class="language-php">public function cbInit() {
    // ...

    /**
    * First parameter is sub module name
    * Second parameter is sub module Controller (You have to create it first)
    * Third parameter is foreign key from cities table
    * Fourth parameter is for detail attributes
    */
    $this->addSubModule("City", AdminCitiesController::class, "provinces_id", function ($row) {
        return [
          "ID"=> $row->primary_key, // You can get the id of table by using primary_key object
          "Created"=> date("d/m/Y H:i", strtotime($row->created_at)),
          "Name"=> $row->name
        ];
    });

}</code></pre>
    </p>

@endsection