<!DOCTYPE html>

<html>
 <head>
  <meta charset="utf-8">
  <link href="project.css" rel="stylesheet" type="text/css">
   <script type="text/javascript">
	function randomlinks() {
    var myrandom = Math.floor(Math.random() * 2)
    var links = new Array()
    links[0] = "questionnare.php"
    links[1] = "questionnare2.php"
    window.location = links[myrandom]
}
</script>

 </head>
 <body> 
 <div class="group">
  <h1 style="text-align: center;">You will see a questionnare with a photo, gender, age, complaint. 
  You have to choose the correct treatment at yours discretion. Sometimes in addition to the same information, 
  you can see a recommendation from decision support systems. Finally, you must choose your advice.</h1>
  <button type="button" onClick="randomlinks()"> Click to start </button>
  </div>
 </body>
</html>