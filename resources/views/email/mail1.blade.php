<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Акнкета участника на ИТ СМЕНУ 2018</title>
  </head>
  <body>
    <h1>Анкета участника {{ Auth::user()->name }}</h1>
    Имя - {{ $p1 }} <br />
    Дата рождения - {{ $p2 }} <br />
    Место рождения - {{ $p3 }} <br />
    Адрес места жительства - {{ $p4 }} <br />
    Место обучения - {{ $p5 }} <br />
    Наличие опыта участия в Конкурсах и Олимпиадах в сфере информационных технолггий, программирования, киберспорта: - {{ $p6 }} <br />
    Наличие / отсутствие наград, призовых мест и иных подтвержденных побед в конкурсах и олимпиадах по программированию, информационным технологиям и киберспорту: - {{ $p7 }} <br />
    Наличие рекомендательного письма от руководителя образовательного учреждения - {{ $p8 }} <br />
    Телефон - {{ $p9 }} <br />
    Почта - {{ $email }} <br />
    Приложение - {{ $p11 }} <br />
    
  </body>
</html>
