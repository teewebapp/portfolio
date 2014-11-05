<?php

namespace Tee\Portfolio\Seeds;

use Tee\Page\Models\PageCategory;
use Seeder, DB, DateTime, Eloquent;

class PageCategoryTableSeeder extends Seeder {

    public function run() {
        Eloquent::unguard();
        PageCategory::create(array(
            'name' => 'Portifólio',
            'type' => PageCategory::PORTFOLIO,
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
    }
    
}