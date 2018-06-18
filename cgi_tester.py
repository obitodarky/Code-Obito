import cgi
import os
import cgitb

cgitb.enable()
form= cgi.FieldStorage()
term= form.getvalue('submit')

print ("Content-type: text/html")
print ("""<html>
<head><title>My first Python CGI app</title></head>
<body>
<p>Hello, 'world'!</p>
</body>
</html>""")
