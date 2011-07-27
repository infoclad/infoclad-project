<?php /* Smarty version Smarty3-RC3, created on 2011-07-20 18:28:10
         compiled from "content/template/pages/contato.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:3697652534e27486a324606-23939697%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd804ac83b671a279de318171de183cf08faf0a73' => 
    array (
      0 => 'content/template/pages/contato.tpl.html',
      1 => 1291224085,
    ),
  ),
  'nocache_hash' => '3697652534e27486a324606-23939697',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<p><?php echo $_smarty_tpl->getVariable('form')->value['Alerta'];?>
</p>

<br />


<?php if ($_smarty_tpl->getVariable('form')->value['Action']==false){?>
<form id="contato" action="contato.html" method="post">
    <p>
        <label>Nome:<br />
            <input type="text" name="nome" value="<?php echo $_smarty_tpl->getVariable('form')->value['Nome'];?>
" />
        </label>
    </p>

    <br />

    <p>
        <label>Email:<br />
            <input type="text" name="email" value="<?php echo $_smarty_tpl->getVariable('form')->value['Email'];?>
" />
        </label>
    </p>

    <br />

    <p>
        <label>Assunto:<br />
            <input type="text" name="assunto" value="<?php echo $_smarty_tpl->getVariable('form')->value['Assunto'];?>
" />
        </label>
    </p>

    <br />

    <p>
        <label>Digite o código abaixo:
            <br />
            <img src="module-captcha" alt="captcha" />
            <br />
            <input type="text" name="captcha" value="" />
        </label>
    </p>

    <br />

    <p>
        <label>Mensagem:<br />
            <textarea cols="50" rows="10" name="mensagem"><?php echo $_smarty_tpl->getVariable('form')->value['Mensagem'];?>
</textarea>
        </label>
        <span class="quote"><br/>Preencha todos os campos atentamente. Todos os campos são <br/> de preenchimento obrigatório*</span>
    </p>
    <p><input class="submit" type="submit" name="action" value="" /></p>
</form>
<?php }?>