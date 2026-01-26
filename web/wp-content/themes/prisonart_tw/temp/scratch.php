<p><img class="alignleft" src="http://dean-sluyter-d7.lndo.site/sites/default/files/Sacred%20Places%20-%20Bahgum_0.jpeg" alt="" width="353" height="387" /></p>
<h4>AWAKENING  PRISON  ART</h4>
<div>is an opportunity to own original, visionary artwork by an incarcerated spiritual aspirant while helping him afford the basics of a dignified life.</div>
<h4>DAISHI </h4>
<p>is an American military veteran who served honorably in Vietnam and had a distinguished career as a photojournalist. Now serving a life sentence in a squalid Southern prison, he is deeply dedicated to spiritual study and meditative practice. He was devoted to raising rescue dogs for an outside organization and serving his inmate veterans' group till prison authorities recently terminated both activities. </p>
<p>I've corresponded with Daishi since the early 2000's. His letters reveal an acute intelligence and heartbreaking sensitivity to beauty and human kindness. Like many prisoners, especially those without families, Daishi is indigent. He has no money for amenities like toothpaste, antiperspirant, stamps, tea bags, batteries for his radio, or art supplies to replace the ones that guards arbitrarily confiscate. I've encouraged him to send me his work, which I make available to the outside world.</p>
<h4>DAISHI'S  WORK </h4>
<p>evokes new, freer worlds beyond his own constricted world. Some pictures are of imagined birds and other species — their eyes are particularly striking, gazing from their world into ours with determination, skepticism, joy, or apprehension. Other topics include loving portraits of dogs, Sacred Places, abstracted Vietnam reminiscences, close-ups of found objects, and portraits of characters from other galaxies and dimensions, where the epic Floro Wars rage on.  His media include very finely-detailed drawings made with colored pencils, improvised tints on scraps of salvaged fabric, and ethereal paintings made by dipping his finger in sunscreen and picking up colors from photos in National Geographic magazines. </p>
<h4><img class="alignright" src="http://dean-sluyter-d7.lndo.site/sites/default/files/Daishi%20w%20Cat_1.jpg" alt="" width="321" height="421" />UPDATE SUMMER 2020</strong> </h4>
<p>Over the last few years Daishi has weathered numerous challenges, including a broken thumb on his drawing hand, broken or stolen eyeglasses, recovery from cancer surgery without pain medication, and a year in a hellish prison hospital living in close quarters with violent young psychotics. He listens to music and watches movies on his prison-controlled tablet computer when he can afford them and when the prison Wi-Fi is working. Other than that, his only escapes are meditation and sleep. This spring, despite his age and weak health, he was put on a grueling midnight shift in the kitchen, where the authorities ignored complaints of Covid symptoms till prisoners started passing out on the job. He was infected and quarantined in an isolation cell built for mentally ill inmates.</p>
<p>He has now recovered from Covid, but is in constant pain due to an arthritic left hip and knee. Because he is not allowed to have a cane and spent several weeks assigned to pushing heavy food carts, his right foot has become chronically swollen. </p>
<p>Daishi is deeply grateful to all those who are supporting him with their prayers and their purchases of his art. He frequently asks me to express his appeciation to all of them. </p>
<h4>UPDATE FALL 2022</strong> </h4>
<p>Daishi is now, thankfully, in a much more humane institution where the inmates are treated with dignity, and his health has more or less stabilized for now. His physical condition no longer allows him to create art, but he continues to practice meditation, read voraciously, and enjoy music and movies on his tablet. Having in the past been shunted between prisons without warning, his main desire now is to remain where he is. </p>
<h4>CLICK ON ANY IMAGE TO ENLARGE IT. </h4>
<p>The scans below can't fully convey the delicacy of Daishi's line and his nuanced use of shade and color. The sizes listed are for the images themselves. Most are on acid-free paper at least a few inches bigger than the image size, with rough scalloped edges. Scissors are forbidden, so Daishi has to cut his paper to size with his thumbnail.  </p>
<div>One hundered percent of proceeds go to the artist. Pay what you feel — it's completely up to you. (You will be billed via PayPal.)</div>
<p>Thank you,<br /><img class="" src="http://dean-sluyter-d7.lndo.site/sites/default/files/Dean%20only%20Sig.jpg" alt="" width="191" height="113" /><br />Dean Sluyter<br /><a href="http://www.deansluyter.com/"><strong>DeanSluyter.com</strong></a></p>



<?php if ( have_posts() ) { ?>
	<div class="archived-posts">
		<?php while ( have_posts() ) {
			the_post(); ?>
			<div class="archive-item">
				<?php if ( has_post_thumbnail( get_the_ID() ) ) { ?>
					<div class="top-section">
						<div class="movie-thumbnail">
							<a href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail( 'large' ); ?>
							</a>
						</div>
					</div>
				<?php } ?>
				<div class="bottom-section">
					<div class="movie-title">
						<a href="<?php the_permalink(); ?>">
							<h3><?php the_title(); ?></h3>
						</a>
					</div>
					<?php
					$excerpt       = get_the_excerpt();
					$excerpt       = _substr( $excerpt, 0, 100 );
					$short_excerpt = _substr( $excerpt, 0, strrpos( $excerpt, ' ' ) );
					if ( ! empty( $short_excerpt ) ) { ?>
						<div class="movie-excerpt">
							<p itemprop="description" class="qodef-e-excerpt">
								<?php echo esc_html( $short_excerpt ); ?>&hellip;</p>
						</div>
					<?php } ?>
				</div>
			</div>
		<?php } ?>
	</div>
	<?php wp_reset_postdata(); ?>
<?php } ?>
