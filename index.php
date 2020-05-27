<?
require_once __DIR__ . '/vendor/autoload.php';

error_reporting(0);
register_shutdown_function('catchFatalErrors');

function catchFatalErrors()
{
	$error = error_get_last();

	if ( ! empty($error['type'])
	     && $error['type'] == E_ERROR
	) // Проверяем на наличие ошибок в коде
	{
		// Отправляем ползователю сообщение об ошибке
		$response = [
			'status'  => 'error',
			'message' => $error,
		];

		echo json_encode($response);
		// Посылаем сигнал, что есть ошибка (передаем массив с ошибками $error)

	}
}



