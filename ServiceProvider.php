<?php

namespace Tee\Portfolio;

use Tee\Portfolio\Widgets\PortfolioBoxList;
use Tee\System\Widget;
use App;

class ServiceProvider extends \Illuminate\Support\ServiceProvider {

    public function register()
    {
        // registra os widgets
        Widget::register(
            'portfolioBoxList',
            __NAMESPACE__.'\\Widgets\\PortfolioBoxList'
        );
    }
}
