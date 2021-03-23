<?php

namespace Modules\Checkout\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Controller;
use Modules\Catalog\Data\Services\ProductService;
use Modules\Checkout\Data\Parameters\OrderParameters;
use Modules\Checkout\Data\Services\OrderService;
use Modules\Checkout\Http\Requests\CreateOrderRequest;

class CheckoutController extends Controller
{
    /**
     * @var OrderService
     */
    private $orderService;

    /**
     * @var ProductService
     */
    private $productService;

    /**
     * CheckoutController constructor.
     * @param OrderService $orderService
     * @param ProductService $productService
     */
    public function __construct(OrderService $orderService, ProductService $productService)
    {
        $this->orderService = $orderService;
        $this->productService = $productService;
    }

    /**
     * Display checkout form
     * @param int $pid
     * @return Application|Factory|View
     */
    public function showForm(int $pid)
    {
        $product = $this->productService->findProductById($pid);
        return view('checkout::checkout', compact('product'));
    }

    /**
     * Create new order
     * @param CreateOrderRequest $request
     * @return RedirectResponse
     */
    public function checkout(CreateOrderRequest $request)
    {
        $product = $this->productService->findProductById($pid);
      //  $this->orderService->createOrder(new OrderParameters($request->all()), true);
        return redirect()->route('home');
    }
}
