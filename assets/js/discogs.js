$(document).ready(function(){
    let i = 0;
    let queryResult;
    let direction;
    $('.discogs-research-button').on('click',function(e){
        direction = e.target.className.split('-')[0];
        if(direction=='next'){
            if(i==49){
                i=0;
            }
            else{
                i++;
            }
        }
        else{
            if(i==0){
                i=49;
            }
            else{
                i--;
            }
        }
        if(i==1){
            console.log('ok');
            $.ajax({
                data: {count:i},
                url: "/ajaxImage"
            }).done(function(response) {
                queryResult = response;
                console.log(queryResult['results'][i]['cover_image'], queryResult);
                $('.research-logo').attr('src',queryResult['results'][i]['cover_image'])
                $('.dj-or-label').html("Juste pour info c'est un "+queryResult['results'][i]['type'])
            });
        }
        else {
            console.log("Juste pour info c'est un"+queryResult['results'][i]['type']);
            $('.research-logo').attr('src',queryResult['results'][i]['cover_image'])
            $('.dj-or-label').html("Juste pour info c'est un "+queryResult['results'][i]['type'])
        }
    });


});
