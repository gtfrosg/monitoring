<!DOCTYPE html>
<html>
    <head>
        <title>@section('title') index </title>
    </head>
    <body>
	@forelse($status as $statu)
	<br>
         <li>Hostname: {{  $statu->hostname  }}</li>
         <li>IP: {{  $statu->ip  }}</li>
         <li>Username: {{  $statu->username  }}</li>
         <li>Login at: {{  $statu->login_at  }}</li>
	<br>
	@empty
	  Não retornaram nenhum status
	@endforelse
    </body>
</html>
