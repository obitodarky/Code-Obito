import cgi
import os
import cgitb

cgitb.enable()
form= cgi.FieldStorage()
term= form.getvalue('submit')
print(term)

