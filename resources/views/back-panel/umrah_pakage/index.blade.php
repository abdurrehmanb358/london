
@extends('back-panel.dashboard')

@section('content')
@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<div class="d-flex justify-content-between">
    <a href="/back-panel/umrah_pakage/create" class="btn btn-primary btn-sm rounded">Add New Umrah-Pakage</a>

</div>

<div class="container">
    <h2>All Pakages</h2>
    <table class="table table-hover mt-3">
        <thead>
          <tr>
            <th>Sno.</th>
            <th>Image1</th>
            <th>Image2</th>
            <th>Image3</th>
            <th>Days</th>
            <th>Nights</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($pakages as $umrah)
        <?php $imgs = explode(',',$umrah->image);?>
                <tr>
                    <td>{{ $loop->index + 1 }}</td>

                    <td>
                        <img src="../hotels/{{ isset($imgs[0]) ? $imgs[0] : '' }}" class="rounded-circle" width="50px" height="50px">
                    </td>

                    <td>
                        <img src="../hotels/{{ isset($imgs[1]) ? $imgs[1] : '' }}" class="rounded-circle" width="50px" height="50px">
                    </td>

                    <td>
                        <img src="../hotels/{{ isset($imgs[2]) ? $imgs[2] : '' }}" class="rounded-circle" width="50px" height="50px">
                    </td>

                    <td>{{ $umrah->days }}</td>

                    <td>{{ $umrah->nights }}</td>

                    <td>
                        <a href="/back-panel/umrah_pakage/{{ $umrah->id }}/edit" class="btn btn-dark btn-sm">Edit</a>

                        <a href="umrah_pakage/{{ $umrah->id }}/delete" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</div>
@endsection
