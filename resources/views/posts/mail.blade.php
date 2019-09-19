<!DOCTYPE html>
<html>
<head>
 <title>Test Mail</title>
</head>
<body>
 <p style="font-family:verdana;font-size:300%;"><b><i>Hello,</b></i></p>
 <p style="font-family:courier;font-size:100%;"><b><i>Organization Name:{{ $data['name']}}.</b></i></p>
 <p style="font-family:courier;font-size:80%;"><b><i>Email Id:{{ $data['email1']}}.</b></i></p>
 <p style="font-family:courier;font-size:200%;"><b><i>{{ $data['msg']}}.</b></i></p>
</body>
</html>