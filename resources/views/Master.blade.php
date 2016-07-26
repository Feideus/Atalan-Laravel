<!DOCTYPE html>

<html>
  <head>
      <title>Back office !</title>
  </head>
  <body>
    <header style ="text-align: center;">
      <div>
	<h2>Back Office</h2>
      </div>
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
    <footer>@yield('Javascript')</footer>
  </body>
</html>
