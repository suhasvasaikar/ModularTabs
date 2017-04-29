<html>
<head>
<title>Test Tabular Parameters</title>
<script language="javascript" type="text/javascript" src="js/jquery.js"></script>
<script language="javascript" type="text/javascript" src="js/jquery.coolfieldset.js"></script>

<link rel="Stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" />

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.21/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/showFunction.js"></script>

<style>
body{color:black;font-family:"Verdana", "Arial", "Helvetica", "sans-serif";font-size:10pt;margin:0}
td{color:black;font-family:"Verdana", "Arial", "Helvetica", "sans-serif";font-size:12pt}
a:link       { text-decoration: none; color:#008080 }
a:visited    { text-decoration: none; color: #008080 }a:hover      { color: #00FFCC }
 h4{font-size:10pt; line-height:10%; padding: 1px; }
img{cursor:pointer;}
</style>
<style type="text/css">
body {margin-left:50pt;}
body{margin-right:50pt;}

tr.hidden {visibility: hidden;}
#ne_direct {
    width: 100%;
    padding: 30px 0;
    text-align: center;
    background-color: lightblue;
    margin-top:20px;
}
.dropdown-submenu {
    position: relative;
}

.dropdown-submenu .dropdown-menu {
    top: 0;
    left: 100%;
    margin-top: -1px;
}

fieldset { border:1px solid green }

legend {
  padding: 0.2em 0.5em;
  border:1px solid green;
  color:green;
  font-size:90%;
  text-align:left;
}

</style>
</head>
<body>
<p align="center">Title</p>
<!--<td valign="top" width="50%">-->

<form name="form1" action="#" method="POST" enctype="multipart/form-data">
<fieldset id="fieldset1" class="coolfieldset expanded"><legend>>> Basic tab</legend>
<table>
  <tr><td colspan=2 bgcolor="green"><font color="white">tab1 header</font></td></tr>
  <tr><td colspan=2 bgcolor="green"><font color="white">tab2 header</font></td></tr>
  <tr id="div1">
       <td> 
          <h4><nobr>Select <img src="images/info.png" onclick="showFunction_S(this,'Your message')" width="13" height="13"/></h4></nobr>
       </td>
       <td valign="top">
       </td>
  </tr>
  <tr><td></td><td></td></tr> 
</table>
</fieldset>

</br>
<fieldset id="fieldset2" class="coolfieldset expanded">
    <legend>>> Advanced tab</legend>
    <div>
      <table>
      <tr><td colspan=2 bgcolor="green"><font color="white">Parameters</font></td></tr>
      </table>
    </div>
  </fieldset>

  <h2><input id="submit1" type="submit"  value="ENTER" style="width: 100%;padding: 12px 20px;margin: 8px 0; box-sizing: border-box; border: none; background-color: #3CBC8D; color: white;"/></h2>
</form>

<script>
    //$('#fieldset2').coolfieldset();
    $('#fieldset2').coolfieldset({collapsed:true});
</script>
</body>
</html>

