
from bs4 import BeautifulSoup
import urllib.request
import re

f = urllib.request.urlopen('http://yandex.ru/pogoda/perm')
soup = BeautifulSoup(f, fromEncoding="UTF-8")
'current-weather__thermometer current-weather__thermometer_type_now'
pogoda = soup.find('div', {'class':'current-weather__thermometer current-weather__thermometer_type_now'}).getText()
time = soup.find('span', {'class':'current-weather__local-time'})

print(u'<span class="Date1">Текущее время:</span><span class="Value">', time.getText(), '</span><br>')
print(u'<span class="Date1">Температура:</span><span class="Value">', re.sub('−','-',re.search(r'[\−\-\+]?\d*',pogoda).group(0)) ,'°C</span>')
