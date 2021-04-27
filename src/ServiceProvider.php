<?php

namespace Gioppy\StatamicXmlsitemap;

use Illuminate\Support\Facades\Log;
use Statamic\Providers\AddonServiceProvider;

class ServiceProvider extends AddonServiceProvider {
  
  protected $routes = [
    'web' => __DIR__ . '/../routes/web.php'
  ];

  public function boot() {
    parent::boot();

    $this->publishes([__DIR__ . '/../resources/fieldsets/xmlsitemap.yaml' => resource_path('fieldsets/xmlsitemap.yaml')]);

    $this->loadViewsFrom(__DIR__ . '/../resources/views', 'xmlsitemap');
  }
}
