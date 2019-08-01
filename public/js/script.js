//alert();

function contact() {


    var subject = document.getElementById("subject");
    var comment = document.getElementById("comment");

    var errors = [];

    if(subject.value == ""){
        subject.style.borderRadius = "5px";
        document.getElementById('erorMail').innerHTML = "You must type a subject!";
        errors.push("Please type a subject");
        document.getElementById("subject").style.border = "2px solid red";
    }
    else {
        document.getElementById('erorMail').innerHTML = "";
        comment.style.borderRadius = "5px";
        document.getElementById("subject").style.border = "2px solid #00ff00";
    }

    if(comment.value == ""){
        comment.style.borderRadius = "5px";
        document.getElementById('erorC').innerHTML = "You must type a comment!";
        errors.push("Please type a comment");
        document.getElementById("comment").style.border = "2px solid red";
    }
    else {
        document.getElementById('erorC').innerHTML = "";
        comment.style.borderRadius = "5px";
        document.getElementById("comment").style.border = "2px solid #00ff00";
    }
    if (errors.length > 0) {

        var ispis = "<ol class='lista'>";
        ispis += "<h3 class='pomeri'>Errors:</h3>";
        for (var i = 0; i < errors.length; i++) {
            ispis += "<li>" + errors[i] + "</li>";
        }

        ispis += "</ol>";

        document.querySelector("#poruka2").innerHTML = ispis;
    }

    else{

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                url:"/contact",
                type:"post",
                //dataType:"json",
                data:{
                    subject:$('#subject').val(),
                    email:$('#email').val(),
                    ime:$('#ime').val(),
                    comment:$('#comment').val(),
                    userID:$('#userID').val()
                },
                success:function (data) {


                    //window.location.href=podaci['odg'];
                    //$("#poruka2").html("<h3 class='nekijos'>You sent an email to the admin!</h3>");
                       $('#pop').html("You sent an email to the admin!");
                       $("#pop").css('display','block');
                },

                error:function (xhr,status,errMsg) {
                    console.log(xhr.responseText);

                    //$("#poruka2").html("<h3>Some errors occured!</h3>");
                    //alert('Greska');

                }
            });


    }
}











//klijentska validacija
function provera()
{
    var ime,reIme,prezime,rePrezime,usrname,reUser,email, reEmail,sifra,reSira,nizGreske;

    ime= document.getElementById("ime");
    usrname= document.getElementById("username");
    prezime= document.getElementById("prezime");
    email = document.getElementById("email");
    reIme= /^[A-Z][a-z]{2,9}$/;
    rePrezime= /^[A-Z][a-z]{2,14}$/;
    reEmail = /^[a-z][A-z\.\-0-9]{4,35}\@[a-z]{2,5}(\.[a-z]{2,5}){1,3}$/;
    sifra=document.getElementById("password");
    reSifra=/^([A-Za-z\d]){8,}$/;
    nizGreske=[];
    reUser=/^[a-z0-9\_]{4,15}$/;

    if(!reIme.test(ime.value))
    {
        ime.style.border="2px solid red";
        ime.style.borderRadius = "5px";
        nizGreske.push("Name is not ok");
        document.getElementById('eror1').innerHTML = "Name is not correct! Try again!";
    }
    else
    {
        ime.style.border = "2px solid #00ff00";
        ime.style.borderRadius = "5px";
        document.getElementById('eror1').innerHTML = "";
    }

    if(!rePrezime.test(prezime.value))
    {
        prezime.style.border= "2px solid red";
        prezime.style.borderRadius = "5px";
        nizGreske.push("Surname is not ok");
        document.getElementById('eror2').innerHTML = "Surname is not correct! Try again!!";
    }
    else
    {
        prezime.style.border = "2px solid #00ff00";
        prezime.style.borderRadius = "5px";
        document.getElementById('eror2').innerHTML = "";
    }



    if(!reUser.test(usrname.value))
    {
        usrname.style.border= "2px solid red";
        usrname.style.borderRadius = "5px";
        nizGreske.push("Username is not ok");
        document.getElementById('erorUser').innerHTML = "Username is not correct! Try again!";
    }
    else
    {
        usrname.style.border = "2px solid #00ff00";
        usrname.style.borderRadius = "5px";
        document.getElementById('erorUser').innerHTML = "";
    }





    if(!reEmail.test(email.value))
    {
        email.style.border = "2px solid red";
        email.style.borderRadius = "5px";
        nizGreske.push("Email is not ok");
        document.getElementById('erorMail').innerHTML = "Email is not correct! Try again!";
    }
    else
    {
        email.style.border = "2px solid #00ff00";
        email.style.borderRadius = "5px";
        document.getElementById('erorMail').innerHTML = "";
    }


    if(!reSifra.test(sifra.value))
    {
        sifra.style.border= "2px solid red";
        sifra.style.borderRadius = "5px";
        nizGreske.push("Password is not ok");
        document.getElementById('erorS').innerHTML = "Password is not correct! Try again!";
    }
    else
    {
        sifra.style.border = "2px solid #00ff00";
        sifra.style.borderRadius = "5px";
        document.getElementById('erorS').innerHTML = "";
    }


//slanje podataka serveru, nakon sto su dobro popunjena polja forme


    if(nizGreske.length>0){

        var ispis="<ol class='lista'>";
        ispis += "<h3 class='pomeri'>Errors:</h3>";
        for(var i=0;i<nizGreske.length;i++){
            ispis += "<li>" + nizGreske[i] + "</li>";
        }

        ispis += "</ol>";

        document.querySelector("#poruka1").innerHTML=ispis;
    }
    else{


                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url :"/register",
                    type : "post",
                    data : {
                        firstName : $("#ime").val(),
                        lastName : $("#prezime").val(),
                        email : $("#email").val(),
                        username : $("#username").val(),
                        sifra: $("#password").val(),
                    },
                    success : function(data, xhr) {
                        //alert('You have successfully registered');

                        $("#pop").html("Successfull registration!");
                        $("#pop").css('display','block');


                        //$("#poruka1").html("<h1 class='naslov'> Successfull Registration!</h1>");
                    },
                    error : function(xhr, status, error) {

                         //console.log(xhr.responseText);
                        var poruka = "Some errors occured";
                        switch(xhr.code) {

                            case 250:
                                poruka = "Register not success!";
                                break;
                        }
                        $("#poruka1").html(poruka);

                    }

                });
            //}
            //var formData = getFormData();
            //callAjax(formData);
        }


}









//provera podataka za login


function loginProvera() {

    var email, sifra, regMail, regSifra, nizGreske;

    email = document.getElementById("email");
    sifra = document.getElementById("password");
    regMail = /^[a-z][A-z\.\-0-9]{4,35}\@[a-z]{2,5}(\.[a-z]{2,5}){1,3}$/;
    regSifra = /^([A-Za-z\d]){8,}$/;
    nizGreske = [];


    if (!regMail.test(email.value)) {
        email.style.border = "2px solid red";
        email.style.borderRadius = "5px";
        nizGreske.push("Email is not ok");
        document.getElementById('erorMail').innerHTML = "Email is not correct! Try again!";
    } else {
        email.style.border = "2px solid #00ff00";
        email.style.borderRadius = "5px";
        document.getElementById('erorMail').innerHTML = "";
    }


    if (!regSifra.test(sifra.value)) {
        sifra.style.border = "2px solid red";
        sifra.style.borderRadius = "5px";
        nizGreske.push("Password is not ok");
        document.getElementById('erorS').innerHTML = "Password is not correct! Try again!";
    } else {
        sifra.style.border = "2px solid #00ff00";
        sifra.style.borderRadius = "5px";
        document.getElementById('erorS').innerHTML = "";
    }

    if (nizGreske.length > 0) {

        var ispis = "<ol class='lista'>";
        ispis += "<h3 class='pomeri'>Errors:</h3>";
        for (var i = 0; i < nizGreske.length; i++) {
            ispis += "<li>" + nizGreske[i] + "</li>";
        }

        ispis += "</ol>";

        document.querySelector("#poruka123").innerHTML = ispis;
    } else {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });


        // function callAjax(obj) {
        $.ajax({
            url: "/login",
            type: "post",
            dataType: "json",
            data: {
                email: $("#email").val(),
                password: $("#password").val(),
                //send: true
            },
            success: function (data) {

                if(data.code === 200)
                    window.location.href = 'http://localhost:8000/movies/';
                if(data.code === 422) {
                    $("#pop").html("Sorry, you must first register!");
                    $("#pop").css('display','block');
                }

            },
            error: function (xhr) {

               if(xhr.status === 422){
                   $("#poruka123").html("<h3 class='naslov'>Please fill all data!</h3>");
               }


            }


        });

    }

}



//dodavanje komentara

$('#dugme225').click(function (e) {

    e.preventDefault();
    var datum=document.getElementById("jojdat");
    var comment = document.getElementById("comment1");
    var errors=[];

    if(comment.value == ""){
        comment.style.borderRadius = "5px";
        document.getElementById('erorC1').innerHTML = "You must type a comment!";
        errors.push("Please type a comment");
        document.getElementById("comment1").style.border = "2px solid red";
    }
    else {
        document.getElementById('erorC1').innerHTML = "";
        comment.style.borderRadius = "5px";
        document.getElementById("comment1").style.border = "2px solid #00ff00";
    }


    if(datum.value == ""){
        datum.style.border = "2px solid red";
        datum.style.borderRadius = "5px";
        errors.push("Choose a date");
        document.getElementById('erordatum1').innerHTML = "You must choose a date!";
    }
    else{

        datum.style.border = "2px solid #00ff00";
        datum.style.borderRadius = "5px";
        document.getElementById('erordatum1').innerHTML = "";



    }



    if(errors.length>0){

        var ispis="<ol class='lista'>";
        ispis += "<h3 class='pomeri'>Errors:</h3>";
        for(var i=0;i<errors.length;i++){
            ispis += "<li>" + errors[i] + "</li>";
        }

        ispis += "</ol>";

        document.querySelector("#poruka5").innerHTML=ispis;
    }


    else{


        var id = $(this).attr("data-id");
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url:"/comment",
            method:"post",
            dataType:"json",
            data:{
                //send:true,
                datum:$("#jojdat").val(),
                comment:$('#comment1').val(),
                id:id,
            },
            success:function (data) {
                //console.log(data);
                //alert(data.ime);

               var ispis = "<div class='container'><h4 class='pozadi'><i class='glyphicon glyphicon-user'></i> " + data.ime +  " | " + data.datum  + " | " + "<i class='glyphicon glyphicon-comment'></i></h4>"
                    + "<div class='komentic'>"+
                    "<textarea id='oblast' rows='3' cols='76' disabled='true'>" + data.komentar + "</textarea>"+
                    "</div></div>";

                $("#poruka5").html("<h2 id='naslov'>You commented on this news!</h2>");


                $("#prikazi").append(ispis);
                $("#jojdat").attr("disabled",true);
                $("#comment1").attr("disabled",true);
                $("#dugme225").attr("disabled",true);
                $("#jojdat").css("border","1px solid black");
                $("#comment1").css("border","1px solid black");


            },
            error:function (xhr,status,errMes) {
                //alert("Nije stigao");
                console.log(xhr.responseText);
            }
        });



    }






});


//pretraga preko ajaxa

$("#dugmesa").click(function () {
   var polje=$("#search").val();

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        url:"/movie-list/search=" + polje,
        method:"get",
        dataType:"json",
        data:{
            polje:polje
        },
        success:function (data) {




            //Pagination
            let rows = data.length;
            let numPerPage = 3;
            let numOfPages =Math.ceil( rows / numPerPage);
            //console.log(rows);
            let pagination = ' <ul class="pagination pagination-md">';
            for(let i = 0 ; i < numOfPages ; i++) {
                pagination += ` <li class="paginationLink" data-page="${i+1}" 
                        data-movie="${polje}" 
                        data-perpage="${numPerPage}">
                        <a class="page-link" >${i+1}</a></li>`
            }
            pagination += '</ul>';
            $('.paginationContainer').html(pagination);




            var ispis='<table id="table-breakpoint"><thead><tr><th>No.</th><th>Movie Name</th><th>Picture</th><th>Length</th><th>Genre</th><th>Stars</th><th>Rating</th></tr></thead><tbody>';
            for(let i = 0  ; i < data.length ; i++) {
                if(i > numPerPage)
                    break;
           // for(var i=0;i<data.length;i++){
                ispis += ` <tr>
                                    <td>${data[i].idFilm}</td>
                                    <td>${data[i].naziv}</td>
                                    <td class="w3-list-img"><img width="170px" height="170px" src="images/${data[i].slika}" alt="Movies"/></td>
                                    <td>${data[i].trajanjeMin} Minutes</td>
                                    <td>${data[i].nazivZ}</td>
                                    <td>${data[i].glavneUloge}</td>
                                    <td>${data[i].ocena}</td>
                                </tr>
                                           `
            }

            ispis += '</tbody></table>';

            $('.agile-news-table').html(ispis);


        },
        error:function (xhr,status,errMes) {
            //alert("Nije stigao");
            console.log(xhr.responseText);
        }
    });






});



//paginacija linkovi

$(document).on('click','.paginationLink', function() {
    let page = $(this).data('page');
    let movie = $(this).data('movie');
    let numPerPage = $(this).data('perpage');
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        url : '/paginationSearch',
        method : 'get',
        dataType : 'json',
        data : {
            page:page,
            movie:movie,
            numPerPage:numPerPage
        },
        success:function(data){
            //render pagination
             console.log(data);
            var ispis='<table id="table-breakpoint"><thead><tr><th>No.</th><th>Movie Name</th><th>Picture</th><th>Length</th><th>Genre</th><th>Stars</th><th>Rating</th></tr></thead><tbody>';

            for(var i=0;i<data.length;i++){
                ispis += ` <tr>
                                    <td>${data[i].idFilm}</td>
                                    <td>${data[i].naziv}</td>
                                    <td class="w3-list-img"><img width="170px" height="170px" src="images/${data[i].slika}" alt="Movies"/></td>
                                    <td>${data[i].trajanjeMin} Minutes</td>
                                    <td>${data[i].nazivZ}</td>
                                    <td>${data[i].glavneUloge}</td>
                                    <td>${data[i].ocena}</td>
                                </tr>
                                           `
            }

            ispis += '</tbody></table>';

            $('.agile-news-table').html(ispis);

        },
        error(err){
            console.log(err.responseText);
        }
    })
});
