<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

use App\Models\Product;
use App\Services\ProductService;

class ProductController extends Controller
{
    protected $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function index(Product $product, Request $request)
    {
        $product = $this->productService->get($request->all()); // validated - need to implement
        return response()->json($product);
    }

    public function store(StoreProductRequest $request, Product $product)
    {
        $product = $this->productService->create($request->validated());
        return response()->json($product, 201);
    }

    public function update(UpdateProductRequest $request, Product $product)
    {
        $product = $this->productService->update($product, $request->validated());
        return response()->json($product);
    }

    public function destroy(Product $product)
    {
        $this->productService->delete($product);
        return response()->json(null, 204);
    }
}
