# WLED в простых устройствах

Простое устройство для интеграции в Majordomo устройств на прошивке [WLED](https://github.com/Aircoookie/WLED)

![](https://connect.smartliving.ru/cms/data_images/1450_image.png)

![](https://connect.smartliving.ru/cms/data_images/1449_image.png)

# Resources

 * [Страница проекта](https://connect.smartliving.ru/tasks/681.html)
 * [Страница дополнения](https://connect.smartliving.ru/addons/category6/234.html)

Прошивка Wled управляет адресной лентой ws2812b.
В прошивке [куча эффектов и палитр](https://github.com/Aircoookie/WLED/wiki/List-of-effects-and-palettes)
WEBUI прошивки

Интеграция через MQTT, подписка на топики v и api
Простое устройство позволяет
 -  вкл/выкл подстветку,
 -  изменять цвет, яркость
 -  переключать эффекты и палитры
 -  настраивать скорость и интенсивность эффектов
Описание настройки ПУ

![](https://connect.smartliving.ru/cms/data_images/1449_image.png)

Настройка ПУ WLED

Получение статусов и управление осуществляется через топики MQTT - v и api.

Статусы передаются устройством в топик v (в модуле MQTT /wled/1363ee/v, где вместо 1363ee будет идентификатор вашего устройства), к данному топику нужно привязать свойство ПУ mqtt_v.

Для управления устройством нужен топик api, его нужно создать в модуле MQTT самому (/wled/1363ee/api, вместо 1363ee указываем идентификатор вашего устройства), его привязываем к свойству ПУ mqtt_api.

В настройках ПУ есть поле IP, в нем указывается IP адрес устройства, по этому адресу нажатием кнопки ⚙️ вызывается WEBUI устройства.

![](https://mjdm.ru/forum/download/file.php?id=18626)
