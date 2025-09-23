<?php

namespace Modules\SenaEmpresa\Providers\Filament;

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

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        $separator = DIRECTORY_SEPARATOR;
        return $panel
            ->id('sena-empresa-admin')
            ->path('sena-empresa/admin')
            ->login()
            ->brandName($this->getNavigationLabel())
            ->colors([
                'primary' => Color::Pink,
            ])
            ->discoverResources(in: module("SenaEmpresa", true)->appPath("Filament{$separator}SenaEmpresaAdmin{$separator}Resources"), for: module("SenaEmpresa", true)->appNamespace('Filament\SenaEmpresaAdmin\Resources'))
            ->discoverPages(in:module("SenaEmpresa", true)->appPath("Filament{$separator}SenaEmpresaAdmin{$separator}Pages"), for: module("SenaEmpresa", true)->appNamespace('Filament\SenaEmpresaAdmin\Pages'))
            ->pages([
                Dashboard::class,
            ])
            ->discoverWidgets(in:module("SenaEmpresa", true)->appPath("Filament{$separator}SenaEmpresaAdmin{$separator}Widgets"), for: module("SenaEmpresa", true)->appNamespace('Filament\SenaEmpresaAdmin\Widgets'))
            ->widgets([
                AccountWidget::class,
                FilamentInfoWidget::class,
            ])
            ->discoverClusters(in: module("SenaEmpresa", true)->appPath("Filament{$separator}SenaEmpresaAdmin{$separator}Clusters"), for: module("SenaEmpresa", true)->appNamespace('Filament\SenaEmpresaAdmin\Clusters'))
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
        return __("Administrador Sena Empresa");
    }
}
