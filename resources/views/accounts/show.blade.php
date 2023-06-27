
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 style="margin-left: 30px">User Details</h2>
            </div>
        </div>
    </div>
   
    <div class="row" style="margin: 30px">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>User ID:</strong>
                {{ $account->id }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>First Name:</strong>
                {{ $account->firstname }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Last Name:</strong>
                {{ $account->lastname }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>User Name:</strong>
                {{ $account->username }}
            </div>
        </div>
    </div>
    
    <div style="text-align: center; width: 100%; margin-bottom: 30px">
        <a class="btn btn-primary" href="{{ route('accounts.index') }}" style="width: 50%;"> Back</a>
    </div>