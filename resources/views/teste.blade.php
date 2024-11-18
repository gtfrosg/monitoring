<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'monitoring')</title>
</head>
<body>
    <div class="container">
	  @forelse($status as $statu)
	    <ul>
		<li>Hostname: {{  $statu->hostname  }}</li>
		<li>IP: {{  $statu->ip  }}</li>
		<li>Username: {{  $statu->username  }}</li>
		<li>Login at: {{  $statu->login_at  }}</li>
		<li>Teclado: {{  $statu->teclado  }}</li>
		<li>Mouse: {{  $statu->mouse  }}</li>
		<li>Monitor: {{  $statu->monitor  }}</li>
	    </ul>
	   @empty
	    <p>nenhum estatus</p>
	  @endforelse
    </div>
</body>
</html>
