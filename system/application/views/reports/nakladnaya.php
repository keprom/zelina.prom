<?php 
function datetostring($date)
{
	$d=explode("-",$date); 
	return $d['2'].'.'.$d['1'].'.'.$d['0'];
}
function f_d($var)
{
	if (($var==0)or($var==NULL)) return "0.00"; else
	return sprintf("%22.2f",$var);
}
function f_d3($var)
{
	if (($var==0)or($var==NULL)) return "0.000"; else
	return sprintf("%22.3f",$var);
}
function datetostring2($date)
{
	$d=explode("-",$date); 
	 
	if ($d['1']==1) {$d['1']='январь';}
	if ($d['1']==2) {$d['1']='февраль';}
	if ($d['1']==3) {$d['1']='март';}
	if ($d['1']==4) {$d['1']='апрель';}
	if ($d['1']==5) {$d['1']='май';}
	if ($d['1']==6) {$d['1']='июнь';}
	if ($d['1']==7) {$d['1']='июль';}
	if ($d['1']==8) {$d['1']='август';}
	if ($d['1']==9) {$d['1']='сентябрь';}
	if ($d['1']==10) {$d['1']='октябрь';}
	if ($d['1']==11) {$d['1']='ноябрь';}
	if ($d['1']==12) {$d['1']='декабрь';}
	
	return $d['1'].' '.$d['0'];
}

?>
<html> 
	<head> 
		<meta http-equiv=Content-Type content="text/html; charset=utf-8"> 
		<title>Накладная</title> 
		<style> 
		</style> 
	</head> 
	<body lang=RU>
	<table width=100%><tr><td align=right>
					<i>Приложение 26<o:p></o:p><br>
					к приказу Министра финансов Республики Казахстан<br>
					от 20 декабря 2012 года № 562 </i></br><i>Форма 3-2</i>
				</td></tr></table>
	<table width=100%>
	<tr><td>
		<table width=100% border=1 >
			<tr>
			
				<td width=1000px>
					<center>
						<font size=4><?php echo $org->org_name; ?></font>
						<i>организация (индивидуальный предприниматель)</i>
					</center>
				</td>
				<td align=center>ИИН/БИН <?php echo "  ". $org->bin;?>
					
				</td>
			</tr>
			</table>		
		
		</td></tr>
		<p><o:p> </o:p>
		<tr><td>
 	<p><o:p> </o:p>
		<table border=1 cellspacing=0 cellpadding=0  width=30% align=right >
			<tr>
				
				<td align=center>Номер документа</td>
				<td align=center>Дата составления</td>
			</tr>
			<tr>
				
				<td align=center><?php if (strlen($schet_nakl)==0){
					if (!empty($schetfactura_date->schet_id)){
						echo '0'.$schetfactura_date->schet_id;
					} else {
						echo ($schetfactura_date->id);
					}
				} else {
				echo $schet_nakl;
				} ?></td>
				<td align=center><?php 
					if(strlen($data_nakl)==0)
						echo datetostring($schetfactura_date->date);
					else 
						echo $data_nakl;
					?></td>
			</tr>
		</table>
		</td></tr><p><o:p> </o:p>
		<td align=center><font size=5>Накладная на отпуск запасов на сторону</font></td>
		<tr><td>	
		<p><o:p> </o:p>

		<table border=1 cellspacing=0 cellpadding=0 width=100% >
			<tr>
				<td>Организация (индивидуальный предприниматель) - отправитель</td>
				<td>Организация (индивидуальный предприниматель)- получатель</td>
				<td>Ответственный за поставку (Ф.И.О.)</td>
				<td>Транспортная организация</td>
				<td>Товарно - транспортная накладная (номер, дата) </td>
				<td> </td>
			</tr>
			<tr> 
				<td> </td>
			</tr>
			<tr>
				<td><?php echo $org->org_name; ?></td>
				<td><?php echo "{$firm->name}"; ?></td>
				<td><o:p> </o:p></td>
				<td><o:p> </o:p></td>
				<td><o:p> </o:p> </td>
				<td> </td>
			</tr>
		</table>
		<p><o:p> </o:p> 
		<table border=1 cellspacing=0 cellpadding=0 width=100%>
			<tr>
				<td rowspan=2 align=center>№ п./п.</td>
				<td rowspan=2 align=center>Наименование, характеристика</td>
				<td rowspan=2 align=center>Номенклатурный номер</td>
				<td rowspan=2 align=center>Единица измерения</td>
				<td colspan=2 align=center>Количество</td>
				<td rowspan=2 align=center>Цена, в тенге</td>
				<td rowspan=2 align=center>Сумма с НДС, в тенге</td>
				<td rowspan=2 align=center>Сумма НДС, в тенге</td>
			</tr>
			<tr>
				<td align=center>Надлежит отпуску</td>
				<td align=center>Отпущено</td>
			</tr>
			<tr>
				<td align=center>1</td>
				<td align=center>2</td>
				<td align=center>3</td>
				<td align=center>4</td>
				<td align=center>5</td>
				<td align=center>6</td>
				<td align=center>7</td>
				<td align=center>8</td>
				<td align=center>9</td>
			</tr>
			
			
			<?php 
$sum_bez_nds=0;$sum_nds=0;$sum=0;$i=1;

$i_t=$itog->itog_tenge;
$i_nds=$itog->itogo_nds;
$i_itogo=$itog->itogo_with_nds;
$i_kvt=0;

foreach($s as $s2 ): 
?>	

			<tr>
				<td align=center><?php echo $i++;?></td>
				<td align=center>Электроэнергия за <?php echo datetostring2($schetfactura_date->date);?> года </td>
				<td align=center><o:p> </o:p></td>
				<td align=center>кВт</td>
				<td align=center><?php 
						echo f_d($s2->kvt);
						$i_kvt+=f_d($s2->kvt);
					?></td>
				<td align=center><?php echo f_d($s2->kvt); ?></td>
				<td align=center><?php echo f_d($s2->tariff_value*1.12);?></td>
				<td align=center><?php 
		if ($i_itogo-$s2->with_nds>1)
		{
			echo f_d($s2->with_nds);
			$sum+=$s2->with_nds;
			$i_itogo-=f_d($s2->with_nds);
		}
		else
			echo f_d($i_itogo);
	?></td>
				<td align=center>	<?php
		if ($i_nds-$s2->nds_value>1)
		{
			echo f_d($s2->nds_value);
			$sum_nds+=$s2->nds_value;
			$i_nds-=f_d($s2->nds_value);
		}
		else
			echo f_d($i_nds);
	?></td>
			</tr>
			<?php  endforeach;?>
			
			<tr>
				<td colspan=6></td>
				<td align=right><b>Итого</b></td>
				<td align=center><b><?php echo f_d($itog->itogo_with_nds);?></b></td>
				<td align=center><b><?php echo f_d($itog->itogo_nds);?></b></td>
			</tr>
		</table>
		<p><o:p> </o:p>
		<table border=0 cellspacing=0 cellpadding=0 width=100%><tr>
		<td >Всего отпущено запасов (количество прописью): <?php echo kvt2str($i_kvt);?></td>
		<p><o:p> </o:p><tr><tr>
		<td >Всего отпущено на сумму (прописью), в KZT: <?php echo num2str($itog->itogo_with_nds);?></td>
		<p><o:p> </o:p> </tr></table></br>
		<table border=0 cellspacing=0 cellpadding=0 width=100%>
			<tr>
				<td>
					<table border=0 cellspacing=0 width=600px>
						<tr>
								<td width=250px>Отпуск разрешил
								<td colspan=3>  <u><?php echo "Директор ". trim($org->director);?></u> &nbsp;&nbsp;&nbsp;__________________</td></td></tr>
								<tr><td ></td>
								<td align=left width=100px> <sup><i>(должность)</i></sup> </td>
								<td align=left> <sup><i>(Ф.И.О.)</i></sup></td>
								<td align=left width=150px> <sup><i> (Подпись)</i></sup></td>
						</tr><tr><td><br></td></tr><tr>
								
								<td>Главный бухгалтер</td> 
								<td colspan=3 ><u> <?php echo trim($org->glav_buh); ?> </u> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;__________________  </td></tr><tr>
								<td></td><td colspan=2 align=left> <sup><i>(Ф.И.О.)</i></sup></td>
								<td align=left><sup><i> (Подпись)</i></sup></td></tr><tr>
								<td align=center> М.П.</td>
						</tr><tr><td><br></td></tr><tr>
							
								<td>Отпустил </td>
								<td colspan=3><u><?php ?></u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;__________________ </td></tr><tr>
								<td></td>
								<td colspan=2 align=left> <sup><i>(Ф.И.О.)</i></sup></td>
								<td align=left> <sup><i>(Подпись)</i></sup></td></tr>
					
					</table>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
					<td width=200px>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
				<td> 
					<table width=600px>
						<tr>
							<td colspan=3>
								По договору № <?php echo $edit3."___  от ____   _________20___года"; ?>
							</td>
						
						</tr><tr>
							<td colspan=3> 
								выданной ____________________________
							</td>
						</tr><tr><td><br><br><br><br><br></td></tr><tr>
							<td colspan=3> 
								Товар получил ___________________ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_______________
							</td>
						</tr><tr>
							<td></td> 
							<td align=center>	
								<sup><i>(Ф.И.О.) </i></sup>
							</td><td align=center>
								<sup><i>(Подпись)</i></sup>
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
		<p><o:p> </o:p> 
				</td></tr>
	</table>
	</body> 
</html> 