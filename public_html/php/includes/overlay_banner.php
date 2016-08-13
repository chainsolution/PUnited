<div style="display:none;">
	<svg version="1.1" xmlns="http://www.w3.org/2000/svg">    
	    <filter id="greyscale">
	     <feColorMatrix type="matrix" values="0.3333 0.3333 0.3333 0 0
	                                          0.3333 0.3333 0.3333 0 0
	                                          0.3333 0.3333 0.3333 0 0
	                                          0      0      0      1 0"/>
	    </filter>
	</svg>
</div>
<!-- top banner in all about page -->
<div class="fluid_container">
	<div class="overlay_banner">
		<figure>
			<img src="public_html/img/about_us/banner/about_us_clear_banner_01.png">
		</figure>
		<div class="overlay_title">
			<sup>`</sup>
			<span>ABOUT US</span>
		</div>
		<div class="overlay_nav">
			<ul>
				<li class="<?php if($meta->page == 'greeting'){ echo "active"; } ?>"><a href="greeting">ごあいさつ</a></li>
				<li class="<?php if($meta->page == 'philosophy'){ echo "active"; } ?>"><a href="philosophy">企業理念</a></li>
				<li class="<?php if($meta->page == 'profile'){ echo "active"; } ?>"><a href="profile">会社概要</a></li>
				<li class="<?php if($meta->page == 'history'){ echo "active"; } ?>"><a href="history">沿革</a></li>
				<li class="<?php if($meta->page == 'privacy'){ echo "active"; } ?>"><a href="privacy">プライバシーポリシー</a></li>
			</ul>
		</div>
	</div>
</div>