<?php
ob_start(); 
include('include/header.php');

if(!isset($_SESSION['USERID'])){
header("Location:index.php");
exit;
}

if(isset($_SESSION['ACCTYPE'])&& ($_SESSION['ACCTYPE']!="admin" && $_SESSION['ACCTYPE']!="pegdata")){	
echo "<font color='red' size='+1'>Anda TIDAK dibenarkan untuk melihat kandungan dalam halaman ini !!</font>";
}
else {?>
<link rel="stylesheet" type="text/css" href='include/default.css'/>	
	
	<script language=javascript>
	function validate(form)
{
		
		if (document.form.title.value=="")
	{
		alert("Sila masukkan maklumat pengkhususan di ruang yang disediakan!!");
		document.form.title.focus();
		return false;
	}
	}

</script>
<fieldset>
<legend><strong>Tambahan Rekod Bagi Pengkhususan</strong></legend>
<form name=form method=post action=admin_kursustambah2.php onSubmit="return validate(this)">	
<table border='0' width='100%' cellspacing='20'>
<tr>
<td valign='top'>
<B>Kursus:</B> <br>
  <INPUT maxLength=100 size=72 name="title"> <br><br>
<br>
<br> 
<input type=submit  value=SIMPAN class=button> <input type=button value="BATAL" onclick="javascript:history.go(-1)" class=button>
</td></tr></table></form></fieldset>
<?php 
}
include('include/footer.php');?>