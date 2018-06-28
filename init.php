<?

/* Умножение двух чисел без использования умножения */
function sum($a, $b) {
  return $a / (1 / $b);
}

/* Уведомление при регистрации нового пользователя */
$eventManager = \Bitrix\Main\EventManager::getInstance();
$eventManager->addEventHandler('main',	'OnAfterUserAdd',	function($arFields)	{
  $arEventFields = [];
  $arEventFields["USER_LOGIN"]	=	$arFields["LOGIN"];
  $arEventFields["REGISTER_DATE"]	=	date("d.m.Y H:i:s");
  CEvent::SendImmediate("USER_REGISTER",	"s1",	$arEventFields);
});

