<?php

/*
 *
 * [Configura��o de Email]
 * Host: Servidor de conex�o SMTP;
 * Porta: Porta de conex�o do servidor SMTP (25);
 * Usu�rio: Conta de acesso e envio SMTP;
 * Senha: Senha da conta de usu�rio do SMTP;
 *
 */

define('SMTP_HOST', 'infoclad.com.br');
define('SMTP_PORT', 25);
define('SMTP_USER', 'mailer@infoclad.com.br');
define('SMTP_PASS', 'mailer2010');


/*
 *
 * [Configura��o de Template]
 * Diret�rio: Pasta onde se encontram arquivos de template;
 * DEBUG: Ativa op��o de depura��o do template;
 * CACHE: Ativa op��o de Cache do template; *
 * Pasta Cache: Pasta de arquivos tempor�rios do template;
 * Dura��o Cache: Tempo de dura��o do cache;
 *
 */

define('TEMPLATE_DIR', 'content/template');
define('TEMPLATE_DEBUG', false);
define('TEMPLATE_CACHE', false);
define('TEMPLATE_CACHE_DIR', 'content/temp');
define('TEMPLATE_CACHE_TIME', 7200);


/*
 * [Configura��o de Upload]
 * Diret�rio: Pasta onde seram enviados os arquivos upados;
 *
 */

define('UPLOAD_DIR', sys_get_temp_dir());
?>
