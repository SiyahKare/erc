<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ContactRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

class ContactCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\InlineCreateOperation;

    public function setup()
    {
        CRUD::setModel(\App\Models\Contact::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/contact');
        CRUD::setEntityNameStrings('Müşteri', 'Müşteriler');
    }

    protected function setupListOperation()
    {
        CRUD::addColumn(['name' => 'name', 'label' => 'İsim']);
        CRUD::addColumn(['name' => 'contact_id', 'label' => 'Müşteri ID']);
        CRUD::addColumn(['name' => 'tax_number', 'label' => 'TC / Vergi No']);
        CRUD::addColumn(['name' => 'phone', 'label' => 'Telefon No']);
        CRUD::addColumn(['name' => 'district', 'label' => 'Bölge']);
        CRUD::addColumn(['name' => 'city', 'label' => 'Şehir']);
    }

    protected function setupCreateOperation()
    {
        CRUD::setValidation(ContactRequest::class);
        CRUD::addField(['name' => 'name', 'label' => 'İsim', 'type'  => 'text']);
        CRUD::addField(['name' => 'contact_id', 'label' => 'Müşteri ID', 'type'  => 'text', 'readonly'=>'readonly']);
        CRUD::addField(['name' => 'tax_number', 'label' => 'TC / Vergi No', 'type'  => 'text', 'wrapperAttributes' => ['class' => 'form-group col-md-3']]);
        CRUD::addField(['name' => 'phone', 'label' => 'Telefon No', 'type'  => 'text', 'wrapperAttributes' => ['class' => 'form-group col-md-3']]);
        CRUD::addField(['name' => 'district', 'label' => 'Bölge', 'type'  => 'text', 'wrapperAttributes' => ['class' => 'form-group col-md-3']]);
        CRUD::addField(['name' => 'city', 'label' => 'Şehir', 'type'  => 'text', 'wrapperAttributes' => ['class' => 'form-group col-md-3']]);


        $this->crud->setOperationSetting('contentClass', 'col-md-12');
    }

    /**
     * Define what happens when the Update operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
