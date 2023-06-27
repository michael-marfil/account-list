
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 style="margin-left: 30px">Edit Account</h2>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('accounts.update',$account->id) }}" method="POST" style="margin: 30px">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>FirstName:</strong>
                    <input type="text" name="firstname" value="{{ $account->firstname }}" class="form-control" placeholder="FirstName">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>LastName:</strong>
                    <input type="text" name="lastname" value="{{ $account->lastname }}" class="form-control" placeholder="LastName">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Username:</strong>
                    <input type="text" name="username" value="{{ $account->username }}" class="form-control" placeholder="UserName">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <a class="btn btn-danger" href="{{ route('accounts.index') }}">Cancel</a>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>
   
    </form> 