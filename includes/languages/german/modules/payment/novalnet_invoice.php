<?php
/**
 * NOTICE OF LICENSE
 *
 * This source file is subject to Novalnet End User License Agreement
 *
 * DISCLAIMER
 *
 * If you wish to customize Novalnet payment extension for your needs, please contact technic@novalnet.de for more information.
 *
 * @author      Novalnet AG
 * @copyright   Novalnet
 * @license     https://www.novalnet.de/payment-plugins/kostenlos/lizenz
 *
 * Script : novalnet_invoice.php
 *
 */
require_once (dirname(__FILE__).'/novalnet.php');
define('MODULE_PAYMENT_NOVALNET_INVOICE_TEXT_TITLE','Kauf auf Rechnung ');
define('MODULE_PAYMENT_NOVALNET_INVOICE_TEXT_DESCRIPTION','Der Kunde erhält die Ware vor der Bezahlung und erhält mit der Lieferung die Rechnung mit den Bestelldetails sowie einem festgelegtem Zahlungsziel');
define('MODULE_PAYMENT_NOVALNET_INVOICE_TEXT_DESC','Sie erhalten eine E-Mail mit den Bankdaten von Novalnet, um die Zahlung abzuschließen.');

define('MODULE_PAYMENT_NOVALNET_INVOICE_PUBLIC_TITLE',((defined('MODULE_PAYMENT_NOVALNET_PAYMENT_LOGO_DISPLAY') || MODULE_PAYMENT_NOVALNET_PAYMENT_LOGO_DISPLAY == 'True') ? tep_image(DIR_WS_ICONS.'novalnet/novalnet_invoice.png',"Kauf auf Rechnung " ) :''));

define('MODULE_PAYMENT_NOVALNET_INVOICE_STATUS_TITLE',MODULE_PAYMENT_STATUS_TITLE);
define('MODULE_PAYMENT_NOVALNET_INVOICE_STATUS_DESC',MODULE_PAYMENT_STATUS_DESC);

define('MODULE_PAYMENT_NOVALNET_INVOICE_TEST_MODE_TITLE',MODULE_PAYMENT_NOVALNET_TEST_MODE_TITLE);
define('MODULE_PAYMENT_NOVALNET_INVOICE_TEST_MODE_DESC',MODULE_PAYMENT_NOVALNET_TEST_MODE_DESC);

define('MODULE_PAYMENT_NOVALNET_INVOICE_ENABLE_FRAUDMODULE_TITLE',MODULE_PAYMENT_NOVALNET_FRAUDMODULE_TITLE);
define('MODULE_PAYMENT_NOVALNET_INVOICE_ENABLE_FRAUDMODULE_DESC',MODULE_PAYMENT_NOVALNET_FRAUDMODULE_DESC);

define('MODULE_PAYMENT_NOVALNET_INVOICE_CALLBACK_LIMIT_TITLE',MODULE_PAYMENT_NOVALNET_CALLBACK_LIMIT_TITLE);
define('MODULE_PAYMENT_NOVALNET_INVOICE_CALLBACK_LIMIT_DESC',MODULE_PAYMENT_NOVALNET_CALLBACK_LIMIT_DESC);

define('MODULE_PAYMENT_NOVALNET_INVOICE_DUE_DATE_TITLE','Fälligkeit der Rechnung (in Tagen)');
define('MODULE_PAYMENT_NOVALNET_INVOICE_DUE_DATE_DESC','Anzahl der Tage, die der Käufer Zeit hat, um den Betrag an Novalnet zu überweisen (muss mehr als 7 Tage betragen). Wenn Sie dieses Feld leer lassen, werden standardmäßig 14 Tage als Fälligkeitsdatum festgelegt.  ');
define('MODULE_PAYMENT_NOVALNET_OPTION_NONE',MODULE_PAYMENT_OPTION_NONE);

define('MODULE_PAYMENT_NOVALNET_INVOICE_VISIBILITY_BY_AMOUNT_TITLE',MODULE_PAYMENT_NOVALNET_VISIBILITY_BYAMOUNT_TITLE);
define('MODULE_PAYMENT_NOVALNET_INVOICE_VISIBILITY_BY_AMOUNT_DESC',MODULE_PAYMENT_NOVALNET_VISIBILITY_BYAMOUNT_DESC);

define('MODULE_PAYMENT_NOVALNET_INVOICE_CUSTOMER_INFO_TITLE',MODULE_PAYMENT_NOVALNET_CUSTOMER_INFO_TITLE);
define('MODULE_PAYMENT_NOVALNET_INVOICE_CUSTOMER_INFO_DESC',MODULE_PAYMENT_NOVALNET_CUSTOMER_INFO_DESC);

define('MODULE_PAYMENT_NOVALNET_INVOICE_SORT_ORDER_TITLE',MODULE_PAYMENT_NOVALNET_SORT_ORDER_TITLE);
define('MODULE_PAYMENT_NOVALNET_INVOICE_SORT_ORDER_DESC',MODULE_PAYMENT_NOVALNET_SORT_ORDER_DESC);

define('MODULE_PAYMENT_NOVALNET_INVOICE_ORDER_STATUS_TITLE',MODULE_PAYMENT_NOVALNET_ORDER_STATUS_TITLE);
define('MODULE_PAYMENT_NOVALNET_INVOICE_ORDER_STATUS_DESC',MODULE_PAYMENT_NOVALNET_ORDER_STATUS_DESC);

define('MODULE_PAYMENT_NOVALNET_INVOICE_CALLBACK_ORDER_STATUS_TITLE','Callback-Bestellstatus');
define('MODULE_PAYMENT_NOVALNET_INVOICE_CALLBACK_ORDER_STATUS_DESC','Wählen Sie, welcher Status nach der erfolgreichen Ausführung des Novalnet-Callback-Skripts (ausgelöst bei erfolgreicher Zahlung) verwendet wird. ');

define('MODULE_PAYMENT_NOVALNET_INVOICE_PAYMENT_ZONE_TITLE',MODULE_PAYMENT_NOVALNET_PAYMENT_ZONE_TITLE);
define('MODULE_PAYMENT_NOVALNET_INVOICE_PAYMENT_ZONE_DESC',MODULE_PAYMENT_NOVALNET_PAYMENT_ZONE_DESC);

define('MODULE_PAYMENT_NOVALNET_INVOICE_BLOCK_TITLE','<b>Kauf auf Rechnung Konfiguration</b>');
define('MODULE_PAYMENT_NOVALNET_INVOICE_DUE_DATE_ERROR','Geben Sie bitte ein g&uuml;ltiges F&auml;lligkeitsdatum ein');

define('MODULE_PAYMENT_NOVALNET_INVOICE_GUARANTEE_PAYMENT_CONFIGURATION_TITLE', MODULE_PAYMENT_NOVALNET_GLOBAL_CONFIGURATION_DETAILS);
define('MODULE_PAYMENT_NOVALNET_INVOICE_GUARANTEE_PAYMENT_CONFIGURATION_DESC', MODULE_PAYMENT_NOVALNET_GLOBAL_CONFIGURATION_DETAILS_DESCRIPTION);

define('MODULE_PAYMENT_NOVALNET_INVOICE_GUARANTEE_PAYMENT_MINIMUM_AMOUNT_TITLE', MODULE_PAYMENT_NOVALNET_GUARANTEE_PAYMENT_MINIMUM_ORDER_AMOUNT);
define('MODULE_PAYMENT_NOVALNET_INVOICE_GUARANTEE_PAYMENT_MINIMUM_AMOUNT_DESC', MODULE_PAYMENT_NOVALNET_GUARANTEE_PAYMENT_MINIMUM_ORDER_AMOUNT_DESC);
define('MODULE_PAYMENT_NOVALNET_INVOICE_ENABLE_FORCE_GUARANTEE_PAYMENT_TITLE', MODULE_PAYMENT_NOVALNET_ENABLE_FORCE_GUARANTEE_PAYMENT);
define('MODULE_PAYMENT_NOVALNET_INVOICE_ENABLE_FORCE_GUARANTEE_PAYMENT_DESC', MODULE_PAYMENT_NOVALNET_ENABLE_FORCE_GUARANTEE_PAYMENT_DESC);
define('MODULE_PAYMENT_NOVALNET_INVOICE_PENDING_ORDER_STATUS_TITLE','Bestellstatus für die ausstehende Zahlung mit Zahlungsgarantie');
define('MODULE_PAYMENT_NOVALNET_INVOICE_PENDING_ORDER_STATUS_DESC','Diese Einstellung überschreibt die Standardeinstellung für den Mindest-Bestellbetrag.Anmerkung: der Mindest-Bestellbetrag sollte größer oder gleich 9,99 EUR sein.');
define('MODULE_PAYMENT_NOVALNET_INVOICE_GURANTEE_PAYMENT_MIN_AMOUNT_ERROR_MSG', MODULE_PAYMENT_NOVALNET_GURANTEE_PAYMENT_MIN_AMOUNT_ERROR_MSG);
define('MODULE_PAYMENT_NOVALNET_INVOICE_AUTHENTICATE_TITLE','Aktion für vom Besteller autorisierte Zahlungen');

define('MODULE_PAYMENT_NOVALNET_INVOICE_AUTHENTICATE_DESC','Wählen Sie, ob die Zahlung sofort belastet werden soll oder nicht. Zahlung einziehen: Betrag sofort belasten. Zahlung autorisieren: Die Zahlung wird überprüft und autorisiert, aber erst zu einem späteren Zeitpunkt belastet. So haben Sie Zeit, über die Bestellung zu entscheiden.');

define('MODULE_PAYMENT_NOVALNET_MANUAL_CHECK_LIMIT_INVOICE_TITLE', 'Mindesttransaktionsbetrag für die Autorisierung (in der kleinsten Währungseinheit, z.B. 100 Cent = entsprechen 1.00 EUR)');
define('MODULE_PAYMENT_NOVALNET_MANUAL_CHECK_INVOICE_LIMIT_DESC', 'Übersteigt der Bestellbetrag das genannte Limit, wird die Transaktion, bis zu ihrer Bestätigung durch Sie, auf on hold gesetzt. Sie können das Feld leer lassen, wenn Sie möchten, dass alle Transaktionen als on hold behandelt werden.');
