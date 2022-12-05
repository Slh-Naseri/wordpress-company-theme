<?php

get_header();

while (have_posts()) {
    the_post(); 
    pageBanner();?>


<div class="container container--narrow page-section">
    <div class="metabox metabox--position-up metabox--with-home-link">
        <p><a class="metabox__blog-home-link" href="<?php echo get_post_type_archive_link('project'); ?>"><i
                    class="fa fa-home" aria-hidden="true"></i> پروژه ها</a> <span class="metabox__main">
                <?php the_title(); ?>
            </span></p>
    </div>

    <div class="generic-content">
        <?php the_content(); ?>
    </div>

</div>



<?php }

get_footer();

?>

<!-- jopapel project -->
<!-- <div class="container" style="text-align: right;">

<h5 class="text-center"> جوپاپل: جعبه های پویایی و پرورش خلاقیت </h5>
<div class="pt-3">

در دنیای امروزی، وابستگی کودکان و نوجوانان به وسایل الکترونیکی مثل موبایل، تبلت، کامپیوتر، پلی استیشن و... بسیار زیاد است و این مسئله تبعاتی را به همراه دارد. بعضی از این عوارض عبارتند از ارزش‌گذاری کاذب، ناهنجاری‌های رفتاری و اخلاقی، کاهش اعتماد به نفس، عدم توجه کافی به رشد و پرورش خلاقیت، کاهش تمرکز، کم تحرکی و چاقی، اوتیسم، ضعیف شدن چشم‌ها و آسیب دیدن مهره‌های گردن.

با این حال، با توجه به اینکه تقویت پویایی و پرورش خلاقیت از اولویت های هر پدر و مادر هوشیار برای رشد بهتر کودکان و نوجوانشان می باشد، تیم ما در تلاش است که محصولاتی را جهت تقویت پویایی و پرورش خلاقیت و افزایش اعتماد به نفس در کودکان و نوجوانان تولید کند.
&nbsp;
<p class="bold_box_jopapel p-3 mb-5">
برای تسهیل دستیابی به این موضوع پر اهمیت، فروشگاه اینترنتی جوپاپل بسته های نیمه آماده ای به نام «جعبه خلاقیت» تهیه کرده که با قیمتی مناسب در دسته بندی های متنوع به فرزندان شما ارائه می شود. فرزند عزیزتان می تواند با استفاده از ابزار و الگوهای داخل جعبه یا به شکلی که دلخواهش است، محتویات نیمه آماده را در محیط خانه تکمیل کند و لذت ساخت و ساز را برای اولین بار تجربه نماید!
</p>
<p class="lh_larg">فروشگاه خلاقیت جوپاپل در حال حاضر محصولاتی در دسته بندی های زیر ارائه می دهد:</p>

<ul>
 	<li>جعبه برچسبی: برچسب کارتونی، برچسب الفبایی، برچسب آرامش و...</li>
 	<li>جعبه نقاشی: نقاشی روی پارچه، نقاشی روی سفال و...</li>
 	<li>جعبه کاردستی: شهر کاغذی و...</li>
 	<li>جعبه دوختنی (به زودی)</li>
 	<li>ویدیوهای آموزشی</li>
 	<li>بازی های کاغذی (به زودی)</li>
</ul>
</div>

<hr class="m-5 border-3 border-dark" />

<div class="py-3">
<h5 class="purple_title font-weight-bold">جعبه برچسبی</h5>
این جعبه ها حاوی برگه های برچسبی رنگ آمیزی A5 با طرح های مختلف است. شما می توانید طرح های روی برچسب ها را به سلیقه خودتان رنگ آمیزی کنید، با قیچی برش بزنید، و به هر جا تمایل داشتید بچسبانید.
<div class="lh_larg pb-5">

در حال حاضر طرح های ارائه شده در سه دسته بندی کلی ارائه شده اند:
<ul>
 	<li><strong>برچسب های کارتونی</strong> که با طرح هایی جذاب و دوست داشتنی از دنیاهای مختلف کارتون های مشهور اقتباس گرفته شده اند.</li>
 	<li><strong>برچسب های الفبایی</strong> که به صورت ویژه برای کودکان پیش دبستانی و اول دبستان تهیه شده اند و به کودکان در یادگیری حروف الفبا کمک شایانی خواهند کرد.</li>
 	<li><strong>برچسب های آرامش</strong> که به ویژه برای جوانان و سنین بالا ساخته شده است و هدف از آن ارائه ابزاری برای ایجاد آرامش روحی و خودشناسی بهتر است.</li>
</ul>
</div>
<div class="p-3 d-flex justify-content-center"><img class="shadow rounded-3 col-md-5 aligncenter wp-image-91 size-full" src="http://localhost/wp/wp-content/uploads/2022/11/6.jpg" /></div>
<p class="text_footer d-flex justify-content-center">نمونه ای از برچسب های رنگ آمیزی (برچسب کارتونی)</p>

</div>

<hr class="m-5 border-3 border-dark"/>

<div class="py-3 row justify-content-center">
<div class="col-md-8">
<h5 class="purple_title">جعبه نقاشی</h5>
این جعبه ها تمام ابزار مورد نیاز برای شروع فعالیت های هنری نقاشی را در اختیار فرزند شما قرار می دهند. از قلم مو گرفته تا رنگ و چسب و... این جعبه ها به همراه ویدیوهای آموزشی جوپاپل، فرآیند شروع یک سفر هنری را تسریع می بخشد.
<div class="lh_larg pb-5">

جعبه های نقاشی ارائه شده فعلی در دو دسته بندی کلی ارائه می شوند:
<ul>
 	<li>نقاشی روی پارچه</li>
 	<li>نقاشی روی سفال</li>
</ul>
</div>
</div>
<div class="col-md-4 col-8 ">
<div class="p-3"><img class="shadow rounded-3 aligncenter wp-image-92 size-full" src="http://localhost/wp/wp-content/uploads/2022/11/15.png" /></div>
<p class="text_footer" style="text-align: center;">نمونه ای آماده شده از جعبه نقاشی (نقاشی روی سفال)</p>

</div>
</div>

<hr class="m-5 border-3 border-dark" />

<div class="py-3 row justify-content-center">
<h5 class="purple_title"><strong>جعبه کاردستی</strong></h5>
این جعبه ها شامل الگوهای رنگی پیپرکرفت از افراد، شخصیت ها و مکان های دنیاهای کارتونی و واقعی است. شما می توانید الگوهای دوبعدی را با قیچی برش بزنید و با یک چسب مایع معمولی شخصیت ها و مکانهایی سه بعدی خلق کنید.
<div class="p-3 d-flex justify-content-center"><img class="shadow rounded-3 col-md-6 alignnone wp-image-94 size-full" src="http://localhost/wp/wp-content/uploads/2022/11/59.png" /></div>
<p class="text_footer d-flex justify-content-center">نمونه ای کامل شده از جعبه کاردستی (شهر کاغذی باب اسفنجی)</p>

</div>

<hr class="m-5 border-3 border-dark" />

<div class="py-3">
<h5 class="purple_title"><strong>ویدیوهای آموزشی</strong></h5>
جوپاپل در کنار ارائه جعبه های پویایی و پرورش خلاقیت، ویدیوهایی آموزشی در موضوعات مختلف مرتبط با خلاقیت تولید می کند. این ویدیوها یا به معرفی و آموزش جعبه های خلاقیت ارائه شده روی سایت می پردازند، یا به طور کلی روش هایی را برای آفرینش هنری کودک شما با استفاده از وسایل ساده ای که به راحتی در دسترس همه است معرفی می کند.
<div class="p-3 d-flex justify-content-center">
<div class="border border-5 border-dark col-6">

[video width="1280" height="720"
m4v="http://localhost/wp/wp-content/uploads/2022/11/kaktoos-overview.m4v"][/video]

</div>
</div>
<p class="text_footer d-flex justify-content-center">نمونه ای کوتاه از ویدیوهای آموزشی (دموی آموزش نقاشی روی پارچه – طرح کاکتوس)</p>
</div>
<hr class="m-5 border-3 border-dark" />

<div class="py-3">
<div class="lh_larg">

به زودی:
<ul>
 	<li><strong>جعبه دوختنی:</strong> جعبه های دوختنی با هدف تسهیل فرآیند دوخت و دوز برای کودک در خانه ارائه می شود...</li>
 	<li><strong>بازی های کاغذی:</strong> پروژه بازی های کاغذی در قالب یک سایت مستقل با هدف ارائه سریع و ساده بازی های فکری روز دنیا به روشی جدید و خلاق در حال توسعه است</li>
</ul>
</div>
<div class="p-3 d-flex justify-content-center"><img class="shadow rounded-3 col-md-5 alignnone size-full wp-image-96" src="http://localhost/wp/wp-content/uploads/2022/11/photo_2022-11-28_14-20-212.jpg" alt="" width="1280" height="891" /></div>
<p class="text_footer d-flex justify-content-center">نمونه ای از بازی های کاغذی در حال توسعه</p>

</div>
<p class="p-3 bold_box_jopapel mt-5">ما تیمی صمیمی، متعهد و با تخصص های مکمل شامل طراحان، خیاط ها، مهندسین کامپیوتر، برق و... هستیم و به خاطر داشته هایمان خداوند بزرگ را شاکریم.
با ما در مسیر تقویت خلاقیت و پویایی فرزندانتان همراه باشید...
</p>
</div>
</div> -->





