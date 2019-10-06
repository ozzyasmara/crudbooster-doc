@extends("layout")
@section("content")

    <h1>Upload File</h1>

    <p>This helper is to upload file.</p>

    <p>
        <pre><code class="language-php">
// Upload file from "userfile" input name. And basically, this helper will return path and filename.
$file = cb()->uploadFile("userfile"); // return example = uploads/2019/01/{encrypted_filename}.png

// Disable encryption, set false to second parameter
$file = cb()->uploadFile("userfile", false);

// Resize width of image file if the file is image, for example resize width to 350px
$image = cb()->uploadFile("photo", true, 350);

// Resize width and height of image file, for example resize to 350 x 350 px
$image = cb()->uploadFile("photo", true, 350, 350);
        </code></pre>
    </p>
@endsection