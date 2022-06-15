@extends('layouts.backend_master', ['page_title'=>'Contacts', 'breadcrumb_title'=>'Contacts'])

@section('user_styles')
    
@endsection

@section('content')
<div class="table-responsive">
<table class="table table-hover table-bordered" id="contactsTable">
    <thead>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Message</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($contacts as $contact)
    <tr>
        <td>{{$contact->full_name ?? ''}}</td>
        <td>{{$contact->email ?? ''}}</td>
        <td>{!! $contact->message ?? '' !!}</td>
        <td>
            <button class="btn btn-sm btn-success contact-reply-btn" data-id={{$contact->id}}>Reply</button>
            <button class="btn btn-sm btn-danger contact-delete-btn" data-id={{$contact->id}}>Delete</button>
        </td>
    </tr>
    @endforeach
    
    </tbody>
</table>
</div>
@endsection

@section('user_scripts')
    <script type="text/javascript" src="{{asset('backend')}}/js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="{{asset('backend')}}/js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#contactsTable').DataTable();</script>

    <script>
        $(document).ready(function () {
            $(document).on('click', '.contact-delete-btn', function () {
                var id = $(this).data('id');
                alert(id);
            });

            $(document).on('click', '.contact-reply-btn', function () {
                var id = $(this).data('id');
                alert(id);
            })
        });
    </script>
@endsection