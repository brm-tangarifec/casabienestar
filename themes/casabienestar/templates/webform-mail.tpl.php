<?php

/**
 * @file
 * Customize the e-mails sent by Webform after successful submission.
 *
 * This file may be renamed "webform-mail-[nid].tpl.php" to target a
 * specific webform e-mail on your site. Or you can leave it
 * "webform-mail.tpl.php" to affect all webform e-mails on your site.
 *
 * Available variables:
 * - $node: The node object for this webform.
 * - $submission: The webform submission.
 * - $email: The entire e-mail configuration settings.
 * - $user: The current user submitting the form. Always the Anonymous user
 *   (uid 0) for confidential submissions.
 * - $ip_address: The IP address of the user submitting the form or '(unknown)'
 *   for confidential submissions.
 *
 * The $email['email'] variable can be used to send different e-mails to different users
 * when using the "default" e-mail template.
 */
?>
<?php print ($email['html'] ? '<p>' : '') . t('Enviado el [submission:date:long]'). ($email['html'] ? '</p>' : ''); ?>
<?php if ($user->uid): ?>
<?php print ($email['html'] ? '<p>' : '') . t('Enviado por el usuario: [submission:user]') . ($email['html'] ? '</p>' : ''); ?>
<?php else: ?>
<?php print ($email['html'] ? '<p>' : '') . t('Enviado por el usuario anonimo: [submission:ip-address]') . ($email['html'] ? '</p>' : ''); ?>
<?php endif; ?>
<span class="Nombre">=Nombre: [submission:values:nombres_contacto] </span>
<span class="Apellido">=Apellido: [submission:values:apellidos_contacto] </span>
<span class="Documento">=Documento: [submission:values:documento_contacto]</span> 
<span class="Email">=Email:  [submission:values:email] </span>
<span class="Celular">=Celular: [submission:values:numero_telefonico] </span>
<span class="Direccion">=Direccion: [submission:values:direccion] </span>
<span class="Ciudad">=Ciudad:  [submission:values:ciudad] </span>
<span class="TipoComent">=Tipo_Comentario: [submission:values:tipo_de_comentario_contacto] </span>
<span class="Comentario">=Comentario: [submission:values:comentario_contacto] </span>
