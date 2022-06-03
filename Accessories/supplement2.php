<!DOCTYPE html>
<html lang="en">

<?php session_start(); ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> حصن المسلم </title>
    <link rel="stylesheet" href="../css/Accessories.css">
</head>

<body >
<div class="container">
      <div class="logo">
        <img src="../imaj/logo.png" alt="" />
      </div>
      <div class="list">
        <?php
        if (isset($_SESSION['first_name'])) {
          echo "
            <a href='../index.php'>الصفحة الرئيسية</a>
            <a href='../logout.php'>تسجيل الخروج </a>
            <a href='../function/profile.php'>" . $_SESSION['first_name'] . "</a>
            <img src='../imaj/images.png' >";
        } else {
          echo
          "
          <a href='../index.php'>الصفحة الرئيسية</a>
          <a href='../signin.php'>تسجيل الدخول</a>
          <a href='../signup.php'>تسجيل حساب جديد</a> ";
        }
        ?>
      </div>
</div>
    <main dir="rtl">
        <div class="titer">أحكام التجويد  </div>
        <div>
            <samp> أحكام الاستعاذة والبسملة</samp>
            <ul>
                <li>الاستعاذة
                  <p>معنى الاستعاذة: الاعتصام بالله واللجوء إليه، وقد قال الله -عزَّ وجلّ- في كتابه العزيز: <span>(فَإِذا قَرَأتَ القُرآنَ فَاستَعِذ بِاللَّـهِ مِنَ الشَّيطانِ الرَّجيمِ)</span> وقد أمر الله بالاستعاذة عند قراءة القرآن، وهي أدب من آداب التلاوة يُستحبّ البدء بها، ويأتي موقعها قبل الشروع بالقراءة، فيُفتتح بها قراءة القرآن بقول: "أعوذ بالله من الشيطان الرجيم".</p>
                </li>
                <li>البسملة
                  <p>معنى البسملة قول: "بسم الله الرحمن الرحيم"، وهذا اللفظ -أي البسملة- هو اختصار لها، وهي مشروعة للفصل بين السور، وهي عند الكثير من العلماء واجبة دون سورة براءة والأنفال، فلا يُفصل بينهما بالبسملة.</p>
                </li>
            </ul>
        </div> 
        <div>
            
             <samp> أحكام النون الساكنة والتنوين </samp>
             <p>هناك أربع أحكام ينبغي مراعاتها عند التقاء النون الساكنة أو التنوين مع الأحرف الهجائية الأخرى, وفيما يأتي بيان هذه الأحكام:</p>
            <ul>
                <li>الإظهار
                   <p>يُعرّف الإظهار لغةً بأنَه البيان، والمقصود بهِ اصطلاحاً هو إظهار النون الساكنة أو التنوين عند أحد حروف الحلق التي تأتي بعد النون الساكنة أو التنوين، وهي مجموعة في أوائل حروف كلمات: "<span>أخي هاك علما حازه غير خاسر</span>"، وقد تلتقي النون الساكنة مع أحد أحرف الإظهار في نفس الكلمة، كما ورد في قول الله -تعالى-: <span>(وَهُمْ يَنْهَوْنَ عَنْهُ وَيَنْأَوْنَ عَنْهُ وَإِن يُهْلِكُونَ إِلَّا أَنفُسَهُمْ وَمَا يَشْعُرُونَ)</span>.</p>
                   <p>حيث التقت النون الساكنة مع الهمزة في المثال الأول في كلمة: "ينأون"، وقد تلتقي النون الساكنة بأحد أحرف الإظهار في كلمتين منفصلتين، كما ورد في قول الله -تعالى-: <span>(قُلْ يَا أَهْلَ الْكِتَابِ لِمَ تَصُدُّونَ عَن سَبِيلِ اللَّـهِ مَنْ آمَنَ تَبْغُونَهَا عِوَجًا)</span> ، حيث التقت النون الساكنة بالهمزة في: "مَنْ آمَنَ".</p>
                   <p>أمَّا التنوين فلا يلتقي بأحرف الإظهار إلاّ في كلمتين منفصلتين، كما ورد في قول الله -تعالى-: <span>(آمَنَ الرَّسُولُ بِمَا أُنزِلَ إِلَيْهِ مِن رَّبِّهِ وَالْمُؤْمِنُونَ كُلٌّ آمَنَ بِاللَّـهِ وَمَلَائِكَتِهِ وَكُتُبِهِ وَرُسُلِهِ)</span> حيث التقى التنوين بالهمزة في: "كُلٌّ آمَنَ".</p>
                </li>
                <li>الإدغام
                    <p>يُعرّف الإدغام لغةً على أنَّه إدخال الشيء في الشيء، أمّا اصطلاحاً فهو إدخال حرف ساكن بآخر متحرِّك، بحيث يصبحان حرفاً واحداً مشدَّداً، والمقصود به هنا أن يتمَّ إدخال حرف النون الساكن أو التنوين في أحد حروف الإدغام التي تأتي بعده، وهي: "الياء، الراء، الميم، اللام، الواو، النون"، والمجموعة في كلمة: "<span>يرملون</span>"، وتجدر الإشارة إلى أنَّ الإدغام ينقسم إلى إدغامٍ بغنّة، وإدغامٍ بغير غنّة.</p>
                    <p>والغنة صوتٌ رخيم يخرج من الأنف، أمّا أحرف الإدغام بغنة فهي أربعة مجموعة في كلمة: "ينمو"، فإذا جاء بعد النون الساكنة أو التنوين أحد هذه الأحرف وجب إدغامها بغنّة، كما ورد في قول الله -تعالى-: <span>(وَمَن يَعمَل مِنَ الصّالِحاتِ وَهُوَ مُؤمِنٌ فَلا يَخافُ ظُلمًا وَلا هَضمًا)</span>، حيث التقت النون الساكنة بحرف الياء في: "مَن يَعمَل".</p>
                    <p>أمّا الإدغام بغير غنّة فأحرفه: "الراء، واللام"، فإذا جاء بعد النون الساكنة أو التنوين أحد هذين الحرفين وجب إدغامها بغير غنّة، كما ورد في قول الله -تعالى-: <span>(قَيِّمًا لِيُنذِرَ بَأسًا شَديدًا مِن لَدُنهُ وَيُبَشِّرَ المُؤمِنينَ الَّذينَ يَعمَلونَ الصّالِحاتِ أَنَّ لَهُم أَجرًا حَسَنًا)</span>، حيث التقت النون الساكنة مع حرف اللام في: "مِن لَدُنهُ".</p>
                </li>
                <li>الإقلاب
                  <p>يُعرّف الإقلاب لغةً على أنَّه تحويل الشيء عن وجهته، أمّا اصطلاحاً فهو إبدال حرف مكان حرفٍ آخر مع مراعاة الغنةّ في الحرف الأول، ويأتي الإقلاب عند التقاء النون الساكنة أو التنوين بحرف الإقلاب وهو حرف الباء، حيث تُقلب النون أو التنوين وتُلفظ ميماً.</p>
                  <p>كما ورد في قول الله -تعالى-: <span>(وَالْأَرْضَ مَدَدْنَاهَا وَأَلْقَيْنَا فِيهَا رَوَاسِيَ وَأَنبَتْنَا فِيهَا مِن كُلِّ زَوْجٍ بَهِيجٍ)</span> ، حيث التقت النون الساكنة بالباء في كلمة: (أَنبَتْنَا)، والتقى التنوين مع الباء في: "زَوْجٍ بَهِيجٍ".</p>
                </li>
                <li>الإخفاء 
                  <p>يُعرّف الإخفاء لغةً بالستر، أمّا اصطلاحاً فهو إخفاء النون الساكنة أو التنوين مع غنّة بدرجةٍ أدنى من الإدغام عند مجيىء أحد حروف الإخفاء بعدها، وحروف الإخفاء هي باقي حروف اللغة العربية باستثناء أحرف الإظهار وأحرف الإدغام والإقلاب.</p>
                  <p>وهي مجموعة في أوئل أحرف كلمات البيت القائل: "<span>صف ذا ثنا كم جاد شخص قد سما، دم طيباً، زد في تقى، ضع ظالماً</span>"، فيجب إخفاء النون الساكنة أو التنوين إذا التقت مع أحد أحرف الإخفاء، ويأتي في كلمة كقوله -تعالى-: <span>(الْعَبْدُ بِالْعَبْدِ وَالْأُنثَىٰ بِالْأُنثَىٰ)</span>، وقد يأتي في كلمتين كما في قول الله -تعالى-<span>(رِيحاً صَرصَراً)</span>.</p>
                </li>
            </ul> 
        </div>
        <div>
           
            <samp> أحكام الميم والنون المشددتين </samp>
            <p>تجب الغُنَّة في الميم والنون المشدّدتين بمقدار حركتين، والحركة تعني المدَّة الزمنية اللازمة لقبض الأصبع أوبسطه، ويُطلق على كلّ منهما حرفٌ أغَنّ، أو حرف غنّة مثل كلمة: (هَمَّازٍ)</p>
        </div>
        <div>
        <samp> أحكام الميم الساكنة </samp>
        <p>تُعرَّف الميم الساكنة بأنّها الميم التي لا حركة لها، والواقعة بعد حروف الهجاء ما عدا حروف المدّ، وهناك ثلاثة أحكام للميم الساكنة عند التقائها مع باقي الأحرف، ويمكن بيان هذه الأحكام فيما يأتي:</p>
            <ul>
              <li> الإخفاء الشفوي 
                <p>حيث يجب إخفاء الميم الساكنة عند التقائها بحرف الباء فقط، كما في قول الله -تعالى-: <span>(إِنَّ الَّذِينَ يَخْشَوْنَ رَبَّهُم بِالْغَيْبِ)</span> ، ويُطلق على هذا الحكم الإخفاء الشفوي لأنَّ الميم والباء يخرجان من الشفتين.</p>
              </li>
              <li> الإدغام الشفوي
                <p>هو أن تأتي ميم ساكنة في آخر الكلمة وبعدها ميم متحركة، فتُدغم الميم الأولى بالثانية فتصبحان ميماً واحدة مشدَّدة مع الغنّة، كقوله -تعالى-: <span>(هُوَ الَّذِي خَلَقَ لَكُم مَّا فِي الْأَرْضِ جَمِيعًا)</span>، ويسمَّى أيضاً بإدغام المتماثلين.</p>
              </li>
              <li>الإظهار الشفوي
                <p></p>
              </li>
            </ul>
        </div>
        <div>
            <samp>أحكام الإدغام </samp>
            <ul>
              <li> إدغام المتماثلين</li>
              <li> إدغام المتجانسين</li>
            </ul>
        </div>
        <div>
            <samp>أحكام اللام الساكنة</samp>
            <ul>
              <li> أحكام اللام (أل) الداخلة على الأسماء النكرة لتعريفها</li>
              <li> أحكام لام الفعل</li>
              <li> أحكام لام الإسم</li>
              <li> أحكام لام الحرف</li>
              <li> أحكام لام الأمر</li>
            </ul>
           </div>
        <div>
            <samp>أحكام التفخيم و الترقيق </samp>
                <p>تقسم الحروف في علم التجويد إلى أحرف مفخمة دائماً وأخرى مرقَّقة، والنوع الثالث يأتي فيه كِلا الأمرين، والتفصيل فيما يأتي:</p>
                <ul>
              <li>أحرف مفخمة دائما </li>
              <li>أحرف مفخمة مرققة </li>
              <li> أحرف مفخمة تارة و مرققة تارة اخرى 
              <ul>
                  <li>الألف</li>
                  <li>اللام</li>
                  <li>الراء</li>
                </ul>
              </li>
            </ul>
        </div>
        <div>
            <samp>أحكام المدود</samp>
                <p>هو المدّ الذي لا تقوم ذات الحرف إلا به، ويكفي لوجوده وجود أحد حروف المدّ، ولا يكون قبل حرف المدّ همزة ولا بعده همز ولا سكون، ويُمدّ بمقدار حركتين، ومثاله في قول الله -تعالى-: (بَلَى إِنَّ رَبَّهُ كَانَ بِهِ بَصِيرً)</p>
                <ul>
                  <li>المد الطبيعي (الأصلي)</li>
                  <li> المد الفرعي 
                    <p>ينقسم المدّ الفرعي إلى قسمين اثنين بيانهما فيما يأتي</p>
                    <ul>
                      <li>المد الفرعي بسبب الهمز
                          <ul>
                            <li>مد البدل و شبيه البدل</li>
                            <li>المد المتصل</li>
                            <li>المد المنفصل</li>
                          </ul>
                      </li>
                      <li>المد الفرعي بسبب السكون
                        <ul>
                          <li>المد اللازم</li>
                          <li>المد الاعارض لسكون</li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                </ul>
        </div>
        <div>
            <samp>مخارج الحروف</samp>
            <p>يُعرَّف المخرج لغةً بالمجرى، أمّا في الاصطلاح هو المجرى الذي يمرُّ به الحرف عند النطق به، ويُميّزه عن غيره، وهي خمسة مخارج: الحلق، والجوف، والخيشوم، والشفتان، واللسان، وفيما يأتي ذكرها مع التفصيل:</p>
            <ul>
              <li>الجوف</li>
              <li> الحلق</li>
              <li> اللسان</li>
              <li> الشفتين</li>
              <li> الخيشوم</li>
            </ul>
           </div>
        <div>
        <div>
            <samp>صفات الحروف</samp>
            <p>الصفة لغةً هي ما بالشيء من المعنى، أمَّا اصطلاحاً فهي ما يتعرَّض للحرف أثناء خروجه من المجرى، وهي مقسومة في قسمين: أولاً: صفات لها أضداد وصفات لا أضداد لها، وفيما يأتي بيان هذه الصفات:</p>
            <ul>
              <li>الهمس الجهر</li>
              <li> الشدة اللين</li>
              <li> الاستعلاء و الاستفتال</li>
              <li> الشفتين</li>
              <li> الإطباق و الانفتاح</li>
              <li> الإذلاق و الغصمات</li>
              <li> الإذلاق و الغصمات</li>
            </ul>
            <p>أما الصفات التي لا ضدَّ لها فهي:</p>
            <ul>
              <li>الصفير</li>
              <li> القلقة</li>
              <li> اللين</li>
              <li> الانحراف</li>
              <li> التكرار</li>
              <li> التفشي</li>
              <li> الاستطالة</li>
            </ul>
           </div>
        <div>
        <div>
            <samp>أحكام السكتات</samp>
            <p>السكت في اللغة هو الصمّت، أمّا اصطلاحاً فهو قطع الصوت على آخر الكلمة من غير تنفس بمقدار حركتين، وفي قراءة حفص مقدار هذه السكتات هي أربعة، وهي:</p>
            <ul>
              <li>الجوف</li>
              <li> الحلق</li>
            </ul>
            <p>وفي السكت الجائز ما يأتي:</p>
            <ul>
              <li> الشفتين</li>
              <li> الخيشوم</li>
            </ul>
            <p>ويجوز السكت وعدمه في سورة الحاقة عند كلمة (ماليه) في قول الله -تعالى-: (مَا أَغْنَى عَنِّي مَالِيَهْ * هَلَكَ عَنِّي سُلْطَانِيَهْ).</p>
           </div>
        <div>
    </main>
    <footer>
    <div class="links">
      <div class="links-container">
        <h3>معلومات الإتصال </h3>
        <a href="">QuranicSchool@gmail.com</a>
        <a href="">+213687654321</a>
        <a href="">+213756781234</a>
      </div>
      <div class="links-container">
        <h3> مواقع التواصل </h3>
        <a href="">Facebook</a>
        <a href="">Instagram</a>
        <a href="">YouTube</a>
      </div>
      <div class="links-container">
        <h3>العنوان </h3>
        <a href="https://goo.gl/maps/QGHyfpjcP72wm6Di6">M7F2+XP الجلفة</a>
      </div>
    </div>

    <div class="info">
    حقوق التأليف والنشر &#169; 2021-2022  <br />
      كل الحقوق محفوظة
    </div>
  </footer>
</body>

</html>