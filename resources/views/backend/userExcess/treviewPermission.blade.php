{{-- <ul>
    @foreach ($childs as $child)
        <li>
            {{ $child->name }}
            @if (count($child->childs))
                @include('backend.userExcess.treviewPermission', [
                    'childs' => $child->childs,
                ])
            @endif
        </li>
    @endforeach
</ul> --}}

<ul>

    @foreach ($childs as $child)
        <li>
            <input type="checkbox" id="tall-1" name="permission[]" value="{{ $child->id }}">
            <label for="tall-1" class="custom-unchecked">{{ $child->name }}</label>
            @if (count($child->childs))
                @include('backend.userExcess.treviewPermission', [
                    'childs' => $child->childs,
                ])
            @endif
        </li>
    @endforeach

</ul>
