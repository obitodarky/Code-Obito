import cgi
import os
import cgitb

cgitb.enable()
form= cgi.FieldStorage()
term= form.getvalue('submit')
print(term)

if os.environ['REQUEST_METHOD']== "GET":{
    print ("Content-type: text/html")
    print ()
    print("<p>hi<p>")
}
