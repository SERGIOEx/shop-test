<?php


namespace Modules\Payment\Contracts;

use Modules\Payment\Abstracts\AbstractPaymentAccount;

/**
 * Interface PaymentChargerInterface
 * @package Modules\Payment\Contracts
 */
interface PaymentChargerInterface
{
    /**
     * Performs the transaction by making a request to the service provider (e.g., paypal, stripe, ...)
     *
     * @param ChargeableInterface    $user    the user which is charged
     * @param AbstractPaymentAccount $account the account to be used to charge the user with
     * @param float                  $amount  the amount to be charged
     * @param string                 $currency
     *
     * @return
     */
    public function charge(ChargeableInterface $user, AbstractPaymentAccount $account, $amount, $currency);
}
