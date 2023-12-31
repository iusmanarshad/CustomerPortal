<?php

use App\Http\Controllers;
use App\Http\Controllers\CustomerPortal;
use App\Http\Controllers\AdminClientController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientApp\QuestionnaireController;
use App\Http\Controllers\CustomerPortal\AuthenticationController;
use App\Http\Controllers\CustomerPortal\ClientController;
use App\Http\Controllers\CustomerPortal\PortalController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Index;
use App\Http\Livewire\AboutUs;
use App\Http\Livewire\Accordion;
use App\Http\Livewire\AddProduct;
use App\Http\Livewire\Alerts;
use App\Http\Livewire\Avatar;
use App\Http\Livewire\Background;
use App\Http\Livewire\Badge;
use App\Http\Livewire\BlogDetails;
use App\Http\Livewire\Blog;
use App\Http\Livewire\Border;
use App\Http\Livewire\Breadcrumbs;
use App\Http\Livewire\Buttons;
use App\Http\Livewire\Calendar;
use App\Http\Livewire\Cards;
use App\Http\Livewire\Carousel;
use App\Http\Livewire\ChartChartjs;
use App\Http\Livewire\ChartEchart;
use App\Http\Livewire\ChartFlot;
use App\Http\Livewire\ChartMorris;
use App\Http\Livewire\ChartPeity;
use App\Http\Livewire\ChartSparkline;
use App\Http\Livewire\Chat;
use App\Http\Livewire\CheckOut;
use App\Http\Livewire\Collapse;
use App\Http\Livewire\Contacts;
use App\Http\Livewire\Display;
use App\Http\Livewire\Draggablecards;
use App\Http\Livewire\Dropdown;
use App\Http\Livewire\EditPost;
use App\Http\Livewire\Emptypage;
use App\Http\Livewire\Extras;
use App\Http\Livewire\Error404;
use App\Http\Livewire\Error500;
use App\Http\Livewire\Error501;
use App\Http\Livewire\Faq;
use App\Http\Livewire\FileAttachedTags;
use App\Http\Livewire\FileDetails;
use App\Http\Livewire\FileManager;
use App\Http\Livewire\FileManager1;
use App\Http\Livewire\Flex;
use App\Http\Livewire\Forgot;
use App\Http\Livewire\FormAdvanced;
use App\Http\Livewire\FormEditor;
use App\Http\Livewire\FormElements;
use App\Http\Livewire\FormLayouts;
use App\Http\Livewire\FormSizes;
use App\Http\Livewire\FormValidation;
use App\Http\Livewire\FormWizards;
use App\Http\Livewire\Gallery;
use App\Http\Livewire\Height;
use App\Http\Livewire\Icons;
use App\Http\Livewire\Icons2;
use App\Http\Livewire\Icons3;
use App\Http\Livewire\Icons4;
use App\Http\Livewire\Icons5;
use App\Http\Livewire\Icons6;
use App\Http\Livewire\Icons7;
use App\Http\Livewire\Icons8;
use App\Http\Livewire\Icons9;
use App\Http\Livewire\Icons10;
use App\Http\Livewire\Icons11;
use App\Http\Livewire\Icons12;
use App\Http\Livewire\Images;
use App\Http\Livewire\Index1;
use App\Http\Livewire\Index2;
use App\Http\Livewire\Index3;
use App\Http\Livewire\Index4;
use App\Http\Livewire\Index5;
use App\Http\Livewire\Index6;
use App\Http\Livewire\Index7;
use App\Http\Livewire\Invoice;
use App\Http\Livewire\Landing;
use App\Http\Livewire\ListGroup;
use App\Http\Livewire\Lockscreen;
use App\Http\Livewire\MailCompose;
use App\Http\Livewire\MailInbox;
use App\Http\Livewire\MailRead;
use App\Http\Livewire\MailSettings;
use App\Http\Livewire\MapLeaflet;
use App\Http\Livewire\MapVector;
use App\Http\Livewire\Margin;
use App\Http\Livewire\MediaObject;
use App\Http\Livewire\Modals;
use App\Http\Livewire\Navigation;
use App\Http\Livewire\Notification;
use App\Http\Livewire\OrderDetails;
use App\Http\Livewire\Padding;
use App\Http\Livewire\Pagination;
use App\Http\Livewire\Popover;
use App\Http\Livewire\Position;
use App\Http\Livewire\Pricing;
use App\Http\Livewire\ProductCart;
use App\Http\Livewire\ProductDetails;
use App\Http\Livewire\ProfileNotifications;
use App\Http\Livewire\Profile;
use App\Http\Livewire\Progress;
use App\Http\Livewire\Rangeslider;
use App\Http\Livewire\Rating;
use App\Http\Livewire\Reset;
use App\Http\Livewire\Search;
use App\Http\Livewire\Settings;
use App\Http\Livewire\Shop;
use App\Http\Livewire\Signin;
use App\Http\Livewire\Signup;
use App\Http\Livewire\Spinners;
use App\Http\Livewire\SweetAlert;
use App\Http\Livewire\Switcher1;
use App\Http\Livewire\TableBasic;
use App\Http\Livewire\TableData;
use App\Http\Livewire\TableEditable;
use App\Http\Livewire\Tabs;
use App\Http\Livewire\Tags;
use App\Http\Livewire\Timeline;
use App\Http\Livewire\Toast;
use App\Http\Livewire\Todotask;
use App\Http\Livewire\Tooltip;
use App\Http\Livewire\Treeview;
use App\Http\Livewire\Typography;
use App\Http\Livewire\Underconstruction;
use App\Http\Livewire\Userlist;
use App\Http\Livewire\Widgets;
use App\Http\Livewire\Width;
use App\Http\Livewire\WishList;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('', Index::class);
// Route::get('index', Index::class);
// Route::get('about-us', AboutUs::class);
// Route::get('accordion', Accordion::class);
// Route::get('add-product', AddProduct::class);
// Route::get('alerts', Alerts::class);
// Route::get('avatar', Avatar::class);
// Route::get('background', Background::class);
// Route::get('badge', Badge::class);
// Route::get('blog-details', BlogDetails::class);
// Route::get('blog', Blog::class);
// Route::get('border', Border::class);
// Route::get('breadcrumbs', Breadcrumbs::class);
// Route::get('buttons', Buttons::class);
// Route::get('calendar', Calendar::class);
// Route::get('cards', Cards::class);
// Route::get('carousel', Carousel::class);
// Route::get('chart-chartjs', ChartChartjs::class);
// Route::get('chart-echart', ChartEchart::class);
// Route::get('chart-flot', ChartFlot::class);
// Route::get('chart-morris', ChartMorris::class);
// Route::get('chart-peity', ChartPeity::class);
// Route::get('chart-sparkline', ChartSparkline::class);
// Route::get('chat', Chat::class);
// Route::get('check-out', CheckOut::class);
// Route::get('collapse', Collapse::class);
// Route::get('contacts', Contacts::class);
// Route::get('display', Display::class);
// Route::get('draggablecards', Draggablecards::class);
// Route::get('dropdown', Dropdown::class);
// Route::get('edit-post', EditPost::class);
// Route::get('emptypage', Emptypage::class);
// Route::get('error404', Error404::class);
// Route::get('error500', Error500::class);
// Route::get('error501', Error501::class);
// Route::get('extras', Extras::class);
// Route::get('faq', Faq::class);
// Route::get('file-attached-tags', FileAttachedTags::class);
// Route::get('file-details', FileDetails::class);
// Route::get('file-manager', FileManager::class);
// Route::get('file-manager1', FileManager1::class);
// Route::get('flex', Flex::class);
// Route::get('forgot', Forgot::class);
// Route::get('form-advanced', FormAdvanced::class);
// Route::get('form-editor', FormEditor::class);
// Route::get('form-elements', FormElements::class);
// Route::get('form-layouts', FormLayouts::class);
// Route::get('form-sizes', FormSizes::class);
// Route::get('form-validation', FormValidation::class);
// Route::get('form-wizards', FormWizards::class);
// Route::get('gallery', Gallery::class);
// Route::get('height', Height::class);
// Route::get('icons', Icons::class);
// Route::get('icons2', Icons2::class);
// Route::get('icons3', Icons3::class);
// Route::get('icons4', Icons4::class);
// Route::get('icons5', Icons5::class);
// Route::get('icons6', Icons6::class);
// Route::get('icons7', Icons7::class);
// Route::get('icons8', Icons8::class);
// Route::get('icons9', Icons9::class);
// Route::get('icons10', Icons10::class);
// Route::get('icons11', Icons11::class);
// Route::get('icons12', Icons12::class);
// Route::get('images', Images::class);
// Route::get('index1', Index1::class);
// Route::get('index2', Index2::class);
// Route::get('index3', Index3::class);
// Route::get('index4', Index4::class);
// Route::get('index5', Index5::class);
// Route::get('index6', Index6::class);
// Route::get('index7', Index7::class);
// Route::get('invoice', Invoice::class);
// Route::get('landing', Landing::class);
// Route::get('list-group', ListGroup::class);
// Route::get('lockscreen', Lockscreen::class);
// Route::get('mail-compose', MailCompose::class);
// Route::get('mail-inbox', MailInbox::class);
// Route::get('mail-read', MailRead::class);
// Route::get('mail-settings', MailSettings::class);
// Route::get('map-leaflet', MapLeaflet::class);
// Route::get('map-vector', MapVector::class);
// Route::get('margin', Margin::class);
// Route::get('media-object', MediaObject::class);
// Route::get('modals', Modals::class);
// Route::get('navigation', Navigation::class);
// Route::get('notification', Notification::class);
// Route::get('notification', Notification::class);
// Route::get('order-details', OrderDetails::class);
// Route::get('padding', Padding::class);
// Route::get('pagination', Pagination::class);
// Route::get('popover', Popover::class);
// Route::get('position', Position::class);
// Route::get('pricing', Pricing::class);
// Route::get('product-cart', ProductCart::class);
// Route::get('product-details', ProductDetails::class);
// Route::get('profile-notifications', ProfileNotifications::class);
// Route::get('profile', Profile::class);
// Route::get('progress', Progress::class);
// Route::get('rangeslider', Rangeslider::class);
// Route::get('rating', Rating::class);
// Route::get('reset', Reset::class);
// Route::get('search', Search::class);
// Route::get('settings', Settings::class);
// Route::get('shop', Shop::class);
// Route::get('signin', Signin::class);
// Route::get('signup', Signup::class);
// Route::get('spinners', Spinners::class);
// Route::get('sweet-alert', SweetAlert::class);
// Route::get('switcher-1', Switcher1::class);
// Route::get('table-basic', TableBasic::class);
// Route::get('table-data', TableData::class);
// Route::get('table-editable', TableEditable::class);
// Route::get('tabs', Tabs::class);
// Route::get('tags', Tags::class);
// Route::get('timeline', Timeline::class);
// Route::get('toast', Toast::class);
// Route::get('todotask', Todotask::class);
// Route::get('tooltip', Tooltip::class);
// Route::get('treeview', Treeview::class);
// Route::get('typography', Typography::class);
// Route::get('underconstruction', Underconstruction::class);
// Route::get('userlist', Userlist::class);
// Route::get('widgets', Widgets::class);
// Route::get('width', Width::class);
// Route::get('wish-list', WishList::class);

Route::get('', function () {
    // Check if the user is authenticated
    if (Auth::check()) {
        // User is authenticated, redirect to dashboard
        return auth()->user()->role_id == 1 ? redirect('/portal/clients') : redirect('/questionnaire');
    } else {
        // User is not authenticated, redirect to login
        return redirect('/login');
    }
})->name('home');

Route::get('/portal', function () {
    return redirect('/portal/clients');
})->name('portal');


// client app routes
Route::prefix('/')->group(function () {

    // Authentication
    Route::get('login', [CustomerPortal\AuthenticationController::class, 'login'])->name('login');
    Route::post('login', [CustomerPortal\AuthenticationController::class, 'authenticate'])->name('postLogin');
    Route::post('logout', [CustomerPortal\AuthenticationController::class, 'logout'])->name('postLogout');

    Route::middleware(['userHasRole:client', 'web'])->group(function () {
        Route::get('questionnaire', [QuestionnaireController::class, 'index'])->name('questionnaire');
        Route::get('announcements', [Controllers\ClientAnnouncementController::class, 'index']);
        Route::get('messages', [Controllers\ClientMessageController::class, 'index']);
    });

});

// customer portal routes
Route::prefix('portal')->group(function () {

    Route::middleware(['userHasRole:admin', 'web'])->group(function () {

        //Route::get('dashboard', [PortalController::class, 'dashboard'])->name('portal.dashboard');

        Route::resource('clients', ClientController::class)->only([
            'index', 'show', 'create', 'edit'
        ]);

        Route::get('announcements', [Controllers\AdminAnnouncementController::class, 'index']);
        Route::get('messages', [Controllers\AdminMessageController::class, 'index']);
    });

});

