<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Upload | GamerTube</title>
    <style>
      html, body {
        width: 100%;
        height: 100%;
        margin: 0;
      }
      
      .picker-content {
        height: 100%;
        width: 100%;
      }
    </style>
  </head>
  <body>
    <div class="picker-content"></div>
    <script src="//static.filestackapi.com/filestack-js/2.x.x/filestack.min.js"></script>
    <script type="text/javascript">
      document.addEventListener("DOMContentLoaded", function(event) { 
        const client = filestack.init('A7qlI0TINRpOiRxbeHnOfz'); 

        let options = {
          "displayMode": "inline",
          "container": ".picker-content",
          "accept": [
            "image/*", 
            "video/*",
          ],
          "fromSources": [
            "local_file_system"
          ],
          "uploadInBackground": false,
          "onUploadDone": (res) => console.log(res),
        };

        picker = client.picker(options);
        picker.open();
      });
    </script>
    <script src="checker.js"></script>
  </body>
</html>