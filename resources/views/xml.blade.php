<?= '<?xml version="1.0" encoding="UTF-8"?>'."\n" ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
@foreach($entries as $entry)
  <url>
    <loc>{{ $entry['loc'] }}</loc>
    <lastmod>{{ $entry['lastmod'] }}</lastmod>
    <changefreq>{{ $entry['changefreq'] }}</changefreq>
    <priority>{{ $entry['priority'] }}</priority>
  </url>
  @endforeach
</urlset>
