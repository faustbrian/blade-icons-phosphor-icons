<?php

declare(strict_types=1);

namespace PreemStudio\BladeIcons\PhosphorIcons;

use PreemStudio\BladeIcons\Facades\IconFamilyRegistry;
use PreemStudio\BladeIcons\IconFamily;
use PreemStudio\Jetpack\Package\AbstractServiceProvider;

final class ServiceProvider extends AbstractServiceProvider
{
    public function packageRegistered(): void
    {
        IconFamilyRegistry::push(
            IconFamily::fromDirectory('phosphor', __DIR__.'/../resources/svg'),
        );
    }
}
