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
