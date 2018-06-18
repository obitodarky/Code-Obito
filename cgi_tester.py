#!C:\Python34\python.exe
import cgi
import os

form= cgi.FieldStorage()
term= form.getvalue('submit')

print ("Content-type: text/html")
print ("");
print ("<html>")
print("<body>")
if(term=None):
    print ("Term is none")
print("</html>")


    
