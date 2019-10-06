@extends("layout")
@section("content")

    <h1>Role Helper</h1>

    <p>Especially if you make your own controller or make your own class method. You have to make sure the method and controller are accessed by user that have its privilege.</p>

    <h2 class="mt-4">Can Browse</h2>
    <p>This helper can you use if you make a method for browse the data</p>
    <p>
        <pre><code class="language-php">public function getIndex() {
    if(!module()->canBrowse()) return cb()->redirect(cb()->getAdminPath(),"You don't have a privilege to browse data","warning");
    // Todo: your next code if allowed

}</code></pre>
    </p>

    <h2 class="mt-4">Can Create</h2>
    <p>This helper can you use if you make a method for create data</p>
    <p>
    <pre><code class="language-php">public function getAdd() {
    if(!module()->canCreate()) return cb()->redirect(cb()->getAdminPath(),"You don't have a privilege to create data","warning");
    // Todo: your next code if allowed

}</code></pre>
    </p>

    <h2 class="mt-4">Can Read</h2>
    <p>This helper can you use if you make a method for read data</p>
    <p>
    <pre><code class="language-php">public function getDetail() {
    if(!module()->canRead()) return cb()->redirect(cb()->getAdminPath(),"You don't have a privilege to read data","warning");
    // Todo: your next code if allowed

}</code></pre>
    </p>

    <h2 class="mt-4">Can Update</h2>
    <p>This helper can you use if you make a method for update data</p>
    <p>
    <pre><code class="language-php">public function getEdit($id) {
    if(!module()->canUpdate()) return cb()->redirect(cb()->getAdminPath(),"You don't have a privilege to update data","warning");
    // Todo: your next code if allowed

}</code></pre>
    </p>

    <h2 class="mt-4">Can Delete</h2>
    <p>This helper can you use if you make a method for delete data</p>
    <p>
    <pre><code class="language-php">public function getDelete($id) {
    if(!module()->canDelete()) return cb()->redirect(cb()->getAdminPath(),"You don't have a privilege to delete data","warning");
    // Todo: your next code if allowed

}</code></pre>
    </p>
@endsection