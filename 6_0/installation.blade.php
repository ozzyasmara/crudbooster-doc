@extends("layout")
@section("content")

    <h1>Installation</h1>

    <p>
        These bellow are CRUDBooster system requirements
    </p>
    <p>
        <ul>
            <li>PHP version 7.2 or above</li>
            <li>Laravel 5.7 or above</li>
            <li>Composer</li>
            <li>OPCache PHP Extension (Very Recommended!)</li>
            <li>BCMath PHP Extension</li>
            <li>Ctype PHP Extension</li>
            <li>JSON PHP Extension</li>
            <li>Mbstring PHP Extension</li>
            <li>OpenSSL PHP Extension</li>
            <li>PDO PHP Extension</li>
            <li>Tokenizer PHP Extension</li>
            <li>XML PHP Extension</li>
        </ul>
    </p>

    <h2 class="mt-4">Composer</h2>
    <p>If you don't have a composer, please install it first. <a href="https://getcomposer.org/download/" target="_blank">Click here to see the tutorial</a></p>

    <h2 class="mt-4">Laravel</h2>
    <p>Laravel version must meet the requirement version. You need to install laravel first. <a href="https://laravel.com/docs/6.x" target="_blank">Click here to see the tutorial</a></p>
    <p>
        <pre><code class="language-bash">composer create-project laravel/laravel=5.8.* crudbooster</code></pre>
    </p>

    <h2 class="mt-4">CRUDBooster</h2>
    <p>Point the directory at laravel root directory, and run the bellow command: </p>
    <p>
        <pre><code class="language-bash">composer require crocodicstudio/crudbooster=6.0.*</code></pre>
    </p>
    <p>
        Create a new empty Database, and setting the <code>.env</code> file like bellow
    </p>
    <p>
        <pre><code class="language-bash">DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=</code></pre>
    </p>
    <p>
        After installation has been finish, CRUDBooster needs to extract the asset, run the bellow command and follow the instruction:
    </p>
    <p>
        <pre><code class="language-bash">php artisan crudbooster:install</code></pre>
    </p>

@endsection
