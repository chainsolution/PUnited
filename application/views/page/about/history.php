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

	$meta = new MetaDescription('history');

	// return data as assocciated array;
	$data = $meta->get_meta_description();

	// get array of meta header
	$meta_content = $data['meta'];

	// get title of page
	$page_title = $data['page_title'];
	include(dirname(dirname(__DIR__)).'/php/includes/header.php');
	include(dirname(dirname(__DIR__)).'/php/includes/overlay_banner.php');
?>

<div class="site_sm_container">
	<div class="page_content">
		<div class="history">
			<div class="content_inner">

				<div class="section_heading">
					<h1>沿革</h1>
					<span class="lang_en">HISTORY</span>
				</div>
				
				<div class="content">
					<ul>
						<li class="history_record">
							<div class="history_date">昭和9年9月</div>
							<div class="history_milestone">
								<p>
									前坂正一（現会長の実父）が毎日新聞岡山支局にて創業。毎日新聞の広告取材活動を始める。
								</p>
							</div>
						</li>

						<li class="history_record">
							<div class="history_date">昭和22年4月</div>
							<div class="history_milestone">
								<p>
									岡山市内山下相生町3丁目に、独立した社屋を竣工。
								</p>
							</div>
						</li>

						<li class="history_record">
							<div class="history_date">昭和25年5月</div>
							<div class="history_milestone">
								<p>
									現地法人として有限会社毎日新聞広告取扱所を登記。代表取締役所長 前坂正一
								</p>
							</div>
						</li>

						<li class="history_record">
							<div class="history_date">昭和35年9月</div>
							<div class="history_milestone">
								<p>
									前坂正一の死去に伴い、代表取締役所長に前坂匡紀が就任。
								</p>
							</div>
						</li>

						<li class="history_record">
							<div class="history_date">昭和36年6月</div>
							<div class="history_milestone">
								<p>
									有限会社毎日新聞広告岡山営業所に名称変更。
								</p>
							</div>
						</li>

						<li class="history_record">
							<div class="history_date">昭和38年3月</div>
							<div class="history_milestone">
								<p>
									岡山市磨屋町10番11号に社屋を移転。
								</p>
							</div>
						</li>

						<li class="history_record">
							<div class="history_date">昭和43年9月</div>
							<div class="history_milestone">
								<p>
									株式会社岡山毎日広告社に組織変更及び社名変更。 代表取締役社長 前坂匡紀
								</p>
							</div>
						</li>

						<li class="history_record">
							<div class="history_date">昭和44年11月</div>
							<div class="history_milestone">
								<p>
									株式会社岡山毎日広告社津山支社を開設。
								</p>
							</div>
						</li>

						<li class="history_record">
							<div class="history_date">昭和52年3月</div>
							<div class="history_milestone">
								<p>
									株式会社アスを設立。同年3月、「月刊タウン情報おかやま」を創刊。
								</p>
							</div>
						</li>

						<li class="history_record">
							<div class="history_date">昭和57年3月</div>
							<div class="history_milestone">
								<p>
									岡山市内山下1丁目3番1号に新社屋竣工。
								</p>
							</div>
						</li>

						<li class="history_record">
							<div class="history_date">昭和58年4月</div>
							<div class="history_milestone">
								<p>
									株式会社マイコーセールスプロモーションを設立。
								</p>
							</div>
						</li>

						<li class="history_record">
							<div class="history_date">昭和58年6月</div>
							<div class="history_milestone">
								<p>
									株式会社ココスを設立。
								</p>
							</div>
						</li>

						<li class="history_record">
							<div class="history_date">昭和59年4月</div>
							<div class="history_milestone">
								<p>
									株式会社岡山毎日広告社に事業部（コミュニケーション部）制を導入。
								</p>
							</div>
						</li>

						<li class="history_record">
							<div class="history_date">昭和59年9月</div>
							<div class="history_milestone">
								<p>
									創業50周年。
								</p>
							</div>
						</li>

						<li class="history_record">
							<div class="history_date">昭和61年4月</div>
							<div class="history_milestone">
								<p>
									株式会社アスにおいて採用PRに関する事業を開始。
								</p>
							</div>
						</li>

						<li class="history_record">
							<div class="history_date">平成3年2月</div>
							<div class="history_milestone">
								<p>
									協同組合岡山情報文化研究所を設立。
								</p>
							</div>
						</li>

						<li class="history_record">
							<div class="history_date">平成4年4月</div>
							<div class="history_milestone">
								<p>
									CIを導入し、グループ名称としての「ビザビ」が誕生。
								</p>
							</div>
						</li>

						<li class="history_record">
							<div class="history_date">平成6年9月</div>
							<div class="history_milestone">
								<p>
									創業60周年。
								</p>
							</div>
						</li>

						<li class="history_record">
							<div class="history_date">平成10年4月</div>
							<div class="history_milestone">
								<p>
									ビザビ代表 前坂匡紀が岡山商工会議所副会頭に就任。
								</p>
							</div>
						</li>

						<li class="history_record">
							<div class="history_date">平成12年3月</div>
							<div class="history_milestone">
								<p>
									株式会社アスにおいて人材紹介業、人材派遣業を開始。
								</p>
							</div>
						</li>

						<li class="history_record">
							<div class="history_date">平成12年4月</div>
							<div class="history_milestone">
								<p>
									株式会社ビザビデジタルコミュニケーションズを設立（株式会社ココスより改名）。
								</p>
								<p>
									株式会社ビザビプロモーションを設立（株式会社マイコーセールスプロモーションより改名）。
								</p>
							</div>
						</li>

						<li class="history_record">
							<div class="history_date">平成12年5月</div>
							<div class="history_milestone">
								<p>
									株式会社岡山毎日広告社 代表取締役会長に前坂匡紀が、代表取締役社長に中島和章がそれぞれ就任。
								</p>
							</div>
						</li>

						<li class="history_record">
							<div class="history_date">平成16年4月</div>
							<div class="history_milestone">
								<p>
									株式会社ビザビプロモーション 代表取締役会長に前坂匡紀が、代表取締役社長に中島和章がそれぞれ就任。
								</p>
							</div>
						</li>

						<li class="history_record">
							<div class="history_date">平成16年8月</div>
							<div class="history_milestone">
								<p>
									ISO14001の認証取得。
								</p>
							</div>
						</li>

						<li class="history_record">
							<div class="history_date">平成16年9月</div>
							<div class="history_milestone">
								<p>
									創業70周年。
								</p>
							</div>
						</li>

						<li class="history_record">
							<div class="history_date">平成19年1月</div>
							<div class="history_milestone">
								<p>
									株式会社アス 代表取締役会長に前坂匡紀が、代表取締役社長に頼正康生がそれぞれ就任。
								</p>
								<p>
									株式会社ビザビデジタルコミュニケーションズ 代表取締役会長に前坂匡紀が、代表取締役社長に頼正康生がそれぞれ就任。
								</p>
							</div>
						</li>

						<li class="history_record">
							<div class="history_date">平成19年2月</div>
							<div class="history_milestone">
								<p>
									株式会社ビザビプロモーション 代表取締役社長に上野英人が就任。
								</p>
							</div>
						</li>

						<li class="history_record">
							<div class="history_date">平成19年3月</div>
							<div class="history_milestone">
								<p>
									ビザビ東京本部を開設。
								</p>
							</div>
						</li>

						<li class="history_record">
							<div class="history_date">平成20年4月</div>
							<div class="history_milestone">
								<p>
									ビザビ四国支社を開設。
								</p>
							</div>
						</li>

						<li class="history_record">
							<div class="history_date">平成21年2月</div>
							<div class="history_milestone">
								<p>
									株式会社岡山毎日広告社津山支社及び株式会社ビザビデジタルコミュニケーションズを株式会社岡山毎日広告社に吸収合併。
								</p>
							</div>
						</li>

						<li class="history_record">
							<div class="history_date">平成21年4月</div>
							<div class="history_milestone">
								<p>
									株式会社岡山毎日広告社を株式会社ビザビ（代表取締役会長 前坂匡紀、代表取締役社長 中島和章、取締役副社長 吉田大助）、株式会社岡山毎日広告社（代表取締役社長 横山清司）、株式会社ビザビコミュニケーションズ（代表取締役社長 寺坂秀之）に分割。
								</p>
								<p>
									株式会社アスを株式会社ビザビリレーションズ（代表取締役社長頼正康生）に社名変更。
								</p>
							</div>
						</li>

						<li class="history_record">
							<div class="history_date">平成22年4月</div>
							<div class="history_milestone">
								<p>
									株式会社ビザビ 代表取締役社長に吉田大助が就任。
								</p>
								<p>
									株式会社ビザビコミュニケーションズ 代表取締役会長に前坂匡紀が就任。
								</p>
								<p>
									株式会社ビザビプロモーション 代表取締役会長に前坂匡紀が、代表取締役社長に内田和則がそれぞれ就任。
								</p>
								<p>
									株式会社ビザビリレーションズ 代表取締役会長に前坂匡紀が、代表取締役社長に伊藤博則がそれぞれ就任。
								</p>
								<p>
									株式会社岡山毎日広告社 代表取締役会長に前坂匡紀が就任。
								</p>
							</div>
						</li>

						<li class="history_record">
							<div class="history_date">平成24年4月</div>
							<div class="history_milestone">
								<p>
									株式会社ビザビリレーションズ 代表取締役社長に山口 隆が就任。
								</p>
							</div>
						</li>

						<li class="history_record">
							<div class="history_date">平成25年4月</div>
							<div class="history_milestone">
								<p>
									株式会社岡山毎日広告社を株式会社ビザビコミュニケーションズに吸収合併。
								</p>
							</div>
						</li>

						<li class="history_record">
							<div class="history_date">平成26年4月</div>
							<div class="history_milestone">
								<p>
									株式会社ビザビコミュニケーションズ代表取締役社長に吉田大助が就任。
								</p>
								<p>
									株式会社ビザビプロモーション　株式会社ビザビリレーションズ代表取締役会長に吉田大助が就任。
								</p>
							</div>
						</li>

					</ul>
				</div>		

			</div>
		</div>
	</div>
</div>


<?php include(dirname(dirname(__DIR__)).'/php/includes/footer.php'); ?>