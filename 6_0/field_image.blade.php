@extends("layout")
@section("content")

    <h1>Field: Upload Image</h1>

    <p>This type of field is to make an input upload image</p>

    <p>
        <pre><code class="language-php">public function cbInit() {
    // ...

    // Using photo column
    $this->addImage("Photo","photo");

    // Add encrypt filename
    $this->addImage("Photo","photo")->encrypt(true);

    // Disable encrypt filename
    $this->addImage("Photo","photo")->encrypt(false);

    // Resize Image width x height
    $this->addImage("Photo","photo")->resize(360, 240);

    // Resize image width only and height auto
    $this->addImage("Photo","photo")->resize(360);

}</code></pre>
    </p>

    <p>This image type will be auto make an img tag on index display</p>
@endsection