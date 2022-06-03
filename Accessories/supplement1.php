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
        <div class="titer">حصن المسلم </div>
        <div>
            <samp>اذكار الصباح و المساء</samp>
            <p>يجد المتأمّل لسنة نبيّنا الكريم صلى الله عليه وسلم، أنّه حث المسلمين على قراءة عدد من الأذكار كلّ صباح ومساء؛ لينالهم الخير والنفع الكثير، ومن هذه الأذكار ما هو من آي الذكر الحكيم، ومنها ما هو من سنة المصطفى صلى الله عليه وسلم، وقد قال تعالى في فضل الذكر وعظيم أجره ونفعه على عباده: (...وَالذَّاكِرِينَ اللَّهَ كَثِيرًا وَالذَّاكِرَاتِ أَعَدَّ اللَّهُ لَهُم مَّغْفِرَةً وَأَجْرًا عَظِيمًا)</p>
        </div> 
        <div>
            
             <samp> أذكار الصباح و المساء من القرآن الكريم</samp>
             <p>ورد في آي الذكر الحكيم العديد من الأذكار، منها ما يأتي:</p>
            <ul>
                <li>(<span>اللَّهُ لَا إِلَٰهَ إِلَّا هُوَ الْحَيُّ الْقَيُّومُ ۚ لَا تَأْخُذُهُ سِنَةٌ وَلَا نَوْمٌ ۚ لَّهُ مَا فِي السَّمَاوَاتِ وَمَا فِي الْأَرْضِ ۗ مَن ذَا الَّذِي يَشْفَعُ عِندَهُ إِلَّا بِإِذْنِهِ ۚ يَعْلَمُ مَا بَيْنَ أَيْدِيهِمْ وَمَا خَلْفَهُمْ ۖ وَلَا يُحِيطُونَ بِشَيْءٍ مِّنْ عِلْمِهِ إِلَّا بِمَا شَاءَ ۚ وَسِعَ كُرْسِيُّهُ السَّمَاوَاتِ وَالْأَرْضَ ۖ وَلَا يَئُودُهُ حِفْظُهُمَا ۚ وَهُوَ الْعَلِيُّ الْعَظِيمُ</span>)</li>
                <li>(<span>آمَنَ الرَّسُولُ بِمَا أُنزِلَ إِلَيْهِ مِن رَّبِّهِ وَالْمُؤْمِنُونَ ۚ كُلٌّ آمَنَ بِاللَّهِ وَمَلَائِكَتِهِ وَكُتُبِهِ وَرُسُلِهِ لَا نُفَرِّقُ بَيْنَ أَحَدٍ مِّن رُّسُلِهِ ۚ وَقَالُوا سَمِعْنَا وَأَطَعْنَا ۖ غُفْرَانَكَ رَبَّنَا وَإِلَيْكَ الْمَصِيرُ*لَا يُكَلِّفُ اللَّهُ نَفْسًا إِلَّا وُسْعَهَا ۚ لَهَا مَا كَسَبَتْ وَعَلَيْهَا مَا اكْتَسَبَتْ ۗ رَبَّنَا لَا تُؤَاخِذْنَا إِن نَّسِينَا أَوْ أَخْطَأْنَا ۚ رَبَّنَا وَلَا تَحْمِلْ عَلَيْنَا إِصْرًا كَمَا حَمَلْتَهُ عَلَى الَّذِينَ مِن قَبْلِنَا ۚ رَبَّنَا وَلَا تُحَمِّلْنَا مَا لَا طَاقَةَ لَنَا بِهِ ۖ وَاعْفُ عَنَّا وَاغْفِرْ لَنَا وَارْحَمْنَا ۚ أَنتَ مَوْلَانَا فَانصُرْنَا عَلَى الْقَوْمِ الْكَافِرِينَ</span>)</li>
            </ul>
            <p>وفي فضل هاتين الآيتين، ما ورد عن رسول الله صلى الله عليه وسلم: (<span>مَن قَرَأَ بالآيَتَيْن؛ يعني: مَن قَرَأَ بالآيَتَيْنِ مِن آخِرِ سُورَةِ البَقَرَةِ في لَيْلَةٍ كَفَتَاهُ</span>) حيث ورد في تفسير معنى (كفتاهُ) عدّة معانٍ، منها معنى ابن حجر رحمه الله: تكفيان قارئهما من كلّ سوء، وقد قيل أيضاً إنّ من معانيها: دفعتا عن قارئهما شرّ الإنس والجنّ، وقيل: كفتا قارئهما شرّ الشيطان، أما المعنى الأصح؛ فهو ما ذكره ابن القيم: كفتا قارئهما شرّ ما يؤذيه</p>
            <ul>
                <li>ممّا يُقرأ كلّ صبح ومساء، قوله تعالى: (<span>حم*تَنزِيلُ الْكِتَابِ مِنَ اللَّهِ الْعَزِيزِ الْعَلِيمِ*غَافِرِ الذَّنبِ وَقَابِلِ التَّوْبِ شَدِيدِ الْعِقَابِ ذِي الطَّوْلِ ۖ لَا إِلَٰهَ إِلَّا هُوَ ۖ إِلَيْهِ الْمَصِيرُ</span>).</li>
                <li>آيات سورة الإخلاص والمعوّذتين:
                    <ul>
                        <li>سورة الإخلاص: (<span>قُلْ هُوَ اللَّهُ أَحَدٌ*اللَّهُ الصَّمَدُ*لَمْ يَلِدْ وَلَمْ يُولَدْ*وَلَمْ يَكُن لَّهُ كُفُوًا أَحَدٌ</span>).</li>
                        <li>سورة الفلق: (<span>قُلْ أَعُوذُ بِرَبِّ الْفَلَقِ*مِن شَرِّ مَا خَلَقَ*وَمِن شَرِّ غَاسِقٍ إِذَا وَقَبَ*وَمِن شَرِّ النَّفَّاثَاتِ فِي الْعُقَدِ*وَمِن شَرِّ حَاسِدٍ إِذَا حَسَدَ</span>)</li>
                        <li>سورة الناس: (<span>قُلْ أَعُوذُ بِرَبِّ النَّاسِ*مَلِكِ النَّاسِ*إِلَٰهِ النَّاسِ*مِن شَرِّ الْوَسْوَاسِ الْخَنَّاسِ*الَّذِي يُوَسْوِسُ فِي صُدُورِ النَّاسِ*مِنَ الْجِنَّةِ وَالنَّاسِ</span>)</li>
                    </ul>

                </li>
            </ul> 
        </div>
        <div>
           
            <samp> أذكار الصباح و المساء من سنة المصطفى </samp>
            <p>ممّا ورد في الحديث النبوي الشريف من أذكار الصباح والمساء، ما يأتي:</p>
            <ul>
                <li>(<span>اللَّهُمَّ أنْتَ رَبِّي لا إلَهَ إلَّا أنْتَ، خَلَقْتَنِي وأنا عَبْدُكَ، وأنا علَى عَهْدِكَ ووَعْدِكَ ما اسْتَطَعْتُ، أعُوذُ بكَ مِن شَرِّ ما صَنَعْتُ، أبُوءُ لكَ بنِعْمَتِكَ عَلَيَّ، وأَبُوءُ لكَ بذَنْبِي فاغْفِرْ لِي، فإنَّه لا يَغْفِرُ الذُّنُوبَ إلَّا أنْتَ</span>)</li>
                <li>(<span>مَن قالَ: حِينَ يُصْبِحُ وَحِينَ يُمْسِي: سُبْحَانَ اللهِ وَبِحَمْدِهِ، مِئَةَ مَرَّةٍ، لَمْ يَأْتِ أَحَدٌ يَومَ القِيَامَةِ بأَفْضَلَ ممَّا جَاءَ به إِلَّا أَحَدٌ قالَ مِثْلَ ما قالَ، أَوْ زَادَ عليه</span>).</li>
                <li>(<span>اللهمَّ إنِّي أعوذُ بك من الهمِّ والحزنِ، والعجزِ والكسلِ، والبُخلِ والجُبنِ، وضَلَعِ الدَّينِ، وغَلَبَةِ الرجالِ</span>)</li>
                <li></li>
                <li>(<span>أعوذُ بكلماتِ اللهِ التَّامَّاتِ مِن شرِّ ما خلَق لم يضُرَّك</span>).</li>
                <li>(<span>اللهمَّ فاطرَ السمواتِ والأرضِ، عالمَ الغيبِ والشهادةِ، لا إلهَ إلَّا أنتَ ربَّ كلِّ شيءٍ ومَليكَه، أعوذُ بك من شرِّ نفسي ومن شرِّ الشيطانِ وشرَكِه، وأنْ أقترفَ على نفسي سوءًا أو أجرَّهُ إلى مسلمٍ</span>)</li>
                <li>(<span>اللهُمَّ إني أَسْأَلُكَ العافيةَ في الدنيا والآخرةِ، اللهُمَّ إني أَسْأَلُكَ العَفْوَ والعافيةَ في دِينِي ودُنْيَايَ، وأهلي ومالي، اللهُمَّ اسْتُرْ عَوْراتِي وآمِنْ رَوْعاتِي، اللهُمَّ احْفَظْنِي من بينِ يَدَيَّ، ومن خلفي، وعن يميني، وعن شمالي، ومن فوقي، وأعوذ بعَظَمَتِكَ أنْ أُغْتالَ من تحتي</span>)</li>
                <li>(<span>اللَّهمَّ بِكَ أصبحنا وبِكَ أمسينا، وبِكَ نحيا وبِكَ نموتُ، وإليْكَ المصيرُ، وإذا أمسى فليقل: اللَّهمَّ بِكَ أمسينا وبِكَ أصبحنا، وبِكَ نحيا وبِكَ نموتُ، وإليْكَ النُّشورُ</span>).</li>
                <li>(<span>لا إلهَ إلا اللهُ وحدَه، لا شريكَ له، له الملكُ، وله الحمدُ، وهو على كلِّ شيءٍ قديرٍ</span>).</li>
                <li>(<span>يا حيُّ يا قيُّومُ برَحمتِكَ أستَغيثُ أصلِح لي شأني كُلَّهُ ولا تَكِلني إلى نَفسي طرفةَ عينٍ</span>).</li>
                <li>(<span>أَمْسَيْنَا وَأَمْسَى المُلْكُ لِلَّهِ، وَالْحَمْدُ لِلَّهِ لا إلَهَ إلَّا اللَّهُ، وَحْدَهُ لا شَرِيكَ له، له المُلْكُ وَلَهُ الحَمْدُ وَهو علَى كُلِّ شيءٍ قَدِيرٌ، رَبِّ أَسْأَلُكَ خَيْرَ ما في هذِه اللَّيْلَةِ وَخَيْرَ ما بَعْدَهَا، وَأَعُوذُ بكَ مِن شَرِّ ما في هذِه اللَّيْلَةِ وَشَرِّ ما بَعْدَهَا، رَبِّ أَعُوذُ بكَ مِنَ الكَسَلِ وَسُوءِ الكِبَرِ، رَبِّ أَعُوذُ بكَ مِن عَذَابٍ في النَّارِ وَعَذَابٍ في القَبْرِ وإذَا أَصْبَحَ قالَ ذلكَ أَيْضًا: أَصْبَحْنَا وَأَصْبَحَ المُلْكُ لِلَّهِ</span>).</li>
                <li>(<span>رَضِيتُ بِاللهِ رَبًّا، وَبِالْإِسْلَامِ دِينًا، وَبِمُحَمَّدٍ صَلَّى اللهُ عَلَيْهِ وَسَلَّمَ نَبِيًّا، إِلَّا كَانَ حَقًّا عَلَى اللهِ أَنْ يُرْضِيَهُ يَوْمَ الْقِيَامَةِ</span>).</li>
                <li>
                    (<span>بسمِ اللَّهِ الَّذي لا يضرُّ معَ اسمِهِ شيءٌ في الأرضِ ولا في السَّماءِ، وَهوَ السَّميعُ العليمُ، ثلاثَ مرَّاتٍ</span>).
                    <p>كما رُوِي عن رَسُولَ اللَّهِ صَلَّى اللَّهُ عَلَيْهِ وَسَلَّمَ قوله: (<span>ما من عبدٍ يقولُ في صباحِ كلِّ يومٍ ومساءِ كلِّ ليلةٍ: بسمِ اللَّهِ الَّذي لا يضرُّ معَ اسمِهِ شيءٌ في الأرضِ ولا في السَّماءِ، وَهوَ السَّميعُ العليمُ، ثلاثَ مرَّاتٍ، إلا لم يضرَّهُ شيءٌ</span>).</p>
                </li>
                <li>(<span>حَسبيَ اللَّهُ لا إلَهَ إلَّا هوَ، عليهِ توَكَّلتُ وَهوَ ربُّ العرشِ العظيمِ، سَبعَ مرَّاتٍ</span>).</li>
                <li>(<span>اللهم عافني في بدني، اللهم عافني في سمعي، اللهم عافني في بصري، اللهم إني أعوذ بك من الكفر والفقر، اللهم إني أعوذ بك من عذاب القبر، لا إله إلا أنت</span>).</li>
                <li>(<span>اللَّهمَّ ما أصبَح بي مِن نعمةٍ أو بأحَدٍ مِن خَلْقِكَ، فمنكَ وحدَكَ لا شريكَ لكَ، فلَكَ الحمدُ ولكَ الشُّكرُ، فقد أدى شُكْرَ ذلكَ اليومِ</span>)</li>
                <li>(<span>سُبْحَانَ اللهِ وَبِحَمْدِهِ، عَدَدَ خَلْقِهِ وَرِضَا نَفْسِهِ وَزِنَةَ عَرْشِهِ وَمِدَادَ كَلِمَاتِهِ</span>)</li>
                <li>(<span>اللهمَّ إني أصبحتُ أُشْهدُك وأُشْهِدُ حملةَ عرشِك، وملائكتِك، وجميعَ خلقِك، أنك أنت اللهُ الذي لا إله إلا أنت، وأن محمدًا عبدُك ورسولُك</span>).</li>
                <li>(<span>سُبْحَانَ اللهِ وبِحَمْدِهِ، أسْتَغْفِرُ اللَّهَ وأَتُوبُ إلَيْهِ</span>)</li>
                <li>(<span>أمسَينا وأمسَى الملكُ للَّهِ، والحمدُ للَّهِ لا إلَهَ إلَّا اللَّهُ وحدَهُ لا شريكَ لَهُ - أراهُ قالَ -: لَهُ المُلكُ ولَهُ الحمدُ، وَهوَ علَى كلِّ شيءٍ قديرٌ، أسألُكَ خَيرَ ما في هذِهِ اللَّيلةِ وخيرَ ما بعدَها، وأعوذُ بِكَ من شرِّ هذِهِ اللَّيلةِ وشرِّ ما بعدَها، وأعوذُ بِكَ منَ الكسلِ وسوءِ الكبرِ، وأعوذُ بِكَ من عذابِ النَّارِ وعذابِ القبرِ</span> وإذا أصبحَ قالَ ذلِكَ أيضًا: أصبَحنا وأصبحَ المُلكُ للَّهِ والحمدُ للَّهِ)</li>
                <li><span>اللَّهُمَّ أَنْتَ رَبِّي لا إِلَهَ إِلا أَنْتَ ، عَلَيْكَ تَوَكَّلْتُ ، وَأَنْتَ رَبُّ الْعَرْشِ الْعَظِيمِ ، مَا شَاءَ اللَّهُ كَانَ ، وَمَا لَمْ يَشَأْ لَمْ يَكُنْ ، وَلا حَوْلَ وَلا قُوَّةَ إِلا بِاللَّهِ الْعَلِيِّ الْعَظِيمِ ، أَعْلَمُ أَنَّ اللَّهَ عَلَى كُلِّ شَيْءٍ قَدِيرٌ ، وَأَنَّ اللَّهَ قَدْ أَحَاطَ بِكُلِّ شَيْءٍ عِلْمًا ، اللَّهُمَّ إِنِّي أَعُوذُ بِكَ مِنْ شَرِّ نَفْسِي ، وَمِنْ شَرِّ كُلِّ دَابَّةٍ أَنْتَ آخِذٌ بِنَاصِيَتِهَا، إِنَّ رَبِّي عَلَى صِرَاطٍ مُسْتَقِيمٍ</span></li>
            </ul>
        </div>
        <div>
            <samp>فضل أذكار الصباح و المساء</samp>
            <ul>
                <p>ممّا ورد في فضل أذكار الصباح والمساء، وعظيم أجرها وبركتها، ما يأتي:</p>

            
                    <li>أذكار الصباح وأذكار المساء، والمداومة عليها سبب من أسباب:
                        <ul>
                        <li>فتح باب الخيرات والبركات.</li>
                    <li>تحصيل الأجور العظيمة من الله سبحانه.</li>
                    <li>الحفظ والسلامة من شرور الدنيا والآخرة.</li>
                    <li>صلاح العبد، فصلاحه متوقف على صلاح جوارحه، وصلاحها متوقف على صلاح قلبه، وصلاحه لا يتم إلا بمحبة الله وتعظيمه، وهذان لا يتحققان إلا بذكر الله.</li>
                        </ul>
                    </il>
                <li>إشعار العبد بأنه مفتقر إلى ربه، ومحتاج إليه.</li>
                <li>أذكار الصباح والمساء هي أفضل سلاح لدفع الشر قبل وقوعه، وحتى بعد وقوعه.</li>
                <li>أذكار الصباح والمساء قوت للأرواح والقلوب، تورث في القلب السرور، والطمأنينة، والسكينة، والراحة.</li>
                <li>في أذكار الصباح والمساء اعتراف العبد بنعم الله العظيمة عليه، وشكره على تفضّله وإحسانه، وتقوية لصلته بربه.</li>

            </ul>
        </div>
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