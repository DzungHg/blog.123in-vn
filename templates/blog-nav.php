<?php

$cache = $modules->get("MarkupCache");
$out = $cache->get("navigation", 8600);

if(! $out) {
	$out = '
								<nav id="menu">
									<header class="major">
										<h2>' . _x("Menu", "blog") . '</h2>
									</header>
									<ul>
										<li><a href="' . $pages->get('/')->url . '">' . _x("Trang Chủ", "blog") . '</a></li>
										<li><a href="' . $pages->findOne("template=blog-post, sort=-blog_date")->url . '">' . _x("Bài Mới Nhất", "blog") . '</a></li>
										<li><a href="' . $pages->get('/posts/')->url . '">' . _x("Tất Cả Bài", "blog") . '</a></li>
										<li><a class="opener" href="' . $pages->get('/categories/')->url . '">' . _x("Danh Mục", "blog") . '</a>
	';

	if($pages->get('/categories/')->children()->count > 0) {
		$out .= '
											<ul>
		';


		foreach($pages->get('/categories/')->children() as $cat) {

			$out .= "
										<li><a href='{$cat->url}'>{$cat->title}</a></li>
			";
		}

		$out .= '
											</ul>
		';

	}

	$out .= '</li>
	';
		
	$out .= '
										<li><a class="opener" href="' . $pages->get('/tags/')->url . '">'.  _x("Tags", "blog") . '</a>
	';

	if($pages->get('/tags/')->children()->count > 0) {
		
		$out .= '
											<ul>
		';

		foreach($pages->get('/tags/')->children() as $tag) {

			$out .= "
												<li><a href='{$tag->url}'>{$tag->title}</a></li>
			";

		}

		$out .= '
											</ul>
		';

	}

	$out .= '</li>
	';

	$out .= '
										<li><a href="' . $pages->get('/contact/')->url . '">' . _x("Liên Hệ", "blog") . '</a></li>
									</ul>
								</nav>
	';

	$cache->save($out);
}

echo $out;
