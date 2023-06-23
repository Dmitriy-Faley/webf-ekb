<?php
/**
*Template name: Блог
*/
get_header();
?>

<section class="projects blog">
    <div class="container">
        <h1 class="title blog__title"><?php the_title(); ?></h1>
        <div class="blog__tegs">
            <a href="#" class="active" data-filter="all">Все</a>
            <a href="#" data-filter="article">Статьи</a>
            <a href="#" data-filter="news">новости</a>
            <a href="#">разработка</a>
            <a href="#">SMM</a>
            <a href="#">Дизайн</a>
            <a href="#">КОПИРАЙТИНГ</a>
            <a href="#">МАРКЕТИНГ</a>
            <a href="#">SEO</a>
            <a href="#">PPC</a>
        </div>
        <div class="projects__content">

        <?php
            // запрос
            $wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>
            <?php if ( $wpb_all_query->have_posts() ) : ?>
            <ul>
                <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
                    <div class="projects__content__item article news">
                        <div>
                            <a href="<?php the_permalink(); ?>" class="item__img">
                                <?php the_post_thumbnail(); ?>
                            </a>
                        </div>
                        <div class="item__data">
                            <div class="data__teg">
                                <?php 
                                    $posttags = get_the_tags();
                                    if ( $posttags ) {
                                        echo '<span>' . $posttags[1]->name . '</span> 
                                              <span>' . $posttags[0]->name .'</span>';
                                    }
                                ?>
                            </div>
                            <div class="data__info">
                                <a href="<?php the_permalink(); ?>" class="title"><?php the_title(); ?></a>
                                <p class="desk"><?php echo get_the_date()?></p>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </ul>
                <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <p><?php _e( 'Извините, нет записей, соответствуюших Вашему запросу.' ); ?></p>
            <?php endif; ?>
        </div>
        <button class="button button-more" id="blogs-more">Показать еще</button>
    </div>
</section>


<?php get_footer(); ?>


<script>
    $(document).ready(function () {
        let colvoHelpfulItem = document.querySelectorAll('.blog .projects__content .projects__content__item').length;

        if (colvoHelpfulItem <= 9) {
            $('#blogs-more').addClass('hidden');
        }

        $('#blogs-more').on('click', function () {
            $('.blog .projects__content .projects__content__item').addClass('active_cards');
            $(this).addClass('hidden');
        });
    });

    const links = [...document.querySelectorAll(".blog__tegs a")];
    const postsTag = [...document.querySelectorAll(".data__teg span")];
    const cards = [...document.querySelectorAll(".projects__content__item")];
    const wrap = document.querySelector(".projects__content");

    // links.forEach(el => {
    //     el.addEventListener('click', (e) => {
    //         links.forEach(el => {
    //             el.classList.remove('active');
    //         })

    //         e.target.classList.add('active');

    //         postsTag.forEach(item => {
    //             let result = getParent(
    //                     item,
    //                     '.projects__content__item'
    //                 );

    //             if(el.innerHTML.toLowerCase() === item.innerHTML.toLowerCase()) {
    //                 result.classList.remove('hidden');
    //             } else {
    //                 result.classList.add('hidden');
    //             }

    //             if(el.innerHTML.toLowerCase() === 'все') {
    //                 result.classList.remove('hidden');
    //             }
    //         })
    //     });

    //     function getParent(elem, parentSelector) {
    //         let parents = document.querySelectorAll(parentSelector);
            
    //         for (let i = 0; i < parents.length; i++) {
    //             let parent = parents[i];
                
    //             if (parent.contains(elem)) {
    //             return parent;
    //             }
    //         }
            
    //         return null;
    //         }

    // })

    function app() {
	let buttons = document.querySelectorAll('.blog__tegs a');
	const cards = document.querySelectorAll('.projects__content__item');

	function filter(category, items) {
		items.forEach((item) => {
			const isItemFiltered = !item.classList.contains(category);
			const isShowAll = category.toLowerCase() === 'all'
			if (isItemFiltered && !isShowAll) {
				item.classList.add('anime');
			} else {
				item.classList.remove('hide');
				item.classList.remove('anime');
			}
		})
	}

	buttons.forEach((button) => {
		button.addEventListener('click', () => {
			const currentCategory = button.dataset.filter.trim().replace(' ', '');
			filter(currentCategory, cards);
		})
	})

	cards.forEach((card) => {
		card.ontransitionend = function () {
			if (card.classList.contains('anime')) {
				card.classList.add('hide');
			}
		}
	})

	// Add active class to the current button (highlight it)
	//var header = document.getElementById("myDIV");
	var btns = document.getElementsByClassName("button-filter");
	for (var i = 0; i < btns.length; i++) {
		btns[i].addEventListener("click", function () {
			var current = document.getElementsByClassName("active");
			current[0].className = current[0].className.replace(" active", "");
			this.className += " active";
		});
	}
}

app();
</script>