#!C:\Python34\python.exe
import cgi_tester
import cgi
import requests
from bs4 import BeautifulSoup

def value_getter():
    url = "http://localhost/HomePage.php"
    source = requests.get(url)
    code_text= source.text
    soup= BeautifulSoup(code_text)
    for val in soup.findAll('body'):
        value= val.get('body')
        print(val.string)
        print(value)


if(cgi_tester.cgi()==0):
    value_getter()

