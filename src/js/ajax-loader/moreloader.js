jQuery(function($){

    $('.loadMorePosts').click(function(){ // клик на кнопку
       
        $(this).text('Загрузка...'); // меняем текст на кнопке
        // получаем нужные переменные
        var data = {
            'action': 'loadPosts',
            'query': $('.true_posts').text(),
            'page' : $('.current_page').text()
        };
        // отправляем Ajax запрос 
        $.ajax({
            
            url:$('.ajaxurl').text(),
            data:data,
            type:'POST',
            success:function(data){
                if(data) { 
                    $('.loadMorePosts').text('Показать еще').before(data); // добавляем новые посты
                    $('.current_page').text(+$('.current_page').text() + 1); // записываем новый номер страницы
                  //   console.log($('.current_page').text());
                    if ($('.current_page').text() == $('.max_pages').text()) $(".loadMorePosts").remove(); // если последняя страница, удаляем кнопку
                } else {
    
                    $('.loadMorePosts').remove(); // если посты не были получены так же удаляем кнопку
                }
            }
        });
    });
});