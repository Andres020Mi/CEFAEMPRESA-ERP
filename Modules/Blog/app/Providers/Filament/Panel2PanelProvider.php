<?php

namespace Modules\Blog\Providers\Filament;

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

class Panel2PanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        $separator = DIRECTORY_SEPARATOR;
        return $panel
            ->id('blog-panel2')
            ->path('blog/panel2')
         
            ->brandName($this->getNavigationLabel())
            ->colors([
                'primary' => Color::Amber,
            ])
            ->discoverResources(in: module("Blog", true)->appPath("Filament{$separator}BlogPanel2{$separator}Resources"), for: module("Blog", true)->appNamespace('Filament\BlogPanel2\Resources'))
            ->discoverPages(in:module("Blog", true)->appPath("Filament{$separator}BlogPanel2{$separator}Pages"), for: module("Blog", true)->appNamespace('Filament\BlogPanel2\Pages'))
            ->pages([
                Dashboard::class,
            ])
            ->discoverWidgets(in:module("Blog", true)->appPath("Filament{$separator}BlogPanel2{$separator}Widgets"), for: module("Blog", true)->appNamespace('Filament\BlogPanel2\Widgets'))
            ->widgets([
                AccountWidget::class,
                FilamentInfoWidget::class,
            ])
            ->discoverClusters(in: module("Blog", true)->appPath("Filament{$separator}BlogPanel2{$separator}Clusters"), for: module("Blog", true)->appNamespace('Filament\BlogPanel2\Clusters'))
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
            ]);
    }

    public function getNavigationLabel(): string
    {
        return __("nav_panel2");
    }
}
