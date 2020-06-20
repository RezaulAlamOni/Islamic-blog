@php
    $og = app('OpenGraph');
    $og = $og::title($data->headline)
                ->type('article')
                ->locale(config('app.locale'))
                ->siteName(config('app.name'))
                ->description(str_limit($data->articles))
                ->url();
@endphp

{!! $og->renderTags() !!}