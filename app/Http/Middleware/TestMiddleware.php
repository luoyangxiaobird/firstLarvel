<?php

namespace App\Http\Middleware;

use Closure;

class TestMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //记录请求的路径path
        //[2019-10-10 10:10:10]127.0.0.1------/admin/user/index
        $path=$request->path();
        $str='['.date('Y-m-d H:i:s').']'.$request->ip().'------'.$request->path();
        file_put_contents('request.log',$str."\r\n",FILE_APPEND);//内容写入日志文件
        return $next($request);
    }
}
