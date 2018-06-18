#!C:\Python34\python.exe
import cgi
import os

form= cgi.FieldStorage()
term= form.getvalue('submit')

print ("Content-type: text/html")
print ("");
print ("""<html>
<head><title>My first Python CGI app</title></head>
<body>
<p>Hello, 'world'!</p>
</body>
</html>""")
