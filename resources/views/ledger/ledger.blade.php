@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Payables</h2>
    <div>
        @if(Session::has('success'))
            <h4 class="text-success">{{Session::get('success')}}</h4>
        @endif
    </div>
    <div class="row">
        <div class="container col-md-4 ">
            <div class="border border-dark p-3 mb-1">
                <h4>Create New Account</h4>
                <form action="{{route('ledger.store')}}" method="post">
                    @csrf
                    <div class="mb-1">
                        <label for="sname" class="form-label @error('sname') is-invalid @enderror">Supplier's Name:</label>
                        <input type="text" class="form-control" id="sname" name="sname">
                        @error('sname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary mb-1">Create</button>
                    </div>
                </form>
            </div>
            <div class="border border-dark p-3 mb-1">
                <h4>Entry</h4>
                <form action="">
                    <div class="mb-1">
                        <label for="date" class="form-label">Date:</label>
                        <input type="date" class="form-control" id="date" name="date">
                    </div>
                    <div class="mb-1">
                        <label for="acc_name" class="form-label">Account Name:</label>
                        <input type="text" class="form-control" id="acc_name" name="acc_name">
                    </div>
                    <div class="mb-1">
                        <label for="particulars" class="form-label">Particulars:</label>
                        <input type="text" class="form-control" id="particulars" name="particulars">
                    </div>
                    <div class="mb-1">
                        <label for="quantity" class="form-label">Quantity:</label>
                        <input type="number" class="form-control" id="quantity" name="quantity">
                    </div>
                    <div class="mb-1">
                        <label for="credit" class="form-label">Credit:</label>
                        <input type="number" class="form-control" id="credit" name="credit">
                    </div>
                    <div class="mb-1">
                        <label for="debit" class="form-label">Debit:</label>
                        <input type="number" class="form-control" id="debit" name="debit">
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary mb-1">Submit</button>
                    </div>
                </form>
            </div>
            <div class="border border-dark p-3 mb-1">
                <h4>Show Supplier's Ledger</h4>
                <form action="">

                    <div class="mb-1">
                        <label for="name" class="form-label">Name:</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="mb-1">
                        <label for="from_date" class="form-label">From:</label>
                        <input type="date" class="form-control" id="from_date" name="from_date">
                    </div>
                    <div class="mb-1">
                        <label for="to_date" class="form-label">To:</label>
                        <input type="date" class="form-control" id="to_date" name="to_date">
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary mb-1">Show</button>
                    </div>
                </form>
            </div>
            <div class="border border-dark p-3 mb-1">
                <h4>Update Entry</h4>
                <form action="">

                    <div class="mb-1">
                        <label for="uacc_name" class="form-label">Account Name:</label>
                        <input type="text" class="form-control" id="uacc_name" name="uacc_name">
                    </div>
                    <div class="mb-1">
                        <label for="uid" class="form-label">Id:</label>
                        <input type="text" class="form-control" id="uid" name="uid">
                    </div>
                    <div class="mb-1">
                        <label for="udate" class="form-label">Date:</label>
                        <input type="date" class="form-control" id="udate" name="udate">
                    </div>
                    <div class="mb-1">
                        <label for="uparticulars" class="form-label">Particulars:</label>
                        <input type="text" class="form-control" id="uparticulars" name="uparticulars">
                    </div>
                    <div class="mb-1">
                        <label for="uquantity" class="form-label">Quantity:</label>
                        <input type="number" class="form-control" id="uquantity" name="uquantity">
                    </div>
                    <div class="mb-1">
                        <label for="ucredit" class="form-label">Credit:</label>
                        <input type="number" class="form-control" id="ucredit" name="ucredit">
                    </div>
                    <div class="mb-1">
                        <label for="udebit" class="form-label">Debit:</label>
                        <input type="number" class="form-control" id="udebit" name="udebit">
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary mb-1">Update</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="col-md-1">

        </div>
        <div class="col-md-7 ">
            <div class="border border-dark p-3">
                <table class="table mt-3">
                    <thead class="bg-primary">
                        <tr>
                            <th>Supplier Name</th>
                            <th>Amount</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>john</th>
                            <td>30000</td>

                        </tr>
                        <tr>
                            <th>john</th>
                            <td>30000</td>
                        </tr>
                        @php
                        for($i=3;$i<=20;$i++){ @endphp 
                            <tr >
                                <td style="border:none;"></td>
                                <td style="border:none;"></td>
                            </tr>
                            @php
                            }
                            @endphp

                            <tr class="bg-primary">
                                <td>Total Balance:</td>
                                <td>60000</td>
                            </tr>
                    </tbody>
                </table>
            </div>
            <div class="border mt-1 border-dark p-3">
            <table class="table mt-3">
                    <thead >
                        <tr class="bg-primary">
                            <th>ID</th>
                            <th>Date</th>
                            <th>Particulars</th>
                            <th>Debit</th>
                            <th>Credit</th>
                            <th>Amount</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr >
                            <td>1</td>
                            <td>12-09-2022</td>
                            <td>opening balance</td>
                            <td>0</td>
                            <td>30000</td>
                            <td>30000</td>
                        </tr>
                        <tr>
                        <tr >
                            <td>1</td>
                            <td>12-09-2022</td>
                            <td>opening balance</td>
                            <td>0</td>
                            <td>30000</td>
                            <td>30000</td>
                        </tr>
                        </tr>
                        @php
                        for($i=3;$i<=20;$i++){ @endphp 
                            <tr >
                                <td style="border:none;"></td>
                                <td style="border:none;"></td>
                            </tr>
                            @php
                            }
                            @endphp
                            <tr class="bg-primary">
                                <td colspan="5">Total Balance:</td>
                                <td>60000</td>
                            </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection