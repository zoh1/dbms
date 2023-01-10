<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script>
var subjectObject = {
  "Nova": {
    "599": ["Links", "Images", "Tables", "Lists"],
    "525": ["Borders", "Margins", "Backgrounds", "Float"],
     
  },
  "Rosette": {
    "199": ["Variables", "Strings", "Arrays"],
    "999": ["SELECT", "UPDATE", "DELETE"]
  }
}
window.onload = function() {
  var subjectSel = document.getElementById("subject");
  var topicSel = document.getElementById("topic");
  var chapterSel = document.getElementById("chapter");
  for (var x in subjectObject) {
    subjectSel.options[subjectSel.options.length] = new Option(x, x);
  }
  subjectSel.onchange = function() {
    //empty Chapters- and Topics- dropdowns
    chapterSel.length = 1;
    topicSel.length = 1;
    //display correct values
    for (var y in subjectObject[this.value]) {
      topicSel.options[topicSel.options.length] = new Option(y, y);
    }
  }
  topicSel.onchange = function() {
    //empty Chapters dropdown
    chapterSel.length = 1;
    //display correct values
    var z = subjectObject[subjectSel.value][this.value];
    for (var i = 0; i < z.length; i++) {
      chapterSel.options[chapterSel.options.length] = new Option(z[i], z[i]);
    }
  }
}
</script>
</head>   
<body>
<form name="form1" id="form1" action="/action_page.php">
Service: <select name="subject" id="subject">
    <option value="" selected="selected">Select Service</option>
  </select>
  <br><br>
Package: <select name="topic" id="topic">
    <option value="" selected="selected">Please select Package</option>
  </select>
  <br><br>
Chapters: <select name="chapter" id="chapter">
    <option value="" selected="selected">Please select topic first</option>
  </select>
  <br><br>
  <input type="submit" value="Submit">  
</form>

</body>
</html>