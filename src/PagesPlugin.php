<?php

declare(strict_types=1);

namespace Mortezaa97\Pages;

use Filament\Contracts\Plugin;
use Filament\Panel;
use Mortezaa97\Orders\Filament\Resources\Carts\CartResource;
use Mortezaa97\Orders\Filament\Resources\Orders\OrderResource;
use Mortezaa97\Orders\Filament\Resources\PayTypes\PayTypeResource;
use Mortezaa97\Orders\Filament\Resources\SendTypes\SendTypeResource;

class PagesPlugin implements Plugin
{
    public static function make(): static
    {
        return app(static::class);
    }

    public function getId(): string
    {
        return 'page';
    }

    public function register(Panel $panel): void
    {
        $panel
            ->resources([
//                'CartResource' => CartResource::class,
//                'OrderResource' => OrderResource::class,
//                'PayTypeResource' => PayTypeResource::class,
//                'SendTypeResource' => SendTypeResource::class,
            ]);
    }

    public function boot(Panel $panel): void
    {
        //
    }
}
