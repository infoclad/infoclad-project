<?php /* Smarty version Smarty3-RC3, created on 2011-07-20 14:10:32
         compiled from "content/template/mods/topo.html" */ ?>
<?php /*%%SmartyHeaderCode:17588632494e270c084c55d3-00510051%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '40bfeb75b89b6e8261f27208c1e37e23ffc3201b' => 
    array (
      0 => 'content/template/mods/topo.html',
      1 => 1291224080,
    ),
  ),
  'nocache_hash' => '17588632494e270c084c55d3-00510051',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("mods/topoMenu.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_smarty_tpl->assign("modTopoMenu",$_template->getRenderedTemplate());?><?php unset($_template);?><?php $_template = new Smarty_Internal_Template("mods/mainMenu.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_smarty_tpl->assign("modMainMenu",$_template->getRenderedTemplate());?><?php unset($_template);?>        <!-- topo -->        <div id="topo">            <div class="wrapper">                <div id="logo">                    <a href="" title="INFOCLAD - Integrando Tecnologia ao seu Negócio"><img src="content/template/images/logo.png" alt="Infoclad"/></a>                </div>                <div id="topo-rightColumn">                    <?php echo $_smarty_tpl->getVariable('modTopoMenu')->value;?>
                </div>            </div>        </div>        <!-- menu -->        <div id="mainMenu">            <?php echo $_smarty_tpl->getVariable('modMainMenu')->value;?>
        </div>        <div id="bigSeparator">            <div class="wrapper">                <img src="content/template/images/bigseparator.png" alt=""/>            </div>        </div>