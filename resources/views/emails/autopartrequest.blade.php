<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <style>
        p {color: red}
        div {width:150px;
            }
    </style>
    <title>Новый заказ</title>
</head>
<body style="margin: 0; padding: 0;">
<table border="1" cellpadding="0" cellspacing="0" width="600" style="border-collapse: collapse">
    <tr>
        <td>
            <p>Описание автозапчасти:  {{$myrequest['description']}} </p>
        </td>
    </tr>
</table>
<h1>Описание запроса </h1><br>
<p>Номер телефона клиента: {{  $myrequest['phonenumber']}} </p>
<p>Марка автомобиля:  {{$myrequest['automaker']}} </p>
<p>Модель автомобиля:  {{$myrequest['automodel']}} </p>
<p>Идентификационный номер (VIN):  {{$myrequest['vin']}} </p>
<div class="maildescr">
<p>Описание автозапчасти:  {{$myrequest['description']}} </p>
</div>
    <p>Объем двигателя (л):  {{$myrequest['engine']}} </p>
<p>Год выпуска:  {{$myrequest['Year']}} </p>
<p>Артикул:  {{$myrequest['Artikul']}} </p>
</body>
</html>
