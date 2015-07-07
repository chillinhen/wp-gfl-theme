				<div id="external-script" class="col-sm-6" role="complementary">
				
					<?php if ( is_active_sidebar( 'external-script' ) ) : ?>

						<?php dynamic_sidebar( 'external-script' ); ?>

					<?php else : ?>

						<!-- This content shows up if there are no widgets defined in the backend. -->
						
						<div class="alert alert-message">
						
							<p><?php _e("Please activate some Widgets","wpbootstrap"); ?>.</p>
						
						</div>

					<?php endif; ?>

				</div>