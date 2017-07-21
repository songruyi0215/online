<?php

namespace app\index\controller;

use think\Cache;
use think\response\Json;

class Index
{
    public function index()
    {
        dump(Cache::get('site_index'));
    }
}
