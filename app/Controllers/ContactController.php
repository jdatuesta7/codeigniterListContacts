<?php

namespace App\Controllers;

use App\Models\ContactModel;
use CodeIgniter\Controller;

class ContactController extends Controller
{
    public function index(){
        $contacts = new ContactModel();
        $contactsList['contacts'] = $contacts->findAll();
        // $data = [
        //     "contacts" => $contactsList,
        //     "mensaje" => $mensaje
        //     ];

        //$mensaje = session('mensaje');

        return view('contact', $contactsList);
    }

    public function create(){
        return view('createContact');
    }

    public function store(){
        $contact = [
            'fullname'=> $this->request->getPost('nombre'),
            'phone' => $this->request->getPost('telefono'),
            'email' => $this->request->getPost('email')
        ];
        // print_r($contact);
        $newContact = new ContactModel();
        $newContact->insert($contact);

        $contacts = new ContactModel();
        $contactsList['contacts'] = $contacts->findAll();

        // $session->setFlashdata('msg', 'Contacto Creado exitosamente');
        // return redirect()->to('/contact')->with('msg','Contacto Creado exitosamente');
        return view('contact', $contactsList);
    }

    public function delete($id){
        $DeleteContact = new ContactModel();
        $DeleteContact->where('id',$id)->delete($id);
        
        return $this->response->redirect(base_url('/contact'));
    }

    public function edit($id){
        $EditContact = new ContactModel();
        $contact['contacto'] = $EditContact->find($id);
        // $contact['contacto'] = $EditContact->where('id', $id)->first();

        return view('editContact', $contact);
    }

    public function update(){
        $UpdateContact = new ContactModel();

        $contact = [
            'fullname' => $this->request->getPost('nombre'),
            'phone' => $this->request->getPost('telefono'),
            'email' => $this->request->getPost('email')
        ];

        $id = $this->request->getPost('idContact');
        $UpdateContact->update($id, $contact);
        
        return redirect()->to(base_url('/contact'));
        // return $this->response->redirect(base_url('/contact'));
    }
}
