<?php
/**
 * @copyright   Copyright (C) 2019-2020 Jeffrey Bostoen
 * @license     https://www.gnu.org/licenses/gpl-3.0.en.html
 * @author		jbostoen
 * @version     2020-10-23 14:42:38
 *
 * Translations for jb-action-rest
 */

Dict::Add('NL NL', 'Dutch', 'Dutch', array(

	'Class:ActionRest' => 'REST-actie',
	'Class:ActionRest+' => 'De REST-actie zal uitgevoerd worden na een Trigger.',
	'Class:ActionRest/Attribute:name' => 'Naam',
	'Class:ActionRest/Attribute:description' => 'Beschrijving',
	'Class:ActionRest/Attribute:status' => 'Status',
	'Class:ActionRest/Attribute:status/Value:enabled' => 'In productie',
	'Class:ActionRest/Attribute:status/Value:disabled' => 'Inactief',
	'Class:ActionRest/Attribute:status/Value:test' => 'Wordt getest',
	'Class:ActionRest/Attribute:trigger_list' => 'Triggers',
	'Class:ActionRest/Attribute:test_url' => 'URL Test',
	'Class:ActionRest/Attribute:production_url' => 'URL Productie',
	'Class:ActionRest/Attribute:log_result' => 'Resultaat',
	'Class:ActionRest/Attribute:log_result/Value:http_code' => 'HTTP-code',
	'Class:ActionRest/Attribute:log_result/Value:http_body' => 'HTTP-antwoord',
	
	'Class:EventNotificationRest' => 'REST Event',
	'Class:EventNotificationRest+' => 'Trace van een REST Event',
	'Class:EventNotificationRest/date' => 'Tijdstip',
	'Class:EventNotificationRest:date+' => 'Datum en tijdstip waarop de veranderingen zijn vastgelegd',
	'Class:EventNotificationRest/message' => 'Bericht',
	'Class:EventNotificationRest/userinfo' => 'Gebruikersinfo',
	'Class:EventNotificationRest/action_id' => 'ID Actie',
	'Class:EventNotificationRest/trigger_id' => 'ID Trigger',
	'Class:EventNotificationRest/object_id' => 'ID Object',
	'Class:EventNotificationRest/url' => 'URL',
	
));
