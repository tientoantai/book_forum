<?php

namespace App\Http\Middleware;

use Closure;
use App\UploadService\UploadingProvider;

class CreateImage
{
    protected $uploadingProvider;

    public function __construct(UploadingProvider $uploadingProvider)
    {
        $this->uploadingProvider = $uploadingProvider;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $image = $this->uploadingProvider->providerFile($request);

        $request->attributes->add([
            'image'=>asset($image),
        ]);

        return $next($request);
    }
}
