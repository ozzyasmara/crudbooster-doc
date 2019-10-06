@extends("layout")
@section("content")

    <h1>Additional Action Button</h1>

    <p>If you want to add more index action button with your custom action, you can use this method</p>

    <p>
        <pre><code class="language-php">public function cbInit() {
    // ...

    $this->addActionButton("Set Status Success", function($row) {
		    return action("FooBarController@getChangeSuccess",["id"=>$row->primary_key]);
        }, function($row) {
		    return $row->status == "Waiting";
        }, "fa fa-pencil", ButtonColor::LIGHT_BLUE, true);

}

// Create new method to handle action request
public function getChangeSuccess($id) {
    // You can use update helper from cb class
    cb()->update("fooBar", $id, ["status"=>"success"]);

    // After update, send redirect back
    return cb()->redirectBack("The data has been updated!","success");
}

        </code></pre>
    </p>

    <p>
        To use ButtonColor, you have to "use" the ButtonColor class at the top of class <br/>
        <code>use crocodicstudio\crudbooster\controllers\partials\ButtonColor;</code>
    </p>

@endsection