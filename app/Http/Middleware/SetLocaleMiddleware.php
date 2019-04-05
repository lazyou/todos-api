<?php

namespace App\Http\Middleware;

use Closure;

/**
 * 全局语言包设置
 * Class SetLocaleMiddleware
 * @package App\Http\Middleware
 */
class SetLocaleMiddleware
{
    /**
     * @param $request
     * @param Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // 语言包选择: 请求里设置的优先级最高, 然后是来自env
        app('translator')->setLocale($request->get('lang', env('APP_LANG', 'en')));

        return $next($request);
    }
}
