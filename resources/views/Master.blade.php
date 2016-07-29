<!DOCTYPE html>

<html>
  <head>
      <title>User Management</title>
  </head>
  <body>
    <header style="text-align: center; margin-bottom: 4%;">
      <div>
	<h2>User Management</h2>
      </div>
    </header>
      <div>
	@yield('Header')
      </div>
    </header>
    <div id="FirstDiv">
      <p id="FirstP">
	@yield('Content')
      </p>
    </div>
    <div id="Insert">@yield('NewText')</div>
    <div id="SecondDiv">
      <p id="SecondP"></p>
    </div>
    <footer>@yield('Footer')</footer>
  </body>
</html>
