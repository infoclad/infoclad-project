<?php /* Smarty version Smarty3-RC3, created on 2011-07-20 17:45:40
         compiled from "content/template/pages/trabalhe.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:18324412344e273e748ff580-95143966%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f78b36b9baf8feb306a3a7816b58dda729f5bc21' => 
    array (
      0 => 'content/template/pages/trabalhe.tpl.html',
      1 => 1291224089,
    ),
  ),
  'nocache_hash' => '18324412344e273e748ff580-95143966',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<p><?php echo $_smarty_tpl->getVariable('form')->value['Alerta'];?>
</p>

<br />


<?php if ($_smarty_tpl->getVariable('form')->value['Action']==false){?>
<form  id="contato" action="trabalhe-conosco.html" method="post" enctype="multipart/form-data">
    <p>
        <label>Nome Completo:<br />
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
        <label>Curriculo:<br />
            <input type="file" name="arquivo" /><br />
            <small style="color: red;">(Documentos .doc .txt .pdf .odt .rtf no máximo 1 mb)</small>
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
        <label>Mensagem ou Informações Adicionais:<br />
            <textarea cols="50" rows="10" name="mensagem"><?php echo $_smarty_tpl->getVariable('form')->value['Mensagem'];?>
</textarea>
        </label>
    </p>

    <br />

    <p>
        <span class="quote"><br/>Preencha todos os campos atentamente. Todos os campos são <br/> de preenchimento obrigatório*</span>
    </p>

    <p><input class="submit" type="submit" name="action" value="" /></p>
</form>
<?php }?>