from bs4 import BeautifulSoup
import urllib.request
import re

f = urllib.request.urlopen('https://github.com/ctok81/Web-tecnology')
soup = BeautifulSoup(f, fromEncoding="UTF-8")
last_Master = soup.find('a', {'class':'user-mention'})
commit = soup.find('span', {'class':'num text-emphasized'})
print(u'<p><span class="Date2">Последний коммит:</span><span class="Value2">', last_Master.getText(), '</span><br>')
print(u'<span class="Date2">Количество коммитов в проекте:</span><span class="Value2">', commit.getText() ,'</span></p>')
