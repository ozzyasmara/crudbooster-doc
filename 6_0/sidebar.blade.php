{{--<nav class="nav flex-column sidebar">--}}
    {{--<a class="nav-link" href="{{ url("docs/installation") }}">Installation</a>--}}
    {{--<a class="nav-link" href="{{ url("docs/deployment") }}">Deployment</a>--}}
    {{--<a class="nav-link" href="{{ url("docs/lifecycle") }}">Architecture Lifecycle</a>--}}
    {{--<a class="nav-link" href="{{ url("docs/command") }}">Artisan Command</a>--}}
    {{--<a class="nav-link" href="{{ url("docs/module-generator") }}">Module Generator</a>--}}
    {{--<a class="nav-link" href="{{ url("docs/role-management") }}">Role Management</a>--}}
{{--</nav>--}}

<nav id="sidebar">
    <ul class="list-unstyled components">
        <li class="active">
            <a href="javascript:;" class="font-bold">Getting Started</a>
            <ul class="list-unstyled">
                <li><a class="{{ request()->is("docs/installation")?"active":"" }}" href="{{ url('docs/installation') }}">Installation</a></li>
                <li><a class="{{ request()->is("docs/developer")?"active":"" }}" href="{{ url('docs/developer') }}">Developer Area</a></li>
                <li><a class="{{ request()->is("docs/lifecycle")?"active":"" }}" href="{{ url("docs/lifecycle") }}">Lifecycle Architecture</a></li>
            </ul>
        </li>

        <li>
            <a href="javascript:;" class="font-bold">The Basic</a>
            <ul class="list-unstyled">
                <li><a class="{{ request()->is("docs/artisan")?"active":"" }}" href="{{ url("docs/artisan") }}">Artisan Command</a></li>
                <li><a class="{{ request()->is("docs/module-generator")?"active":"" }}" href="{{ url("docs/module-generator") }}">Module Generator</a></li>
                <li><a class="{{ request()->is("docs/dashboard")?"active":"" }}" href="{{ url("docs/dashboard") }}">Dashboard</a></li>
                <li><a href="javascript:;" class="divider">Role Policy</a></li>
                <li><a class="{{ request()->is("docs/role-management")?"active":"" }}" href="{{ url("docs/role-management") }}">&nbsp; Role Management</a></li>
                <li><a class="{{ request()->is("docs/role-helper")?"active":"" }}" href="{{ url("docs/role-helper") }}">&nbsp; Role Helper</a></li>
            </ul>
        </li>

        <li>
            <a href="javascript:;" class="font-bold" >Fields</a>
            <ul class="list-unstyled">
                <li><a class="{{ request()->is("docs/transform-fields")?"active":"" }}" href="{{ url("docs/transform-fields") }}">Transform Fields</a></li>
                <li><a class="{{ request()->is("docs/field-display-control")?"active":"" }}" href="{{ url("docs/field-display-control") }}">Display Control</a></li>
                <li><a href="javascript:;" class="divider">Types</a></li>
                <li><a class="{{ request()->is("docs/field-text")?"active":"" }}" href="{{ url("docs/field-text") }}">&nbsp; Text</a></li>
                <li><a class="{{ request()->is("docs/field-text-area")?"active":"" }}" href="{{ url("docs/field-text-area") }}">&nbsp; Text Area</a></li>
                <li><a class="{{ request()->is("docs/field-select")?"active":"" }}" href="{{ url("docs/field-select") }}">&nbsp; Select</a></li>
                <li><a class="{{ request()->is("docs/field-radio")?"active":"" }}" href="{{ url("docs/field-radio") }}">&nbsp; Radio</a></li>
                <li><a class="{{ request()->is("docs/field-checkbox")?"active":"" }}" href="{{ url("docs/field-checkbox") }}">&nbsp; Checkbox</a></li>
                <li><a class="{{ request()->is("docs/field-number")?"active":"" }}" href="{{ url("docs/field-number") }}">&nbsp; Number</a></li>
                <li><a class="{{ request()->is("docs/field-money")?"active":"" }}" href="{{ url("docs/field-money") }}">&nbsp; Money</a></li>
                <li><a class="{{ request()->is("docs/field-date")?"active":"" }}" href="{{ url("docs/field-date") }}">&nbsp; Date</a></li>
                <li><a class="{{ request()->is("docs/field-date-time")?"active":"" }}" href="{{ url("docs/field-date-time") }}">&nbsp; Date & Time</a></li>
                <li><a class="{{ request()->is("docs/field-time")?"active":"" }}" href="{{ url("docs/field-time") }}">&nbsp; Time</a></li>
                <li><a class="{{ request()->is("docs/field-file")?"active":"" }}" href="{{ url("docs/field-file") }}">&nbsp; Upload File</a></li>
                <li><a class="{{ request()->is("docs/field-image")?"active":"" }}" href="{{ url("docs/field-image") }}">&nbsp; Upload Image</a></li>
                <li><a class="{{ request()->is("docs/field-wysiwyg")?"active":"" }}" href="{{ url("docs/field-wysiwyg") }}">&nbsp; Wysiwyg</a></li>
                <li><a class="{{ request()->is("docs/field-password")?"active":"" }}" href="{{ url("docs/field-password") }}">&nbsp; Password</a></li>
                <li><a class="{{ request()->is("docs/field-hidden")?"active":"" }}" href="{{ url("docs/field-hidden") }}">&nbsp; Hidden</a></li>
                <li><a class="{{ request()->is("docs/field-email")?"active":"" }}" href="{{ url("docs/field-email") }}">&nbsp; Email</a></li>
                <li><a class="{{ request()->is("docs/field-custom")?"active":"" }}" href="{{ url("docs/field-custom") }}">&nbsp; Custom</a></li>
                <li><a href="javascript:;" class="divider">Customization</a></li>
                <li><a class="{{ request()->is("docs/field-customize-readonly")?"active":"" }}" href="{{ url("docs/field-customize-readonly") }}">&nbsp; Readonly</a></li>
                <li><a class="{{ request()->is("docs/field-customize-required")?"active":"" }}" href="{{ url("docs/field-customize-required") }}">&nbsp; Required</a></li>
                <li><a class="{{ request()->is("docs/field-customize-help")?"active":"" }}" href="{{ url("docs/field-customize-help") }}">&nbsp; Help Text</a></li>
                <li><a class="{{ request()->is("docs/field-customize-placeholder")?"active":"" }}" href="{{ url("docs/field-customize-placeholder") }}">&nbsp; Placeholder</a></li>
                <li><a class="{{ request()->is("docs/field-customize-default")?"active":"" }}" href="{{ url("docs/field-customize-default") }}">&nbsp; Default Value</a></li>
                <li><a class="{{ request()->is("docs/field-customize-validation")?"active":"" }}" href="{{ url("docs/field-customize-validation") }}">&nbsp; Validation</a></li>
                <li><a class="{{ request()->is("docs/field-customize-input-width")?"active":"" }}" href="{{ url("docs/field-customize-input-width") }}">&nbsp; Input Width</a></li>
            </ul>
        </li>

        <li>
            <a class="{{ request()->is("docs/filter")?"active":"" }} font-bold" href="{{ url("docs/filter") }}">Filter</a>
        </li>

        <li>
            <a class="{{ request()->is("docs/hook")?"active":"" }} font-bold" href="{{ url("docs/hook") }}">Hook</a>
        </li>

        <li>
            <a class="{{ request()->is("docs/sub-module")?"active":"" }} font-bold" href="{{ url("docs/sub-module") }}">Sub Module</a>
        </li>

        <li>
            <a href="javascript:;" class="font-bold">Additional</a>
            <ul class="list-unstyled">
                <li><a class="{{ request()->is("docs/additional-element")?"active":"" }}" href="{{ url("docs/additional-element") }}">Additional Element</a></li>
                <li><a class="{{ request()->is("docs/additional-custom-input")?"active":"" }}" href="{{ url("docs/additional-custom-input") }}">Additional Custom Input</a></li>
                <li><a class="{{ request()->is("docs/additional-action-button")?"active":"" }}" href="{{ url("docs/additional-action-button") }}">Additional Action Button</a></li>
            </ul>
        </li>

        <li>
            <a href="javascript:;" class="font-bold">Helpers</a>
            <ul class="list-unstyled">
                <li><a class="{{ request()->is("docs/helpers/user-session")?"active":"" }}" href="{{ url("docs/helpers/user-session") }}">User Session</a></li>
                <li><a class="{{ request()->is("docs/helpers/upload-file")?"active":"" }}" href="{{ url("docs/helpers/upload-file") }}">Upload File</a></li>
                <li><a class="{{ request()->is("docs/helpers/upload-base64")?"active":"" }}" href="{{ url("docs/helpers/upload-base64") }}">Upload Base64 File</a></li>
                <li><a class="{{ request()->is("docs/helpers/db-update")?"active":"" }}" href="{{ url("docs/helpers/db-update") }}">DB: Update</a></li>
                <li><a class="{{ request()->is("docs/helpers/db-find")?"active":"" }}" href="{{ url("docs/helpers/db-find") }}">DB: Find</a></li>
                <li><a class="{{ request()->is("docs/helpers/db-find-all")?"active":"" }}" href="{{ url("docs/helpers/db-find-all") }}">DB: Find All</a></li>
                <li><a class="{{ request()->is("docs/helpers/redirect")?"active":"" }}" href="{{ url("docs/helpers/redirect") }}">Redirect</a></li>
                <li><a class="{{ request()->is("docs/helpers/redirect-all")?"active":"" }}" href="{{ url("docs/helpers/redirect-back") }}">Redirect Back</a></li>
                <li><a class="{{ request()->is("docs/helpers/validation")?"active":"" }}" href="{{ url("docs/helpers/validation") }}">Validation</a></li>
                <li><a class="{{ request()->is("docs/helpers/route-group-backend")?"active":"" }}" href="{{ url("docs/helpers/route-group-backend") }}">Route Group Backend</a></li>
                <li><a class="{{ request()->is("docs/helpers/route-controller")?"active":"" }}" href="{{ url("docs/helpers/route-controller") }}">Route Controller</a></li>
                <li><a class="{{ request()->is("docs/helpers/curl")?"active":"" }}" href="{{ url("docs/helpers/curl") }}">cURL</a></li>
                <li><a class="{{ request()->is("docs/helpers/google-fcm")?"active":"" }}" href="{{ url("docs/helpers/google-fcm") }}">Google FCM</a></li>
                <li><a class="{{ request()->is("docs/helpers/mail")?"active":"" }}" href="{{ url("docs/helpers/mail") }}">Mail Helper</a></li>
            </ul>
        </li>
    </ul>
</nav>