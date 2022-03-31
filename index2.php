<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>WOLFTV</title>
  <link rel="shortcut icon" type="image/x-icon" href="https://i.ibb.co/37fVLxB/f4027915ec9335046755d489a14472f2.png">
  <meta name="robots" content="noindex">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@5.1.3/dist/simplex/bootstrap.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
  .collapsible { font: bold 11px Arial; text-decoration: none; background-color: #EEEEEE; color: #333333; padding: 2px 2px 2px 6px; border-top: 1px solid #CCCCCC; border-right: 1px solid #333333; border-bottom: 1px solid #333333; border-left: 1px solid #CCCCCC;}
  .active, .collapsible:hover { background-color: #555;}
  .contentt { padding: 0 5px; display: none; overflow: hidden; background-color: #f1f1f1;}
  </style>
  <style>
  .modal-dialog {max-width: 90%;margin: 0 auto;box-shadow: rgba(0, 0, 0, 0.14) 0px 4px 5px 0px, rgba(0, 0, 0, 0.12) 0px 1px 10px 0px, rgba(0, 0, 0, 0.3) 0px 2px 4px -1px; }.modal-body {padding: 1px;
  }

  .catchup { font: bold 11px Arial; text-decoration: none; background-color: #EEEEEE; color: #333333; padding: 2px 2px 2px 2px; border-top: 1px solid green; border-right: 1px solid red; border-bottom: 1px solid red; border-left: 1px solid green;box-shadow: rgba(0, 0, 0, 0.14) 0px 4px 5px 0px, rgba(0, 0, 0, 0.12) 0px 1px 10px 0px, rgba(0, 0, 0, 0.3) 0px 2px 4px -1px; }
  </style>
</head>
<body>
  <script type='text/javascript'>
  $(function(){$(&#39;.df-hide&#39;).on(&#39;click&#39;,function(){$(&#39;.pixabin-float-telegram&#39;).fadeOut(170);});});
  </script>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="form-floating">
            <input type="text" class="form-control" id="channelSearch" placeholder="Search"><label for="channelSearch">Search your fav Channel...</label>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no"/>
<title>JioTV Web</title>
<link rel="shortcut icon" type="image/x-icon" href="https://i.ibb.co/37fVLxB/f4027915ec9335046755d489a14472f2.png">
<meta name="robots" content="noindex" />
<link rel="stylesheet" href="assets/css/darkmode.min.css">
<script src="https://cdn.jsdelivr.net/npm/lazysizes@5.3.2/lazysizes.min.js"></script>
</head>
<body>
<div id="jtvh1">
<a href="https://www.jio.com/en-in/apps/jio-tv">
<h1>JioTV Web</h1>
</div>
</a>
<div id="content">
<div class="container">
<div id="list" class="row">
<?php
$json = json_decode(file_get_contents('channels.json') , true);
foreach ($json['result'] as $channel) {
echo '<div class="col-6 col-sm-4 col-md-3 col-lg-3 col-xl-2">'.PHP_EOL;
printf("<a href=\"play.php?c=%s\" class=\"card\">".PHP_EOL, $channel['target']);
printf("<img class=\"lazyload\" data-src=\"http://jiotv.catchup.cdn.jio.com/dare_images/images/%s\" style=\"height: 120px\">".PHP_EOL, $channel['logoUrl']);
echo '<div class="card-body">'.PHP_EOL;
printf("<p class=\"card-text\">%s</p>".PHP_EOL, $channel['channel_name']);
echo '</div>'.PHP_EOL;
echo '</a>'.PHP_EOL;
echo '</div>'.PHP_EOL;
}
?>
</div>
</div>
</div>
</body>
</html>
