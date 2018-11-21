<?php
// Text
$_['text_new_card']                     = '+ Agregar Nueva Tarjeta';
$_['text_loading']                      = 'Cargando... Esperar...';
$_['text_card_details']                 = 'Detalles de la Tarjeta';
$_['text_saved_card']                   = 'Usar Tarjeta Guardada:';
$_['text_card_ends_in']                 = 'Pagar con la Tarjeta Existente %s que termina en XXXX XXXX XXXX %s';
$_['text_card_number']                  = 'Número de Tarjeta:';
$_['text_card_expiry']                  = 'Expiración de la Tarjeta (MM/YY):';
$_['text_card_cvc']                     = 'Código de Seguridad de la Tarjeta (CVC):';
$_['text_card_zip']                     = 'Código Postal de la Tarjeta:';
$_['text_card_save']                    = 'Guardar la Tarjeta para Usos Futuros?';
$_['text_trial']                        = '%s cada %s %s para %s pagos luego ';
$_['text_recurring']                    = '%s cada %s %s';
$_['text_length']                       = ' cada %s pagos';
$_['text_cron_subject']                 = 'Resumen del Trabajo Square CRON';
$_['text_cron_message']                 = 'Aquí hay una lista de todas las tareas CRON realizadas por la extensión Square:';
$_['text_squareup_profile_suspended']   = ' Los Pagos Recurrentes han sido Suspendidos. Contactar para obtener mayor información.';
$_['text_squareup_trial_expired']       = ' El Periodo de Prueba ha Expirado.';
$_['text_squareup_recurring_expired']   = ' Los Pagos Recurrentes han Expirado. Este es el último Pago.';
$_['text_cron_summary_token_heading']   = 'Actualizar el Token de Acceso:';
$_['text_cron_summary_token_updated']   = 'Token de Acceso Actualizado Exitosamente.';
$_['text_cron_summary_error_heading']   = 'Errores de la Transacción:';
$_['text_cron_summary_fail_heading']    = 'Transacciones Fallidas (Perfiles Suspendidos):';
$_['text_cron_summary_success_heading'] = 'Transacciones Exitosas:';
$_['text_cron_fail_charge']             = 'Perfil <strong>#%s</strong> no pudo ser cargado con <strong>%s</strong>';
$_['text_cron_success_charge']          = 'Perfil <strong>#%s</strong> fue cargado con <strong>%s</strong>';
$_['text_card_placeholder']             = 'XXXX XXXX XXXX XXXX';
$_['text_cvv']                          = 'CVV';
$_['text_expiry']                       = 'MM/YY';
$_['text_default_squareup_name']        = 'Tarjeta de Crédito/Débito';
$_['text_token_issue_customer_error']   = 'se está experimentando una Interrupción Técnica en el sistema de pago. Intentar Nuevamente.';
$_['text_token_revoked_subject']        = 'El Token de Acceso Square ha sido revocado.';
$_['text_token_revoked_message']        = "The Square payment extension's access to your Square account has been revoked through the Square Dashboard. You need to verify your application credentials in the extension settings and connect again.";
$_['text_token_expired_subject']        = 'El Token de Acceso Square ha expirado';
$_['text_token_expired_message']        = "The Square payment extension's access token connecting it to your Square account has expired. You need to verify your application credentials and CRON job in the extension settings and connect again.";

// Error
$_['error_browser_not_supported']       = 'Error: The payment system no longer supports your web browser. Please update or use a different one.';
$_['error_card_invalid']                = 'Error: Card is invalid!';
$_['error_squareup_cron_token']         = 'Error: Access token could not get refreshed. Please connect your Square Payment extension via the OpenCart admin panel.';

// Error
$_['warning_test_mode']                 = 'Error: Sandbox mode is enabled! Transactions will appear to go through, but no charges will be carried out.';

// Statuses
$_['squareup_status_comment_authorized']    = 'The card transaction has been authorized but not yet captured.';
$_['squareup_status_comment_captured']      = 'The card transaction was authorized and subsequently captured (i.e., completed).';
$_['squareup_status_comment_voided']        = 'The card transaction was authorized and subsequently voided (i.e., canceled).   ';
$_['squareup_status_comment_failed']        = 'The card transaction failed.';

// Override errors
$_['squareup_override_error_billing_address.country']       = 'Payment Address country is not valid. Please modify it and try again.';
$_['squareup_override_error_shipping_address.country']      = 'Shipping Address country is not valid. Please modify it and try again.';
$_['squareup_override_error_email_address']                 = 'Your customer e-mail address is not valid. Please modify it and try again.';
$_['squareup_override_error_phone_number']                  = 'Your customer phone number is not valid. Please modify it and try again.';
$_['squareup_error_field']                                  = ' Campo: %s';