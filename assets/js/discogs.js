$(document).ready(function(){
    const discogsArrayLenght = 49;
    let i = 0;
    let queryResult;
    let direction;
    $('.discogs-research-button').on('click',function(e){
        direction = e.target.className.split('-')[0];
        if(direction=='next'){
            if(i==discogsArrayLenght){
                i=0;
            }
            else{
                i++;
            }
        }
        else{
            if(i==0){
                i=discogsArrayLenght;
            }
            else{
                i--;
            }
        }
        if(i==1){
            $.ajax({
                data: {count:i},
                url: "/ajaxImage"
            }).done(function(response) {
                queryResult = response;
                console.log(queryResult['results'][i]['cover_image'], queryResult);
                $('.research-logo').attr('src',queryResult['results'][i]['cover_image']);
                $('.research-logo').attr('data-item-type',queryResult['results'][i]['type']);
                $('.research-logo').attr('data-item-id',queryResult['results'][i]['id']);
                $('.dj-or-label').html("Juste pour info c'est un "+queryResult['results'][i]['type']);
            });
        }
        else {
            console.log("Juste pour info c'est un"+queryResult['results'][i]['type']);
            $('.research-logo').attr('src',queryResult['results'][i]['cover_image']);
            $('.research-logo').attr('data-item-type',queryResult['results'][i]['type']);
            $('.research-logo').attr('data-item-id',queryResult['results'][i]['id']);
            $('.dj-or-label').html("Juste pour info c'est un "+queryResult['results'][i]['type']);
        }
    });


    $('.good-answer-ma-man').on('click',function(e){
        let id;
        let type;
        let i;
        type = $('.research-logo').attr('data-item-type');
        id = $('.research-logo').attr('data-item-id');
        console.log(id,type);
        $.ajax({
            data: {id:id,type:type},
            url: "/ajaxLoadVideos"
        }).done(function(response) {
            queryResult = response;
            for (i=0; i <= queryResult[1].length; i++) {
                console.log('ok');
                $('.video-section').append('<p><a href='+queryResult[1][i]['videoUri']+'>Allé clicke là - '+queryResult[1][i]['videoName']+'</a> </p>')
            }
        });

        $videosss = {
            0 : "",
            1 :{
                0 :
                {'artists' : "Paul Cut",
                'videoName' : "Paul Cut - The Joy",
                'videoUri' : "https://www.youtube.com/watch?v=8lv2hQZVHes"},
                1:
                {'artists' : "Paul Cut",
                'videoName' : "Paul Cut - The World",
                'videoUri' : "https://www.youtube.com/watch?v=BUFdKuW-QEE"}
            }
        }


    });


});
