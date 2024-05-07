<?php

namespace App\Services\Api\TheMovieDatabase\Endpoints\Tv;

use App\Services\Api\TheMovieDatabase\Endpoints\BaseEndpoint;
use App\Services\Api\TheMovieDatabase\Entities\Tv\TopRated as TopRatedSerie;
class TopRatedSeries extends BaseEndpoint
{
    public function get()
    {
        return $this->transform(
            $this->service
                ->api
                ->get('/tv/top_rated?language=pt-BR&page=1&')
                ->json('results'),
            TopRatedSerie::class
        );
    }

}
