@extends("layout")
@section("content")

    <h1>Dashboard</h1>

    <p>
        Make sure you have a dashboard controller, create it first by using "make controller" artisan as laravel do :
    </p>
    <p>
        <pre><code class="language-bash">php artisan make:controller DashboardController</code></pre>
    </p>

    <p>
        Then add <code>getIndex()</code> method.
    </p>

    <p>
        <pre><code class="language-php">class DashboardController extends Controller {
    public function getIndex() {
        $data = [];
        $data['page_title'] = "Dashboard";
        return view("dashboard", $data);
    }
}</code></pre>
    </p>

    <p>
        Create the view <code>/resources/views/dashboard.blade.php</code>:
    </p>

    <p>
        <pre><code class="language-html">&#64;extends('crudbooster::themes.adminlte.layout.layout')
&#64;section('content')


&#64;endsection
        </code></pre>
    </p>

    <p>
        Last, you have to set the dashboard controller at <strong>Developer Area > Appearance > Dashboard Controller</strong>
    </p>

@endsection