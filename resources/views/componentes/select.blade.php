<div class="form-group">
    <label for="{{$name ?? $label ?? ''}}">
        {{$label  ?? 'New text input $label here'}}
    </label>
    <select class="form-control" name="{{$name  ?? $label ?? ''}}" id="{{$name  ?? $label ?? ''}}">
        @foreach($data as $item)
            <option value="{{$item->id}}">{{$item[$tag]}}</option>
        @endforeach
    </select>
</div>
