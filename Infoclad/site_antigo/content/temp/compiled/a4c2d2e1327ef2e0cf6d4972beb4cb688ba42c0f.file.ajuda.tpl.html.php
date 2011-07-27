<?php /* Smarty version Smarty3-RC3, created on 2011-07-20 18:06:10
         compiled from "content/template/pages/ajuda.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:8284104264e274342c01fd7-87006254%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a4c2d2e1327ef2e0cf6d4972beb4cb688ba42c0f' => 
    array (
      0 => 'content/template/pages/ajuda.tpl.html',
      1 => 1294087787,
    ),
  ),
  'nocache_hash' => '8284104264e274342c01fd7-87006254',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<p>
    <strong>Endereço:</strong><br />
    Estr. Rio São Paulo,n°283 sala 101 - Campo Grande<br />
    Rio de Janeiro - RJ, 23087-005
</p>

<br />

<p>
    <strong>Telefones para contato:</strong><br />
    (21) 3062-7799<br />
    (21) 3063-0606
</p>

<br />
<br />

<form action="contato.html" method="post">
    <p>
        <label>Nome:<br />
            <input type="text" name="nome" value="" />
        </label>
    </p>

    <br />

    <p>
        <label>Email:<br />
            <input type="text" name="email" value="" />
        </label>
    </p>

    <br />

    <p>
        <label>Assunto:<br />
            <input type="text" name="assunto" value="" />
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
            <textarea cols="50" rows="10" name="mensagem"></textarea>
        </label>
        <span class="quote"><br/>Preencha todos os campos atentamente. Todos os campos são <br/> de preenchimento obrigatório*</span>
    </p>
    <p><input class="submit" type="submit" name="action" value="Enviar" /></p>
</form>