<?php

namespace App\Repositories;

use App\Models\Contact;

class ContactRepository
{
    public function getAll()
    {
        $contact = Contact::orderBy('name')
                    ->where('active',1)
                    ->where('number','LIKE','+%')
                    ->get()
                    ->map(function($contact){
                        return [
                            'contact_id' => $contact->id,
                            'name' => $contact->name,
                            'number' => $contact->number,
                            'active' => $contact->active ? 'Active' : 'Inactive'
                        ];
                    });
                    return $contact;
    }

    public function Active()
    {
        $contact = Contact::where('active','1')->get()
        ->map(function($contact){
            return [
                'contact_id' => $contact->id,
                'name' => $contact->name,
                'number' => $contact->number,
                'status' => $contact->active ? "Aktif":"Nonaktif"
            ];
        });
        return $contact;
    }

    public function findById($id)
    {
        $contact = Contact::where('id',$id)->get();
        return $contact;
    }

    public function findByName($name)
    {
        $contact = Contact::where('name','LIKE', $name)->get();
        return $contact;
    }
}
