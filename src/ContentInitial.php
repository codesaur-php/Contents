<?php namespace codesaur\Contents;

use codesaur\DataObject\MultiModel;

class ContentInitial
{
    public static function reference(MultiModel $model)
    {
    // model: ReferenceModel
    // table: reference
        $model->insert(['lookup' => 'lookup_country', 'Model' => 'CountryModel'], ['en' => ['title' => 'World countries'], 'mn' => ['title' => 'Дэлхийн улсууд']], 'lookup');
        $model->insert(['lookup' => 'lookup_gender', 'Model' => 'LookupModel'], ['en' => ['title' => 'Gender'], 'mn' => ['title' => 'Хүйс']], 'lookup');
        $model->insert(['lookup' => 'lookup_record_type', 'Model' => 'LookupModel'], ['en' => ['title' => 'Types of record'], 'mn' => ['title' => 'Бичлэгийн төрөл']], 'lookup');
        $model->insert(['lookup' => 'lookup_status', 'Model' => 'LookupModel'], ['en' => ['title' => 'Status'], 'mn' => ['title' => 'Төлөв']], 'lookup');
        $model->insert(['lookup' => 'lookup_template_type', 'Model' => 'LookupModel'], ['en' => ['title' => 'Template types'], 'mn' => ['title' => 'Загварын төрөл']], 'lookup');
        $model->insert(['lookup' => 'lookup_page_types', 'Model' => 'LookupModel'], ['en' => ['title' => 'Content Types'], 'mn' => ['title' => 'Агуулгын төрөл']], 'lookup');
        $model->insert(['lookup' => 'lookup_menu_css_types', 'Model' => 'LookupModel'], ['en' => ['title' => 'Menu CSS Types'], 'mn' => ['title' => 'Цэсний хэлбэр']], 'lookup');
        $model->insert(['lookup' => 'lookup_news_types', 'Model' => 'LookupModel'], ['mn' => ['title' => 'Мэдээний төрөл'], 'en' => ['title' => 'News Types']], 'lookup');
        $model->insert(['lookup' => 'lookup_news_category', 'Model' => 'LookupModel'], ['en' => ['title' => 'News category'], 'mn' => ['title' => 'Мэдээний ангилал']], 'lookup');
        $model->insert(['lookup' => 'lookup_blog_style', 'Model' => 'LookupModel'], ['en' => ['title' => 'Blog style'], 'mn' => ['title' => 'Блог загвар']], 'lookup');
    }
    
    public static function lookup_news_types(MultiModel $model)
    {
    // model: LookupModel
    // table: lookup_news_types
        $model->insert(['keyword' => 'general'], ['en' => ['title' => 'General'], 'mn' => ['title' => 'Ерөнхий']]);
        $model->insert(['keyword' => 'video'], ['mn' => ['title' => 'Видео'], 'en' => ['title' => 'Video']]);
        $model->insert(['keyword' => 'announcement'], ['en' => ['title' => 'Announcement'], 'mn' => ['title' => 'Зар мэдээлэл']]);
    }
    
    public static function lookup_news_category(MultiModel $model)
    {
    // model: LookupModel
    // table: lookup_news_category
        $model->insert(['keyword' => 'common', 'type' => 0], ['en' => ['title' => 'Common'], 'mn' => ['title' => 'Нийтлэг']]);
        $model->insert(['keyword' => 'featured', 'type' => 0], ['mn' => ['title' => 'Онцлох'], 'en' => ['title' => 'Featured']]);
        $model->insert(['keyword' => 'hot', 'type' => 0], ['en' => ['title' => 'Hot'], 'mn' => ['title' => 'Халуун']]);
        $model->insert(['keyword' => 'fun', 'type' => 0], ['en' => ['title' => 'Fun'], 'mn' => ['title' => 'Хөгжилтэй']]);
    }
    
    public static function lookup_blog_style(MultiModel $model)
    {
    // model: LookupModel
    // table: lookup_blog_style
        $model->insert(['keyword' => 'normal', 'type' => 0], ['en' => ['title' => 'Normal'], 'mn' => ['title' => 'Энгийн']]);
    }
    
    public static function lookup_gender(MultiModel $model)
    {
    // model: LookupModel
    // table: lookup_gender
        $model->insert(['keyword' => 'male'], ['mn' => ['title' => 'Эрэгтэй'], 'en' => ['title' => 'Male']]);
        $model->insert(['keyword' => 'female'], ['mn' => ['title' => 'Эмэгтэй'], 'en' => ['title' => 'Female']]);
    }
    
    public static function lookup_template_type(MultiModel $model)
    {
    // model: LookupModel
    // table: lookup_template_type
        $model->insert(['keyword' => '1'], ['mn' => ['title' => 'Ерөнхий'], 'en' => ['title' => 'General']]);
        $model->insert(['keyword' => '2'], ['mn' => ['title' => 'Систем'], 'en' => ['title' => 'System']]);
        $model->insert(['keyword' => '3'], ['mn' => ['title' => 'Заавар'], 'en' => ['title' => 'Manual']]);
        $model->insert(['keyword' => '4'], ['mn' => ['title' => 'Сонордуулга'], 'en' => ['title' => 'Notification']]);
        $model->insert(['keyword' => '5'], ['mn' => ['title' => 'Цахим захиа'], 'en' => ['title' => 'Email']]);
    }
    
    public static function lookup_status(MultiModel $model)
    {
    // model: LookupModel
    // table: lookup_status
        $model->insert(['keyword' => '1'], ['mn' => ['title' => 'Идэвхтэй'], 'en' => ['title' => 'Active']]);
        $model->insert(['keyword' => '0'], ['mn' => ['title' => 'Идэвхгүй'], 'en' => ['title' => 'Inactive']]);
    }
    
    public static function lookup_record_type(MultiModel $model)
    {
    // model: LookupModel
    // table: lookup_record_type
        $model->insert(['keyword' => '0'], ['mn' => ['title' => 'sys-defined'], 'en' => ['title' => 'sys-defined']]);
        $model->insert(['keyword' => '1'], ['mn' => ['title' => 'user-defined'], 'en' => ['title' => 'user-defined']]);
    }
    
    public static function lookup_page_types(MultiModel $model)
    {
    // model: LookupModel
    // table: lookup_page_types
        $model->insert(['keyword' => 'menu'], ['en' => ['title' => 'Menu'], 'mn' => ['title' => 'Цэс']]);
        $model->insert(['keyword' => 'special'], ['en' => ['title' => 'Special'], 'mn' => ['title' => 'Тусгай']]);
    }
    
    public static function lookup_menu_css_types(MultiModel $model)
    {
    // model: LookupModel
    // table: lookup_menu_css_types
        $model->insert(['keyword' => 'default'], ['en' => ['title' => 'Default'], 'mn' => ['title' => 'Энгийн']]);
        $model->insert(['keyword' => 'dropdown'], ['en' => ['title' => 'Dropdown Menu'], 'mn' => ['title' => 'Унжих цэс']]);
        $model->insert(['keyword' => 'megamenu'], ['en' => ['title' => 'Mega Menu'], 'mn' => ['title' => 'Мега цэс']]);
    }
    
    public static function templates(MultiModel $model)
    {
    // generated by codesaur - framework| 2020-10-29 15:30:42 | 202.179.27.179
    // model: ContentModel
    // table: templates
        $model->insert(array('keyword' => 'tos'), array('mn' => array('title' => 'Веб систем хэрэглэх ерөнхий нөхцөлүүд', 'short' => 'Энэхүү вебсайтад нэвтэрснээр та веб системийг хэрэглэх нөхцөл болон дагах хууль журмыг зөвшөөрсөн гэж үзэх бөгөөд дотоод хуулийг дагаж мөрдөх хариуцлагыг хүлээн зөвшөөрнө.', 'full' => '<h5>1. Нөхцөл</h5>Энэхүү вебсайтад нэвтэрснээр та веб системийг хэрэглэх нөхцөл болон дагах хууль журмыг зөвшөөрсөн гэж үзэх бөгөөд дотоод хуулийг дагаж мөрдөх хариуцлагыг хүлээн зөвшөөрнө. Хэрэв эдгээр нөхцлийг зөвшөөрөөгүй тохиолдолд вебсайтыг хэрэглэх болон нэвтрэх эрхгүй юм. Тус вебсайтад агуулагдах материалууд нь худалдааны тэмдгийн хууль болон зохиогчийн эрхийн дагуу хамгаалагдсан болно.<h5>2. Лицензийг хэрэглэх</h5><ol type="a"><li>Зөвхөн түр хугацаанд арилжааны бус хувийн сонирхлоор харахын тулд вебсайтад байрлах материалын нэг хувийг урьдчилан татаж авахаар зөвшөөрөл олгогдсон. Энэ нь лицензийн олголт юм, эрхийн шилжүүлэлт биш бөгөөд энэхүү лицензд хамаарагдахгүй зүйлс:<ul><li>материалыг өөрчлөх болон хуулбарлах;</li><li>материалыг ямар нэгэн арилжааны зорилгоор ашиглах, эсвэл олон нийтэд харуулах (арлилжааны болон арилжааны бус);</li><li>вебсайтад байрлах аливаа материалыг хөрвүүлэх эсвэл утга, чиглэлийг нь өөрчлөх;</li><li>материалаас зохиогчийн эрх болон өмчлөгчийн тамга тэмдэглэгээг арилгах, устгах;</li><li>материалыг бусдад шилжүүлэх болон бусад сүлжээнд хуулбарлан тавих;</li></ul></li><li>Хэрэв эдгээр хоригийг зөрчсөн тохиолдолд лиценз цуцлагдах боломжтой. Материалыг харах эрхгүй болсон болон лиценз цуцлагдсан үед татаж авсан бүх електрон болон хэвлэсэн хэлбэрээр байгаа материалуудыг устгах ёстой.</li></ol><h5>3. Татгалзах</h5><ol type="a"><li>Bебсайтад байрлаж буй материалууд нь өөрийн байгаа хэлбэрээрээ байршсан болно. Веб систем нь хязгаарлалтгүй, битүү баталгаа эсвэл энгийн хэрэглээнд нийцэх байдлын нөхцөл, зохих зорилгын таарамж, эсвэл оюуны өмчийн халдашгүй байдал болон бусад эрхийн зөрчил зэрэг байдлуудад аливаа баталгаа гаргахгүй болно.</li></ol><h5>4. Хязгаарлалт</h5>Веб систем болон түүний нийлүүлэгч нь вебсайтад тулгарсан материалыг хэрэглэх явцад гарсан аливаа эвдрэл гэмтэлд (мэдээлэл болон хангамжын алдагдал, эсвэл ажил хэргийн саатал) веб систем болон түүний албан ёсны төлөөлөгч амаар болон бичгээр тулгарч магадгүй эвдрэлийг сануулсан ч сануулаагүй ч хариуцлага хүлээхгүй болно. Яагаад гэвэл зарим шүүх битүү баталгаанд эсвэл эвдрэл гэмтлийн хариуцлагын хязгаарлалт тавихыг зөвшөөрдөггүй, эдгээр хязгаарлалт нь магадгүй танд хэрэгжихгүй болно.<h5>5. Хэвлэлийн алдаа болон хяналт</h5>Вебсайтад байрлах материалууд нь техникийн болон хэвлэлийн эсвэл гэрэл зургийн алдаа агуулсан байж болзошгүй юм. Веб систем нь өөрийн вебсайтад байрлах материалууд нь үнэн зөв, бүрэн бүтэн, эсвэл сүүлийн үеийн байх зэрэгт баталгаа гаргахгүй болно. Веб систем нь өөрийн вебсайтад байрлах материалуудад хэдийд ч мэдэгдэл хийхгүйгээр өөрчлөлт оруулж болно. Веб систем нь материалуудыг шинэчлэхэд үүрэг хүлээхгүй болно.<h5>6. Холбоосууд</h5>Веб систем нь өөрийн вебсайтад байрлах бусад вебсайтуудын холбоосыг хянан шалгаж үзээгүй бөгөөд уг вебсайтуудад байрлах агууламжид хариуцлага хүлээхгүй болно. Холбоосууд вебсайтад байрлаж байгаа нь веб системийн баталгаатай гэсэн ойлголт биш юм. Тухайн холбоостой вебсайтуудын хэрэглэгчийн эрсдэл нь тус хэрэглэгчийн өөрийн эрсдэл болно.<h5>7. Сайтыг хэрэглэх нөхцлийн өөрчлөлт</h5>Веб систем нь өөрийн вебсайтын хэрэглэх нөхцлийг дахин авч хэлэлцэн мэдэгдэл хийхгүйгээр хэдийд ч өөрчлөх эрхтэй болно. Тус вебсайтыг хэрэглсэнээр одоогын сайт хэрэглэх нөхцлийн хувилбарыг зөвшөөрсөнд тооцогдох болно.<h5>8. Захирагдах хууль</h5>Веб систем, вебсайттай холбоотой аливаа зарга нэхэмжлэлийг хуулийн заалтын маргааныг хамаарахгүйгээр Монгол Улсын хуулийн дагуу шийдвэрлүүлнэ.'), 'en' => array('title' => 'Web Site Terms and Conditions of Use', 'short' => 'By accessing this web site, you are agreeing to be bound by these web site Terms and Conditions of Use, all applicable laws and regulations, and agree that you are responsible for compliance with any applicable local laws.', 'full' => '<h5>1. Terms</h5>By accessing this web site, you are agreeing to be bound by these web site Terms and Conditions of Use, all applicable laws and regulations, and agree that you are responsible for compliance with any applicable local laws. If you do not agree with any of these terms, you are prohibited from using or accessing this site. The materials contained in this web site are protected by applicable copyright and trade mark law.<h5>2. Use License</h5><ol type="a"><li>Permission is granted to temporarily download one copy of the materials (information or software) on web site for personal, non-commercial transitory viewing only. This is the grant of a license, not a transfer of title, and under this license you may not:<ul><li>modify or copy the materials;</li><li>use the materials for any commercial purpose, or for any public display (commercial or non-commercial);</li><li>attempt to decompile or reverse engineer any software contained on web site;</li><li>remove any copyright or other proprietary notations from the materials; or</li><li>transfer the materials to another person or "mirror" the materials on any other server.</li></ul></li><li>This license shall automatically terminate if you violate any of these restrictions and may be terminated by web system at any time. Upon terminating your viewing of these materials or upon the termination of this license, you must destroy any downloaded materials in your possession whether in electronic or printed format.</li></ol><h5>3. Disclaimer</h5><ol type="a"><li>The materials on web site are provided "as is". Web system makes no warranties, expressed or implied, and hereby disclaims and negates all other warranties, including without limitation, implied warranties or conditions of merchantability, fitness for a particular purpose, or non-infringement of intellectual property or other violation of rights. Further, web system does not warrant or make any representations concerning the accuracy, likely results, or reliability of the use of the materials on its Internet web site or otherwise relating to such materials or on any sites linked to this site.</li></ol><h5>4. Limitations</h5>In no event shall web system or its suppliers be liable for any damages (including, without limitation, damages for loss of data or profit, or due to business interruption,) arising out of the use or inability to use the materials on web site, even if web system or a its authorized representative has been notified orally or in writing of the possibility of such damage. Because some jurisdictions do not allow limitations on implied warranties, or limitations of liability for consequential or incidental damages, these limitations may not apply to you.<h5>5. Revisions and Errata</h5>The materials appearing on web site could include technical, typographical, or photographic errors. Web system does not warrant that any of the materials on its web site are accurate, complete, or current. Web system may make changes to the materials contained on its web site at any time without notice. Web system does not, however, make any commitment to update the materials.<h5>6. Links</h5>Web system has not reviewed all of the sites linked to its Internet web site and is not responsible for the contents of any such linked site. The inclusion of any link does not imply endorsement by web system of the site. Use of any such linked web site is at the user\'s own risk.<h5>7. Site Terms of Use Modifications</h5>Web system may revise these terms of use for its web site at any time without notice. By using this web site you are agreeing to be bound by the then current version of these Terms and Conditions of Use.<h5>8. Governing Law</h5>Any claim relating to web site shall be governed by the laws of Mongolia without regard to its conflict of law provisions.')));
        $model->insert(array('keyword' => 'pp'), array('mn' => array('title' => 'Хувийн мэдээлэл нууцлалын бодлого', 'short' => 'Таны хувийн нууц бол бидэнд маш чухал. Үүнтэй холбогдуулан бид хувь хүний мэдээллийг хэрхэн цуглуулдаг, хэрэглэдэг, харилцдаг зэрэг хувийн мэдээллийн хэрэглээг ойлгуулах зорилгын доор энэхүү бодлогыг боловсруулсан юм.', 'full' => 'Таны хувийн нууц бол бидэнд маш чухал. Үүнтэй холбогдуулан бид хувь хүний мэдээллийг хэрхэн цуглуулдаг, хэрэглэдэг, харилцдаг зэрэг хувийн мэдээллийн хэрэглээг ойлгуулах зорилгын доор энэхүү бодлогыг боловсруулсан юм. Нууцлалын бодлогыг доор дурьдав.<br/><ul><li>Хувийн мэдээллийг цуглуулахын өмнө эсвэл тухайн үед нь бид ямар зорилгоор уг мэдээллийг цуглуулж байгаа тухай тодорхойлж байх болно.</li><li>Бид тухайн хувийн мэдээллийг тусгайлан зөвшөөрөл аваагүй эсвэл хуулийн дагуу шаардагдаагүй үед зөвхөн тодорхойлсон зорилго буюу түүнтэй зохилдох зорилгуудын дагуу ашиглах болно.</li><li>Бид хувийн мэдээллийг зөвхөн зорилго биелэх хүртэл шаардлагын дагуу хадгалах болно.</li><li>Бид хувийн мэдээллийг хуулийн дагуу ба үнэн шударгаар тохиромжит үед нь мэдлэгтэйгээр эсвэл тусгай зөвшөөрөл авсанаар цуглуулах болно.</li><li>Зорилгын дагуу ашиглагдах хувийн мэдээллүүд тухайн зорилготой холбоотой байх бөгөөд зорилгын нийт хэрэгцээний дагуу үнэн зөв, бүрэн бүтэн ба сүүлийн үеийн байх шаардлагатай.</li><li>Бид хувийн мэдээллийг алдагдал болон хулгайлалтаас түүнчлэн хууль бус нэвтрэлт, мэдээлэл задруулалт, хуулбарлалт болон өөрчлөлт зэргээс боломжит харуул хамгаалалтаар хамгаалах болно.</li><li>Хэрэглэгчидээ хувийн мэдээллийн зохион байгуулалттай холбоотой манай бодлого болон нууцлалын талаарх дадлагажилтаар хангагдах боломжийг бүрдүүлнэ.</li></ul>Бид хувийн мэдээллийн нууцлал нь аюулгүй байдлаар хангагдаж байгаа болохыг батлан өөрсдийн ажил хэргийг эдгээр хэм хэмжээ, зарчимын дагуу эрхлэн явуулдаг юм.'), 'en' => array('title' => 'Privacy Policy', 'short' => 'Your privacy is very important to us. Accordingly, we have developed this Policy in order for you to understand how we collect, use, communicate and disclose and make use of personal information.', 'full' => 'Your privacy is very important to us. Accordingly, we have developed this Policy in order for you to understand how we collect, use, communicate and disclose and make use of personal information. The following outlines our privacy policy.<br/><ul><li>Before or at the time of collecting personal information, we will identify the purposes for which information is being collected.</li><li>We will collect and use of personal information solely with the objective of fulfilling those purposes specified by us and for other compatible purposes, unless we obtain the consent of the individual concerned or as required by law.</li><li>We will only retain personal information as long as necessary for the fulfillment of those purposes.</li><li>We will collect personal information by lawful and fair means and, where appropriate, with the knowledge or consent of the individual concerned.</li><li>Personal data should be relevant to the purposes for which it is to be used, and, to the extent necessary for those purposes, should be accurate, complete, and up-to-date.</li><li>We will protect personal information by reasonable security safeguards against loss or theft, as well as unauthorized access, disclosure, copying, use or modification.</li><li>We will make readily available to customers information about our policies and practices relating to the management of personal information.</li></ul>We are committed to conducting our business in accordance with these principles in order to ensure that the confidentiality of personal information is protected and maintained.')));
        $model->insert(array('keyword' => 'forgotten-password-reset'), array('mn' => array('title' => 'Нууг үг дахин тааруулах', 'short' => '', 'full' => '<p>Хэн нэгэн (таныг гэж найдаж байна) системийн {{ email }} хаяг бүхий хэрэглэгчийн нууц үгийг шинээр тааруулах хүсэлт илгээсэн байна.</p><p>Одоогоор таны хэрэглэгчийн тохиргоонд ямар нэгэн өөрчлөлт ороогүй байгаа билээ.</p><p> </p><p>Та дараах холбоосыг дарж нууц үгээ шинээр тааруулах боломжтой:</p><p>{{ link }}</p><p> </p><p>Хэрвээ та энэхүү хүсэлтийг илгээгүй бол, бидэнд хариу бичиж энэ тухайгаа мэдэгдэнэ үү.</p><p>Нууг үгийг солих холбоос зөвхөн 5 минутын туршид хүчинтэй байх болно.</p><p> </p><p>Хүндэтгэсэн,</p><p>Хөгжүүлэгчдийн баг.</p>'), 'en' => array('title' => 'Forgotten password reset', 'short' => '', 'full' => '<p> </p><p>Somebody (hopefully you) requested a new password for account for {{ email }}.</p><p>No changes have been made to your account yet.</p><p> </p><p>You can reset your password by clicking the link below:</p><p>{{ link }}</p><p> </p><p>If you did no request a new password, please let us know immediately by replying to this email.</p><p>This password reset is only valid for the next 5 minutes.</p><p> </p><p>Yours,</p><p>Support Team</p>')));
        $model->insert(array('keyword' => 'request-new-account'), array('mn' => array('title' => 'Хэрэглэгчээр бүртгүүлэх хүсэлт', 'short' => '', 'full' => '<p>Сайн байна уу, эрхэм {{ username }}!</p><p> </p><p>Та манай систем дээр [{{ username }}] нэр, [{{ email }}] хаяг бүхий шинэ хэрэглэгч бүртгүүлэх хүсэлт илгээсэн байна.</p><p>Одоогоор уг хүсэлтийн дагуу шинэ хэрэглэгчийг бид системдээ албан ёсоор бүртгээгүй байгаа билээ.</p><p>Манай систем админ хүсэлтийн дагуу мэдээллийг шалгаж үзээд тохирох үйлдлийг хийх болно.</p><p>Бидний зүгээс баталгаажсан хариуг дахин илгээх хүртэл та түр хүлээнэ үү.</p><p> </p><p>Хэрвээ та энэхүү хүсэлтийг илгээгүй бол, бидэнд хариу бичиж энэ тухайгаа мэдэгдэнэ үү.</p><p> </p><p>Хүндэтгэсэн,</p><p>Хөгжүүлэгчдийн баг.</p>'), 'en' => array('title' => 'Хэрэглэгчээр бүртгүүлэх хүсэлт', 'short' => '', 'full' => '<p>Сайн байна уу, эрхэм {{ username }}!</p><p> </p><p>Та манай систем дээр [{{ username }}] нэр, [{{ email }}] хаяг бүхий шинэ хэрэглэгч бүртгүүлэх хүсэлт илгээсэн байна.</p><p>Одоогоор уг хүсэлтийн дагуу шинэ хэрэглэгчийг бид системдээ албан ёсоор бүртгээгүй байгаа билээ.</p><p>Манай систем админ хүсэлтийн дагуу мэдээллийг шалгаж үзээд тохирох үйлдлийг хийх болно.</p><p>Бидний зүгээс баталгаажсан хариуг дахин илгээх хүртэл та түр хүлээнэ үү.</p><p> </p><p>Хэрвээ та энэхүү хүсэлтийг илгээгүй бол, бидэнд хариу бичиж энэ тухайгаа мэдэгдэнэ үү.</p><p> </p><p>Хүндэтгэсэн,</p><p>Хөгжүүлэгчдийн баг.</p>')));
        $model->insert(array('keyword' => 'approve-new-account'), array('mn' => array('title' => 'Хэрэглэгчийн бүртгэл баталгаажлаа', 'short' => '', 'full' => '<p>Сайн байна уу, эрхэм {{ username }}?</p><p>Таньд энэ өдрийн мэнд хүргэе!</p><p> </p><p>Таны бүртгэл баталгаажиж хэрэглэгч амжилттай үүслээ.</p><p>Та {{ login }} хаягаар зочилж, өөрийн бүртгүүлсэн нууц үгээ ашиглан системд нэвтэрнэ үү.</p><p>Нэвтрэх нэр: <strong>{{ username }}</strong> эсвэл <strong>{{ email }}</strong></p><p> </p><p>Хүндэтгэсэн,</p><p>Хөгжүүлэгчдийн баг.</p>'), 'en' => array('title' => 'Хэрэглэгчийн бүртгэл баталгаажлаа', 'short' => '', 'full' => '<p>Сайн байна уу, эрхэм {{ username }}?</p><p>Таньд энэ өдрийн мэнд хүргэе!</p><p> </p><p>Таны бүртгэл баталгаажиж хэрэглэгч амжилттай үүслээ.</p><p>Та {{ login }} хаягаар зочилж, өөрийн бүртгүүлсэн нууц үгээ ашиглан системд нэвтэрнэ үү.</p><p>Нэвтрэх нэр: <strong>{{ username }}</strong> эсвэл <strong>{{ email }}</strong></p><p> </p><p>Хүндэтгэсэн,</p><p>Хөгжүүлэгчдийн баг.</p>')));
    }
}
