<table class="table table-striped dataex-html5-selectors">
    <thead>
    <tr>
        <th scope="col">{{__('#') }}</th>
        <th scope="col">{{__('back.Full name')}}</th>
        <th scope="col">{{__('back.Email')}}</th>
        <th scope="col">{{__('back.role')}}</th>
        <th scope="col">{{__('back.Options')}}</th>
    </thead>
    <tbody>
    @foreach($users as $user)
        @include('dashboard.users.partials._table_raw')
    @endforeach
    </tbody>
    <tfoot>
    <tr>
        <th scope="col">{{__('#') }}</th>
         <th scope="col">{{__('back.Full name')}}</th>
        <th scope="col">{{__('back.Email')}}</th>
        <th scope="col">{{__('back.role')}}</th>
        <th scope="col">{{__('back.Options')}}</th>
    </tr>
    </tfoot>
</table>

