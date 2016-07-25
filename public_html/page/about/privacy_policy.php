<?php
	
	// class MetaDescription : contain all the meta header and page title array,
	// require "../../php/function/MetaDescription.php";

	require(dirname(dirname(__DIR__)).'/php/function/MetaDescription.php');

	// to get the meta header of a specific page
	// have to instanciate an object of class MetaDescription and construct with following exact string parameter:
	// @string 'home' => return meta header and title of home page.
	// @string 'about' => return meta header and title of about us page.
	// @string 'philosophy' => return meta header and title of philosophy page.
	// @string 'history' => return meta header and title of history page.
	// @string 'greeting' => return meta header and title of greeting page.
	// @string 'contact' => return meta header and title of contact page.
	// @string 'profile' => return meta header and title of profile page.
	// @string 'privacy' => return meta header and title of privacy page.

	$meta = new MetaDescription('privacy');

	// return data as assocciated array;
	$data = $meta->get_meta_description();

	// get array of meta header
	$meta_content = $data['meta'];

	// get title of page
	$page_title = $data['page_title'];
	include(dirname(dirname(__DIR__)).'/php/includes/header.php');
	include(dirname(dirname(__DIR__)).'/php/includes/overlay_banner.php');
?>

<div class="site_md_container">

	<!-- Page content -->
	<div class="page_content">

		<!-- Privacy page content -->
		<div class="privacy">
			<div class="content_inner">

				<!-- Page title heading -->
				<div class="section_heading">
					<h1>プライバシーポリシー</h1>
					<span class="lang_en">PRIVACY POLICY</span>
				</div>
				<!-- /Page title heading -->

				<!-- Privacy statement -->
				<div class="content">
					<div class="row">
						<div class="content_title">
							<p>コンプライアンスに関する遵守方針</p>
							<div class="vertical_divider"></div>
						</div>
						<div class="content_paragraph">
							<p>
								株式会社ビザビ、協同組合岡山情報文化研究所は、企業経営および業務遂行にかかわる全ての法令を順守するとともに、事前の教育・訓練により、予防ならびに是正を行います。
							</p>	
						</div>
					</div>

					<div class="row">
						<div class="content_title">
							<p>個人情報保護に関する基本方針</p>
							<div class="vertical_divider"></div>
						</div>
						<div class="content_paragraph">
							<p>
								ビザビは、個人情報保護に関する法令およびその他の規範を順守し、お客様の個人情報を収集、利用、
								および提供を行う場合にはこれを順守し、厳正な管理を行うとともに、個人情報への不正アクセス、
								個人情報の紛失、破壊、改ざんおよび漏洩などの予防ならびに是正を行います。
							</p>
							<h4>ビザビにおけるお客様の個人情報の取り扱いについて</h4>
							<ul>
								<li>
									お客様からお預かりした個人情報は、お客様の許諾をいただいた上で、その許諾の範囲で商品・
									サービスに関連する情報を提供するためにのみ利用させていただきます。
								</li>
								<li>
									ビザビが保有する個人データは、お客様の許諾をいただいた範囲で情報提供ならびに個人デー
									タの修正などアフターメンテナンスに関連した対応を行うために保有、利用させていただきます。
								</li>
								<li>
									お客様の個人情報を安全に管理・運営するよう鋭意努力しており、個人情報への不正アクセス、
									個人情報の紛失、破壊、改ざんおよび漏洩などの予防ならびに是正を行います。また、
									情報管理責任者を置き、個人情報の適切な管理に務めるとともに、情報セキュリティーに関する規定を設け
									て社員への周知徹底を実施しています。
								</li>
								<li>
									個人情報は以下のいずれかに該当する場合を除いて、いかなる第三者にも開示・提供することはありません。
									<ul>
										<li>
											お客様の同意がある場合
										</li>
										<li>
											お客様個人を識別することができない状態で開示する場合
										</li>
										<li>
											専門的な業務処理等の理由で外部業者に取扱いを再委託する場合
										</li>
										<li>
											法令等により開示を要求された場合
										</li>
									</ul>
								</li>
								<li>
									ビザビが保有する個人データの内容について、開示・訂正・変更又は削除のご希望については、
									ご本人様からの要請にのみ、社内で定めた規定の手続きにより、対応させていただきます。
								</li>
								<li>
									ビザビの個人情報の取扱いについては、個人情報管理統括責任者が対応させていただきます。
									<ul class="info">
										<h4>お問い合わせ・ご依頼窓口</h4>
										<li><span>住所</span> 岡山市北区内山下1丁目3番1号</li>
										<li><span>名称</span> 株式会社ビザビ　個人情報管理統括責任者</li>
										<li><span>電話</span> 086-224-7172</li>
										<li><span>FAX</span> 086-224-1584</li>
										<li><span>E-MAIL</span> <a href="" class="underline">お問い合わせフォーム</a></li>
										<p>受付時間は9時30分から18時までとなります。（土・日・祝祭日・年末年始を除く</p>
									</ul>
								</li>
								<li>
									ビザビのウェブサイトからリンクの張られている他のウェブサイトの個人情報の保護については責任を負いかねますので、
									各ウェブサイトの個人情報保護方針をご確認下さい。
								</li>
								<li>
									この個人情報保護方針は、適切に個人情報を保護するために、ことわりなく改訂を行うことがあります。
								</li>
								<li>
									ビザビは、法人等のお客様の情報につきましても、利用目的、情報の公知性等を考慮し、関係法令に準拠して、上記に準じ適切に取り扱います。
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /Privacy statement -->
			</div>
		</div>
		<!-- /Privacy page content -->
	</div>
	<!-- /Page content -->
</div>

<?php include(dirname(dirname(__DIR__)).'/php/includes/footer.php'); ?>