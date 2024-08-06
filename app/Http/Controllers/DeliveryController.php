<?php

namespace App\Http\Controllers;

use App\Components\Delivery\DeliveryResolver;
use App\Http\Requests\DeliveryRequest;

/**
 * Class DeliveryController
 *
 * @package App\Http\Controllers
 */
final class DeliveryController extends Controller
{
    /**
     *
     * @param  DeliveryRequest  $request
     * @param  DeliveryResolver  $resolver
     *
     * @return \Illuminate\Container\Container|mixed|object
     */
    public function handle(DeliveryRequest $request, DeliveryResolver $resolver)
    {
        $delivery = new ($resolver->resolveDependencyName());
        $delivery->prepareData($request->getPackageDTO(), $request->getRecipientDTO());

        $status = $delivery->send();

        return response('', $status);
    }
}
