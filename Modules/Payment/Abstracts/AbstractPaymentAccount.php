<?php


namespace Modules\Payment\Abstracts;


use Illuminate\Database\Eloquent\Model;
use Modules\Payment\Contracts\PaymentGatewayAccountInterface;

/**
 * Class AbstractPaymentAccount
 * @package Modules\Payment\Abstracts
 */
abstract class AbstractPaymentAccount extends Model implements PaymentGatewayAccountInterface
{

    /**
     * @param array $fields
     *
     * @return  bool
     */
    public function checkIfPaymentDataIsSet(array $fields)
    {
        foreach ($fields as $field) {
            if ($this->getAttributeValue($field) === null) {
                return false;
            }
        }

        return true;
    }

    /**
     * @return  array
     */
    public function getDetailAttributes()
    {
        $attributes = $this->toArray();

        unset($attributes['id']);
        unset($attributes['created_at']);
        unset($attributes['updated_at']);
        unset($attributes['deleted_at']);

        return $attributes;
    }

    public function paymentAccount()
    {
        // TODO: return morphOne
        //return;
    }

}
