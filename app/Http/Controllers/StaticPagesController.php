<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Batch;

class StaticPagesController extends Controller
{
    public function metadata_uploaded(Batch $batch)
    {
        flash(trans('editorial.batches.upload_metadata.success_message', ['batch' => $batch->name]), 'success');

        return view('static_pages.metadata_uploaded', compact('batch'));
    }

    public function metadata_review(Batch $batch)
    {
        return view('static_pages.metadata_review', compact('batch'));

    }

	public function guidance() {
		return view('static_pages.guidance');
    }

	public function introduction() {
		return view('static_pages.introduction');
	}
}
