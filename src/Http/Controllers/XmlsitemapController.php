<?php

namespace Gioppy\StatamicXmlsitemap\Http\Controllers;

use Carbon\Carbon;
use Statamic\Facades\Entry;
use Statamic\View\View;

class XmlsitemapController {

  /**
   * Show sitemap.xml
   *
   * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
   */
  public function show() {
    $entries = Entry::query()
      ->whereIn('xml_include', [true])
      ->get()
      ->map(function (\Statamic\Entries\Entry $entry) {
        return [
          'loc' => $entry->absoluteUrl(),
          'lastmod' => Carbon::parse($entry->value('updated_at'))->format('Y-m-d'),
          'changefreq' => $entry->value('xml_change_frequency') ?? 'monthly',
          'priority' => $entry->value('xml_priority') ?? 0.5,
        ];
      })
      ->toArray();

    $content = View::make('xmlsitemap::xml')
      ->with(compact('entries'))
      ->render();

    return response($content, 200, ['Content-Type' => 'application/xml']);
  }
}
