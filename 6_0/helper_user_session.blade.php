@extends("layout")
@section("content")

    <h1>User Session</h1>

    <p>This helper is to get the current user session.</p>

    <p>
        <pre><code class="language-php">
// Get user name
cb()->session()->name()

// Get user id
cb()->session()->id()

// Get role id
cb()->session()->roleId()

// Get role name
cb()->session()->roleName()
        </code></pre>
    </p>
@endsection