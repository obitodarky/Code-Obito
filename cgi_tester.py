#!C:\Python34\python.exe
__author__ = "Harsh Mehta"
import cgi
import os

form = cgi.FieldStorage()
term= form.getvalue('submit')

print ("Content-type: text/html");
print ()
if (os.environ['REQUEST_METHOD']== 'POST'):{

    print(""" <html> <head> </head> <body>
    Hi
<body></html>""")

}


    
