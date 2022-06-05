@extends('backend.masterLayout.admin-master')

@section('title')
    Add Archive
@endsection

{{-- menu active start --}}
@section('roleAndPermission', 'menu-open')
@section('roleAndPermissionActive', 'active')
@section('permissions', 'active')
{{-- menu active end --}}
@section('maincontant')
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Permissons List</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 10%">Serial</th>
                                <th>Permissons Name</th>
                                <th style="width: 20%">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @php
                                $serial = ($permissions->currentpage() - 1) * $permissions->perpage() + 1;
                            @endphp
                            @foreach ($permissions as $permission)
                                <tr>
                                    <td>{{ $serial++ }}</td>
                                    <td>{{ $permission->name }}</td>
                                    <td>
                                        <button class="btn btn-success" data-toggle="modal"
                                            data-target="#editRole{{ $permission->id }}"><i
                                                class="fas fa-edit"></i></button>
                                    </td>
                                </tr>

                                {{-- modal edit --}}
                                <div class="modal fade" id="editRole{{ $permission->id }}">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Create Role</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">

                                                <!-- form start -->
                                                <form role="form" action="{{ route('updateRole') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{ $permission->id }}">
                                                    <div class="card-body">
                                                        <div class="form-group">
                                                            <label for="name">Name</label>
                                                            <input type="text"
                                                                class="form-control @error('name') is-invalid @enderror"
                                                                name="name" id="roleName"
                                                                placeholder="Ex: Admin, Moderator..."
                                                                value="{{ $permission->name }}">
                                                        </div>

                                                        @error('name')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <!-- /.card-body -->
                                                    <div class="card-footer">
                                                        <button type="submit"
                                                            class="btn btn-primary btn-block">Submit</button>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default"
                                                    data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Create Permission</h3>
                </div>
                <div class="card-body">
                    <!-- form start -->
                    <form role="form" action="{{ route('createPermission') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            @if (count($parents) > 0)
                                <div class="form-group">
                                    <label for="parent_id" class="col-form-label text-md-end">Parent Name</label>
                                    <select class="form-control select2 select2-primary" id="parent_id" name="parent_id"
                                        data-dropdown-css-class="select2-primary" style="width: 100%;">
                                        <option selected="selected" value="">Select Parent Name</option>
                                        @foreach ($parents as $parent)
                                            <option value="{{ $parent->id }}">{{ $parent->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            @endif

                            <div class="form-group">
                                <label for="name">Module Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                    placeholder="Ex: create-user, edit-user, delete-user...">
                            </div>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script type="text/javascript">
        $(function() {
            $("#createRole").on("hidden.bs.modal", function(e) {
                $("#roleName").val("");
            });
        });
    </script>
    <script type="text/javascript">
        $.fn.extend({
            treed: function(o) {

                var openedClass = 'glyphicon-minus-sign';
                var closedClass = 'glyphicon-plus-sign';

                if (typeof o != 'undefined') {
                    if (typeof o.openedClass != 'undefined') {
                        openedClass = o.openedClass;
                    }
                    if (typeof o.closedClass != 'undefined') {
                        closedClass = o.closedClass;
                    }
                };

                /* initialize each of the top levels */
                var tree = $(this);
                tree.addClass("tree");
                tree.find('li').has("ul").each(function() {
                    var branch = $(this);
                    branch.prepend("");
                    branch.addClass('branch');
                    branch.on('click', function(e) {
                        if (this == e.target) {
                            var icon = $(this).children('i:first');
                            icon.toggleClass(openedClass + " " + closedClass);
                            $(this).children().children().toggle();
                        }
                    })
                    branch.children().children().toggle();
                });
                /* fire event from the dynamically added icon */
                tree.find('.branch .indicator').each(function() {
                    $(this).on('click', function() {
                        $(this).closest('li').click();
                    });
                });
                /* fire event to open branch if the li contains an anchor instead of text */
                tree.find('.branch>a').each(function() {
                    $(this).on('click', function(e) {
                        $(this).closest('li').click();
                        e.preventDefault();
                    });
                });
                /* fire event to open branch if the li contains a button instead of text */
                tree.find('.branch>button').each(function() {
                    $(this).on('click', function(e) {
                        $(this).closest('li').click();
                        e.preventDefault();
                    });
                });
            }
        });
        /* Initialization of treeviews */
        $('#tree1').treed();
    </script>

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
