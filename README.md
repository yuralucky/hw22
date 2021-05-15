Перенести процесс парсинга IP-адреса, User-Agent, сохранение модели в таблицу visits в отдельную job, которая будет заполнять очередь под названием parsing.



Реализовать seed для заполнения очереди сообщениями.

1.git clone
2.composer install
3.php artisan db:seed
4.php artisan queue:work or start your supervisor
