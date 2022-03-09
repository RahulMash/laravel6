@extends('header-sidebar.side-bar')
@section('content')
<div class="">
    <h3 class="pt-3 pl-3 text-dark font-weight-normal">Activity List</h3>
    <hr />
    
    <div class="row mr-1">
        <div class="col-sm-12">
            <div class="back-button">
                <a href="">
                    <input type="button"  value="Create Activity" class="float-right btn-one">
                </a>
            </div>
        </div>
    </div>
    <form">
        <div class="form-group d-flex  justify-content-center">
            <label class="control-label pt-2 ">Activity Category:</label>
            <div class="col-md-3">
                <select class="form-control">
                    <option value="">--Select Activity Category--</option>
                    <option value="1">Competition</option>
                    <option value="2">Activity</option>
                    <option value="3">Game</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-bordered tableGrid1">
                        <thead>
                            <tr>
                                <th>S. No.</th>
                                <th>Activity Name</th>
                                <th>Status</th>
                                <th>Function</th>
                            </tr>
                        </thead>
                        <tbody">
                            <tr>
                                <td>12345123451234512345</td>
                                <td>12345123451234512345</td>
                                <td>12345123451234512345</td>
                                
                                <td>
                                    <input type="button" value="Edit" class="btn btnCss btn">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="8" class="center"><h4><b>No Record Found!</b></h4></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
<style>
    
</style>