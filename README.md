# Private own File Upload server

Using these tools you can create your own server on your localhost.

Clone Command: 
```
git clone https://github.com/masshuvo/Upload.git
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

<p> Configure PHP server to listen on all interfaces: By default, when you run php -S 127.0.0.1:80, the PHP server only listens on the loopback interface (localhost). You need to modify the command to make it listen on all available network interfaces. Use 0.0.0.0 instead of 127.0.0.1: </p>

</br>
Go to file directory: cd <dir>

```
php -S 0.0.0.0:80
```
This command will make the PHP server accessible on all interfaces, including the one used by your Android phone's hotspot. </br>

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
