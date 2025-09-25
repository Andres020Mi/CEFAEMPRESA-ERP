<?php

namespace Modules\Test\Providers\Filament;

use Coolsam\Modules\ModulesPlugin;
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Pages\Dashboard;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Widgets\AccountWidget;
use Filament\Widgets\FilamentInfoWidget;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;

class AdminTestPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        $separator = DIRECTORY_SEPARATOR;
        return $panel
            ->id('test-admin-test')
            ->path('test/admin-test')
            ->login()
            ->brandName($this->getNavigationLabel())
            ->colors([
                'primary' => Color::Amber,
            ])
            ->discoverResources(in: module("Test", true)->appPath("Filament{$separator}TestAdminTest{$separator}Resources"), for: module("Test", true)->appNamespace('Filament\TestAdminTest\Resources'))
            ->discoverPages(in:module("Test", true)->appPath("Filament{$separator}TestAdminTest{$separator}Pages"), for: module("Test", true)->appNamespace('Filament\TestAdminTest\Pages'))
            ->pages([
                Dashboard::class,
            ])
            ->discoverWidgets(in:module("Test", true)->appPath("Filament{$separator}TestAdminTest{$separator}Widgets"), for: module("Test", true)->appNamespace('Filament\TestAdminTest\Widgets'))
            ->widgets([
                AccountWidget::class,
                FilamentInfoWidget::class,
            ])
            ->discoverClusters(in: module("Test", true)->appPath("Filament{$separator}TestAdminTest{$separator}Clusters"), for: module("Test", true)->appNamespace('Filament\TestAdminTest\Clusters'))
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ])->navigationItems([
                // Add a backlink to the default panel
                \Filament\Navigation\NavigationItem::make()
                    ->label(__('Back Home'))
                    ->sort(-1000)
                    ->icon(\Filament\Support\Icons\Heroicon::OutlinedHomeModern)
                    ->url(filament()->getDefaultPanel()->getUrl()),
            ])
            ->plugins([
   
    ModulesPlugin::make(), // 👈 este es el que se encarga de traer lo de cada módulo
]);
    }

    public function getNavigationLabel(): string
    {
        return __("AdminTest");
    }
}
