<!DOCTYPE html>
<html>
    <head>
        <title>Capture Image</title>
    </head>
    <body>
        <form method="POST" action="{{ url('capture') }}" enctype="multipart/form-data">
            @csrf
            @method("post")
            <label>Enter a copy of your id</label>
            <input name="user_id">
            <button id="start-camera" type="button">Start Camera</button>
            <video id="video" width="320" height="240" autoplay></video>
            <input id="click-photo" type="submit" value="Click Photo">
            <canvas id="canvas" width="320" height="240"></canvas>
            {{-- <label>Enter the id Image</label> --}}
            <input type="hidden" id="canvasImage" name="user_image">
        </form>
        <script>
            let camera_button = document.querySelector("#start-camera");
            let video = document.querySelector("#video");
            let click_button = document.querySelector("#click-photo");
            let canvas = document.querySelector("#canvas");
            camera_button.addEventListener('click', async function() {
                let stream = await navigator.mediaDevices.getUserMedia({ video: true, audio: false });
                video.srcObject = stream;
            });

            click_button.addEventListener('click', function() {
                canvas.getContext('2d').drawImage(video, 0, 0, canvas.width, canvas.height);
                let image_data_url = canvas.toDataURL('image/jpeg');
                const inputElement = document.querySelector('#canvasImage');
                inputElement.value = canvas.toDataURL('image/jpeg');
            });
        </script>
    </body>
</html>
