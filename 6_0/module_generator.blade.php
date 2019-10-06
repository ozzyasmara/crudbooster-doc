@extends("layout")
@section("content")

    <h1>Module Generator</h1>

    <p>
        To create a CRUD module, you can use a GUI and Artisan command. This bellow is artisan command
    </p>

    <p>
        <pre><code class="language-bash">php artisan crudbooster:make --module=table_name</code></pre>
    </p>

    <p>Replace <code>table_name</code> with your own table</p>

    <p>You can also create all tables, set <code>--module=ALL</code> parameter like bellow</p>

    <p>
        <pre><code class="language-bash">php artisan crudbooster:make --module=ALL</code></pre>
    </p>

    <p>This command will create a new controller.</p>
@endsection