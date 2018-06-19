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
    for val in soup.findAll('h3'):
        print(val.string)
        


if(cgi_tester.cgi()==0):
    value_getter()

