@extends('layout.dashboard')
@section('title', 'Dashboard')
@section('buttons')
    <div class="pull-right action-btn">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#phModal">
            Provide Help
        </button>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#ghModal">
            Get Help
        </button>
    </div>
@stop
@section('main')

    <div class="modal fade" id="phModal" tabindex="-1" role="dialog" aria-labelledby="phModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form action="{{URL::to('provide_help')}}">
                {{csrf_field()}}
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Provide Help</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon">GH&#8373</span>
                                        <input type="text" name="ph_amount" class="form-control required" placeholder="Amount">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <p>
                            <b>Please note:</b>
                            You're not allowed to recommit any amount below your starting amount
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@stop
