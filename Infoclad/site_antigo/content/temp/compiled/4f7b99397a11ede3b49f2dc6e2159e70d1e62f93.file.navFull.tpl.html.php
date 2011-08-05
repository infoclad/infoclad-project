<?php /* Smarty version Smarty3-RC3, created on 2011-07-21 02:22:05
         compiled from "content/template/navFull.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:9143006614e27b77dc199c7-75138321%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f7b99397a11ede3b49f2dc6e2159e70d1e62f93' => 
    array (
      0 => 'content/template/navFull.tpl.html',
      1 => 1291223744,
    ),
  ),
  'nocache_hash' => '9143006614e27b77dc199c7-75138321',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("mods/header.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_smarty_tpl->assign("tplHeader",$_template->getRenderedTemplate());?><?php unset($_template);?><?php $_template = new Smarty_Internal_Template("mods/topo.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_smarty_tpl->assign("tplTopo",$_template->getRenderedTemplate());?><?php unset($_template);?><?php $_template = new Smarty_Internal_Template("pages/".($_smarty_tpl->getVariable('Site')->value['Page']), $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_smarty_tpl->assign("tplContent",$_template->getRenderedTemplate());?><?php unset($_template);?><?php $_template = new Smarty_Internal_Template("mods/rodape.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_smarty_tpl->assign("tplRodape",$_template->getRenderedTemplate());?><?php unset($_template);?><?php $_template = new Smarty_Internal_Template("mods/noticiasRSS.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_smarty_tpl->assign("modNoticiasRSS",$_template->getRenderedTemplate());?><?php unset($_template);?><?php $_template = new Smarty_Internal_Template("mods/premiosLista.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_smarty_tpl->assign("modPremiosLista",$_template->getRenderedTemplate());?><?php unset($_template);?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml">    <head>        <title>INFOCLAD - Integrando Tecnologia Ao Seus Negócios.</title>        <?php echo $_smarty_tpl->getVariable('tplHeader')->value;?>
    </head>    <body>        <?php echo $_smarty_tpl->getVariable('tplTopo')->value;?>
        <!-- conteudo -->        <div id="mainContent">            <div class="wrapper">                <div class="clearfix">                    <!--div id="breadCumbs">                        <ul>                            <li><a href="home.html">Home</a></li><li>»</li>                            <li><a href="empresa/sobre.html">A Empresa</a></li>                        </ul>                    </div-->                </div>                <div id="conteudoTexto">                    <div class="clearfix">                        <div class="columnMiddle">                            <?php echo $_smarty_tpl->getVariable('tplContent')->value;?>
                        </div>                    </div>                </div>            </div>        </div>        <div id="rodape">            <?php echo $_smarty_tpl->getVariable('tplRodape')->value;?>
        </div>        <?php echo $_smarty_tpl->getVariable('tplFooter')->value;?>
    </body></html>