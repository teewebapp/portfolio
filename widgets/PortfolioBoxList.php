<?php

namespace Tee\Portfolio\Widgets;

use View, Config;
use Tee\Page\Models\PageCategory;


class PortfolioBoxList {

    public function register(array $options)
    {
        $category = PageCategory::where('type', '=', PageCategory::PORTFOLIO)->first();
        $pages = $category->localizedPages()->get();
        return View::make(
            'portfolio::widgets.portfolioBoxList.list',
            compact('pages', 'options')
        );
    }

} 
