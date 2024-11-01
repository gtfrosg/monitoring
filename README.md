Exemplo de requisição via shell da mesma máquina que está o laravel:

```sh
   curl --header "Authorization: 123"         \
     -H "Content-Type: application/json"      \
     -X POST http://127.0.0.1:8000/api/status  \
     -d '{
            "username": "123456",
            "hostname": "linux008029845",
            "login_at": "2010-09-20 12:15"
          }'              
```

Subindo server para escutar de todos ips da máquina:

    php artisan serve --host=0.0.0.0:8000

Exemplo de requisição de dentro da máquina virtual para a máquina 192.168.40.1:

```sh
   curl --header "Authorization: 123"         \
     -H "Content-Type: application/json"      \
     -X POST http://127.0.0.1:8000/api/status  \
     -d '{
            "username": "123456",
            "hostname": "linux008029845",
            "login_at": "2010-09-20 12:15"
          }'              
```
Exemplo de script que coleta quem está logado:

```sh
who=$(who | grep -w tty7)
name=$(echo $who | cut -d' ' -f1)
data=$(echo $who | cut -d' ' -f3)
hora=$(echo $who | cut -d' ' -f4)
hostname=$(hostname)
ip=$(ip a | grep inet | grep eth1 | cut -d' ' -f6 | cut -d'/' -f1)

curl --header "Authorization: 123"         \
     -H "Content-Type: application/json"      \
     -X POST http://127.0.0.1:8000/api/status  \
     -d "{
          \"hostname\": \"$hostname\",
          \"ip\": \"$ip\",
          \"username\": \"$name\",
           \"login_at\": \"$data $hora\"
         }"
```

Exemplo feito com ricardo:
```sh
curl --header "Authorization: 123"         \
     -H "Content-Type: application/json"      \
     -X POST http://127.0.0.1:8000/api/status  \
     -d "{
          \"hostname\": \"008.044821\",
          \"ip\": \"10.10.10.1\",
          \"username\": \"brunao\",
           \"login_at\": \"2010-09-20 12:15\"
         }"
```

lembre que para funcionar é necessario adicionar na linha 'APP_URL=' do arquivo .env o ip correto 127.0.0.1:8000
