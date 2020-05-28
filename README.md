﻿
Бородина Наталия, Жарков Глеб

Тема: Повышения защиты от НСД, локальной базы данных, до уровня 3Б

1.1. Идентификация, проверка подлинности и
     контроль доступа субъектов в систему 20.03.2020	

2.1. Регистрация и учет входа (выхода) субъектов
     доступа в (из) систему(ы) (узел сети) 28.03.2020	

2.2. Учет носителей информации 10.04.2020
	
4.1. Обеспечение целостности программных средств
     и обрабатываемой информации 21.04.2020	

4.2. Физическая охрана средств вычислительной
     техники и носителей информации 28.04.2020
	
4.4. Периодическое тестирование СЗИ НСД	28.04.2020
	
4.5. Наличие средств восстановления СЗИ НСД 19.05.2020	


## 2.2. Учет носителей информации

 Учету подлежат: 
•съемные машинные носители персональных данных (флэш-накопители, внешние накопители на жестких дисках и иные устройства); 
•портативные вычислительные устройства, имеющие встроенные носители персональных данных (ноутбуки, нетбуки, планшеты, сотовые телефоны, цифровые камеры, звукозаписывающие устройства и иные аналогичные по функциональности устройства); 
•машинные носители персональных данных, встроенные в корпус средств вычислительной техники (накопители на жестких дисках).

Учет машинных носителей персональных данных включает присвоение регистрационных (учетных) номеров и нанесение маркировки.
Учет съемных машинных носителей персональных данных ведется в журнале учета машинных носителей персональных 

##Журнал учета машинных носителей персональных данных
|№ п/п  |Регистрационный номер/дата  |	Тип/емкость машинного |	Номер экземпляра/количество экземпляров|Место установки/дата установки	       |Ответственное должностное лицо (ФИО)   |  Расписка в получении (ФИО, подпись, дата)   |Расписка в обратном приеме (ФИО, подпись, дата)     |Место хранения машинного носителя персональных данных |	Сведения об уничтожении машинных носителей персональных данных, стираний информации (подпись, дата)|
| ------|:--------------------------:|:-----------------------|----------------------------------------|:-------------------------------------:|:-------------------------------------:|:--------------------------------------------:|----------------------------------------------------|------------------------------------------------------|-------------------------------------------------------------------------------------------------------:|
|1	|1/27.02.2020	             |ПК/512Гб                |1/1                                     |г. Пермь, Ким 19-12/27.01.2020         |Жарков Г.Н.	                       |Жарков/27.02.2020	                      |Жарков/27.02.2025	                           |г. Пермь, Ким 19-12	                                  |нет                                                                                                     |
|2	|2/27.02.2020	             |ПК/500Гб                |1/1		                       |г. Пермь, Льва-Шатрова 15-23/27.01.2020|Бородина Н.В.                          |Бородина/27.02.2020	                      |Бородина/27.02.2025	                           |г. Пермь, Льва-Шатрова 15-23	                  |нет                                                                                                     |

##Журнал учета съемных носителей персональных данных
|№ п/п |Метка съемного носителя (учетный номер)	|ФИО исполнителя	        |Получил (дата)	      |Подпись исполнителя  |	Примечание* |
|------|:--------------------------------------:|:-----------------------------:|:-------------------:|:-------------------:|--------------:|
|1     |1	                                |Жарков Г.Н.	                |27.01.2020	      |Жарков	            |флешка 8гб     |

##4.1.Обеспечение целостности программных средств и обрабатываемой информации
Контроль целостности всех компонентов программного обеспечения и средств защиты информации, а также их обновлений, проводится по контрольным суммам.

##4.2 Физическая охрана средств вычислительной техники и носителей информации
Физическая охрана средств вычислительной техники и носителей информации проводится каждый день, тщательный обход устройства и проверка на физические повреждения. Доступ в помещение со всеми средствами вычислительной техники и носителями информации строго ограничен и хорошо охраняется специальными людьми.

##4.4. Периодическое тестирование СЗИ НСД

###Тестирование №1 «Открытие авторизованной страницы в режиме инкогнито»

1)Авторизуемся на сайте по любой из существующих учетных записей, например, введем логин:1, пароль:1.
2)После авторизации копируем адресную строку, переходим в режим инкогнито с помощью комбинации клавиш CtrlShiftN и вставляем скопированную строку в адресную строку.
Ожидание: в браузере мы увидим страницу авторизации.

###Тестирование №2 «Попытка авторизации без заполнения логина»

1)	На странице авторизации введем пароль:123 и нажмем на кнопку Вход.
Ожидание: кнопка останется неактивна.

###Тестирование №3 «Попытка авторизации без заполнения пароля»

1)	На странице авторизации введем логин:1 и нажмем на кнопку Вход.
Ожидание: кнопка останется неактивна.

###Тестирование №4 «Попытка авторизации при вводе логина и пароля не соответствующих одной уч. записи»

1)	На странице авторизации введем логин: 102 пароль:1 и нажмем на кнопку Вход.
Ожидание: в заголовке страницы появится уведомление «Проверьте написание пароля и логина, поля логин и пароль отчистятся.

###Тестирование №5 «Регистрация без заполнения полей»

1)	Со страницы авторизации переходим на страницу регистрации, для этого нажимаем по ссылке Регистрация в низу страницы.
2)	На странице Регистрации все поля оставляем пустыми. Нажмем кнопку Зарегистрироваться.
Ожидание: кнопка останется неактивна.

###Тестирование №6 «Регистрация без заполнения поля логина»

1)	Со страницы авторизации переходим на страницу регистрации, для этого нажимаем по ссылке Регистрация в низу страницы.
2)	На странице Регистрации поле для ввода логина оставляем пустым, а поля пароля заполняем произвольными одинаковыми комбинациями, например, 123. Нажмем кнопку Зарегистрироваться.
Ожидание: кнопка останется неактивна.

###Тестирование №7 «Регистрация без заполнения полей пароля»

1)	Со страницы авторизации переходим на страницу регистрации, для этого нажимаем по ссылке Регистрация в низу страницы.
2)	На странице Регистрации полелогинзаполнимкомбинацией 123, а поля для ввода пароля оставляем пустым. Нажмем кнопку Зарегистрироваться.
Ожидание: кнопка останется неактивна.

###Тестирование №8 «Регистрация без заполнения поля Пароль или поля Повторный пароль»

1)	Со страницы авторизации переходим на страницу регистрации, для этого нажимаем по ссылке Регистрация в низу страницы.
2)	На странице Регистрации полелогинзаполнимкомбинацией 123, введем в поле пароль комбинацию 123, а поле для повторного ввода пароля оставляем пустым. Нажмем кнопку Зарегистрироваться.
3)	* На странице Регистрации полелогинзаполнимкомбинацией 123, введем в поле повторного пароль комбинацию 123, а поле для ввода пароля оставляем пустым. Нажмем кнопку Зарегистрироваться.
Ожидание: кнопка останется неактивна.

###Тестирование №9 «Регистрация учетной записи с существующим логином»

4)	Со страницы авторизации переходим на страницу регистрации, для этого нажимаем по ссылке Регистрация в низу страницы.
5)	На странице Регистрации вводим в поле логина 1, а в поле пароль любую комбинацию, например, 123. После заполнения полей нажимаем на кнопку Зарегистрироваться.
Ожидание: в заголовке страницы появится уведомление «Пользователь с таким логином уже существует».

###Тестирование №10 «Регистрация учетной записи с недопустимыми символами в поле логин»

1)	Со страницы авторизации переходим на страницу регистрации, для этого нажимаем по ссылке Регистрация в низу страницы.
2)	На странице Регистрации вводим в поле логина комбинацию, содержащую любой из символов ("*", "%", "<", ">", "?", "!", "+", "#"), например, 1#, а в поля для пароля любую комбинацию, например, 123. После заполнения полей нажимаем на кнопку Зарегистрироваться.
Ожидание: в заголовке страницы появится уведомление «В логине присутствуют недопустимые символы: "*", "%", "<", ">", "?", "!", "+", "#"».

###Тестирование №11 «Регистрация учетной записи с недопустимыми символами в полях, для ввода пароля»

1)	Со страницы авторизации переходим на страницу регистрации, для этого нажимаем по ссылке Регистрация в низу страницы.
2)	На странице Регистрации вводим в поле логина 1, а в поля для ввода пароля комбинацию, содержащую любой из символов ("*", "%", "<", ">", "?", "!", "+", "#"), например, 123?. После заполнения полей нажимаем на кнопку Зарегистрироваться.
Ожидание: в заголовке страницы появится уведомление «В пароле присутствуют недопустимые символы: "*", "%", "<", ">", "?", "!", "+", "#"».

###Тестирование №12 «Регистрация учетной записи с неправильным повторным паролем»

1)	Со страницы авторизации переходим на страницу регистрации, для этого нажимаем по ссылке Регистрация в низу страницы.
2)	На странице Регистрации вводим в поле логина 1, в поля для ввода пароля 123, поле для повторного ввода пароля заполним комбинацией 1234. После заполнения полей нажимаем на кнопку Зарегистрироваться.
Ожидание: кнопка останется неактивна, а поле с повторным паролем будет подчеркнуто красной линией.



##4.5. Наличие средств восстановления СЗИ НСД
Для обеспечения возможной полной замены (переустановки)данных в случае каких-либо отказов (сбоев) или нарушений в работе технических средств на внешнем носителе(флешке) хранятся резервные копии всех данных сайта. 






