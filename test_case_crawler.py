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
    for val in soup.findAll('iframe', {'id': 'resultview'}):
        value= val.get('body')
        return value

if(cgi_tester.cgi()==0):
    print(value_getter())

