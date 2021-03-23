<?php


namespace Modules\Payment\Data;


use Modules\Payment\Abstracts\AbstractPaymentAccount;
use Modules\Payment\Contracts\ChargeableInterface;
use Modules\Payment\Contracts\PaymentChargerInterface;

class StripeService implements PaymentChargerInterface
{

    private $stripe;

    /**
     * StripeService constructor.
     *
     * @param $stripe
     */
    public function __construct($stripe)
    {
        // TODO: get and set api-keys
    }

    /**
     * @param ChargeableInterface $user
     * @param AbstractPaymentAccount $account
     * @param float $amount
     * @param string $currency
     */
    public function charge(ChargeableInterface $user, AbstractPaymentAccount $account, $amount, $currency = 'USD')
    {
        // TODO: need real.
    }
}
