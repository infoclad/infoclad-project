<?php

/*
 *
 * [Configuração de Email]
 * Host: Servidor de conexão SMTP;
 * Porta: Porta de conexão do servidor SMTP (25);
 * Usuário: Conta de acesso e envio SMTP;
 * Senha: Senha da conta de usuário do SMTP;
 *
 */

define('SMTP_HOST', 'infoclad.com.br');
define('SMTP_PORT', 25);
define('SMTP_USER', 'mailer@infoclad.com.br');
define('SMTP_PASS', 'mailer2010');


/*
 *
 * [Configuração de Template]
 * Diretório: Pasta onde se encontram arquivos de template;
 * DEBUG: Ativa opção de depuração do template;
 * CACHE: Ativa opção de Cache do template; *
 * Pasta Cache: Pasta de arquivos temporários do template;
 * Duração Cache: Tempo de duração do cache;
 *
 */

define('TEMPLATE_DIR', 'content/template');
define('TEMPLATE_DEBUG', false);
define('TEMPLATE_CACHE', false);
define('TEMPLATE_CACHE_DIR', 'content/temp');
define('TEMPLATE_CACHE_TIME', 7200);


/*
 * [Configuração de Upload]
 * Diretório: Pasta onde seram enviados os arquivos upados;
 *
 */

define('UPLOAD_DIR', sys_get_temp_dir());
?>
