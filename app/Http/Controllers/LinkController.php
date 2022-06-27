<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLinkRequest;
use App\Http\Requests\UpdateLinkRequest;
use App\Models\Link;

class LinkController extends Controller
{

    public function followLink(string $token)
    {
        $link = Link::where('token', $token)->first();

        if (!$link) return view('404');
        if ($link->ttl < strtotime("now") || ($link->redirectLimit && $link->redirectLimit <= $link->redirectCounter)) {

            return view('404');
        }
        $link->redirectCounter++;
        $link->save();
        return redirect($link->url);

    }


    public function create()
    {
        return view('form');
    }


    public function store(StoreLinkRequest $request)
    {
        $data = [
            'url' => $request->get('link'),
            'ttl' => (($request->get('hour') + $request->get('minute')) * 60) + strtotime("now"),
            'redirectLimit' => $request->get('limit'),
            'token' => bin2hex(random_bytes(8)),
        ];
        $link = Link::create($data);
        return view('link', compact('link'));
    }

}
