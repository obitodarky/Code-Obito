#!C:\Python34\python.exe
__author__ = "Harsh Mehta"
import cgi
import os

form = cgi.FieldStorage()
term= form.getvalue('submit')

def cgi():
    if (os.environ['REQUEST_METHOD']== 'POST'):
        return 0

    else:
        return 1



    
