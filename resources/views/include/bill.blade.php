<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Bill') }}
        </h2>
    </x-slot>

    <div class="py-2">
        <div class="max-w-10xl mx-auto sm:px-4 lg:px-4">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-4 text-gray-900">
                   <div class="card">
                    <div class="card-header">
                        <h4>Clients
                            <a href="{{route('admindashboard')}}" class="btn btn-primary float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-sm text-center">
                                <thead class="table-dark">
                                    <tr>
                                        <th>CLIENT_ID</th>
                                        <th>Fullname</th>
                                        <th>March</th>
                                        <th>April</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($billdata as $billdata)
                                        <tr class="text-nowrap">
                                            <td>{{$billdata->client_id}}</td>
                                            <td>{{$billdata->client_fullname}}</td>
                                            <td>{{$billdata->march}}</td>
                                            <td>{{$billdata->april}}</td>
                                            <td>
                                                <a href="{{url('clients/'.$billdata->client_id.'/bill')}}" class="btn btn-success edit mx-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                                                    </svg>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                   </div>
                   

                </div>
            </div>
        </div>
    </div>
</x-app-layout>