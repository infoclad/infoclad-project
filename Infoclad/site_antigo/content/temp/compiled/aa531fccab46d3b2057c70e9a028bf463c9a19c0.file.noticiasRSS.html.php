<?php /* Smarty version Smarty3-RC3, created on 2011-07-20 14:10:32
         compiled from "content/template/mods/noticiasRSS.html" */ ?>
<?php /*%%SmartyHeaderCode:21347051444e270c0869fd02-87691954%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa531fccab46d3b2057c70e9a028bf463c9a19c0' => 
    array (
      0 => 'content/template/mods/noticiasRSS.html',
      1 => 1291224073,
    ),
  ),
  'nocache_hash' => '21347051444e270c0869fd02-87691954',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include '/home/cioti/public_html/site/private/smarty/plugins/modifier.date_format.php';
?><ul>    <li class="title">NOTÍCIAS (RSS)</li>    <?php  $_smarty_tpl->tpl_vars['noticia'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('feedNoticias')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['noticia']->key => $_smarty_tpl->tpl_vars['noticia']->value){
?>    <li><a href="<?php echo $_smarty_tpl->tpl_vars['noticia']->value['Link'];?>
" style="color: #000; text-decoration: none;" target="_blank"><?php echo $_smarty_tpl->tpl_vars['noticia']->value['Titulo'];?>
</a></li>    <li class="postDate">Postado em: <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['noticia']->value['Titulo'],"%d/%m/%Y");?>
</li>    <?php }} ?>    <!--li class="mais"><a href="#">Leia Todas</a></li-->    <li><img src="content/template/images/separator.png" alt="" /></li></ul>