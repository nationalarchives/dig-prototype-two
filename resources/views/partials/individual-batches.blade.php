<li class="list-group-item">
    <a href="/batches/{{$batch->id}}">{{ $batch->name }}</a> <span class="label label-{{ ($batch->metadataHasBeenUploaded()) ? 'success' : 'default' }} pull-right">{{ $batch->transferStatus() }}</span>
</li>