<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Quotable</title>
<link rel="stylesheet" href="css/normalize.css" type="text/css" />
<link rel="stylesheet" href="css/main.css" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Libre+Baskerville:400,700,400italic' rel='stylesheet' type='text/css'></head>
<body>

  <script type="text/x-handlebars">
  	<div class="container">
  		<header>
  			<h1>Quotable</h1>
  		</header>
    	{{outlet}}
  	</div>
  </script>

  <script type="text/x-handlebars" data-template-name="index">
  	<section id="quotes">
  		{{#each model}}
      		<article class="quote">
      			<div class="statement">
              {{! <span class="left-quote">&ldquo;</span> }}
      				{{statement}}
              {{! <span class="right-quote">&rdquo;</span> }}
      			</div>
      			<div class="author">
      				{{author}}
      			</div>
      			<div class="actions">
      				&#59177; &#9998;
      			</div>
      		</article>
    	{{/each}}
  	</section>
  </script>

  <script src="js/libs/jquery-1.9.1.js"></script>
  <script src="js/libs/handlebars-1.0.0-rc.3.js"></script>
  <script src="js/libs/ember-latest.js"></script>
  <script src="js/libs/ember-data-latest.js"></script>
  <script src="js/libs/serializer.js"></script>
  <script src="js/libs/adapter.js"></script>
  <script src="js/app.js"></script>

</body>
</html>