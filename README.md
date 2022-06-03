# vip-response

<h3>index.php</h3>
The index.php is just a simple form with enctype="multipart/form-data", because I needed to upload files.<br>
In the form is a input type="file" and accept=".zip,.rar,.7zip" because this form is made for zips. <br>
When the user submits the form the user will be redirected to upload.php.
<br><br>
<h3>upload.php</h3>
The upload.php creates a folder in "compressed" and "uncompressed" this folder name is random, so that there will be no duplicate unzipped and zipped files.<br>
All zips will be put in "compressed" folder. And all unzipped files will be put in "uncompressed" folder.<br>
You can go back with the "Go back" button or you can download the zip with the "Download zip" button. <br>
And there is a preview of the uploaded site under the buttons with an iframe.
