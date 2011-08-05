<?php /* Smarty version Smarty3-RC3, created on 2011-07-23 10:37:29
         compiled from "content/template/error.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:17046029854e2ace99b28428-00952426%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd85c23955d2a33f47979377e0045298feb3b6924' => 
    array (
      0 => 'content/template/error.tpl.html',
      1 => 1291223718,
    ),
  ),
  'nocache_hash' => '17046029854e2ace99b28428-00952426',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_capitalize')) include '/home/cioti/public_html/site/private/smarty/plugins/modifier.capitalize.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml">    <head>        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />        <title>Error In Application</title>        <meta name="generator" content="@edeermachado" />        <style type="text/css">            * {                font-family: 'ms sans serif';            }            body{                background: #fff;            }            h2{                color: #ff0000;            }            h3 {                color: #840000;                font-weight: normal;            }        </style>    </head>    <body>        <h2 id="title">PHP Error in '<?php echo $_smarty_tpl->getVariable('errorFile')->value;?>
' on line <?php echo $_smarty_tpl->getVariable('errorLine')->value;?>
</h2>        <hr />        <h3><?php echo smarty_modifier_capitalize($_smarty_tpl->getVariable('errorType')->value);?>
</h3>        <div id="details">            <p><strong>Description:</strong> An error occurred during the compilation of a resource required to service this request. Please review the following specific error details and modify your source code appropriately.</p>            <p><strong>Compiler Error Message:</strong> <?php echo $_smarty_tpl->getVariable('errorCode')->value;?>
 <?php echo $_smarty_tpl->getVariable('errorMessage')->value;?>
</p>            <p><strong>Source File:</strong> <?php echo $_smarty_tpl->getVariable('errorFile')->value;?>
 <strong>Line: </strong><?php echo $_smarty_tpl->getVariable('errorLine')->value;?>
</p>        </div>    </body></html>