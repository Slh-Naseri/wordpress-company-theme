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


<!-- lebasino project -->
<!-- <div class="container pt-2 pb-5 px-4 " style="text-align: right;">
<div class="pt-3">

در دنیایی که شاهد پیشرفت های چشمگیری در حوزه های مختلف هستیم هنوز مسائل و دغدغه هایی وجود دارد که راه حل شایسته و درخوری برای آنها داده نشده است. مشاهده می شود که به مسئله پوشیدگی و آراستگی اسلامی در جوامع بین المللی تا به حال به طور شایسته ای پرداخته نشده و به دغدغه های مهمی نظیر کیفیت بالای لباس، قیمت مناسب، تنوع بالا، در نظر گرفتن سلیقه شخصی در طراحی لباس، تناسب اندازه لباس با بدن شخص و همچنین راحتی و سرعت در فرآیند خرید لباس پاسخ مناسب و قانع کننده ای داده نشده است.
<p class="bold_box_jopapel p-3 my-5">هدف تیم لباسینو تلاش برای رفع مسائل و دغدغه های مهم افراد در زمینه ی پوشیدگی و آراستگی اسلامی است که در این راستا تاکید ما روی نوآوری و خلاقیت مستمر هم در لباس و هم در روش تولید است چرا که روش های موجود نتوانسته اند مشکلات ذکر شده را به خوبی حل نمایند.</p>
به همین منظور مزون لباسینو در تلاش است تا برای مشکلات و دغدغه های مهم افراد در زمینه پوشاک راه حل های کاربردی ارائه دهد. تا کنون مسائل گوناگونی در مزون لباسینو مورد بررسی قرار گرفته است و محصولات متعددی طراحی و تولید شده اند که در ادامه به برخی از آنها اشاره می شود.
<p class="pt-3"><strong>دختران نونهال</strong> که به تازگی به سن تکلیف رسیده اند در شرایطی هستند که خانواده آنها تمایل دارد فرزند خود را به سمت حجاب تشویق کنند اما پیدا کردن لباسی که هم پوشیدگی مناسبی داشته باشد و هم متناسب با شور و نشاط و حال و هوای آن سنین باشد کار راحتی نخواهد بود. برای حل این مشکل مزون لباسینو با طراحی لباس های بسیار زیبا، با کیفیت، با رنگ بندی شاد، با استفاده از نقاشی های فانتزی و جذاب روی پارچه، و در عین حال با حفظ پوشیدگی مناسب سعی کرده مشکل خانواده ها را در تهیه لباس مناسب حل نماید.</p>

<div class="p-3 d-flex justify-content-center"><img class="shadow rounded-3 col-md-5 aligncenter wp-image-91 size-full" src="http://localhost/wp/wp-content/uploads/2022/11/Picture1.png" /></div>
<p class="text_footer d-flex justify-content-center">نمونه هایی از لباس برای دختران نونهال</p>
<p class="pt-5">همچنین برای سنین<strong> نوجوانی</strong>، لباس هایی طراحی شده است که هم پوشیدگی مناسبی داشته و هم متناسب با مد روز است تا نیاز نوجوان برای بروز بودن برطرف شود.</p>

<div class="p-3 d-flex justify-content-center"><img class="shadow rounded-3 col-md-5 aligncenter size-full wp-image-102" src="http://localhost/wp/wp-content/uploads/2022/11/Picture2.png" /></div>
<p class="text_footer d-flex justify-content-center">نمونه هایی از لباس برای نوجوانان</p>
<p class="pt-5">یکی دیگر از مسائل، داشتن لباس مناسب برای <strong>دورهمی های خودمانی</strong> است یعنی مهمانی هایی که در آن اقوام و آشنایان نزدیک حضور دارند. در این شرایط میزبان دوست ندارد یک لباس خیلی رسمی و دست و پا گیر بپوشد بلکه به دنبال لباسی است که در عین حفظ پوشیدگی، زیبا و صمیمی بوده و همچنین خیلی راحت باشد تا به سادگی بتواند پذیرایی و باقی کارها را انجام دهد. در این راستا نیز مزون لباسینو محصولاتی را ارائه داده است.</p>

<div class="p-3 d-flex justify-content-center"><img class="shadow rounded-3 col-md-5 aligncenter size-full wp-image-102" src="http://localhost/wp/wp-content/uploads/2022/11/Picture3.png" /></div>
<p class="text_footer d-flex justify-content-center">نمونه هایی از لباس برای دورهمی های خودمانی</p>

</div>
<div class="py-3">
<p class="p-3 bold_box_jopapel mt-5">ما تیمی صمیمی، متعهد و با تخصص های مکمل شامل طراحان، خیاط ها، مهندسین کامپیوتر، برق و... هستیم و به خاطر داشته های ارزشمندمان خداوند بزرگ را شاکریم.</p>

</div>
</div> -->


<!-- pro cloths -->
<!-- <div class="container pt-4 pb-5 px-4 " style="text-align: right;">
<div>
<p>خرید پوشاک فرایندی است که تقریبا هر شخصی در طول سال یک یا چند مرتبه آن را برای تهیه لباس و کفش انجام می دهد. به طور کلی چند روش برای خرید پوشاک مطرح است؛ خرید حضوری و خرید اینترنتی که در هر کدام از این روش ها امکان خرید محصولات از پیش آماده شده و همچنین محصولات سفارشی با امکان شخصی سازی وجود دارد. در تمام این حالات مشتری نیاز دارد تا قبل از تکمیل خرید، پوشاک مورد نظر را پرو کرده و تن پوش آن را از ابعاد مختلفی مثل زیبایی، تناسب سایزی مناسب با بدن، تناسب طرح و رنگ پوشاک با رنگ پوست و... بررسی کند.</p>

<p>در خرید حضوری پوشاک امکان پرو محصول وجود دارد اما متاسفانه در خرید اینترنتی این کار امکان پذیر نبوده و فقدان این مرحله ی مهم در فرایند خرید اینترنتی کاملا حس می شود. به همین علت ریسک بالایی در خرید پوشاک به صورت اینترنتی وجود دارد که باعث می شود خیلی از افراد به این روش اعتماد نکرده و خرید خود را به صورت حضوری انجام دهند و محدوده ی انتخاب خود را صرفا به محصولات فروشگاه های در دسترس خود محدود سازند.</p>

<p>در نتیجه برای فروشندگان اینترنتی نیز چالش هایی نظیر محدود بودن جامعه مشتریان، برگشت محصول از سمت مشتری و... وجود دارد.</p>
<p class="bold_box_post">تیم ما برای حل این مسئله و رفع فقدان پرو در فرایند خرید اینترنتی، برای مشتریان امکان پرو لباس را به صورت مجازی فراهم کرده است!</p>

<div class="img_container">
<div class="col-md-3 m-1"><img class="img_post alignnone size-full wp-image-114" src="http://localhost/wp/wp-content/uploads/2022/12/1-2.jpg" alt="" width="560" height="800" /></div>
<div class="col-md-3 m-1"><img class="img_post alignnone size-full wp-image-115" src="http://localhost/wp/wp-content/uploads/2022/12/1-3.jpg" alt="" width="560" height="800" /></div>
<div class="col-md-3 m-1"><img class="img_post alignnone size-full wp-image-113" src="http://localhost/wp/wp-content/uploads/2022/12/1-1.jpg" alt="" width="560" height="800" /></div>
</div>
<p class="img_footer_text">نمونه ای از پرو مجازی مانتو</p>

<p><strong>پرو مجازی</strong> به این معنی است که به جای پوشیدن محصول حقیقی و فیزیکی، تصویری از تن پوش محصول در تن مشتری به او ارائه شود. پرو مجازی می تواند ارزش های جدیدی را برای مشتری خلق کند که در پرو حقیقی پوشاک امکان پذیر نمی باشد. یکی از کوچکترین مزایای پرو مجازی، حذف زمان تلف شده برای رفت و آمدها می باشد چرا که مشتری می تواند بدون خروج از منزل، محصولات یک فروشگاه در آن سر دنیا را پرو نماید و تنوع و محدوده ی انتخاب خود را گسترش دهد.</p>
<div class="img_container">
<div class="col-md-3 m-1"><img class="img_post alignnone size-full wp-image-114" src="http://localhost/wp/wp-content/uploads/2022/12/2-2.jpg" alt="" width="560" height="800" /></div>
<div class="col-md-3 m-1"><img class="img_post alignnone size-full wp-image-115" src="http://localhost/wp/wp-content/uploads/2022/12/2-3.jpg" alt="" width="560" height="800" /></div>
<div class="col-md-3 m-1"><img class="img_post alignnone size-full wp-image-113" src="http://localhost/wp/wp-content/uploads/2022/12/2-1.jpg" alt="" width="560" height="800" /></div>
</div>
<p class="img_footer_text">نمونه ای از پرو مجازی پیراهن</p>

<p>
ارزش بزرگتری که پرو مجازی می تواند به ارمغان ‌آورد امکان شخصی سازی محصول توسط مشتری است که هر تغییر دلخواه مشتری روی محصول در پرو مجازی روی تن مشتری اعمال شده و مشتری می تواند پوشاک مورد علاقه خود را با سلیقه خودش طراحی و شخصی سازی کند و در همان بستر نتیجه را بدون نیاز به تصورات ذهنی بلکه با چشم خود ببیند.</p>

<div class="img_container row" style="align-items: center;">

<div class="col-8">
<div class="pb-3">
<div  class="border border-5 border-dark">
[video  width="1920" height="1080"  m4v="http://localhost/wp/wp-content/uploads/2022/12/Innovative-Solution-for-Clothes.m4v"][/video]
</div></div>
<p class="img_footer_text">مراحل پرو و سفارش لباس مجازی</p>
</div>
<div class="col-4">
<div class="pb-2">
<img class="img_post " src="http://localhost/wp/wp-content/uploads/2022/12/Screenshot-2022-11-29-161802.png" alt="" width="1642" height="1095" class="alignnone size-full wp-image-121" />
</div>
<img class="img_post" src="http://localhost/wp/wp-content/uploads/2022/12/Screenshot-2022-11-29-161730.png" alt="" width="1648" height="1095" class="alignnone size-full wp-image-120" />
<p class="img_footer_text">نمونه ای از لباس سفارشی سازی شده</p>
</div>

</div>

<div class="text-center">
<p class="bold_box_post px-5" style="display:inline-block;">در حال حاضر تیم ما در حال توسعه و تکمیل فناوری ها و راهکارهای پرو مجازی لباس می باشد.</p>
</div>
</div>
</div> -->