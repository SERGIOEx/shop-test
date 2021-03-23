<?php

namespace Modules\Catalog\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Routing\Controller;
use Modules\Catalog\Data\Services\ProductService;

class CatalogController extends Controller
{
    /**
     * @var ProductService
     */
    private $service;

    /**
     * CatalogController constructor.
     * @param ProductService $productService
     */
    public function __construct(ProductService $productService)
    {
        $this->service = $productService;
    }

    /**
     * Get Latest Products: Home page
     * @return Renderable
     */
    public function homePage()
    {
        $latestProducts = $this->service->getAll(true, 4);
        return view('catalog::list', compact('latestProducts'));
    }
}
