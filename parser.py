
from bs4 import BeautifulSoup
import urllib.request
import re

soup = BeautifulSoup(urllib.request.urlopen('http://yandex.ru/pogoda/perm'))
pogoda = soup.find('div', {'class':'current-weather__thermometer current-weather__thermometer_type_now'}).getText()
time = soup.find('span', {'class':'current-weather__local-time'})

print('<span class="Date1">Текущее время:</span><span class="Value">', time.getText(), '</span><br>')
print('<span class="Date1">Температура:</span><span class="Value">', re.sub('−','-',re.search('[\−\-\+]?\d*',pogoda).group(0)) ,'°C</span>')
