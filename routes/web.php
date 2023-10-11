<?php

use Illuminate\Support\Facades\Route;
use Z3d0X\FilamentFabricator\Facades\FilamentFabricator;
use Z3d0X\FilamentFabricator\Http\Controllers\PageController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    $filamentFabricatorPage = FilamentFabricator::getPageModel()::query()
    ->where('slug', 'index')
    ->firstOrFail();

    $layout = FilamentFabricator::getLayoutFromName($filamentFabricatorPage?->layout);

    if (! isset($layout)) {
        throw new \Exception("Filament Fabricator: Layout \"{$filamentFabricatorPage->layout}\" not found");
    }

    /** @var string $component */
    $component = $layout::getComponent();

    return Blade::render(
        <<<'BLADE'
        <x-dynamic-component
            :component="$component"
            :page="$page"
        />
        BLADE,
        ['component' => $component, 'page' => $filamentFabricatorPage]
    );
});
