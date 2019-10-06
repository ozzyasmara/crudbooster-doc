@extends("layout")
@section("content")

    <h1>Google FCM Push</h1>

    <p>We're very often using the Google FCM Push. To support it, CRUDBooster has a helper to do pushing fcm very simple way.</p>


    <p><strong>First</strong>, you have to set Google FCM Server Key at <code>/config/crudbooster.php</code> on key "GOOGLE_FCM_SERVER_KEY". </p>
    <p>Learn more about Google FCM Server Key <a href="https://developer.clevertap.com/docs/find-your-fcm-sender-id-fcm-server-api-key#" rel="nofollow" target="_blank">click here</a></p>

    <p>
        <pre><code class="language-php">// Include this bellow script on top of class
use crocodicstudio\crudbooster\helpers\FCM;

// Send FCM Script
$fcm_response = FCM::title("Message")
    ->message("Thank you")
    ->data(["var"=>1,"var2"=>2]) // If you want to add additional data add this method
    ->tokenAndroid(["token1","token2"]) // Set this method with android tokens
    ->tokenIOS(["token1","token2"]) // Set this method with iOS tokens
    ->send(); // Call this method whenever completed
        </code></pre>
    </p>
@endsection