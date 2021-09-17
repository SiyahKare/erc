<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ProposalRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

class ProposalCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        CRUD::setModel(\App\Models\Proposal::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/proposal');
        CRUD::setEntityNameStrings('teklif', 'teklifler');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        // CRUD::setFromDb(); // columns
        CRUD::addColumn(['name' => 'client', 'label' => "Müşteri"]);
        CRUD::addColumn(['name' => 'date']);
        CRUD::addColumn(['name' => 'dueto']);
        CRUD::addColumn(['name' => 'currency']);
        CRUD::addColumn(['name' => 'conditions']);
        CRUD::addColumn(['name' => 'service']);

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']);
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(ProposalRequest::class);

        // CRUD::setFromDb(); // fields
        $this->crud->addField(['label' => "Açıklama", 'type' => "text", 'name' => 'name']);

        $this->crud->addField([   // 1-n relationship
            'label'       => "Müşteri", // Table column heading
            'type'        => "select2",
            'name'        => 'contact_id', // the column that contains the ID of that connected entity
            'entity'      => 'contact', // the method that defines the relationship in your Model
            'attribute'   => "name", // foreign key attribute that is shown to user
            // 'data_source' => url("/api/product"), // url to controller search function (with /{id} should return model)

            // also optional
            'options'   => (function ($query) {
                return $query->orderBy('name', 'ASC')->where('contact_type', 'person')->get();
            }), // force the related options to be a custom query, instead of all(); you can use this to filter the results show in the select
            // OPTIONAL
            // 'delay' => 500, // the minimum amount of time between ajax requests when searching in the field
            'placeholder'             => "Müşteri Seçiniz", // placeholder for the select
            'minimum_input_length'    => 2, // minimum characters to type before querying results
            'model'                   => "App\Models\Contact", // foreign key model
            // 'dependencies'            => ['category'], // when a dependency changes, this select2 is reset to null
            // 'method'                  => 'GET', // optional - HTTP method to use for the AJAX call (GET, POST)
            // 'include_all_form_fields' => false, // optional - only send the current field through AJAX (for a smaller payload if you're not using multiple chained select2s)
        ]);


        $this->crud->addField([   // date_picker
            'name'  => 'date',
            'type'  => 'date_picker',
            'label' => 'Düzenleme Tarihi',
            'wrapperAttributes' => ['class' => 'form-group col-md-6'],

            // optional:
            'date_picker_options' => [
                'todayBtn' => 'linked',
                'format'   => 'dd-mm-yyyy',
                'language' => 'tr'
            ],
        ]);

        $this->crud->addField([   // date_picker
            'name'  => 'dueto',
            'type'  => 'date_picker',
            'label' => 'Geçerlilik Tarihi',
            'wrapperAttributes' => ['class' => 'form-group col-md-6'],

            // optional:
            'date_picker_options' => [
                'todayBtn' => 'linked',
                'format'   => 'dd-mm-yyyy',
                'language' => 'tr'
            ],
        ]);

        $this->crud->addField(['label' => "Koşullar", 'type' => "text", 'name' => 'conditions']);

        $this->crud->addField([   // Table
            'name'            => 'service',
            'label'           => 'Hizmet / Ürün',
            'type'            => 'table',
            'entity_singular' => 'Ürün', // used on the "Add X" button
            'columns'         => [
                'product'  => 'Ürün',
                'amount'  => 'Adet',
                'price' => 'Fiyat'
            ],
            'max' => 10, // maximum rows allowed in the table
            'min' => 1, // minimum rows allowed in the table
        ]);

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number']));
         */
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
