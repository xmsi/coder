<div x-data="{blogNews: []}" x-init="axios.get('https://taraqqiyotngo.uz/api/v1/blog-news?lang={{ app()->getLocale() }}&limit=3').then(response => blogNews = response.data);">
<template x-for="mynew in blogNews">
    <div class="card mb-4">
        <div class="card-header text-muted" x-text="mynew.date">
        </div>
        <div class="card-body">
            <div class="imgwrap"><img x-bind:src="mynew.image" class="card-img-top"></div>
            <h5 class="card-title" x-text="mynew.title"></h5>
            <p class="card-text" x-html="mynew.description"></p>
            <template x-if="mynew.link"><a x-bind:href="mynew.link" class="btn btn-primary">{{ __('Подробнее') }}</a></template>
        </div>
    </div>
</template>
</div>