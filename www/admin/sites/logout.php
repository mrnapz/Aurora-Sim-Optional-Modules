<style type="text/css">
<!--
.Stil1 {
	font-size: 18px;
	font-weight: bold;
}
-->
</style>
<table width="100%" height="100%" border="0" align="center">
            <tr>
              <td valign="top"><table width="50%" border="0" align="center">
                <tr>
                  <td><p align="center" class="Stil1">Logout</p>                  </td>
                </tr>
              </table>
              <br />
              <table width="64%" height="199" border="0" align="center" cellpadding="5" cellspacing="5">
                <tr>
                  <td valign="top"><p align="center"><br />
                      <br />
                      <br />
<P id=rom align=center></P>
<script>
time = 2;

function download() {

if (time == 0) { 
<?
session_unset();
session_destroy();

echo "window.location.href='index.php?page=home';";
?>
}

if (time > 0) { 
document.getElementById("rom").innerHTML='<font size="2" color="#ffffff">Please wait. Logging out...</font>';
setTimeout('download()',1000);
}

time--;
}

download();
</script>

<br /> 
<center><img src="../images/icons/loader.gif" width="126" height="22" /></center>
                    <br />
                    <br />
                  </td>
                </tr>
              </table></td>
            </tr>
</table>