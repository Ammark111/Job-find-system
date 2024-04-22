@extends('layout.app')

@section('title')

    Job post

@endsection

@section('content')
    @include('layout.navbar')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl7/1L_dstPt3HV5HzF6Gvk/e3s4Wz6iJgD/+ub2oU" crossorigin="anonymous">

<table class="table">
  <thead>
    <tr>
      <th>Name</th>
      <th>Room</th>
      <th>Check-In</th>
      <th>Check-Out</th>
      <th>Status</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Hannah Johnson</td>
      <td>305</td>
      <td>12/1/22</td>
      <td>12/4/22</td>
      <td>checked in</td>
      <td>
        <button type="button" class="btn btn-outline-primary">View</button>
        <button type="button" class="btn btn-outline-secondary">Add Charge</button>
      </td>
    </tr>
    <tr>
      <td>Cory Smith</td>
      <td>306</td>
      <td>12/15/22</td>
      <td>12/18/22</td>
      <td>checked in</td>
      <td>
        <button type="button" class="btn btn-outline-primary">View</button>
        <button type="button" class="btn btn-outline-secondary">Send SMS</button>
      </td>
    </tr>
    <tr>
      <td>Tom Lee</td>
      <td>307</td>
      <td>11/25/22</td>
      <td>11/28/22</td>
      <td>checked in</td>
      <td>
        <button type="button" class="btn btn-outline-primary">View</button>
        <button type="button" class="btn btn-outline-secondary">Send Email</button>
      </td>
    </tr>
    <tr>
      <td>Jessica Chen</td>
      <td>308</td>
      <td>12/5/22</td>
      <td>12/8/22</td>
      <td>checked in</td>
      <td>
        <button type="button" class="btn btn-outline-primary">View</button>
      </td>
    </tr>
    <tr>
      <td>Alex Davis</td>
      <td>309</td>
      <td>12/10/22</td>
      <td>12/13/22</td>
      <td>checked in</td>
      <td>
        <button type="button" class="btn btn-outline-primary">View</button>
      </td>
    </tr>
  </tbody>
</table>
@endsection

