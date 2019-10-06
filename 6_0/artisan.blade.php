@extends("layout")
@section("content")

    <h1>Artisan Command</h1>

    <p>
        There are some CRUDBooster artisan command:
    </p>

    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Command</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <tr><td width="40%">crudbooster:make {--module=ALL}</td><td>Create a module from table. The default is ALL, means will create all tables</td></tr>
            <tr><td>crudbooster:seed {--generate}</td><td>If <code>--generate</code> command included it means generate all tables else extract the seed data</td></tr>
            <tr><td>crudbooster:developer {--username=?}</td><td>Create a developer access. You can set the parameter <code>--username</code> if you wish to set your own username. Or you want to generate a random username, do not include the <code>--username</code></td></tr>
        </tbody>
    </table>
@endsection