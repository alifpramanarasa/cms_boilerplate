<?php


namespace App\Services;

use Illuminate\Database\Eloquent\Model;

use App\Traits\CmsResponse;

class AppService
{
    protected $model;
    protected $guard = null;
    protected $debug;

    use CmsResponse;

    public function __construct(Model $model)
    {
        $this->model     = $model;
        $this->debug    = config('app.debug', false);
    }
}
