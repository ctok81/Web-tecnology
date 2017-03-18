
from bs4 import BeautifulSoup
import urllib.request
import re

f = urllib.request.urlopen('http://yandex.ru/pogoda/perm')
soup = BeautifulSoup(f, fromEncoding="UTF-8")
pogoda = soup.find('div', {'class':'current-weather__thermometer current-weather__thermometer_type_now'}).getText()
time = soup.find('span', {'class':'current-weather__local-time'})

print(u'<p>Текущее время:', time.getText(), '</p>')
print(u'<p>Температура в Перми:', re.search(r"[+,-]?\d*",pogoda).group(0) ,'°C</p>')
