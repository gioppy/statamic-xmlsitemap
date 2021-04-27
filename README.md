# Statamic XML Sitemap

This is an add-on for Statamic 3. It gives the ability to manage and customize XML Sitemap for search engines!

## How to use

Install with `composer require gioppy/statamic-xmlsitemap`.  After installed, launch the command `php artisan vendor:publish --provider="Gioppy\StatamicXmlsitemap\ServiceProvider"`. Fields on sitemap are managed through fieldsets: the `xmlsitemap.yaml` fieldset is created.

You can insert XML Sitemap directly into a blueprint by selecting the XML Sitemap fieldset. **It is not necessary to set a prefix for the fieldset**.

The sitemap is accessible at `<site>/sitemap.xml`.
