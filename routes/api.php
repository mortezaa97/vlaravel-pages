<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use Mortezaa97\Shop\Http\Controllers\Product\CompareProductsController;
use Mortezaa97\Shop\Http\Controllers\Product\FilterOptionsProductsController;
use Mortezaa97\Shop\Http\Controllers\Product\FilterProductsController;
use Mortezaa97\Shop\Http\Controllers\Product\IncreaseViewProductsController;
use Mortezaa97\Shop\Http\Controllers\Product\MostSoldProductsController;
use Mortezaa97\Shop\Http\Controllers\Product\RelatedProductsController;
use Mortezaa97\Shop\Http\Controllers\ProductController;
use Mortezaa97\Shop\Http\Controllers\Review\ProductReviewsController;

Route::prefix('api')->middleware('api')->group(function () {

});
