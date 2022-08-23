<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroySocialLinkRequest;
use App\Http\Requests\StoreSocialLinkRequest;
use App\Http\Requests\UpdateSocialLinkRequest;
use App\Models\SocialLink;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SocialLinksController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('social_link_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $socialLinks = SocialLink::all();

        return view('admin.socialLinks.index', compact('socialLinks'));
    }

    public function create()
    {
        abort_if(Gate::denies('social_link_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.socialLinks.create');
    }

    public function store(StoreSocialLinkRequest $request)
    {
        $socialLink = SocialLink::create($request->all());

        return redirect()->route('admin.social-links.index');
    }

    public function edit(SocialLink $socialLink)
    {
        abort_if(Gate::denies('social_link_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.socialLinks.edit', compact('socialLink'));
    }

    public function update(UpdateSocialLinkRequest $request, SocialLink $socialLink)
    {
        $socialLink->update($request->all());

        return redirect()->route('admin.social-links.index');
    }

    public function show(SocialLink $socialLink)
    {
        abort_if(Gate::denies('social_link_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.socialLinks.show', compact('socialLink'));
    }

    public function destroy(SocialLink $socialLink)
    {
        abort_if(Gate::denies('social_link_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $socialLink->delete();

        return back();
    }

    public function massDestroy(MassDestroySocialLinkRequest $request)
    {
        SocialLink::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
