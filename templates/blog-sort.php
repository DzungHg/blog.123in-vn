									<!-- Sort -->
										<section>
											<div class="inner">
												<p><?= sprintf(
														html_entity_decode(_x("Danh sách sắp xếp theo ngày <strong>%s</strong> (%s)", "blog")),
														$session->chronological ? "ascending" : "descending",
														$session->chronological ? "oldest to newest" : "newest first"
													) ?></p>
												<button class="alt" id="toggle_sort" data-newsort="<?= $session->chronological ? "desc" : "asc" ?>" data-target="<?= $pages->get('/ajax/')->url ?>"><?= _x("Toggle list sort", "blog") ?></button>
											</div>
										</section>

