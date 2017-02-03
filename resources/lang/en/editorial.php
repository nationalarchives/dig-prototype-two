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
	'introduction' => [
		'title' => 'Digital Interface for Government',
		'description' => 'This is a prototype of a standardised access point to the Digital Records Infrastructure (DRI). It covers the validation and upload of born digital records only (commonly referred to as \'Gateway 3\').',
	],
    'progress_bar' => [
        'metadata_validated' => 'Metadata CSV validated',
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
        'heading' => ':name series',
        'count_series' => ' Found :series_number series for :name which is listed below.',
        'breadcrumb_active' => 'Series',
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
	    'breadcrumb_active' => 'Batches',
	    'heading' => ':name batches',
	    'count_batches' => ' Found :batches_number batches.',
        'show' => [
            'records_heading' => 'Records relating to :batch',
            'schema_heading' => 'Schema for :batch',
            'metadata_uploaded' => 'Summary of metadata for :batch',
            'metadata_upload' => 'Upload metadata for :batch',
            'proceed_to_transfer' => 'View recommended transfer options for :batch',
            'begin_transfer' => 'Begin transfer of :batch'
        ],
        'upload' => [
            'label' => 'Upload metadata'
        ],
        'upload_metadata' => [
            'success_message' => 'Successfully uploaded metadata for :batch',
            'failure_message' => 'Please select a metadata file for :batch'
        ],
        'create' => [
            'title' => 'Create batch',
            'name' => 'Batch name',
            'type' => 'Batch type',
            'submit_button' => 'Create batch'
        ],
        'store' => [
            'success_message' => 'Batch :name created successfully'
        ],
        'statuses' => [
            'metadata_required' => 'Metadata required',
            'metadata_validated' => 'Metadata CSV validated',
            'files_transferred' => 'Files transferred'
        ],
        'transfer_statuses' => [
            'failure_message' => 'Please select file for :batch',
            'success_message' => 'Successfully uploaded files for :batch'
        ]
    ],
    'records' => [
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
            ],
            [
                'route' => 'series.index',
                'text' => 'My series'
            ],
            [
                'route' => 'batches.index',
                'text' => 'My batches'
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
            'heading' => 'Review summary of metadata for :batch',
            'introductory_text' => 'This page provides an opportunity to view the uploaded metadata and compare it to that provided in the DROID report'
        ],
        'begin_transfer' => [
            'heading' => 'Digital transfer'
        ]
    ]
];
