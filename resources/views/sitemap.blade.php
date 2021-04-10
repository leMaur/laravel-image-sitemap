<?= '<'.'?'.'xml version="1.0" encoding="UTF-8"?>'."\n"; ?>
@if($hasImages ?? false)
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xhtml="http://www.w3.org/1999/xhtml" xmlns:image="http://www.google.com/schemas/sitemap-image/1.1">
@else
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xhtml="http://www.w3.org/1999/xhtml">
@endif
@foreach($tags as $tag)
    @include('image-sitemap::' . $tag->getType())
@endforeach
</urlset>
