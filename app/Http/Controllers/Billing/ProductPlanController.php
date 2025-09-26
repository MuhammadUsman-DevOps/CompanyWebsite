<?php

namespace App\Http\Controllers\Billing;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProductPlanController extends Controller
{
    /**
     * GET /api/plans?product_id=UUID
     * Returns active plans (with features) for the given product.
     */
    public function byProductId(Request $request): JsonResponse
    {
        $data = $request->all();

        try {
            $product = Product::whereKey($data['product_id'])
                ->where('is_active', true)
                ->firstOrFail();
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'message' => 'Product not found',
            ], 404);
        }

        $plans = $product->plans()
            ->when(!($data['include_inactive'] ?? false), fn($q) => $q->where('is_active', true))
            ->orderBy('price')
            ->get([
                'id',
                'name',
                'description',
                'price',
                'interval',
                'credits_per_cycle',
                'features',
            ]);

        return response()->json([
            'product' => [
                'id'   => $product->id,
                'name' => $product->name,
                'slug' => $product->slug,
                'logo' => $product->logo,
            ],
            'plans' => $plans,
        ]);
    }}
