<?php
include("template.php");
?>
<h1 align="center">Tính diện tích (switch)</h1>
<form name="frmDTich" action="" method="post">
<table width="80%" align="center">
<tr>
<td>Lựa chọn: </td>
<td><input type="radio" name="dientich" value="hinhtron" <?php if((isset($_POST["batdau"]) || isset($_POST["Tinh"])) && $_POST["dientich"]=="hinhtron") echo("checked='checked'"); ?> /> Hình tròn &nbsp;&nbsp;
<input type="radio" name="dientich" value="tamgiac" <?php if((isset($_POST["batdau"]) || isset($_POST["Tinh"])) && $_POST["dientich"]=="tamgiac") echo("checked='checked'"); ?>  /> Tam giác &nbsp;&nbsp;
<input type="radio" name="dientich" value="chunhat" <?php if((isset($_POST["batdau"]) || isset($_POST["Tinh"])) && $_POST["dientich"]=="chunhat") echo("checked='checked'"); ?>  /> Hình chữ nhật &nbsp;&nbsp;</td>
</tr>
<tr>
<td><input type="submit" name="batdau" value="Bắt đầu" /></td>
<td><input type="reset" name="lamlai" value="Làm lại" /></td>
</tr>



<?php
if (isset($_POST["batdau"]) || isset($_POST["Tinh"]))
	{
		$chon=$_POST["dientich"];
		
		switch ($chon)
			{
				case "hinhtron":
					echo ("<tr>");
					echo ("<td> Nhập bán kính: </td>");
					echo ("<td> <input type='text' name='bankinh' value='".@$_POST["bankinh"]."'></td>");
					echo("<input type='hidden' name='hinhdachon' value='htr'>");
					echo ("</tr>");
					break;
					
				case "tamgiac":
					echo ("<tr>");
					echo ("<td> Nhập cạnh đáy: </td>");
					echo ("<td> <input type='text' name='canhday' value='".@$_POST["canhday"]."'></td>");
					echo ("</tr>");
					echo ("<tr>");
					echo ("<td> Nhập chiều cao: </td>");
					echo ("<td> <input type='text' name='chieucao' value='".@$_POST["chieucao"]."'></td>");
					echo ("</tr>");
					echo("<input type='hidden' name='hinhdachon' value='tg'>");
					
					break;
					
				case "chunhat":
					echo ("<tr>");
					echo ("<td> Nhập chiều dài: </td>");
					echo ("<td> <input type='text' name='chieudai' value='".@$_POST["chieudai"]."'></td>");
					echo ("</tr>");
					echo ("<tr>");
					echo ("<td> Nhập chiều rộng </td>");
					echo ("<td> <input type='text' name='chieurong' value='".@$_POST["chieurong"]."'></td>");
					echo ("</tr>");
					echo("<input type='hidden' name='hinhdachon' value='hcn'>");
					echo ("<tr>");
					break;
					
			}
			echo ("<tr>");
			echo ("<td><input type='submit' name='Tinh' value='Tính'></td>");
			echo ("<td><input type='reset' name='llai' value='Nhập lại'></td>");
			echo ("</tr>");
			
			
}			
echo ("</table>");
echo ("</form>");
if(isset($_POST["Tinh"])){
	$hinhchon=$_POST["hinhdachon"];
	switch($hinhchon){
			case "htr":
				$pi=3.14;
				$R=$_POST["bankinh"];
				$S=$pi*$R*$R;
				echo ("Diện tích hình tròn có bán kính " . $R . " là: " .$S);
				break;
			case "tg":
				$cd=$_POST["canhday"];
				$cc=$_POST["chieucao"];
				$S=(1/2)*$cd*$cc;
				echo("Diện tích tam giác có cạnh đáy ".$cd ." và chiều cao ".$cc." là: ".$S);
				break;
			case "hcn":
				$cd=$_POST["chieudai"];
				$cr=$_POST["chieurong"];
				$S=$cd*$cr;
				echo("Diện tích hình chữ nhật có chiều dài ".$cd ." và chiều rộng ".$cr." là: ".$S);
				break;
	}
}
?>
<?php
include("right_and_footer.php");
?>