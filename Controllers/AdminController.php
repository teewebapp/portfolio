<?php

namespace Tee\Portfolio\Controllers;

use Tee\Page\Models\PageCategory;

use Tee\System\Breadcrumbs;

class AdminController extends \Tee\Page\Controllers\AdminController {
    public $resourceTitle = 'Portfólio';
    public $resourceName = 'portfolio';
    //public $modelClass = 'Tee\\Page\\Models\\Page';
    public $moduleName = 'page';

    public function getCategory() {
        return PageCategory::where('type', '=', PageCategory::PORTFOLIO)->first();
    }
}
