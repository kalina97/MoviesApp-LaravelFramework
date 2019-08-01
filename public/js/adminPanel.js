//alert();

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

//brisanje ip adresa
$('.adrBrisi').click(function(){
    var id = $(this).attr('data-id');
    $.ajax({
        url:'/admin/deleteIpAddress',
        type:'POST',
        data:{

            id:id
        },
        success:function(data){
            //console.log(data);
            //alert(id);
            alert("Ip address deleted succesfully!");
        },
        error:function(status,xhr,error){
            console.log(xhr.responseText);
        }


    });


});


//brisanje gresaka

$('.errBrisi').click(function(){
    var id = $(this).attr('data-id');
    $.ajax({
        url:'/admin/deleteErrors',
        type:'POST',
        data:{

            id:id
        },
        success:function(data){
            //console.log(data);
            //alert(id);
            alert("Log error deleted succesfully!");
        },
        error:function(status,xhr,error){
            console.log(xhr.responseText);
        }


    });


});

//brisanje aktivnosti korisnika

$('.actBrisi').click(function(){
    var id = $(this).attr('data-id');
    $.ajax({
        url:'/admin/deleteActivity',
        type:'POST',
        data:{

            id:id
        },
        success:function(data){
            //console.log(data);
            //alert(id);
            alert("User activity deleted succesfully!");
        },
        error:function(status,xhr,error){
            console.log(xhr.responseText);
        }


    });


});

//brisanje zanrova

$('.gnrBrisi').click(function(){
    var id = $(this).attr('data-id');
    $.ajax({
        url:'genres/'+id,
        type:'delete',
        data:{

            id:id
        },
        success:function(data){
            //console.log(data);
            //alert(id);
            alert("Genre deleted succesfully!");
        },
        error:function(status,xhr,error){
            console.log(xhr.responseText);
        }


    });


});

//brisanje ocene za film


$('.ratBrisi').click(function(){
    var id = $(this).attr('data-id');
    $.ajax({
        url:'ratings/'+id,
        type:'delete',
        data:{

            id:id
        },
        success:function(data){
            //console.log(data);
            //alert(id);
            alert("Movie rating deleted succesfully!");
        },
        error:function(status,xhr,error){
            console.log(xhr.responseText);
        }


    });


});


//brisanje komentara

$('.commBrisi').click(function(){
    var id = $(this).attr('data-id');
    $.ajax({
        url:'comments/'+id,
        type:'delete',
        data:{

            id:id
        },
        success:function(data){
            //console.log(data);
            //alert(id);
            alert("Comment deleted succesfully!");
        },
        error:function(status,xhr,error){
            console.log(xhr.responseText);
        }


    });


});


//brisanje linkova

$('.linkBrisi').click(function(){
    var id = $(this).attr('data-id');
    $.ajax({
        url:'links/'+id,
        type:'delete',
        data:{

            id:id
        },
        success:function(data){
            //console.log(data);
            //alert(id);
            alert("Navigation link deleted succesfully!");
        },
        error:function(status,xhr,error){
            console.log(xhr.responseText);
        }


    });


});


//brisanje korisnika

$('.userBrisi').click(function(){
    var id = $(this).attr('data-id');
    $.ajax({
        url:'users/'+id,
        type:'delete',
        data:{

            id:id
        },
        success:function(data){
            //console.log(data);
            //alert(id);
            alert("User deleted succesfully!");
        },
        error:function(status,xhr,error){
            console.log(xhr.responseText);
        }


    });


});


//brisanje filma

$('.filmBrisi').click(function(){
    var id = $(this).attr('data-id');
    $.ajax({
        url:'movies/'+id,
        type:'delete',
        data:{

            id:id
        },
        success:function(data){
            //console.log(data);
            //alert(id);
            alert("Movie deleted succesfully!");
        },
        error:function(status,xhr,error){
            console.log(xhr.responseText);
        }


    });


});


//brisanje vesti

$('.vestBrisi').click(function(){
    var id = $(this).attr('data-id');
    $.ajax({
        url:'news/'+id,
        type:'delete',
        data:{

            id:id
        },
        success:function(data){
            //console.log(data);
            //alert(id);
            alert("News deleted succesfully!");
        },
        error:function(status,xhr,error){
            console.log(xhr.responseText);
        }


    });


});




//sortiranje aktivnosti po datumu

$('#order').click(function(){
        var izabrano=document.getElementById("orderby").selectedIndex;
        var orderby=document.getElementById("orderby").options[izabrano].value;
        $.ajax({
            method:'POST',
            url:'/admin/sortActivity',
            dataType:'json',
            data:{
                orderby:orderby
            },
            success:function(data){
                var ispis="<thead><tr><th scope='col'>Activity Id</th><th scope='col'>User Id</th><th scope='col'>Activity</th><th scope='col'>Date</th><th scope='col'>Time</th></tr></thead>";
                for(var i=0;i<data.length;i++){
                    ispis+="<tr><td>"+data[i]['idAktivnost']+"</td><td>"+data[i]['idKorisnik']+"</td><td>"+data[i]['aktivnost']+"</td><td>"+data[i]['datum']+"</td><td>" + data[i]['vreme']+ "</td></tr>";
                }
                document.getElementById("table-breakpoint").innerHTML=ispis;
            },
            error:function(xhr,statusTxt,error){
                console.log(xhr.responseText);
            }
        })
    });



