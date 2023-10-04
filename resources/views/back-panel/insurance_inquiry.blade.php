@extends('back-panel.dashboard')

@section('content')
@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif



<h2>All insurance inquires</h2>
<div>
    <button class="btn btn-success "><a href="/exportInsuranceInquiry" style="color: white">Export</a></button>
</div>

<div class="scrollable-content" style="max-height: 400px; overflow-y: auto;">
    <table class="table table-hover" style="margin-bottom: 0;">
        <thead>
            <tr>
                <th>sn.of</th>
          <th>Customer_Name</th>
            <th>CNIC</th>
            <th>Date_of_Birth</th>
            <th>Father's_Name</th>
            <th>Mobile_Name</th>
            <th>Email</th>
            <th>Gender</th>
            <th>purpose_of_vist</th>
            <th>Adress</th>
            <th>passpport</th>
            <th>Depature_date</th>
            <th>Select_country_travel</th>
            <th>Airline</th>
            <th>Number_of_passengers</th>
            <th>Class</th>
            <th>Price</th>
            <th>Beneficary_name</th>
            <th>Beneficary_relation</th>  
           <th>Beneficary_CNIC</th>
           <th>Beneficary_phone</th>
            <th>Beneficary_adress</th>
            <th>Insurance pakcage</th>
            <th>Action</th>
            
           
        </tr>
        </thead>
        <tbody>
           
            @forelse($details as $detail)
          


            <tr>
                <td>{{ $loop->index + 1 }}</td>

             <td>{{$detail->costomer_name}}</td>
              <td>{{$detail->CNIC}}</td>
              <td>{{$detail->data_of_birth}}</td>
              <td>{{$detail->father_name}}</td>
              <td>{{$detail->Mobile_number}}</td>
              <td>{{$detail->Email}}</td>
              <td>{{$detail->Gender}}</td>
              <td>{{$detail->purppose_of_vist}}</td>
              <td>{{$detail->adress}}</td>
              <td>{{$detail->passport}}</td>
              <td>{{$detail->Depature_date}}</td>
              <td>{{$detail->select_country_travel}}</td>
              <td>{{$detail->airline}}</td>
              <td>{{$detail->number_of_passengers}}</td>
              <td>{{$detail->class}}</td>
              <td>{{$detail->price}}</td>
              <td>{{$detail->beneficiary_name}}</td>
              <td>{{$detail->beneficiary_relation}}</td>
              <td>{{$detail->beneficiary_CNIC}}</td>
              <td>{{$detail->beneficiary_phone}}</td>
              <td>{{$detail->beneficiary_adress}}</td>
          
              <td>{{$detail->travel_plan_for}}</td>
              <td>
                {{-- <a href="insuranceInquiry/{id}/delete" class="btn btn-danger btn-sm">Delete</a>
                 --}}
               

                </td>
                         </tr>
            @empty
            <tr>
                <td colspan="11">No inquires found</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
