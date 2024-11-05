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



Outro exemplo de script que coleta os dados de quem está logado só que coleta um pouco mais de informações
```sh
who=$(who | grep -w tty7)
name=$(echo $who | cut -d' ' -f1)
data=$(echo $who | cut -d' ' -f3)
hora=$(echo $who | cut -d' ' -f4)
hostname=$(hostname)
ip=$(ip a | grep inet | grep eth1 | cut -d' ' -f6 | cut -d'/' -f1)

#o que está acima está no README do monitoring e é a forma através da qual
#nós conseguimos armazenar dentro do sistema as hostname, ip, username e o
#login_at do computador.


#agora vamos tentar armazenar as informações sobre o teclado, mouse e tela
#do computador respectivamente

teclado=$(/dev/input/by-id | grep -i keyboard)
mouse=$(ls /dev/input/by-id | grep -i mouse)
#aqui com o mouse temos um problema que o linux (da poha minha maquina pelo
#menos)retorna dois valores nessa poha um associado ao evento do mouse e outro
#associado ao mouse em si se o mesmo problema aparecer para você eu sugiro
#que execute um | grep -v ('event') para tirar o evento do mouse o 
#comando então ficaria assim:
mouse=$(ls /dev/input/by-id | grep -i 'mouse' | grep -v 'event')
monitor=$(xrandr | grep ' connected')


#ai é só executar a mesma poha de sempre


curl --header "Authorization: 123"         \
     -H "Content-Type: application/json"      \
     -X POST http://127.0.0.1:8000/api/status  \
     -d "{
          \"hostname\": \"$hostname\",
          \"ip\": \"$ip\",
          \"username\": \"$name\",
          \"login_at\": \"$data $hora\"
          \"teclado"\": \"$teclado"
          \"mouse"\": \"$mouse"
          \"monitor"\": \"$monitor"
         }"

```
