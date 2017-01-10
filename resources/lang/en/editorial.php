<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Editorial for Digital Interface for Government application
    |--------------------------------------------------------------------------
    |
    | The following language lines should be used for all content that is not
    | stored in the database or application configuration
    |
    */
    'progress_bar' => [
        'metadata_uploaded' => 'Metadata CSV uploaded',
        'metadata_validated' => 'Metadata validated',
        'transfer_initiated' => 'Transfer initiated',
        'transferred' => 'Batch transferred'
    ],
    'collections' => [
        'heading' => ':name collections',
        'description' => ' The :collection_number registered collections for :name are shown below',
        'breadcrumb_active' => 'Collections',
        'create' => [
            'breadcrumb_active' => 'Create a new collection',
            'title' => 'Create collection',
            'reference' => 'Collection reference',
            'name' => 'Collection name',
            'submit_button' => 'Create collection'
        ],
        'store' => [
            'success_message' => 'Collection :reference created successfully'
        ]
    ],
    'series' => [
        'type' => 'Series type: :type',
        'preamble' => 'This page provides an opportunity to view a summary of the uploaded metadata for the complete series and view transfer batches that have been added to the series so far.',
        'summary_heading' => 'Summary of uploaded metadata',
        'name' => 'Name',
        'reference' => 'Reference',
        'description' => 'Description',
        'parent_collection' => 'Parent collection',
        'transferring_department' => 'Transferring department',
        'create_batch' => 'Add a new batch to :series',
        'batches' => [
            'heading' => 'Batches within series :series'
        ]
    ],
    'batches' => [
        'show' => [
            'records_heading' => 'Records relating to :batch',
            'schema_heading' => 'Schema for :batch',
            'metadata_uploaded' => 'Uploaded metadata for :batch',
            'metadata_upload' => 'Upload metadata for :batch',
            'proceed_to_transfer' => 'View recommended transfer options for :batch',
            'begin_transfer' => 'Begin transfer of :batch'
        ],
        'upload' => [
            'label' => 'Upload metadata'
        ],
        'upload_metadata' => [
            'success_message' => 'Successfully uploaded metadata for :batch'
        ],
        'create' => [
            'title' => 'Create batch',
            'name' => 'Batch name',
            'type' => 'Batch type',
            'submit_button' => 'Create batch'
        ],
        'store' => [
            'success_message' => 'Batch :name created successfully'
        ]
    ],
    'records' => [
        'reference' => 'Reference',
        'title' => 'Title',
        'description' => 'Description',
        'held_by' => 'Held by',
        'legal_status' => 'Legal status',
        'date' => 'Date',
        'closure_status_description' => 'Closure status',
        'document_is_open' => 'Document',
        'description_is_open' => 'Description',
        'records_relating_to' => 'Records relating to',
        'note' => 'Note',
        'arrangement' => 'Arrangement',
        'physical_description' => 'Physical description',
        'access_conditions' => 'Access conditions',
        'foi_decision_date' => 'FOI decision date',
        'exemption' => 'Exemption'
    ],
    'departments' => 'Departments',
    'navigation' => [
        'heading' => 'Dashboard',
        'links' => [
            [
                'route' => 'collections.index',
                'text' => 'My collections'
            ]
        ]
    ],
    'messages' => [
        'heading' => 'Messages',
        'link_text' => 'Message centre'
    ],
    'guidance' => [
        'heading' => 'Guidance',
        'toggle_text' => 'Browse guidance'
    ],
    'static_pages' => [
        'metadata_upload' => [
            'heading' => 'Review uploaded metadata for :batch',
            'introductory_text' => 'This page provides an opportunity to view the uploaded metadata and compare it to that provided in the DROID report'
        ],
        'begin_transfer' => [
            'heading' => 'Digital transfer'
        ]
    ]

];
