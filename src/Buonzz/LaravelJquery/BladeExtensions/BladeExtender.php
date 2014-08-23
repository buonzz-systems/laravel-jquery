<?php namespace Buonzz\LaravelJquery\BladeExtensions;

use Illuminate\Foundation\Application;
use Illuminate\View\Compilers\BladeCompiler as Compiler;

class BladeExtender
{

    public static function attach(Application $app)
    {
        $blade = $app['view']->getEngineResolver()->resolve('blade')->getCompiler();
        $class = new static;
        foreach(get_class_methods($class) as $method)
        {
            if($method == 'attach') continue;

            $blade->extend(function($value) use ($app, $class, $blade, $method)
            {
                return $class->$method($value, $app, $blade);
            });
        }
    }  

    public function addjQueryTag($value, Application $app, Compiler $blade)
    {
        $matcher = $blade->createPlainMatcher('jquery_js_tag');
        return preg_replace($matcher,'$1\'<script type="text/javascript" src="packages/buonzz/laravel-jquery/jquery-2.1.1.min.js"></script>\'$2', $value);
    }       
}