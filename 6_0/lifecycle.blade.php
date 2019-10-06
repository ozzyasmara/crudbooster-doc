@extends("layout")
@section("content")

    <h1>Lifecycle Architecture</h1>

    <p>CRUDBooster stands above of Laravel Framework. Whatever that you can't develop with CRUDBooster, you still can make anything code with Laravel Framework in the project.</p>

    <h2 class="mt-4">Controller</h2>

    <p>CRUDBooster doesn't need regular class method like Create, Read, Update, Delete to create a CRUD operation. It only need <code>cbInit()</code> method to call anything crud module.</p>
    <p>For Example : </p>
    <p>
        <pre><code class="language-php">public function cbInit() {
    $this->setTable("table_name");
    $this->setPermalink("permalink");
    $this->addText("Title");
    $this->addText("Description");
}</code></pre>
    </p>

    <h2 class="mt-4">View</h2>
    <p>CRUDBooster will create a CRUD view automatically.</p>

    <h2 class="mt-4">Hook</h2>
    <p>To modify the process of table index query, pre save, post save, pre delete, post delete. You can use the hook feature.</p>

@endsection