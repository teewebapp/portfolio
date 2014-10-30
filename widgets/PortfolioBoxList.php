<?php

namespace Tee\Portfolio\Widgets;

use View, Config;
use Tee\Page\Models\PageCategory;


class PortfolioBoxList {

    public function register(array $options)
    {
        $category = PageCategory::where('type', '=', PageCategory::PORTFOLIO)->first();
        if(moduleEnabled('i18n'))
        {
            $pages = $category->pages()->where(function($query) {
                $query->where('language', '=', Config::get('app.locale'))
                    ->orWhere('language', '=', '')
                    ->orWhereNull('language');
            })->get();
        }
        else
        {
            $pages = $category->pages;
        }
        return View::make(
            'portfolio::widgets.portfolioBoxList.list',
            compact('pages', 'options')
        );
    }

} 