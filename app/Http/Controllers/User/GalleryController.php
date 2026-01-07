<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Service\User\Gallery\ListService;

class GalleryController extends Controller
{
    protected $listService;

    public function __construct(ListService $listService)
    {
        $this->listService = $listService;
    }

    /**
     * Display the gallery page
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Get all galleries from service
        $galleries = $this->listService->handle();

        return view('user.image_gallery', compact('galleries'));
    }
}
