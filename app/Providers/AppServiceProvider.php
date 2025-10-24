<?php

namespace App\Providers;

use App\Models\BulkUpload;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
   public function boot()
{
    View::composer('components.aside', function ($view) {
    $view->with('recentUploads', BulkUpload::latest()->paginate(5));
});

}
}
