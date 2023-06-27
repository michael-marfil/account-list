@extends('accounts.layout')
 
@section('content') 
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    </head>
    <body>

    @if ($message = Session::get('success'))
        <div class="alert alert-success" role="alert" style="width: 25%; position: fixed; padding: 20px; right: 0; margin-top: 10px; border-left: 5px solid rgb(48 120 55); font-size: 12px;">
            <button type="button" class="close" data-dismiss="alert">&times</button>
            <p>{{ $message }}</p>
        </div>   
    @endif
        
<div style="margin-top: 80px"> 
   <div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left"> 
            <h2>Accounts</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success text-light" data-toggle="modal" id="mediumButton" data-target="#mediumModal" href="{{ route('accounts.create') }}">Create Account</a>
        </div>
    </div>
</div>

    @php 
        $count = DB::table('accounts')->count();
    @endphp

    @if ($count>0)
    <table class="table table-bordered" table-responsive-lg table-hover style="margin-top: 40px">
        <tr style="font-size: 14px;">
            <th>ID</th>
            <th>Username</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($accounts as $account)
        <tr style="font-size: 12px;">
            <td style="font-size: 13px;">{{ $account->id }}</td>
            <td style="font-size: 13px;">{{ $account->username }}</td>
            <td style="text-align: center">
                <form action="{{ route('accounts.destroy',$account->id) }}" method="POST">
   
                    <a class="" data-toggle="modal" id="smallButton" data-target="#smallModal" href="{{ route('accounts.show',$account->id) }}" data-keyboard="false" data-backdrop="static" style="margin-right: 30px; margin-left: 20px;"><i class="fa fa-eye" aria-hidden="true"></i></a>
        
                    <a class="" data-toggle="modal" id="mediumButton" data-target="#mediumModal" href="{{ route('accounts.edit',$account->id) }}" data-keyboard="false" data-backdrop="static" style="margin-right: 30px;"><i class="fa fa-edit" style="color: green;"></i></a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class=""><i class="fa fa-trash" aria-hidden="true" style="color: red;"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    @else
        <div style="text-align: center; margin-top: 150px;">
            <img class="md:block" src="images/empty.png" alt="" width="35%"/>
            <p style="font-size: 25px;">No Data Found</p>
        </div>
    @endif

    <div style="text-align: center; font-size: 11px;">
       {!! $accounts->links() !!}
    </div>

</div> 

<!-- small modal -->
<div class="modal fade" id="smallModal" tabindex="-1" role="dialog" aria-labelledby="smallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="smallBody">
                <div>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- medium modal -->
<div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="mediumBody">
                <div>
                    
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // display a small modal
    $(document).on('click', '#smallButton', function(event){
        event.preventDefault();
        let href = $(this).attr('data-attr');
        $.ajax({
            url: href,
            beforeSend: function() {
                $('#loader').show();
            },
            // return the result
            success: function(result) {
                $('#smallModal').modal("show");
                $('#smallBody').html(result).show();
            },
            complete: function() {
                $('#loader').hide();
            },
            error: function(jqXHR, testStatus, error) {
                console.log(error);
                alert("Page " + href + " cannot open. Error:" + error);
            },
            timeout: 8000
        })
    });

    // display a medium modal
    $(document).on('click', '#mediumButton', function(event) {
        event.preventDefault();
        let href = $(this).attr('data-attr');
        $.ajax({
            url: href,
            beforeSend: function() {
                $('#loader').show();
            },
            // return the result
            success: function(result) {
                $('#mediumModal').modal("show");
                $('#mediumBody').html(result).show();
            },
            complete: funxtion() {
                $('#loader').hide();
            },
            error: function(jqXHR, testStatus, error) {
                console.log(error);
                alert("Page " + href + " cannot open. Error:" + error);
                $('#loader').hide();
            }
            timeout: 8000
        })
    });

</script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

<script type="text/javascript">
    setInterval(function(){
        $(".alert").fadeOut();
    }, 3000);
</script>

</body>
</html>
@endsection