@foreach ($upzillas as $upzilla)
    <option value="{{ $upzilla->id}}">{{ $upzilla->name}}</option>
@endforeach
