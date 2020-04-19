<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Jekhr Translator by TibiaLabs.com</title>
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css?h=b0b0c78c9f07510c14cb385af76328cb">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/css/pikaday.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="/assets/img/favicon.ico">
</head>

<body>
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-white portfolio-navbar gradient">
        <div class="container"><a class="navbar-brand logo" href="{{ route("home") }}">Jekhr Translator</a>
            
        </div>
    </nav>
    <main class="page hire-me-page">
        <section class="portfolio-block hire-me">
            
            <div class="container">
                <div class="heading">
                    <img src="/assets/img/jaul.gif">
                    <h3>Translator</h3>
                </div>
            <form id="translate" action="translate" method="GET">
                <div class="form-group"><label for="from" name="from">Translate from</label><select class="form-control" id="from" name="method"><option value="latin" selected="selected">Latin alphabet</option><option value="deepling">Jekhr</option></select></div>
                <div class="form-group"><label for="text" name="text">Message</label><textarea class="form-control" id="text" name="text"></textarea></div>
                <div class="form-group"><div class="form-row"></div></div>
                <button class="btn btn-primary btn-block" type="submit">Translate!</button>
            </form>
            <br />
            <table class="table" id="translateTable" style="display:none; width: 5%" align="center">
                <thead>
                  <tr>
                    <th scope="col" style="width: 5%">Language</th>
                    <th scope="col" style="width: 5%">Message</th>
                  </tr>
                </thead>
                <tbody>
                 
                </tbody>
              </table>
            </div>   
        </section>  
    </main>
    <div align="center">Do you want to know more about deepling language a.k.a Jekhr? Pay a visit to <a href="https://tibia.fandom.com/wiki/Jekhr" target="_blank">TibiaWiki.</a></div>
    <div align="center">This experimental tool was created by Wed.<br>Feel free to contribute on GitHub.</div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/pikaday.min.js"></script>
    <script src="assets/js/main.js"></script>
    
</body>
</html>