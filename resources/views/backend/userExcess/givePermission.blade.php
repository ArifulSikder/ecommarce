@extends('backend.masterLayout.admin-master')

@section('title')
    Add Archive
@endsection

{{-- menu active start --}}
@section('roleAndPermission', 'menu-open')
@section('roleAndPermissionActive', 'active')
@section('givePermission', 'active')
{{-- menu active end --}}
@section('maincontant')
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Permissons List</h3>
                </div>
                <div class="card-body">
                    <div id="page-wrap">
                        <form action="{{ route('givePermission') }}" method="POST">
                            @csrf
                            <div class="form-group col-md-6">
                                <label for="role_id" class="col-form-label text-md-end">User Role</label>
                                <select class="form-control select2 select2-primary" id="role_id" name="role_id"
                                    data-dropdown-css-class="select2-primary" style="width: 100%;" required>
                                    <option selected="selected" value="">Select User Role </option>
                                    @foreach ($roles as $role)
                                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <h4 class="px-2">Modules List</h4>
                            <ul class="treeview">
                                @foreach ($treviewParents as $parent)
                                    <li>
                                        <input type="checkbox" name="permission[]" id="tall"
                                            value="{{ $parent->id }}">
                                        <label for="tall" class="custom-unchecked">
                                            {{ $parent->name }}</label>
                                        @if ($parent->childs != null)
                                            @if (count($parent->childs))
                                                @include('backend.userExcess.treviewPermission', [
                                                    'childs' => $parent->childs,
                                                ])
                                            @endif
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                            <button class="btn btn-success">
                                Save
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Create Permission</h3>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(function() {

            $('input[type="checkbox"]').change(checkboxChanged);

            function checkboxChanged() {
                var $this = $(this),
                    checked = $this.prop("checked"),
                    container = $this.parent(),
                    siblings = container.siblings();

                container.find('input[type="checkbox"]')
                    .prop({
                        indeterminate: false,
                        checked: checked
                    })
                    .siblings('label')
                    .removeClass('custom-checked custom-unchecked custom-indeterminate')
                    .addClass(checked ? 'custom-checked' : 'custom-unchecked');

                checkSiblings(container, checked);
            }

            function checkSiblings($el, checked) {
                var parent = $el.parent().parent(),
                    all = true,
                    indeterminate = false;

                $el.siblings().each(function() {
                    return all = ($(this).children('input[type="checkbox"]').prop("checked") === checked);
                });

                if (all && checked) {
                    parent.children('input[type="checkbox"]')
                        .prop({
                            indeterminate: false,
                            checked: checked
                        })
                        .siblings('label')
                        .removeClass('custom-checked custom-unchecked custom-indeterminate')
                        .addClass(checked ? 'custom-checked' : 'custom-unchecked');

                    checkSiblings(parent, checked);
                } else if (all && !checked) {
                    indeterminate = parent.find('input[type="checkbox"]:checked').length > 0;

                    parent.children('input[type="checkbox"]')
                        .prop("checked", checked)
                        .prop("indeterminate", indeterminate)
                        .siblings('label')
                        .removeClass('custom-checked custom-unchecked custom-indeterminate')
                        .addClass(indeterminate ? 'custom-indeterminate' : (checked ? 'custom-checked' :
                            'custom-unchecked'));

                    checkSiblings(parent, checked);
                } else {
                    $el.parents("li").children('input[type="checkbox"]')
                        .prop({
                            indeterminate: true,
                            checked: false
                        })
                        .siblings('label')
                        .removeClass('custom-checked custom-unchecked custom-indeterminate')
                        .addClass('custom-indeterminate');
                }
            }
        });
    </script>
@endsection
