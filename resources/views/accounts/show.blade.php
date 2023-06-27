<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}">
</head>
<body>
    
    <div class="detailsModal">
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
                <strong>User ID:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</strong>
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
                <strong>Last Name:&nbsp</strong>
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
</div>


</body>
</html>