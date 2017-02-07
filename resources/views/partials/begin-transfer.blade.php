<div class="row">
    <div class="col-md-12">
        <div class="panel panel-success">
            <div class="panel-heading">Begin transfer</div>
            <div class="panel-body">
                <p>We recommend a digital transfer for this batch.</p>
                <p><a href="{{ route('batches.begin_transfer', ['batch' => $batch]) }}" class="btn btn-primary">Begin
                        transfer</a></p>

                <p>Alternatively you can choose a physical transfer, provided on hard disk drive. <a href="#"
                                                                                                     id="show-hdd-transfer">Request
                        a hard disk drive from The National Archives</a>.</p>
            </div>
        </div>
    </div>
</div>