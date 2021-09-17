<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ProductRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

class ProductCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        CRUD::setModel(\App\Models\Product::class);
        CRUD::setRoute(config('backpack.base.route_prefix').'/product');
        CRUD::setEntityNameStrings('Ürün', 'Ürünler');
    }

    protected function setupListOperation()
    {
        CRUD::addColumn(['name' => 'product_id', 'label' => 'Ürün ID']);
        CRUD::addColumn(['name' => 'code', 'label' => 'Ürün Kodu']);
        CRUD::addColumn(['name' => 'name', 'label' => 'Ürün Adı']);
        CRUD::addColumn(['name' => 'list_price', 'label' => 'Liste Fiyatı', 'type'  => 'number']);
        CRUD::addColumn(['name' => 'stock_count', 'label' => 'Stok Adedi', 'type'  => 'number']);
    }

    protected function setupCreateOperation()
    {
        CRUD::setValidation(ProductRequest::class);

        CRUD::addField([ // Text
            'name'  => 'name',
            'label' => 'Ürün Adı',
            'type'  => 'text',
        ]);

        CRUD::addField([ // Text
            'name'  => 'product_id',
            'label' => 'Ürün ID',
            'type'  => 'text',
            'readonly'=>'readonly',
            'wrapperAttributes' => ['class' => 'form-group col-md-3'],
        ]);

        CRUD::addField([ // Text
            'name'  => 'code',
            'label' => 'Ürün Kodu',
            'type'  => 'text',
            'wrapperAttributes' => ['class' => 'form-group col-md-3'] // extra HTML attributes for the field wrapper - mostly for resizing fields
        ]);

        CRUD::addField([ // Text
            'name'  => 'vat_rate',
            'label' => 'KDV Oranı',
            'type'  => 'text',
            'wrapperAttributes' => ['class' => 'form-group col-md-3'] // extra HTML attributes for the field wrapper - mostly for resizing fields
        ]);

        CRUD::addField([ // Text
            'name'  => 'unit',
            'label' => 'Birim',
            'type'  => 'text',
            'wrapperAttributes' => ['class' => 'form-group col-md-3'] // extra HTML attributes for the field wrapper - mostly for resizing fields
        ]);

        CRUD::addField([   // Number
            'name'  => 'list_price',
            'label' => 'Liste Fiyatı',
            'type'  => 'number',
            // optionals
            // 'attributes' => ["step" => "any"], // allow decimals
            // 'prefix' => '$',
            'suffix' => '.00',
            'wrapperAttributes' => ['class' => 'form-group col-md-4'] // extra HTML attributes for the field wrapper - mostly for resizing fields
        ]);

        CRUD::addField([   // Number
            'name'  => 'list_price_in_trl',
            'label' => 'Liste Fiyatı TL',
            'type'  => 'number',
            // optionals
            // 'attributes' => ["step" => "any"], // allow decimals
            'prefix' => '₺',
            'suffix' => '.00',
            'wrapperAttributes' => ['class' => 'form-group col-md-4'] // extra HTML attributes for the field wrapper - mostly for resizing fields
        ]);

        CRUD::addField([ // Text
            'name'  => 'currency',
            'label' => 'Döviz Cinsi',
            'type'  => 'text',
            'wrapperAttributes' => ['class' => 'form-group col-md-4'] // extra HTML attributes for the field wrapper - mostly for resizing fields
        ]);

        CRUD::addField([   // Number
            'name'  => 'buying_price',
            'label' => 'Alış Fiyatı',
            'type'  => 'number',
            // optionals
            // 'attributes' => ["step" => "any"], // allow decimals
            // 'prefix' => '$',
            'suffix' => '.00',
            'wrapperAttributes' => ['class' => 'form-group col-md-4'] // extra HTML attributes for the field wrapper - mostly for resizing fields
        ]);

        CRUD::addField([   // Number
            'name'  => 'buying_price_in_trl',
            'label' => 'Alış Fiyatı TL',
            'type'  => 'number',
            // optionals
            // 'attributes' => ["step" => "any"], // allow decimals
            'prefix' => '₺',
            'suffix' => '.00',
            'wrapperAttributes' => ['class' => 'form-group col-md-4'] // extra HTML attributes for the field wrapper - mostly for resizing fields
        ]);

        CRUD::addField([ // Text
            'name'  => 'buying_currency',
            'label' => 'Alış Döviz Cinsi',
            'type'  => 'text',
            'wrapperAttributes' => ['class' => 'form-group col-md-4'] // extra HTML attributes for the field wrapper - mostly for resizing fields
        ]);

        CRUD::addField([   // Number
            'name'  => 'stock_count',
            'label' => 'Stok',
            'type'  => 'number',
            'wrapperAttributes' => ['class' => 'form-group col-md-4'] // extra HTML attributes for the field wrapper - mostly for resizing fields
        ]);

        CRUD::addField([   // Number
            'name'  => 'initial_stock_count',
            'label' => 'İlk Stok',
            'type'  => 'number',
            'wrapperAttributes' => ['class' => 'form-group col-md-4'] // extra HTML attributes for the field wrapper - mostly for resizing fields
        ]);

        CRUD::addField([   // Number
            'name'  => 'critical_stock_count',
            'label' => 'Kritik Stok',
            'type'  => 'number',
            'wrapperAttributes' => ['class' => 'form-group col-md-4'] // extra HTML attributes for the field wrapper - mostly for resizing fields
        ]);



        $this->crud->setOperationSetting('contentClass', 'col-md-12');
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
