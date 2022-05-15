<?php

namespace Wangcong\DcatDistpicker;

//use Dcat\Admin\Extend\ServiceProvider;
use Illuminate\Support\ServiceProvider;
use Dcat\Admin\Admin;
use Dcat\Admin\Form;
use Dcat\Admin\Grid\Filter;


class DcatDistpickerServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        //parent::init();
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'china-distpicker');

        $this->publishes([
            __DIR__ . '/../resources/assets' => public_path('vendor/china-distpicker'),
        ], 'public');

        //加载插件
/*        Admin::booting(function () {
            Form::extend('distpicker', \Wangcong\DcatDistpicker\Form\Distpicker::class);
            Filter::extend('distpicker', \Wangcong\DcatDistpicker\Filter\DistpickerFilter::class);
        });*/
        //

    }

}
