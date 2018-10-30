<?php
$r=$r->row();
echo form_open("billing/schetfactura");
echo "<input type=hidden name=firm_id value=".$firm_id." >";
echo "<input type=checkbox name=html  ><br>";
echo "Выдать актом выполненых работ <input type=checkbox name=akt_vypolnenyh_rabot  ><br>";
echo "Новая счет-фактура <input type=checkbox name=new_schetfactura ><br>";
echo "Выдача накладной <input type=checkbox name=nakladnaya><br>";
echo "<input type=hidden name=period_id value=".$period_id." >";
?>
<table class='border-table'>
    <tbody>
    <tr>
        <td>Другая дата выдачи:</td>
        <td><input name=data_schet value='<?php echo $firm->data_schet; ?>'></td>
    </tr>
    <tr>
        <td>Другой номер счетфактуры:</td>
        <td><input name=shet2 value='<?php echo $firm->shet2; ?>'></td>
    </tr>
    <tr>
        <td>Дата выдачи накладной(пустой если последний день месяца):</td>
        <td><input name=data_nakl value='<?php echo $firm->data_nakl; ?>'></td>
    </tr>
    <tr>
        <td>Номер накладной:</td>
        <td><input name=schet_nakl value='<?php echo $firm->schet_nakl; ?>'></td>
    </tr>
    <tr>
        <td>Условия оплаты по договору:</td>
        <td><input name=edit1 value='<?php echo $firm->edit1; ?>'></td>
    </tr>
    <tr>
        <td>Пункт назначения поставляемых товаров (работ, услуг):</td>
        <td><input name=edit2 value='<?php echo $firm->edit2; ?>'></td>
    </tr>
    <tr>
        <td>Поставка товаров осуществлена по доверености:</td>
        <td><input name=edit3 value='<?php echo $firm->edit3; ?>'></td>
    </tr>
    <tr>
        <td>Способ отправления:</td>
        <td><input name=edit4 value='<?php echo $firm->edit4; ?>'></td>
    </tr>
    <tr>
        <td>Грузоотправитель:</td>
        <td><input name=edit5 value='<?php echo $firm->edit5; ?>'></td>
    </tr>
    <tr>
        <td>Грузополучатель:</td>
        <td><input name=edit6 value='<?php echo $firm->edit6; ?>'></td>
    </tr>
	<tr>
        <td>БИН грузополучателя</td>
        <td><input name='cons_bin' type='text'></td>
    </tr>
    <tr>
        <td>Адрес грузополучателя</td>
        <td><input name='cons_add' type='text'></td>
    </tr>
    <tr>
        <td>ИИК грузополучателя</td>
        <td><input name='cons_iik' type='text'></td>
    </tr>
    <tr>
        <td>Банк грузополучателя</td>
        <td><input name='cons_bank' type='text'></td>
    </tr>
    <tr>
        <td>БИК банка грузополучателя</td>
        <td><input name='cons_bank_bik' type='text'></td>
    </tr>
    <tr>
        <td>Получатель</td>
        <td><input name='rec_name' type='text'></td>
    </tr>
    <tr>
        <td>БИН получателя</td>
        <td><input name='rec_bin' type='text'></td>
    </tr>
    <tr>
        <td>Адрес получателя</td>
        <td><input name='rec_add' type='text'></td>
    </tr>
    <tr>
        <td>ИИК получателя</td>
        <td><input name='rec_iik' type='text'></td>
    </tr>
    <tr>
        <td>Банк получателя</td>
        <td><input name='rec_bank' type='text'></td>
    </tr>
    <tr>
        <td>БИК банка получателя</td>
        <td><input name='rec_bank_bik' type='text'></td>
    </tr>
    </tbody>
</table>
<?php

echo "<input type=submit value='Открыть счетфактуру' />";
echo "</form>";


?>