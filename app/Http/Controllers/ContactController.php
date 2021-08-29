<?php

namespace App\Http\Controllers;

use App\Repositories\ContactRepository;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    private $contactRepository;

    public function __construct(ContactRepository $contactRepository)
    {
        $this->contactRepository = $contactRepository;
    }
    public function index()
    {
        $contact = $this->contactRepository->Active();
        return $contact;
    }

    public function show($name)
    {
        $contact = $this->contactRepository->findByName($name);
        return $contact;
    }
}
