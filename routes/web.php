<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardsController;
use App\Http\Controllers\AdvanceduiController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\UtilitiesController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\ErrorController;
use App\Http\Controllers\AppsController;
use App\Http\Controllers\IconsController;
use App\Http\Controllers\WidgetsController;
use App\Http\Controllers\UielementsController;
use App\Http\Controllers\MapsController;
use App\Http\Controllers\ChartsController;
use App\Http\Controllers\FormsController;
use App\Http\Controllers\TablesController;


// use App\Http\Controllers\Controller;


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

// Route::get('', [Controller::class, 'index']);



// DASHBOARDS //
Route::get('/', [DashboardsController::class, 'index'])->name('dashboard');
Route::get('index', [DashboardsController::class, 'index'])->name('dashboard');
Route::get('index2', [DashboardsController::class, 'index2']);
Route::get('index3', [DashboardsController::class, 'index3']);
Route::get('index4', [DashboardsController::class, 'index4']);
Route::get('index5', [DashboardsController::class, 'index5']);
Route::get('index6', [DashboardsController::class, 'index6']);
Route::get('index7', [DashboardsController::class, 'index7']);
Route::get('index8', [DashboardsController::class, 'index8']);
Route::get('index9', [DashboardsController::class, 'index9']);
Route::get('index10', [DashboardsController::class, 'index10']);
Route::get('index11', [DashboardsController::class, 'index11']);
Route::get('index12', [DashboardsController::class, 'index12']);


// ADVANCED UI //
Route::get('accordions-collapse', [AdvanceduiController::class, 'accordions_collapse']);
Route::get('carousel', [AdvanceduiController::class, 'carousel']);
Route::get('draggable-cards', [AdvanceduiController::class, 'draggable_cards']);
Route::get('modals-closes', [AdvanceduiController::class, 'modals_closes']);
Route::get('navbars', [AdvanceduiController::class, 'navbars']);
Route::get('offcanvas', [AdvanceduiController::class, 'offcanvas']);
Route::get('placeholders', [AdvanceduiController::class, 'placeholders']);
Route::get('ratings', [AdvanceduiController::class, 'ratings']);
Route::get('scrollspy', [AdvanceduiController::class, 'scrollspy']);
Route::get('swiperjs', [AdvanceduiController::class, 'swiperjs']);


// PAGES //
Route::get('blog', [PagesController::class, 'blog']);
Route::get('blog-create', [PagesController::class, 'blog_create']);
Route::get('blog-details', [PagesController::class, 'blog_details']);
Route::get('chat', [PagesController::class, 'chat']);
Route::get('contacts', [PagesController::class, 'contacts']);
Route::get('add-products', [PagesController::class, 'add_products']);
Route::get('cart', [PagesController::class, 'cart']);
Route::get('checkout', [PagesController::class, 'checkout']);
Route::get('edit-products', [PagesController::class, 'edit_products']);
Route::get('orders', [PagesController::class, 'orders']);
Route::get('order-details', [PagesController::class, 'order_details']);
Route::get('products', [PagesController::class, 'products']);
Route::get('product-details', [PagesController::class, 'product_details']);
Route::get('products-list', [PagesController::class, 'products_list']);
Route::get('wishlist', [PagesController::class, 'wishlist']);
Route::get('mail', [PagesController::class, 'mail']);
Route::get('mail-chat', [PagesController::class, 'mail_chat']);
Route::get('mail-settings', [PagesController::class, 'mail_settings']);
Route::get('empty-page', [PagesController::class, 'empty_page']);
Route::get('faqs', [PagesController::class, 'faqs']);
Route::get('file-manager', [PagesController::class, 'file_manager']);
Route::get('file-details', [PagesController::class, 'file_details']);
Route::get('invoice-create', [PagesController::class, 'invoice_create']);
Route::get('invoice-details', [PagesController::class, 'invoice_details']);
Route::get('invoice-list', [PagesController::class, 'invoice_list']);
Route::get('landing', [PagesController::class, 'landing']);
Route::get('notifications', [PagesController::class, 'notifications']);
Route::get('pricing', [PagesController::class, 'pricing']);
Route::get('profile', [PagesController::class, 'profile']);
Route::get('reviews', [PagesController::class, 'reviews']);
Route::get('teams', [PagesController::class, 'teams']);
Route::get('terms-conditions', [PagesController::class, 'terms_conditions']);
Route::get('timeline', [PagesController::class, 'timeline']);
Route::get('timeline2', [PagesController::class, 'timeline2']);
Route::get('todo-list', [PagesController::class, 'todo_list']);


// UTILITIES //
Route::get('avatars', [UtilitiesController::class, 'avatars']);
Route::get('borders', [UtilitiesController::class, 'borders']);
Route::get('breakpoints', [UtilitiesController::class, 'breakpoints']);
Route::get('colors', [UtilitiesController::class, 'colors']);
Route::get('columns', [UtilitiesController::class, 'columns']);
Route::get('flex', [UtilitiesController::class, 'flex']);
Route::get('gutters', [UtilitiesController::class, 'gutters']);
Route::get('helpers', [UtilitiesController::class, 'helpers']);
Route::get('positions', [UtilitiesController::class, 'positions']);
Route::get('more', [UtilitiesController::class, 'more']);


// AUTHENTICATION //
Route::get('comingsoon', [AuthenticationController::class, 'comingsoon']);
Route::get('createpassword-basic', [AuthenticationController::class, 'createpassword_basic']);
Route::get('createpassword-cover', [AuthenticationController::class, 'createpassword_cover']);
Route::get('createpassword-cover2', [AuthenticationController::class, 'createpassword_cover2']);
Route::get('lockscreen-basic', [AuthenticationController::class, 'lockscreen_basic']);
Route::get('lockscreen-cover', [AuthenticationController::class, 'lockscreen_cover']);
Route::get('lockscreen-cover2', [AuthenticationController::class, 'lockscreen_cover2']);
Route::get('resetpassword-basic', [AuthenticationController::class, 'resetpassword_basic']);
Route::get('resetpassword-cover', [AuthenticationController::class, 'resetpassword_cover']);
Route::get('resetpassword-cover2', [AuthenticationController::class, 'resetpassword_cover2']);
Route::get('signup-basic', [AuthenticationController::class, 'signup_basic']);
Route::get('signup-cover', [AuthenticationController::class, 'signup_cover']);
Route::get('signup-cover2', [AuthenticationController::class, 'signup_cover2']);
Route::get('signin-basic', [AuthenticationController::class, 'signin_basic']);
Route::get('signin-cover', [AuthenticationController::class, 'signin_cover']);
Route::get('signin-cover2', [AuthenticationController::class, 'signin_cover2']);
Route::get('twostep-verification-basic', [AuthenticationController::class, 'twostep_verification_basic']);
Route::get('twostep-verification-cover', [AuthenticationController::class, 'twostep_verification_cover']);
Route::get('twostep-verification-cover2', [AuthenticationController::class, 'twostep_verification_cover2']);
Route::get('under-maintenance', [AuthenticationController::class, 'under_maintenance']);
Route::get('no-internet', [AuthenticationController::class, 'no_internet']);


// ERROR //
Route::get('error401', [ErrorController::class, 'error401']);
Route::get('error404', [ErrorController::class, 'error404']);
Route::get('error500', [ErrorController::class, 'error500']);


// APPS //
Route::get('full-calendar', [AppsController::class, 'full_calendar']);
Route::get('gallery', [AppsController::class, 'gallery']);
Route::get('sweet-alerts', [AppsController::class, 'sweet_alerts']);


// ICONS //
Route::get('icons', [IconsController::class, 'icons']);


// WIDGETS //
Route::get('widgets', [WidgetsController::class, 'widgets']);


// UI ELEMENTS //
Route::get('alerts', [UielementsController::class, 'alerts']);
Route::get('badges', [UielementsController::class, 'badges']);
Route::get('breadcrumbs', [UielementsController::class, 'breadcrumbs']);
Route::get('buttons', [UielementsController::class, 'buttons']);
Route::get('buttongroups', [UielementsController::class, 'buttongroups']);
Route::get('cards', [UielementsController::class, 'cards']);
Route::get('dropdowns', [UielementsController::class, 'dropdowns']);
Route::get('images-figures', [UielementsController::class, 'images_figures']);
Route::get('listgroups', [UielementsController::class, 'listgroups']);
Route::get('navs-tabs', [UielementsController::class, 'navs_tabs']);
Route::get('object-fit', [UielementsController::class, 'object_fit']);
Route::get('paginations', [UielementsController::class, 'paginations']);
Route::get('popovers', [UielementsController::class, 'popovers']);
Route::get('progress', [UielementsController::class, 'progress']);
Route::get('spinners', [UielementsController::class, 'spinners']);
Route::get('toasts', [UielementsController::class, 'toasts']);
Route::get('tooltips', [UielementsController::class, 'tooltips']);
Route::get('typography', [UielementsController::class, 'typography']);


// MAPS //
Route::get('google-maps', [MapsController::class, 'google_maps']);
Route::get('leaflet-maps', [MapsController::class, 'leaflet_maps']);
Route::get('vector-maps', [MapsController::class, 'vector_maps']);


// CHARTS //
Route::get('apex-line-charts', [ChartsController::class, 'apex_line_charts']);
Route::get('apex-area-charts', [ChartsController::class, 'apex_area_charts']);
Route::get('apex-column-charts', [ChartsController::class, 'apex_column_charts']);
Route::get('apex-bar-charts', [ChartsController::class, 'apex_bar_charts']);
Route::get('apex-mixed-charts', [ChartsController::class, 'apex_mixed_charts']);
Route::get('apex-rangearea-charts', [ChartsController::class, 'apex_rangearea_charts']);
Route::get('apex-timeline-charts', [ChartsController::class, 'apex_timeline_charts']);
Route::get('apex-candlestick-charts', [ChartsController::class, 'apex_candlestick_charts']);
Route::get('apex-boxplot-charts', [ChartsController::class, 'apex_boxplot_charts']);
Route::get('apex-bubble-charts', [ChartsController::class, 'apex_bubble_charts']);
Route::get('apex-scatter-charts', [ChartsController::class, 'apex_scatter_charts']);
Route::get('apex-heatmap-charts', [ChartsController::class, 'apex_heatmap_charts']);
Route::get('apex-treemap-charts', [ChartsController::class, 'apex_treemap_charts']);
Route::get('apex-pie-charts', [ChartsController::class, 'apex_pie_charts']);
Route::get('apex-radialbar-charts', [ChartsController::class, 'apex_radialbar_charts']);
Route::get('apex-radar-charts', [ChartsController::class, 'apex_radar_charts']);
Route::get('apex-polararea-charts', [ChartsController::class, 'apex_polararea_charts']);
Route::get('chartjs-charts', [ChartsController::class, 'chartjs_charts']);
Route::get('echarts', [ChartsController::class, 'echarts']);


// FORMS //
Route::get('form-inputs', [FormsController::class, 'form_inputs']);
Route::get('form-check-radios', [FormsController::class, 'form_check_radios']);
Route::get('form-input-groups', [FormsController::class, 'form_input_groups']);
Route::get('form-select', [FormsController::class, 'form_select']);
Route::get('form-range', [FormsController::class, 'form_range']);
Route::get('form-input-masks', [FormsController::class, 'form_input_masks']);
Route::get('form-file-uploads', [FormsController::class, 'form_file_uploads']);
Route::get('form-datetime-pickers', [FormsController::class, 'form_datetime_pickers']);
Route::get('floating-labels', [FormsController::class, 'floating_labels']);
Route::get('form-layouts', [FormsController::class, 'form_layouts']);
Route::get('quill-editor', [FormsController::class, 'quill_editor']);
Route::get('form-validations', [FormsController::class, 'form_validations']);
Route::get('form-select2', [FormsController::class, 'form_select2']);


// TSBLES //
Route::get('tables', [TablesController::class, 'tables']);
Route::get('grid-tables', [TablesController::class, 'grid_tables']);
Route::get('data-tables', [TablesController::class, 'data_tables']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',

    ])->group(function () {
        // '/index' adresi için DashboardsController'ın 'index' metodunu çağırıyoruz
        Route::get('/', [DashboardsController::class, 'index'])->name('dashboard');
        Route::get('/index', [DashboardsController::class, 'index'])->name('dashboard');
        
    });