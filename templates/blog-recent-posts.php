
					<section>
						<header>
							<h2><?= _x("Bài gần đây", "blog") ?></h2>
						</header>
						<ul>
							<?php foreach($pages->find('template=blog-post, sort=-blog_date, limit=' . ($page->blog_quantity ?: 3)) as $recent) { ?>
								<li><a href="<?= $recent->url ?>"><?= $recent->title ?></a></li>
								
							<?php } ?>
						</ul>
					</section>