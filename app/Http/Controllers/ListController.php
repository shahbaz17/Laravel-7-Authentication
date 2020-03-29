<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListController extends Controller
{
    public function show()
    {

       $uefa = [
        '2018-19' => ['winner' => 'Liverpool', 'played' => 'Liverpool V Tottenham Hotspur', 'score' => '2-0'],
        '2017-18' => ['winner' => 'Real Madid', 'played' => 'Real Madrid V Liverpool', 'score' => '3-1'],
        '2016-17' => ['winner' => 'Real Madid', 'played' => 'Real Madrid V Juventus', 'score' => '4-1'],
        '2015-16' => ['winner' => 'Real Madid', 'played' => 'Real Madrid V Athletico Madid', 'score' => '1*-1'],
        '2014-15' => ['winner' => 'Barcelona', 'played' => 'Barcelona V Juventus', 'score' => '3-1'],
        '2013-14' => ['winner' => 'Real Madid', 'played' => 'Real Madrid V Athletico Madid', 'score' => '4-1'],
        '2012-13' => ['winner' => 'Bayern Munich', 'played' => 'Bayern Munich V Borussia Dortmund', 'score' => '4-1'],
        '2011-12' => ['winner' => 'Chelsea', 'played' => 'Chelsea V Bayern Munich', 'score' => '4-1'],
        '2010-11' => ['winner' => 'Barcelona', 'played' => 'Manchester United V Barcelona', 'score' => '4-1'],
        '2009-10' => ['winner' => 'Internazionale', 'played' => 'Bayern Munich V Internazionale', 'score' => '4-1'],
       ];

       return view('welcome')->withUefa($uefa);
    }
}
