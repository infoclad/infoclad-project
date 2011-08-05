<?php /* Smarty version Smarty3-RC3, created on 2011-07-20 17:14:54
         compiled from "content/template/pages/dominio.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:4541161474e27373ec95a99-00733990%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '55bb2ac5635353ec523e862dbc366fdf1e470187' => 
    array (
      0 => 'content/template/pages/dominio.tpl.html',
      1 => 1292778149,
    ),
  ),
  'nocache_hash' => '4541161474e27373ec95a99-00733990',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<h1>Registro de Domínios</h1>

<br />
<br />

<form method="post" action="">
    <input type="text" name="dominio" value="<?php echo $_smarty_tpl->getVariable('Domain')->value['Name'];?>
" />
    <input type="submit" value="Consultar Disponibilidade" />
</form>

<br />
<br />

<h2>RESULTADO:</h2>
<p>
    <?php if ($_smarty_tpl->getVariable('Domain')->value['Status']==false){?>
    <br />
    <font color="red">Domínio já registrado, tente outras opções...</font>
    <?php }else{ ?>
    <br />
    <font color="green">Domínio disponível para registro.</font>
    <br />
    Clique <a href="#">aqui</a> para registra-lo.
    <?php }?>
</p>

<br />
<br />

<h2>Endereço IP:</h2>
<p>
    <br />
    <?php echo $_smarty_tpl->getVariable('Domain')->value['IPAddress'];?>

</p>

<br />

<h2>WHOIS:</h2>
<p>
    <br />
    <?php echo $_smarty_tpl->getVariable('Domain')->value['whoIs'];?>

</p>