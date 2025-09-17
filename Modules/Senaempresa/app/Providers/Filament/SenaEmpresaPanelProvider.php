<?php

namespace Modules\Senaempresa\Providers\Filament;

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

class SenaEmpresaPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        $separator = DIRECTORY_SEPARATOR;
        return $panel
            ->id('senaempresa-sena-empresa')
            ->path('senaempresa/sena-empresa')
            ->login()
            ->brandName($this->getNavigationLabel())
            ->colors([
                'primary' => Color::Amber,
            ])
            ->discoverResources(in: module("Senaempresa", true)->appPath("Filament{$separator}SenaempresaSenaEmpresa{$separator}Resources"), for: module("Senaempresa", true)->appNamespace('Filament\SenaempresaSenaEmpresa\Resources'))
            ->discoverPages(in:module("Senaempresa", true)->appPath("Filament{$separator}SenaempresaSenaEmpresa{$separator}Pages"), for: module("Senaempresa", true)->appNamespace('Filament\SenaempresaSenaEmpresa\Pages'))
            ->pages([
                Dashboard::class,
            ])
            ->discoverWidgets(in:module("Senaempresa", true)->appPath("Filament{$separator}SenaempresaSenaEmpresa{$separator}Widgets"), for: module("Senaempresa", true)->appNamespace('Filament\SenaempresaSenaEmpresa\Widgets'))
            ->widgets([
                AccountWidget::class,
                FilamentInfoWidget::class,
            ])
            ->discoverClusters(in: module("Senaempresa", true)->appPath("Filament{$separator}SenaempresaSenaEmpresa{$separator}Clusters"), for: module("Senaempresa", true)->appNamespace('Filament\SenaempresaSenaEmpresa\Clusters'))
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
            ]);
    }

    public function getNavigationLabel(): string
    {
        return __("SENA Empresa");
    }
}
