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

teclado=$(ls /dev/input/by-id | grep -i keyboard)
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
exemplo de curl feito sob influencia octavio

```sh
curl --header "Authorization: 123"         \
     -H "Content-Type: application/json"      \
     -X POST http://127.0.0.1:8000/api/status  \
     -d "{
          \"hostname\": \"008.044821\",
          \"ip\": \"10.10.10.1\",
          \"username\": \"brunao\",
          \"login_at\": \"2010-09-20 12:15\",
          \"teclado\": \"TecladissmoLenovo\",
          \"mouse\": \"MoussissimoMultilazer\",
          \"monitor\": \"MonitorissimoSansung\"
         }"
```

Eu fiz um monte de coisa na minha maquina pessoal para tentar fazer um script que procura capturar numa variável o estado de uma veriável e armazenar numa variável o estado da tela de bloqueio no cinnamon:

1: instale os pacotes que fazem o comando funcionar
```sh
sudo apt update
sudo apt install dbus-x11
```
2: Definir a variável de ambiente DBUS_SESSION_BUS_ADDRESS: Após a instalação, você precisa configurar a variável de ambiente que permite que o sistema acesse o barramento de sessão D-Bus. Execute o comando abaixo para configurá-la:
```sh
export $(dbus-launch)
```
3: (opcional) Verificar se a váriável de ambiente foi configurada corretamente:
```sh
echo $DBUS_SESSION_BUS_ADDRESS
```
Ele deve devolver algo como isso aqui:

unix:path=/tmp/dbus-LLuEMsqqg0,guid=a5cfb93ce0d8c86dec45163b672c3147

4: A partir de agora você será capaz de executar o comando do cinnamon que descobre se a tela está ativa ou inativa. Então execute:

```sh
cinnamon-screensaver-command -q
```
Se a resposta for "A proteção de tela está inativa", significa que a tela não está bloqueada.
Se a resposta for "A proteção de tela está ativa", significa que a tela está bloqueada.


5: A partir de agora tentamos montar um script que atribua o valor a variável logged_at que caso o retorno do comando cinnamon-screensaver-command -q seja A proteção de tela está ativa e outro valor caso a proteção de tela não esteja ativa
```sh
StatusTelaBloqueio=$(cinnamon-screensaver-command -q)

if [[ "$StatusTelaBloqueio" == "A proteção de tela está ativa" ]]; then
    logged_at="o usuario não deslogou"  # A tela de bloqueio está ativa então e o usuario esqueceu de deslogar
else
    logged_at=$(last -x | grep 'still logged in' -v | head -n 1 | awk '{print $6, $7, $8, $9}') # A tela foi bloqueada, então o usuário não deslogou
fi

```

6: Se quiser checar o valor da variável logged_at você pode executar a seguinte linha de comando:

```sh

echo $logged_at

```

6: Agora que conseguimos atribuir valores para variáveis locais evitando os problemas podemos tentar incluir ele a variável naquele exemplo acima que coleta um pouco mais de dados
#lembrando que só vai funcionar todos os comandos se tiver conseguido seguir cada um desses passos
#E quando rodar o comando no computador não esqueça de adptar um pouco os comando pq do jeito que estão é provavel que apareça algo em branco

```sh
who=$(who | grep -w tty7)
name=$(echo $who | cut -d' ' -f1)
data=$(echo $who | cut -d' ' -f3)
hora=$(echo $who | cut -d' ' -f4)
hostname=$(hostname)
ip=$(ip a | grep inet | grep eth1 | cut -d' ' -f6 | cut -d'/' -f1)
teclado=$(ls /dev/input/by-id | grep -i keyboard)
mouse=$(ls /dev/input/by-id | grep -i 'mouse' | grep -v 'event')
monitor=$(xrandr | grep ' connected')
StatusTelaBloqueio=$(cinnamon-screensaver-command -q)
if [[ "$StatusTelaBloqueio" == "A proteção de tela está ativa" ]]; then
    logged_at="o usuario não deslogou"  # A tela de bloqueio está ativa então e o usuario esqueceu de deslogar
else
    logged_at=$(last -x | grep 'still logged in' -v | head -n 1 | awk '{print $6, $7, $8, $9}') # A tela foi bloqueada, então o usuário não deslogou
fi


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
          \"monitor"\": \"$monitor",
          \"logged_at"\": \"$logged_at"
         }"

```
