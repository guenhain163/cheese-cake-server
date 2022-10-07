<?php

namespace App\Http\Middleware;

use Closure;

class IncludeTransformer
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next, ...$includes)
    {
        $paramIncludes = config('repository.fractal.params.include', 'include');

        $request[$paramIncludes] = empty($request[$paramIncludes]) ? implode(",", $includes) :
            $request[$paramIncludes].','.implode(",", $includes);

        return $next($request);
    }
}
