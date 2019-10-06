@extends("layout")
@section("content")

    <h1>Plugin</h1>

    <p>Plugin is the new feature on CB that contain many additional features.</p>

    <p>You can access plugin list by open <strong>Developer > Plugin Menu</strong>.</p>

    <h2>Create Your Own Plugin</h2>
    <p>For you who want to create your own plugin, and get listed to CB Plugin listing. You can follow these bellow instruction: </p>

    <ul>
        <li>Create new folder with your own plugin name in <code>app/CBPlugins/</code></li>
        <li>Make 3 folders with the name : Controllers, Routes, Views</li>
        <li>Make 1 file with name <code>plugin.json</code></li>
    </ul>

    <h3>Plugin.Json</h3>
    <p>Create the first file that is <strong>app/CBPlugins/DummyPlugin/plugin.json</strong> with the following format:</p>
    <pre><code class="language-json">{
  "name":"Dummy Plugin",
  "description":"My first dummy plugin",
  "version": "1.0.0",
  "icon":"fa fa-eye",
  "changelog": "first release",
  "author":"CRUDBooster",
  "author_homepage":"http://crudbooster.com",
  "asset":"Asset",
  "type":"plugin",
  "source":"composer",
  "package":"crocodicstudio/laravel-log-reader",
  "service_provider":"crocodicstudio\\LaravelLogReader\\LaravelLogReaderServiceProvider"
}
        </code></pre>

    <h3>Controller</h3>
    <pre><code class="language-php">
    {{ 'namespace App\CBPlugins\DummyPlugin\Controllers;

    use Illuminate\Routing\Controller;

    class DummyPluginController extends Controller {

        public function getIndex() {
            $data = [];
            $data["page_title"] = "Dummy Plugin";
            return view("DummyPlugin::index", $data);
        }
    }
    ' }}
        </code></pre>

    <p>In the code above, let say we want to make "DummyPlugin" as name, you have to make sure namespace, controller, view prefix contain DummyPlugin</p>

    <h3>Route</h3>

    <p>Plugin has their own routes. You don't need to define route manually, make a filename <strong>Route.php</strong> and fill content with the following code:</p>
    <pre><code class="language-php">
&lt;?php {{ '\crocodicstudio\crudbooster\helpers\Plugin::registerDefaultRoute(__DIR__);' }}
        </code></pre>

    <h3>View</h3>
    <p>Plugin has their own view also. Create a view file at <code>app/CBPlugins/DummyPlugin/Views/index.blade.php</code> (Don't forget to replace DummyPlugin name with your own plugin name)</p>
    <pre><code class="language-html">
&#64;extends("crudbooster::dev_layouts.layout")
&#64;section("content")
{{ '
    <p>Hello world, this is my new plugin</p>
' }}
&#64;endsection
        </code></pre>

    <strong>To make an URL that pointing to your plugin page, call this bellow helper</strong>

    <pre><code class="language-php">
{{ 'cb()->getDeveloperUrl("plugins/DummyPlugin")' }}
        </code></pre>

    <p>Replace <em>DummyPlugin</em> with your plugin name</p>

    <h3>Final File Structures</h3>
    <pre><code class="language-bash">
- (Dir) app/CBPlugins/DummyPlugin
- (File) app/CBPlugins/DummyPlugin/plugin.json
- (Dir) app/CBPlugins/DummyPlugin/Controllers
- (File) app/CBPlugins/DummyPlugin/Controllers/DummyPluginController.php
- (Dir) app/CBPlugins/DummyPlugin/Routes
- (File) app/CBPlugins/DummyPlugin/Routes/Route.php
- (Dir) app/CBPlugins/DummyPlugin/Views
- (File) app/CBPlugins/DummyPlugin/Views/index.blade.php
        </code></pre>

    <br>
    <h2>Upload Your Plugin To CRUDBooster Plugin Listing</h2>
    <p>Make anyone knows about your plugin. Submit your plugin to our email <code>crudbooster@gmail.com</code></p>
    <p>With the following format: </p>

    <h2>Submit New Plugin</h2>
    <p>
        <strong>Mail Subject:</strong>
        <p>[Plugin Submit] My Dummy Plugin</p>

        <strong>Mail Content:</strong>
        <p>Description:<br/>
        [Description Your Plugin]</p>
        <p>GitHub URL:<br/>
            [Your Plugin GitHub URL]</p>
    </p>

    <h2>Update Plugin</h2>
    <p>
        <strong>Mail Subject:</strong>
    <p>[Plugin Update] My Dummy Plugin</p>

    <strong>Mail Content:</strong>
    <p>Description:<br/>
        [Description Your Plugin]</p>
    <p>GitHub URL:<br/>
        [Your Plugin GitHub URL]</p>
    </p>

    <h2>Delete Plugin</h2>
    <p>
        <strong>Mail Subject:</strong>
    <p>[Plugin Submit] My Dummy Plugin</p>

    <strong>Mail Content:</strong>
    <p>Description:<br/>
        [Description Your Plugin]</p>
    <p>GitHub URL:<br/>
        [Your Plugin GitHub URL]</p>
    </p>
@endsection