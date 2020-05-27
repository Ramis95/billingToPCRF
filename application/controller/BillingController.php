<?

namespace controller;

use model\BillingModel;

class BillingController
{
	protected $model;

	function __construct(BillingModel $model)
	{
		$this->model = $model;
	}

	public function readBilling()
	{
		$this->model->getBillingData();
	}

	private function billingToPcrf()
	{
		// Отправка
	}


}
