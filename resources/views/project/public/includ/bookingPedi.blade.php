<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="css\Customer\Booking\caseCSS.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js" integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Document</title>

    <style>
        .form-section{
            display: none;
        }

        .form-section.current{
            display: inline;
        }

        .parsley-error-list{
            color: red;
        }
    </style>

</head>
<body>
    <div class="container-fluid">
        <div class="row justify-content-md-center">
            <div class="col-md-9">
                <div class="card px-5 py-3 mt-5 shadow">
                    <h1 class="text-denger text-center mt-3 mb-4">Multi-step Form in BookingPedi</h1>

                    <div class="nav nav-fill my-3">
                        <label class="nav-link shadow-sm step0 border ml-2 ">Step One</label>
                        <label class="nav-link shadow-sm step1 border ml-2 ">Step Two</label>
                        <label class="nav-link shadow-sm step2 border ml-2 ">Step Three</label>
                    </div>
                    <form action="/post" method="post" class="employee-form">
                        @csrf
                        <div class="form-section">
                            <label for="">Name</label>
                            <input type="text" class="form-control mb-3" name="name" required>
                            <label for="">Last Name</label>
                            <input type="text" class="form-control mb-3" name="last_name" required>
                        </div>

                        <div class="form-section">
                            <label for="">E-mail</label>
                            <input type="email" class="form-control mb-3" name="email" required>
                            <label for="">Phone</label>
                            <input type="tel" class="form-control mb-3" name="phone" required>
                        </div>

                        <div class="form-section">
                            <label for="">Address</label>
                            <textarea name="adress" class="form-control mb-3" cols="30" rows="5" required></textarea>
                        </div>

                        <div class="form-navigation mt-3">
                            <button type="button" class="previous btn btn-primary float-left"> &lt; Previous</button>
                            <button type="button" class="next btn btn-primary float-right">Next &gt; </button>
                            <button type="submit" class="btn btn-success float-right">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>

$(function(){
    var $sections=$('.form-section');

    function navigateTo(index){
        $sections.removeClass('current').eq(index).addClass('current');
        $('.form-navigation .previous').toggle(index>0);
        var atTheEnd = index >= $sections.length - 1;
        $('.form-navigation .next').toggle(!atTheEnd);
        $('.form-navigation [Type=submit]').toggle(atTheEnd);

        const step=document.querSelector('.step'+index);
        step.style.backgroundColor="#17a2b8";
        step.style.color="white";
    }

    function curIndex(){
        return $sections.index($sections.filter('.current'));
    }

    $('.form-navigation .previous').click(function(){
        navigateTo(curIndex() - 1);
    });

    $('.form-navigation .next').click(function(){
        $('.employee-from').parsley().whenValidate({
            group:'block-'+curIndex()
        }).done(function(){
            navigateTo(curIndex()+1);
        });
    });

    $sections.each(function(index,section){
        $(section).find(':input').attr('data-parsley-group','block-' + index);
    });

    navigateTo(0);

});
</script>


</body>
</html>