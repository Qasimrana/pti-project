@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-4">

                        </div>
                        <div class="col-md-4">
                            <h4>
                                Add new Committee
                            </h4>
                        </div>
                        <div class="col-md-4">
                            <a href="{{ URL::to('/committee') }} " class="btn btn-primary" style="float: right;">
                                Back
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ URL::to('committee/submit') }} " method="post" >
                        @csrf
                       
                        
                        <div class="form-row">
                            
                            <div class="col-md-6 form-group">
                                <label>Committee Name</label>
                                <input type="text" name="name" class="form-control" required>
                                @if($errors->any('name'))
                                <span class="small text-danger">
                                    {{ $errors->first('name') }}
                                </span>
                                @endif
                            </div>
                            
                        </div>
                        <button type="submit" class="btn btn-success">
                            Submit
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
