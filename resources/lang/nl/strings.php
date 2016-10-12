<?php

return [

	/*
	|--------------------------------------------------------------------------
	| Strings Language Lines
	|--------------------------------------------------------------------------
	|
	| The following language lines are used in strings throughout the system.
	| Regardless where it is placed, a string can be listed here so it is easily
	| found in a intuitive way.
	|
	*/

	'backend' => [
		'access' => [
			'users' => [
				'delete_user_confirm' => 'Gebruiker permanent verwijderen? Overal in de applicaties waar een gerefereerd wordt naar dit gebruikers id zal een fout ontstaan. Doorgaan op eigen risico. Dit kan niet ongedaan gemaakt worden.',
				'if_confirmed_off' => '(Als bevestiging uit staat)',
				'restore_user_confirm' => 'Herstel deze gebruiker naar de originele staat?',
			],
		],

		'dashboard' => [
			'title' => 'Beheer Dashboard',
			'welcome' => 'Welkom',
		],

		'general' => [
			'all_rights_reserved' => 'Alle Rechten Voorbehouden.',
			'are_you_sure' => 'Zeker?',
			'boilerplate_link' => 'Laravel 5 Boilerplate',
			'continue' => 'Doorgaan',
			'member_since' => 'Lid sinds',
			'minutes' => ' minuten',
			'search_placeholder' => 'Zoeken...',
			'timeout' => 'Automatisch uitgelogd vanwege veiligheids redenen aangezien er geen activiteit was in ',

			'see_all' => [
				'messages' => 'Alle messages bekijken',
				'notifications' => 'Bekijk alles',
				'tasks' => ' Alle taken bekijken',
			],

			'status' => [
				'online' => 'Online',
				'offline' => 'Offline',
			],

			'you_have' => [
				'messages' => '{0} U heeft geen berichten|{1} U heeft 1 bericht|[2,Inf] U heeft :number berichten',
				'notifications' => '{0} U heeft geen notificaties|{1} U heeft 1 notificatie|[2,Inf] U heeft :number notificaties',
				'tasks' => '{0} U heeft geen taken|{1} U heeft 1 taak|[2,Inf] U heeft :number taken',
			],
		],
	],

	'emails' => [
		'auth' => [
			'password_reset_subject' => 'Uw Wachtwoord Reset Link',
			'reset_password' => 'Klik hier om uw wachtwoord te resetten',
		],
	],

	'frontend' => [
		'email' => [
			'confirm_account' => 'Klik hier om uw account te bevestigen:',
		],

		'test' => 'Test',

		'tests' => [
			'based_on' => [
				'permission' => 'Permissie Gebaseerd - ',
				'role' => 'Rol Gebaseerd - ',
			],

			'js_injected_from_controller' => 'Javascript geinjecteerd vanuit de Controller',

			'using_blade_extensions' => 'Gebruik makend van Blade Extensies',

			'using_access_helper' => [
				'array_permissions' => 'Gebruik makend van Access Helper met Array van Permissies van Namen of id\'s waar de gebruiker ze allemaal benodigd is.',
				'array_permissions_not' => 'Gebruik makend van Access Helper met Array van Permissies van Namen of id\'s waar de gebruiker ze niet allemaal benodigd is.',
				'array_roles' => 'Gebruik makend van Access Helper met Array van Permissies van Rolnamen of id\'s waar de gebruiker ze allemaal benodigd is.',
				'array_roles_not' => 'Gebruik makend van Access Helper met Array van Permissies van Rolnamen of id\'s waar de gebruiker ze niet allemaal benodigd is.',
				'permission_id' => 'Gebruik makend van Access Helper met Permissie ID',
				'permission_name' => 'Gebruik makend van Access Helper met Permission Naam',
				'role_id' => 'Gebruik makend van Access Helper met Rol ID',
				'role_name' => 'Gebruik makend van Access Helper met Rol Naam',
			],

			'view_console_it_works' => 'U zou \'it works!\' in de console moeten zien, welke komt vanuit FrontendController@index',
			'you_can_see_because' => 'U kunt dit zien omdat u de rol heeft van \':role\'!',
			'you_can_see_because_permission' => 'U kunt dit zien omdat u de permissie van \':permission\'!',
		],

		'user' => [
			'profile_updated' => 'Profiel succesvol bijgewerkt.',
			'password_updated' => 'Wachtwoord succesvol bijgewerkt.',
		],

		'welcome_to' => 'Welkom bij :place',
	],
];