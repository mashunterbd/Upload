# Private own File Upload server

Using these tools you can create your own server on your localhost.

Clone Command: 
```
git clone https://github.com/masshuvo/Upload.git
```
# Must Be PHP installed (Linux)

```
apt-get install php-y
```
# Termux
```
pkg install php -y
```

Direct Run Command: 
```
git clone https://github.com/masshuvo/Upload.git; cd Upload;ls ; php -S 127.0.0.1:80
```

# features 
[+] Port Forwarding can be done through any service. </br>
[+] Good Upload UI </br>
[+] Upload success Messages </br>
[+] You can see all logs in Terminal </br>
[+] Support multiple file selection. </br>
[+] no Uploads limitation. it's dependant on you local host storage

![Screenshot_2024-01-16-18-05-14-789_com android chrome](https://github.com/masshuvo/Upload/assets/108648096/56cd60d3-5cf7-4079-aba3-83fe758b1405) </br>
![Screenshot_2024-01-16-18-05-31-323_com google android documentsui](https://github.com/masshuvo/Upload/assets/108648096/d2af1bbc-0dce-4a69-802a-4da5eb621264) </br>
![Screenshot_2024-01-16-18-05-56-061_com android chrome](https://github.com/masshuvo/Upload/assets/108648096/584a2c82-064f-42f9-992f-5506fd8f3730) </br>
![Screenshot_2024-01-16-18-06-14-595_com offsec nhterm](https://github.com/masshuvo/Upload/assets/108648096/562d3998-b5ec-4de6-aceb-625092432fc8)

### আপনার হটস্পট এর সাথে কানেক্টেড ব্যবহারকারীরাও যদি এই সার্ভার টির অ্যাক্সেস নিতে চায় সে ক্ষেত্রে আলাদা পদ্ধতি রয়েছে।  
</br>

### If users connected to your hotspot also want to access this server, there is a different procedure.  If users connected to your hotspot also want to access this server, there is a different procedure.  
</br>
<p> Configure PHP server to listen on all interfaces: By default, when you run php -S 127.0.0.1:80, the PHP server only listens on the loopback interface (localhost). You need to modify the command to make it listen on all available network interfaces. Use <b> 0.0.0.0 </b> instead of 127.0.0.1: </p>

</br>
Go to file directory: cd <dir>

```
php -S 0.0.0.0:80
```
<b>This command will make the PHP server accessible on all interfaces, including the one used by your Android phone's hotspot. </b> </br>

![Screenshot_2024-01-29-17-09-19-403_com android chrome](https://github.com/masshuvo/Upload/assets/108648096/fe143f2e-de11-46f9-aaa7-2d646b7b30aa)

Find your Android phone's IP address: Go to your Android phone's settings, then find the network settings section, and look for the IP address of your phone. It usually starts with "192.168.x.x" or "10.x.x.x".
</br>
Access the server from the client device: On the device connected to your Android hotspot, open a web browser and enter the IP address of your Android phone followed by :80 (the port you specified in the PHP server command). For example, if your Android phone's IP address is 192.168.0.100, you would enter http://192.168.0.100:80 in the browser address bar.
</br>
Ensure that both devices are connected to the same hotspot network, and your PHP server should now be accessible from the client device.


# if you face any problem 
go to Upload directory and execute this command: 

```
chmod +x *
```
# Problem
``` 
┌──(root㉿kali)-[/project]
└─# php -S 127.0.0.1:80
[Sat Mar  9 06:25:29 2024] PHP 8.2.12 Development Server (http://127.0.0.1:80) started
[Sat Mar  9 06:25:31 2024] 127.0.0.1:45006 Accepted
[Sat Mar  9 06:25:47 2024] PHP Warning:  POST Content-Length of 15344242 bytes exceeds the limit of 8388608 bytes in Unknown on line 0
[Sat Mar  9 06:25:47 2024] 127.0.0.1:41108 [200]: POST /upload.php
[Sat Mar  9 06:25:53 2024] PHP Warning:  POST Content-Length of 15344242 bytes exceeds the limit of 8388608 bytes in Unknown on line 0
[Sat Mar  9 06:25:53 2024] 127.0.0.1:39264 [200]: POST /upload.php
[Sat Mar  9 06:25:53 2024] 127.0.0.1:39264 Closing
[Sat Mar  9 06:25:54 2024] PHP Warning:  POST Content-Length of 15344242 bytes exceeds the limit of 8388608 bytes in Unkn
```
# The warning message you're seeing indicates that the size of the POST request content (the uploaded file) exceeds the PHP upload limit set in your server configuration.

### To fix this issue, you need to increase the <b>PHP upload limit </b>. Here's how you can do it:

Locate your PHP configuration file. </br>
It's commonly named php.ini and can be found in different locations depending on your server setup. Common paths include <b> /etc/php.ini </b>, <b> /etc/php/7.x/php.ini</b>, or /etc/php/7.x/apache2/php.ini. 

## Note : আপনি যদি আপলোড সার্ভার টি এপাচি সার্ভারের মাধ্যমে ব্যবহার করতে চান তাহলে অ্যাপাচি সার্ভার এর কনফিগারেশনের ফাইল থেকেও এটা পরিবর্তন করতে হবে | If you want to use upload server through Apache server then you need to change it from Apache server configuration file as well.

Open the php.ini file in a text editor.

Search for the following directives and increase their values as needed:

upload_max_filesize: This directive sets the maximum size of uploaded files.
post_max_size: This directive sets the maximum size of POST data that PHP will accept.
For example, you can set them to values like:

```
upload_max_filesize = 100M
post_max_size = 100M

```

Here, 100M indicates 100 megabytes. Adjust the values according to your requirements.

Save the changes to the php.ini file.

# Multiple file select problem

<p> This means that the browser the user is using does not support multiple files.Naturally, we tested Google Chrome browser support.
</p>
