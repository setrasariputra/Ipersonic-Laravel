<?php

namespace App\Services;

use App\Http\Requests\QuizRequest\PostQuizRequest;

class QuizServiceService
{
    public function defineQuiz() {
        try {
            $step = [];
            $step[] = array(
                'step' => array(
                    'init' => 'step-1',
                    'label' => 'Langkah 1'
                ),
                'options' => array(
                    'A' => 'Saya agak ramah, membuka hati dan saya suka berada bersama-sama dengan orang lain.',
                    'B' => 'Saya membutuhkan banyak waktu untuk sendirian dan agak hati-hati untuk memulai hubungan baru.'
                )
            );
            $step[] = array(
                'step' => array(
                    'init' => 'step-2',
                    'label' => 'Langkah 2'
                ),
                'options' => array(
                    'A' => 'Saya lebih suka bekerja praktis, menghasilkan hasil yang nyata.',
                    'B' => 'Saya lebih suka bekerja secara teori, mengembangkan ide-ide dan konsep baru.'
                )
            );
            $step[] = array(
                'step' => array(
                    'init' => 'step-3',
                    'label' => 'Langkah 3'
                ),
                'options' => array(
                    'A' => 'Saya pintar dalam hal analisis dan logika dan ketika saya ragu, saya membiarkan diri saya dipandu oleh otak saya.',
                    'B' => 'Saya sangat sensitif dan emosional dan bila ragu, aku membiarkan diriku dibimbing oleh hati saya.'
                )
            );
            $step[] = array(
                'step' => array(
                    'init' => 'step-4',
                    'label' => 'Langkah 4'
                ),
                'options' => array(
                    'A' => 'Saya orang yang fleksibel dan spontan, kadang-kadang agak kacau.',
                    'B' => 'Saya orang yang handal dan terorganisir dengan baik. Saya lebih memilih untuk merencanakan masa depan.'
                )
            );
            return $step;
        } catch (\Exception $e) {
            logger()->error('Error in setQuiz: ' . $e->getMessage());
            throw $e;
        }
    }

    public function defineResult() {
        try {
            $result = [];
            $result[] = array(
                'accumulate' => 'AAAA',
                'label' => 'Pelaku Bersemangat',
                'slug' => 'pelaku-bersemangat',
                'description' => '<p><strong>Tipe Pelaku Bersemangat</strong> adalah orang-orang periang dan spontan. Mereka penuh pesona, dipenuhi energi, dan pelaku-pelaku sesungguhnya. Mereka memiliki pemikiran dan pandangan yang jernih sekalipun sedang berada dalam situasi sulit. Ini membuat mereka dikenal sebagai pemecah masalah yang jitu. Kemampuan mereka dalam menyerap dan memroses informasi sangat fenomenal. Tipe Pelaku Bersemangat juga memiliki kekuatan dalam pengamatan dan perasaan tajam saat berhadapan dengan orang lain. Mereka mudah memahami, jenaka, dan cerdas. Mereka memiliki kemampuan alami meyakinkan orang lain akan pandangan mereka. Tipe Pelaku Bersemangat hidup dalam kekinian dan membuat keputusan-keputusan spontan dari waktu ke waktu. Mereka senang bersama-sama dengan orang lain dan adalah pebincang yang perasa, riang, dan menghibur. Tidak masalah bagi mereka menjadi pusat keriaan dalam sebuah pesta dan mereka adalah tuan rumah yang baik, murah hati, dan trampil. Mereka tidak berlama-lama memikirkan konsekuensi; dengan cepat mereka menangkap seluruh fakta yang relevan, membuat keputusan pragmatis, lalu melaksanakan keputusan itu dengan penuh semangat. Jika suatu keputusan ternyata keliru di kemudian hari, mereka selalu dapat membuat rencana baru.</p>
                <p>Tipe Pelaku Bersemangat dengan magis menarik keriaan dan aksi. Mereka membutuhkan dorongan itu – sejauh memungkinkan dengan orang lain. Banyak contoh dari tipe ini memiliki hobi berbahaya atau menceburkan diri pada olahraga ekstrem. Dengan cukup sadar mereka menempatkan diri dalam situasi berbahaya berulang-ulang. Dalam pekerjaan, tipe Pelaku Bersemangat juga mengutamakan kesenangan dan keragaman. Mereka bosan setengah mati dengan rutinitas, keamanan, dan perhitungan. Krisis adalah ramuan mujarab bagi hidup mereka dan sungguh-sungguh memunculkan kekuatan mereka. Mereka bereaksi terhadap tantangan-tantangan baru dengan luwes dan efektif. Mereka mendapatkan rasa percaya diri mereka dari keyakinan diri yang tak tergoyahkan sehingga mampu menghadapinya. Tipe Pelaku Bersemangat lebih menyukai kegiatan praktis yang menelurkan hasil nyata ketimbang bidang-bidang pekerjaan teoritis. Diskusi yang tidak ada habisnya dengan rekan kerja dengan cepat membuat mereka jengkel dan mereka tidak memiliki kesabaran untuk berbasa-basi. Mereka mengungkapkan bagaimana sesuatu harus dilakukan, dan demikianlah harus dilakukan!</p>
                <p>Tipe Pelaku Bersemangat membuat teman-teman mereka menunggu-nunggu kejenakaan, semangat, dan kelincahan mereka dalam berkomentar. Kebanyakan dari mereka memiliki lingkaran teman dan kenalan yang besar namun biasanya tidak berkomitmen dalam hubungan mereka. Mereka mengharapkan sifat bisa diandalkan dan toleransi dari teman-teman terbaik mereka namun juga bersedia melakukan hal yang sama kepada mereka. Namun demikian, karena sifat spontan mereka, mereka selalu agak mengejutkan dan tidak mudah ditebak, juga bagi pasangan mereka. Tipe Pelaku Bersemangat membutuhkan banyak ruang dan waktu untuk diri sendiri; mereka dengan cepat merasa terkepung jika pasangan mereka terlalu berantung pada mereka. Namun jika Anda memberinya cukup kelonggaran, mereka adalah pasangan hidup murah hati, periang, dan sangat imajinatif yang dengan mereka Anda dapat bersenang-senang dan menikmati hidup sebaik-baiknya. Mereka tidak menghindari konflik namun sebaliknya menghadapinya dengan terbuka dan kadang-kadang perselisihan benar-benar terjadi. Tapi ini tipikal para Pelaku Bersemangat dan, sesudahnya, mereka malah lebih mengabdi dan penuh kasih sayang.'
            );
            $result[] = array(
                'accumulate' => 'AAAB',
                'label' => 'Realis Bertekad',
                'slug' => 'realis-bertekad',
                'description' => '<p><strong>Tipe Realis Bertekad</strong> senang memangku tanggung jawab dan menyambut tantangan. Mereka orang-orang yang stabil dan dapat diandalkan. Kontak dengan pihak luar sangat penting bagi mereka; mereka mudah berbaur dan sangat aktif. Mereka pengorganisir ulung dan sangat senang jika hal-hal dilakukan dengan benar serta tepat waktu; mereka dapat dengan cepat bereaksi tidak sabar jika orang lain tidak sesungguh-sungguh, seteratur, dan sepatuh mereka. Mereka lebih menyukai pekerjaan terstruktur yang menelurkan hasil nyata dengan cepat ketimbang proses abstrak yang membutuhkan waktu lama untuk mewujud. Tipe Realis Bertekad tidak keberatan dengan rutinitas selama itu mendorong efisiensi. Namun demikian, mereka sangat tidak menyukai kejadian-kejadian tak terduga dan tak tertebak yang mengacaukan rencana-rencana cermat mereka. Begitu mereka berkomitmen terhadap suatu alasan, mereka melakukannya dengan pengabdian dan bersedia berkorban cukup banyak deminya.</p>
                <p>Tipe Realis Bertekad tidak menghindari konflik dan kritik namun menghadapinya dan mencari penyelesaian. Karena mereka memiliki mata yang tajam dalam mencari kesalahan dan kelemahan orang lain dan seringkali cepat melontarkan kritik, kadang-kadang mereka membuat orang lain tersinggung khususnya ketika sedang marah serta menarik kesimpulan terlalu cepat. Karena sifat adil mereka yang menonjol, mereka dengan cepat bersedia mengoreksi diri dan tidak pernah tersinggung jika seseorang bicara jujur kepada mereka. Anda tidak perlu mencari motif tersembunyi jika bersama mereka; Anda selalu tahu di mana posisi Anda. Tipe Realis Bertekad sering ditemukan di posisi pelaksana karena mereka mengkombinasikan komitmen, kompetensi, dan kemampuan untuk bersikap. Di waktu luang, mereka juga sering menerima tanggung jawab di perkumpulan atau lembaga lain.</p>
                <p>Tradisi dianggap penting oleh Tipe Realis Bertekad. Mereka menghadiri tiap acara keluarga dan tidak pernah melupakan hari ulang tahun atau ulang tahun pernikahan. Keluarga dan teman sangat penting bagi mereka. Dengan sikap terbuka dan komunikatif mereka, mereka mudah mengenal orang dan memiliki lingkaran teman dan kenalan yang besar. Mereka tidak pernah berpura-pura, dan sebaliknya adalah teman-teman yang dapat diandalkan dan setia serta selalu siap kapan pun mereka dibutuhkan. Tipe Realis Bertekad menganggap hubungan mereka dengan sangat serius – mereka mendambakan pasangan seumur hidup. Dalam hubungan asmara, mereka mementingkan stabilitas dan kesetiaan dan di sini mereka juga bersedia mengutamakan kebersamaan yang harmonis. Tipe Realis Bertekad ahli mengatasi krisis atau masa-masa sulit dengan tenang; mereka tidak pernah terpikir untuk mengingkari janji yang sudah mereka lontarkan. Sebagai pasangan, Anda dapat selalu mengandalkan dukungan mereka.'
            );
            $result[] = array(
                'accumulate' => 'AABA',
                'label' => 'Pelaku Santai',
                'slug' => 'pelaku-santai',
                'description' => '<p><strong>Tipe Pelaku Santai</strong> adalah orang-orang yang ramah dan bahagia. Mereka menikmati kebersamaan dengan orang lain. Cerdas, pandai bicara, jenaka dan penuh pesona, mereka suka menjadi pusat perhatian. Mereka tidak suka sendiri. Semangat hidup mereka membuat orang lain merasa nyaman ditemani mereka dan membuat mereka cepat mengenal orang lain. Tipe Pelaku Santai menikmati saat-saat terbaik dari tiap kesempatan – banyak orang tipe ini berbakat membuat seluruh hidup mereka bagaikan suatu pesta besar. Kebosanan tidak akan terjadi jika ada mereka karena mereka sangat pandai menghanyutkan orang lain dengan antusiasme, suasana hati riang, dan optimisme mereka.</p>
                <p>Pemikiran abstrak dan filosofis mendalam mengenai arti kehidupan tidak terlalu menarik minat tipe Pelaku Santai. Mereka pragmatis, realistis, dan benar-benar hidup dalam kekinian. Dalam bekerja mereka juga lebih suka jika semuanya sudah siap sehingga mereka bisa menjalankan tekad mereka dengan sebaik-baiknya. Tidak masalah bagi mereka menangani beberapa tugas sekaligus dan mereka justru gemilang di saat genting! Kegiatan dari beragam bidang dengan banyak kontak sosial sangat tepat bagi mereka. Orang juga jarang menemukan mereka berdiam diri saat waktu senggang; karena sifat mereka yang terbuka dan penuh rasa ingin tahu, kebanyakan dari mereka memiliki banyak hobi dan minat. Mereka tidak takut akan hal-hal yang belum mereka ketahui: karena mereka luwes dan kreatif, dengan cepat mereka menyesuaikan diri dengan situasi-situasi baru dan memanfaatkannya dengan baik. Kadang-kadang mereka terlibat konflik dengan peraturan atau hirarki yang ketat, yang langsung membuat mereka merasa terpasung hingga berontak terhadapnya.</p>
                <p>Sebagai teman, tipe Pelaku Santai adalah orang-orang murah hati dan gemar menolong yang sangat mementingkan hubungan harmonis dan suasana yang mendukung. Sikap mudah bergaul mereka membuat mereka memiliki lingkaran besar pertemanan dan mereka suka jika rumah mereka dipenuhi beragam tipe tamu. Dengan senang hati mereka melarutkan diri pada suasana hati dan minat mereka yang spontan ke dalam satu atau dua hal penting saja. Ini membuat mereka kelihatan agak tidak bisa ditebak bagi mereka yang memiliki sifat lebih pendiam. Saat sungguh-sungguh penting, Anda bisa mengandalkan mereka seratus persen. Sebagai pasangan, mereka kreatif, bergerak cepat, dan imajinatif – asalkan pasangan mereka tahu bagaimana membuat mereka terpesona. Mereka nyaris tidak bisa tahan dengan kebosanan atau rutinitas dalam suatu hubungan. Mereka sama sekali tidak menyukai konflik; jika sebuah hubungan jadi membutuhkan terlalu banyak ketahanan atau upaya, mereka cenderung menarik diri dari hubungan tersebut dan mulai mencari pasangan baru. Namun demikian, jika Anda berhasil terus menyalakan rasa ingin tahu mereka dalam jangka panjang dan memberi mereka kejutan dari waktu ke waktu, Anda akan mendapatkan pasangan yang setia dan penuh cinta.'
            );
            $result[] = array(
                'accumulate' => 'ABAA',
                'label' => 'Pemikir Pendobrak',
                'slug' => 'pemikir-pendobrak',
                'description' => '<p><strong>Tipe Pemikir Pendobrak</strong> adalah orang-orang penuh pesona dan antusias. Mereka benar-benar penuh dengan energi dan suka mengambil posisi di tengah-tengah perhatian. Mereka menyukai keragaman baik dalam kehidupan profesional maupun personal. Tipe Pemikir Pendobrak menghadapi perubahan secara konsisten dengan optimisme serta keyakinan teguh dalam kemampuan mereka sendiri; mereka selalu mencari kemungkinan ke arah yang lebih baik. Ketrampilan komunikasi mereka yang cemerlang merupakan keuntungan besar bagi mereka di sini. Mereka mendekati dunia dengan rasa ingin tahu serta keterbukaan dan mengendalikan situasi-situasi baru dengan bakat improvisasi yang besar dan lihai. Waktu luang mereka dihabiskan dengan begitu banyak hobi; kebanyakan tipe Pemikir Pendobrak suka bepergian untuk mengumpulkan sebanyak mungkin pengalaman. Tipe kepribadian ini tak terkalahkan dalam menemukan kemungkinan-kemungkinan baru.</p>
                <p>Dalam bekerja, tipe Pemikir Pendobrak sangat menghargai tantangan dan keragaman pekerjaan. Mereka tidak tahan rutinitas dan pekerjaan yang terlalu mendetail. Mereka suka membuat orang tercengang dengan ide-ide berani untuk proyek orisinil baru kemudian menyerahkan kepada orang lain untuk melaksanakannya. Hirarki, aturan, dan kaidah membangkitkan penolakan mereka dan mereka suka mengakali sistem. Sangat penting bagi mereka untuk menikmati pekerjaan yang mereka lakukan; jika hal itu terjadi, dengan cepat mereka menjadi para pecandu kerja sejati. Kreativitas mereka muncul paling baik saat bekerja sendiri; namun mereka sangat pandai mendorong orang lain dan menulari orang lain dengan sifat optimis mereka. Kegiatan konseptual atau menasehati khususnya menarik bagi tipe Pemikir Pendobrak. Bisa terjadi beberapa orang merasa terkecoh dengan sifat fleksibel dan spontan mereka.</p>
                <p>Keluwesan dalam bergaul serta kesenangan mereka dalam mencoba hal-hal baru membuat tipe Pemikir Pendobrak selalu memiliki lingkaran teman dan kenalan yang luas di mana kegiatan memegang peranan penting. Karena mereka lebih sering bersuasana hati gembira, mereka populer dan sangat terbuka terhadap orang-orang baru. Menggerutu dan kesal tidak ada dalam kamus mereka. Namun demikian, mereka cenderung agak tak dapat ditebak dan tidak stabil saat harus berhadapan dengan kewajiban dan ini membuat mereka tampak tidak dapat diandalkan bagi sebagian orang. Tipe Pemikir Pendobrak sangat kritis dan menuntut saat memilih pasangan karena mereka mencari hubungan ideal dan memiliki gambaran yang sangat nyata mengenai hubungan yang ideal ini. Memiliki tujuan yang sama dalam kehidupan sangat penting bagi mereka. Mereka tidak menyukai kompromi dan lebih memilih melajang ketimbang harus melakukannya. Bagi si pasangan, seringkali merupakan tantangan untuk menjalani hubungan jangka panjang dengan seorang Pemikir Pendobrak. Tipe Pemikir Pendobrak membutuhkan banyak ruang dan keragaman karena jika tidak, mereka akan menjadi bosan dan merasa terkekang. Tipe-tipe yang agak lebih tradisionalis biasanya punya masalah dengan kebersediaan tipe Pemikir Pendobrak untuk mengambil risiko dan tindakan-tindakan mereka yang kadang-kadang gila dan spontan. Namun demikian, jika Anda memiliki cukup keluwesan dan toleransi terhadap mereka, Anda tidak akan pernah bosan dengan kehadiran mereka dan akan selalu memiliki pasangan yang setia dan dapat dipercaya.'
            );
            $result[] = array(
                'accumulate' => 'ABAB',
                'label' => 'Pemikir Dinamis',
                'slug' => 'pemikir-dinamis',
                'description' => '<p><strong>Tipe Pemikir Dinamis</strong> adalah orang-orang yang penuh percaya diri dan mandiri. Mereka memancarkan antusiasme dan energi. Tipe Pemikir Dinamis mengejar tujuan-tujuan mereka dengan aktif dan penuh semangat. Tak ada yang lebih mereka cintai dibanding tantangan-tantangan baru. Tipe ini dilahirkan sebagai pemimpin, kompeten, penuh semangat, dan bertanggung jawab. Mereka memiliki mata yang tajam dalam melihat kesalahan dan dapat mengritik tanpa kenal ampun jika melihat kesuksesan suatu proyek terancam bahaya. Mereka sama sekali tidak peduli apakah mereka mengasingkan orang lain dalam prosesnya. Tapi mereka selalu menerima argumen-argumen objektif; mereka sangat menyukai diskusi, sangat berbakat retorika, dan pandai meyakinkan serta menyemangati orang lain.</p>
                <p>Karena sangat mudah bergaul, tipe Pemikir Dinamis suka jika dikelilingi banyak teman, lebih disukai jenis yang dengannya mereka dapat berbagi minat dan berdiskusi mengenai beragam jenis topik. Mereka sangat blak-blakan tapi tidak pernah dengan maksud jahat. Kalau Anda tahan dihujani kata-kata yang diucapkan tanpa tedeng aling-aling, Anda bisa mendapatkan teman yang setia dan penasehat yang teguh dalam diri mereka. Segala sesuatu yang baru dan tidak dikenal merangsang tipe Pemikir Dinamis dan membangkitkan rasa ingin tahu mereka. Namun demikian, peraturan, rutinitas, dan hal-hal tradisional membangkitkan penolakan mereka. Jika sesuatu tidak berjalan sebagaimana mereka inginkan, mereka dapat bereaksi agak bebal dan keras kepala.</p>
                <p>Tipe Pemikir Dinamis berharap banyak pada diri mereka sendiri dan orang lain. Siapa pun yang tidak cocok dengan rencana mereka tidak akan ditolerir. Kadang-kadang mereka tampak agak kejam karena keterusterangan mereka. Pasangan dan keluarga juga merasa sulit memuaskan tipe Pemikir Dinamis. Mereka tahu persis apa yang mereka inginkan dan berkompromi tak pernah terpikir oleh mereka. Barangsiapa memiliki tipe Pemikir Dinamis sebagai pasangan harus memiliki kepribadian kuat dan memiliki kemandirian tinggi serta rasa percaya diri yang cukup untuk memberi sedikit perlawanan kepada tipe pendominasi ini. Biasanya, bagi tipe Pemikir Dinamis, hubungan dengan pasangan hanya berada di urutan kedua setelah pekerjaan mereka. Namun mereka suka memiliki pendamping yang setara dengan mereka secara intelektual, yang dengannya mereka dapat mengejar tujuan-tujuan bersama dan mengadakan diskusi-diskusi menarik sepanjang malam; lebih disukai diskusi-diskusi faktual – hal-hal sentimental dan asmara bukan kegemaran mereka.'
            );
            $result[] = array(
                'accumulate' => 'AABB',
                'label' => 'Realis Sosial',
                'slug' => 'realis-sosial',
                'description' => '<p><strong>Tipe Realis Sosial</strong> adalah orang-orang populer yang penuh energi. Mereka dapat diandalkan, terorganisir dengan baik, dan senang menolong. Nilai-nilai tradisional penting bagi mereka. Pembentukan keluarga juga memegang peran utama dalam kehidupan mereka. Tipe Realis Sosial memiliki sifat sosial yang menonjol. Mereka selalu siap mendengarkan kegelisahan dan masalah orang lain dan tidak pikir panjang ketika dimintai bantuan. Dengan empati dan pengertian, mereka dapat merasakan apa yang dibutuhkan orang lain. Tipe Realis Sosial selalu bersedia menghargai sifat-sifat baik orang lain dan memaafkan kelemahan orang itu. Mereka yang paling mudah bergaul dari seluruh tipe kepribadian. Kontak sosial sangat penting bagi mereka.</p>
                <p>Tipe Realis Sosial sangat sulit menerima konflik dan kritik – keharmonisan adalah ramuan mujarab bagi hidup mereka. Pengakuan dan harga diri sangat penting bagi tipe ini. Di sisi lain, diferensiasi bukan salah satu kekuatan mereka. Dalam pekerjaan dan kemitraan, mereka setia, berkomitmen, dan selalu siap jika dibutuhkan. Mereka mudah berteman karena keterbukaan dan kehangatan mereka, dan mereka memiliki lingkaran besar pertemanan. Dalam asmara, mereka bisa dipercaya, penuh perhatian, dan menyayangi pasangan mereka dengan imajinasi dan kepekaan besar. Tipe Realis Sosial menunjukkan perasaan mereka dengan terbuka dan jujur. Jika hubungan mereka putus, mereka cenderung menyalahkan diri sendiri. Itulah sebabnya mereka sulit mengakhiri hubungan sekalipun hubungan itu sudah tidak berhasil memenuhi kebutuhan mereka.</p>
                <p>Tipe Realis Sosial adalah tipe yang lebih konservatif. Mereka memiliki tata nilai dan aturan yang kaku yang berorientasi pada tradisi yang tak lekang oleh waktu. Mereka lebih menyukai lingkungan dan proses kerja yang jelas dan terstruktur; mereka tidak menyukai terlalu banyak perubahan dan gejolak. Kekuatan mereka terletak pada diri mereka yang teliti dan dapat diandalkan dan bukan pada keluwesan dan spontanitas mereka. Tipe Realis Sosial hanya terbuka hingga batas tertentu terhadap hal-hal baru. Namun, jika Anda mencari orang untuk menyelesaikan tugas dengan dapat diandalkan dan tepat, merekalah orangnya.'
            );
            $result[] = array(
                'accumulate' => 'ABBA',
                'label' => 'Idealis Spontan',
                'slug' => 'idealis-spontan',
                'description' => '<p><strong>Tipe Idealis Spontan</strong> adalah orang-orang kreatif, periang, dan berpikiran terbuka. Mereka penuh humor dan menularkan semangat menikmati hidup. Antusiasme dan semangat mereka yang menyala-nyala menginspirasi orang lain dan menghanyutkan mereka. Mereka menikmati kebersamaan dengan orang lain dan sering memiliki intuisi yang jitu mengenai motivasi dan potensi orang lain. Tipe Idealis Spontan adalah pakar komunikasi dan penghibur berbakat yang sangat menyenangkan. Keriaan dan keragaman dijamin saat ada mereka. Namun demikian, kadang-kadang mereka terlalu impulsif saat berhubungan dengan orang lain dan dapat menyakiti orang tanpa bermaksud demikian, karena sifat mereka yang blak-blakan dan terkadang kritis.</p>
                <p>Tipe kepribadian ini adalah pengamat yang tajam dan awas; mereka tidak akan ketinggalan satu kejadian pun di sekitar mereka. Dalam kasus ekstrem, mereka cenderung terlalu sensitif serta waspada berlebihan dan dalam hati siap melompat. Kehidupan bagi mereka adalah drama yang menggairahkan penuh keragaman emosi. Namun demikian, mereka cepat menjadi bosan ketika hal-hal terjadi berulang dan dibutuhkan terlalu banyak detail serta ketelitian. Kreativitas, daya khayal, dan orisinalitas mereka paling mudah dikenali ketika mengembangkan proyek atau ide baru – kemudian mereka menyerahkan seluruh pelaksanaan rincinya kepada orang lain. Secara singkat, tipe Idealis Spontan sangat bangga akan kemandiriannya, baik di dalam diri maupun yang tampak dari luar, dan tidak suka menerima peran bawahan. Oleh karena itu mereka memiliki masalah dengan hirarki dan otoritas.</p>
                <p>Jika Anda memiliki tipe Idealis Spontan sebagai teman, Anda tidak akan pernah bosan; bersama mereka, Anda dapat menikmati kehidupan sebaik-baiknya dan merayakannya dengan pesta-pesta terbaik. Di saat bersamaan, mereka hangat, peka, penuh perhatian, dan selalu bersedia membantu. Jika seorang Idealis Spontan baru jatuh cinta, langit dipenuhi biola dan pasangan mereka akan dihujani perhatian dan kasih sayang. Tipe ini kemudian berlimpah dengan pesona, kelembutan, dan imajinasi. Namun, sayangnya, begitu kebaruan itu luntur dengan cepat akan membosankan bagi mereka. Kehidupan berpasangan sehari-hari yang membosankan tidak cocok untuk mereka sehingga banyak tipe Idealis Spontan keluar-masuk percintaan sesaat. Namun demikian, jika pasangannya bisa membuat rasa ingin tahu mereka tetap hidup dan tidak membiarkan rutinitas dan keakraban melanda, tipe Idealis Spontan dalam menjadi pasangan yang menginspirasi dan penuh kasih sayang.'
            );
            $result[] = array(
                'accumulate' => 'BBBB',
                'label' => 'Idealis Penyelaras',
                'slug' => 'idealis-penyelaras',
                'description' => '<p><strong>Tipe Idealis Penyelaras</strong> dikenali dari kepribadiannya yang kompleks dan memiliki begitu banyak pemikiran dan perasaan. Mereka orang-orang yang pada dasarnya bersifat hangat dan penuh pengertian. Tipe Idealis Penyelaras berharap banyak pada diri mereka sendiri dan orang lain. Mereka memiliki pemahaman yang kuat tentang sifat-sifat manusia dan seringnya menilai karakter dengan sangat baik. Namun mereka lebih sering menyimpan perasaan dan hanya mencurahkan pemikiran serta perasaan mereka kepada sedikit orang yang mereka percaya. Mereka sangat terluka jika ditolak atau dikritik. Tipe Idealis Penyelaras menganggap konflik sebagai situasi yang tidak menyenangkan dan lebih menyukai hubungan harmonis. Namun demikian, jika pencapaian sebuah target tertentu sangat penting bagi mereka, mereka dapat dengan berani mengerahkan seluruh tekad mereka hingga cenderung keras kepala.</p>
                <p>Tipe Idealis Penyelaras memiliki fantasi yang hidup, intuisi yang nyaris seperti mampu membaca masa depan, dan seringkali sangat kreatif. Begitu berkutat dengan sebuah proyek, mereka melakukan segala daya upaya untuk mencapai tujuan-tujuan mereka. Dalam kehidupan sehari-hari, mereka sering membuktikan diri sebagai pemecah masalah ulung. Mereka suka mendalami hingga ke akar permasalahan dan memiliki sifat ingin tahu alamiah serta haus akan pengetahuan. Pada saat bersamaan, mereka berorientasi praktis, terorganisir dengan baik, dan siap menangani situasi-situasi rumit dengan cara terstruktur dan pertimbangan matang. Ketika mereka berkonsentrasi pada sesuatu, mereka melakukannya dengan seratus persen – mereka sering begitu terbenam dalam sebuah pekerjaan sehingga melupakan hal lain di sekitar mereka. Itulah rahasia kesuksesan profesional mereka yang seringkali gilang gemilang.</p>
                <p>Sebagai pasangan, tipe Idealis Penyelaras setia dan dapat diandalkan; hubungan permanen sangat penting bagi mereka. Mereka jarang jatuh cinta hingga mabuk kepayang dan juga tidak menyukai hubungan-hubungan asmara singkat. Kadang-kadang mereka sulit menunjukkan rasa sayang mereka dengan jelas sekalipun perasaan mereka dalam dan tulus. Dalam hal lingkaran pertemanan, semboyan mereka adalah: sedikit berarti lebih banyak! Sejauh menyangkut kenalan baru, mereka hanya dapat didekati hingga jarak tertentu; mereka lebih suka mencurahkan tenaga ke dalam pertemanan akrab yang jumlahnya sedikit. Tuntutan mereka kepada teman dan pasangan mereka sangat tinggi. Karena mereka tidak menyukai konflik, mereka akan diam sejenak sebelum menyuarakan masalah-masalah yang tidak memuaskan dan, ketika melakukannya, mereka berusaha sangat keras untuk tidak menyakiti siapa pun karenanya.'
            );
            $result[] = array(
                'accumulate' => 'BBBA',
                'label' => 'Idealis Pemimpi',
                'slug' => 'idealis-pemimpi',
                'description' => '<p><strong>Tipe Idealis Pemimpi</strong> sangat berhati-hati dan oleh karenanya tampak pemalu dan pendiam bagi orang lain. Mereka berbagi kehidupan emosional mereka yang kaya serta pendapat-pendapat kuat mereka dengan sedikit sekali orang. Namun orang sering keliru menilai mereka dingin dan pendiam. Mereka memiliki sistem nilai-nilai dan prinsip-prinsip yang murni dan mulia yang menonjol di dalam diri mereka yang demi hal-hal itu mereka bersedia mengorbankan banyak hal. Joan of Arc atau Sir Galahad adalah contoh tipe kepribadian ini. Tipe Idealis Pemimpi selalu berusaha keras memperbaiki dunia. Mereka dapat sangat memikirkan orang lain dan melakukan banyak hal untuk mendukung mereka dan membela mereka. Mereka tertarik dengan sesama mereka, penuh perhatian dan murah hati terhadap mereka. Begitu antusiasme mereka akan suatu hal atau orang bangkit, mereka dapat menjadi pejuang yang tak kenal lelah.</p>
                <p>Bagi tipe Idealis Pemimpi, hal-hal praktis tidak benar-benar penting. Mereka hanya menyibukkan diri dengan tuntutan-tuntutan harian yang duniawi saat benar-benar perlu. Mereka cenderung hidup sesuai dengan semboyan „yang jenius mengendalikan kekacauan“ – yang biasanya memang demikian sehingga biasanya mereka memiliki karir akademik yang gemilang. Mereka kurang tertarik dengan detail; mereka lebih suka melihat sesuatu secara keseluruhan. Ini artinya mereka masih memiliki pandangan menyeluruh yang baik ketika sesuatu mulai menjadi rumit. Namun demikian, sebagai akibatnya, sesekali dapat terjadi tipe Idealis Pemimpi melewatkan sesuatu yang penting. Karena mereka menyukai kedamaian, mereka cenderung tidak terang-terangan menunjukkan ketidakpuasan atau kejengkelan mereka melainkan memendamnya. Ketegasan bukan salah satu kekuatan mereka; mereka membenci konflik dan persaingan. Tipe Idealis Pemimpi lebih suka memotivasi orang lain dengan sifat ramah dan antusias mereka. Barangsiapa mendapatkan mereka sebagai atasan tidak akan pernah mengeluh kekurangan pujian.</p>
                <p>Di tempat kerja, tipe Idealis Pemimpi adalah teman dan pasangan yang suka menolong dan setia, orang-orang yang memiliki integritas. Kewajiban sangat sakral bagi mereka. Perasaan orang lain penting bagi mereka dan mereka senang membuat orang lain bahagia. Mereka puas hanya dengan lingkaran kecil pertemanan; kebutuhan mereka akan kontak sosial tidak begitu menonjol karena mereka juga butuh banyak waktu untuk diri sendiri. Basa-basi kecil bukan keahlian mereka. Jika seseorang berharap berteman dengan mereka atau memiliki hubungan dengan mereka, orang itu harus mau berbagi dunia pemikiran mereka dan bersedia berpartisipasi dalam perbincangan mendalam. Jika Anda berhasil melakukan itu Anda akan dianugerahi dengan kemitraan yang luar biasa intensif dan kaya. Karena tuntutan-tuntutan mereka yang tinggi terhadap diri sendiri dan orang lain, tipe kepribadian ini kadang-kadang menjejali hubungan dengan gagasan-gagasan romantis dan idealis hingga tingkat tertentu sehingga membuat pasangan merasa terbebani atau minder. Tipe Idealis Pemimpi tidak jatuh cinta dengan mabuk kepayang namun ketika mereka jatuh cinta mereka menginginkannya menjadi cinta sejati yang tak berkesudahan.'
            );
            $result[] = array(
                'accumulate' => 'BBAB',
                'label' => 'Pemikir Mandiri',
                'slug' => 'pemikir-mandiri',
                'description' => '<p><strong>Tipe Pemikir Mandiri</strong> adalah orang-orang yang analitis dan jenaka. Mereka biasanya percaya diri dan tidak membiarkan diri terganggu oleh konflik dan kritik. Mereka sangat sadar akan kekuatan mereka sendiri dan tidak ragu akan kemampuan mereka. Orang-orang bertipe kepribadian ini biasanya sangat sukses dalam karir karena mereka memiliki baik kompetensi maupun tekad. Tipe Pemikir Mandiri adalah ahli strategi ulung; logika, sistematika, dan pertimbangan teoritis adalah dunia mereka. Mereka haus pengetahuan dan selalu berusaha mengembangkan dan menyempurnakan pengetahuan mereka di bidang mana pun yang menarik minat mereka. Berpikir abstrak adalah kemampuan alami bagi mereka; ilmuwan dan spesialis komputer biasanya dari tipe ini.</p>
                <p>Tipe Pemikir Mandiri adalah spesialis pada bidang mereka. Pengembangan ide dan visi penting bagi mereka; mereka senang bersikap seluwes mungkin dan, idealnya, senang bisa bekerja sendiri karena mereka sering merasa tersiksa harus menjelaskan runutan pemikiran mereka yang kompleks kepada orang lain. Tipe Pemikir Mandiri tidak tahan dengan rutinitas. Begitu mereka menganggap sebuah ide bagus, sulit membuat mereka menyerah; mereka mengejar pelaksanaan ide itu dengan keras kepala dan gigih, sekalipun ada perlawanan dari luar.</p>
                <p>Pemikir Mandiri bukan tipe yang mudah keluar dari cangkangnya. Membicarakan kehidupan emosional juga bukan salah satu kekuatan mereka. Lagipula, hubungan sosial tidak terlalu penting bagi mereka; mereka sudah puas hanya dengan beberapa teman dekat yang dianggap mudah untuk berbagi dunia cendekia mereka. Mereka sulit membuat hubungan-hubungan baru. Dalam asmara, mereka membutuhkan banyak ruang dan kemandirian namun ini bukan berarti pasangan mereka tidak penting bagi mereka. Tipe Pemikir Mandiri biasanya memberi kesan dingin dan pendiam bagi orang lain; namun kesan ini menipu: mereka tidak tahan jika orang-orang yang dekat dengan mereka menolak mereka. Mereka lebih suka hubungan harmonis yang seimbang dengan pasangan yang memiliki minat serupa dan yang dengannya mereka dapat mewujudkan visi-visi mereka.'
            );
            $result[] = array(
                'accumulate' => 'BABB',
                'label' => 'Realis Baik Hati',
                'slug' => 'realis-baik-hati',
                'description' => '<p><strong>Tipe Realis Baik Hati</strong> adalah pribadi-pribadi yang hangat dan suka menolong. Mereka melakukan pekerjaan mereka dengan sungguh-sungguh dan memiliki bakat mengorganisir yang menonjol. Seringnya mereka merasa terikat dengan nilai-nilai tradisional. Keluarga, khususnya, sangat penting bagi tipe Realis Baik Hati. Kepuasan tertinggi mereka adalah ketika menjadikan diri mereka berguna dan mengurus orang lain. Namun mereka tidak suka menonjolkan diri; mereka lebih suka menuntaskan pekerjaan mereka di luar sorotan. Tipe Realis Baik Hati adalah pecandu kerja yang sesungguhnya; mereka sangat bisa diandalkan dan tidak ada yang berlebihan bagi mereka dalam urusan menyelesaikan pekerjaan. Ketelitian, kesungguhan, dan kepatuhan adalah kekuatan-kekuatan mereka. Mereka lebih suka situasi yang tertata dan akrab ketimbang situasi baru dan belum diketahui.</p>
                <p>Dalam menghadapi orang lain, tipe Realis Baik Hati sangat menjaga perasan dan senang menolong; dengan senang hati mereka selalu mengesampingkan kebutuhan mereka sendiri demi keluarga dan teman-teman mereka. Rumah mereka biasanya sangat resik, hangat, dan rapi. Perfeksionisme di satu sisi dan ketidaksukaan mereka untuk mendelegasikan tugas di sisi lainnya sering membuat mereka menanggung terlalu banyak tanggung jawab baik secara profesional maupun pribadi. Mereka tidak tahan ketidakselarasan; konflik membuat mereka sangat tidak bahagia. Anda nyaris bisa menjuluki mereka kecanduan harmoni – dan ini terkadang membuat mereka mengabaikan diri sendiri dan keinginan-keinginan mereka sendiri karena mereka tidak mampu menolak.</p>
                <p>Tipe Realis Baik Hati mengidamkan hubungan seumur hidup yang stabil dan penuh kepercayaan. Pernikahan dan keluarga sangat penting bagi mereka. Mereka mengurus pasangan mereka dengan pernuh perhatian dan kasih sayang serta banyak mengalah demi hubungan yang harmonis. Mereka juga teman yang setia dan dapat diandalkan. Namun demikian, mereka dapat sangat terluka jika komitmen mereka terhadap orang lain terlalu lama tidak dihargai.'
            );
            $result[] = array(
                'accumulate' => 'BABA',
                'label' => 'Pelaku Peka',
                'slug' => 'pelaku-peka',
                'description' => '<p><strong>Tipe Pelaku Peka</strong> adalah orang-orang yang lembut, rendah hati, dan pendiam. Mereka menangani kehidupan sehari-hari dengan baik dan menyukai keleluasaan pribadi mereka. Dengan sifat optimis dan tidak banyak bicara, mereka juga adalah pendengar yang baik yang sering dicari orang dan orang lain merasa nyaman ditemani mereka. Singkatnya, tipe ini adalah yang paling mudah disukai dan paling ramah di antara semua tipe kepribadian. Toleransi dan sikap hormat kepada orang lain membuat kepribadian mereka menonjol. Mereka sangat penuh kasih sayang, murah hati, dan selalu bersedia membantu. Mereka terbuka dan tertarik pada segala hal baru atau yang tidak diketahui oleh mereka. Namun demikian, jika sistem nilai dalam diri atau perasaan keadilan mereka dilukai, tipe Pelaku Peka dapat sekonyong-konyong dan secara mengejutkan menjadi keras dan tegas.</p>
                <p>Tipe Pelaku Peka menikmati kenyamanan kehidupan sebaik-baiknya. Mereka sangat bahagia dalam kehidupan sehari-hari. Tipe Pelaku Peka biasanya seniman berbakat atau perajin yang amat trampil. Kreativitas, imajinasi, dan terutama persepsi yang tajam hanya sedikit dari kekuatan mereka. Tipe Pelaku Peka sangat berorientasi pada kekinian; perencanaan jangka panjang dan persiapan tidak menarik bagi mereka. Mereka menghadapi hidup sebagaimana datangnya dan bereaksi dengan luwes terhadap tuntutan sehari-hari. Mereka tidak menyukai terlalu banyak rutinitas dan hal-hal yang bisa ditebak. Bakat mereka muncul ke permukaan ketika proses pekerjaan beragam dan tidak ada banyak aturan. Tipe Pelaku Peka suka bekerja sendiri; jika mereka menjadi bagian dari tim, mereka tidak terlibat dalam permainan persaingan atau kekuasaan dan lebih memilih hidup dan bekerja sama secara harmonis dan terbuka.</p>
                <p>Tipe Pelaku Peka sangat puas dengan lingkaran pertemanan yang kecil namun akrab karena kebutuhan kontak sosial mereka tidak terlalu besar. Di sini mereka juga menghindari konflik – pertengkaran dan perselisihan menimbulkan cukup banyak ketegangan bagi mereka. Tipe Pelaku Peka biasanya sangat menyukai binatang dan sangat pandai berhadapan dengan anak kecil. Sebagai pasangan, tipe ini setia dan dapat diandalkan serta bersedia mencurahkan diri ke dalam suatu hubungan. Saling menghargai dan toleransi sangat penting bagi tipe Pelaku Peka. Kecintaan mereka terhadap kesenangan menjadikan mereka teman yang menyenangkan yang dengan mereka seseorang dapat mengalami saat-saat yang intens. Mereka suka memperlakukan pasangan mereka dengan penuh perhatian, memberi mereka hadiah-hadiah kecil, dan sangat peka terhadap kebutuhan-kebutuhan pasangannya – seringnya lebih dibanding terhadap kebutuhan mereka sendiri. Namun demikian, jika mereka bertemu orang yang salah, mereka memiliki risiko dimanfaatkan. Mereka akan mengalami kekecewaan mendalam jika itu terjadi.'
            );
            $result[] = array(
                'accumulate' => 'BAAB',
                'label' => 'Realis Terpercaya',
                'slug' => 'realis-terpercaya',
                'description' => '<p><strong>Tipe Realis Tepercaya</strong> rendah hati dan sangat memikirkan tanggung jawab. Mereka cermat, pendiam, dan menuntut. Sifat mereka yang paling menonjol adalah dapat diandalkan dan mereka akan selalu berusaha memenuhi janji yang pernah mereka lontarkan. Tipe Realis Tepercaya adalah orang-orang yang cenderung tidak banyak bicara dan serius, mereka tidak banyak bicara namun pendengar yang baik. Kadang-kadang mereka kelihatan pendiam dan menjaga jarak bagi mereka yang belum kenal walaupun biasanya mereka memiliki kejenakaan dan semangat yang tinggi. Kekuatan mereka adalah ketelitian, rasa keadilan yang tinggi, kegigihan yang hampir menuju keras kepala, dan sikap pragmatis, penuh semangat, dan tekad. Tipe Realis Tepercaya tidak pernah ragu ketika sesuatu harus dilakukan. Mereka melakukan apa yang perlu tanpa mengumbar kata-kata.</p>
                <p>Jenis kepribadian ini tidak hanya berharap banyak pada diri sendiri namun juga pada orang lain. Begitu tipe Realis Tepercaya menetapkan diri pada sesuatu, sulit membujuk mereka untuk berpaling. Mereka tidak suka mempertaruhkan sesuatu. Merencanakan berarti keamanan bagi tipe Realis Tepercaya, begitu juga halnya dengan keteraturan dan disiplin. Mereka tidak keberatan menghormati otoritas dan hirarki namun tidak suka mendelegasikan tugas. Mereka yakin orang lain tidak akan mengerjakannya sesungguh-sungguh mereka. Di posisi manajemen, mereka sangat berorientasi pada tugas – mereka memastikan semuanya dikerjakan dengan baik; namun demikian, mereka tidak terlalu berminat menjalin hubungan pribadi dalam lingkungan pekerjaan.</p>
                <p>Dalam hubungan asmara, tipe Realis Tepercaya juga amat tepercaya. Sebagai pasangan, mereka dapat dipercaya dan konsisten, seimbang dan berpikir dengan akal sehat. Keamanan dan kestabilan sangat penting bagi mereka. Mereka nyaris tidak punya waktu untuk bermewah-mewah dan main-main. Siapa pun yang mendapatkan mereka sebagai teman atau pasangan dapat mengandalkan mereka seumur hidup. Namun demikian, butuh cukup banyak waktu bagi tipe Realis Tepercaya untuk memasuki suatu hubungan asmara atau pertemanan. Mereka tidak terlalu membutuhkan kontak sosial; oleh karena itu mereka sangat cermat ketika memilih pasangan dan teman dan membatasi diri dengan lingkaran kecil namun eksklusif yang sesuai dengan tuntutan tinggi mereka. Mereka cenderung menunjukkan keakraban mereka kepada orang-orang yang penting bagi mereka dengan tindakan – pasangan mereka sebaiknya tidak mengharapkan deklarasi cinta yang romantis.'
            );
            $result[] = array(
                'accumulate' => 'BAAA',
                'label' => 'Pelaku Individualistis',
                'slug' => 'pelaku-individualistis',
                'description' => '<p><strong>Tipe Pelaku Individualistis</strong> adalah orang-orang yang yakin akan diri sendiri dan sangat mandiri. Mereka orang-orang yang pendiam dan realistis, sangat rasional, dan sangat tegas. Mereka memelihara individualisme mereka dan senang menerapkan kemampuan mereka pada tugas-tugas baru. Namun mereka juga adalah orang-orang yang sangat spontan dan impulsif yang suka mengikuti inspirasi sekonyong-konyong mereka. Tipe Pelaku Individualistis adalah para pemerhati yang baik dan tajam yang menyerap segala sesuatu yang terjadi di sekitar mereka. Namun demikian, mereka tidak terlalu peka dalam hubungan antar manusia dan terkejut ketika sesekali membuat orang tersinggung dengan sikap blak-blakan dan lugas mereka. Mereka tidak terlalu menyukai kewajiban; namun jika Anda memberi mereka ruang, mereka adalah orang-orang yang sesungguhnya tidak rumit, mudah bergaul, dan periang.</p>
                <p>Tipe Pelaku Individualistis menyukai tantangan – aksi dan hal-hal yang dianggap aneh adalah bagian dari kehidupan mereka. Mereka suka mencobai nasib dan banyak orang tipe ini memiliki hobi berisiko seperti skydiving atau bungee jumping. Ini juga berlaku pada kehidupan sehari-hari mereka. Tipe Pelaku Individualistis mampu mengatasi situasi-situasi kritis; mereka dapat menangkap situasi, membuat keputusan, dan mengambil langkah-langkah yang diperlukan dengan sangat cepat. Hirarki dan otoritas tidak terlalu membuat mereka terkesan; jika seorang atasan tidak kompeten, mereka tidak akan terlalu menghormatinya. Tipe Pelaku Individualistis suka menerima tanggung jawab. Mereka memiliki kepekaan terhadap realitas yang menonjol dan selalu menemukan solusi yang paling tepat dan praktis untuk sebuah masalah. Mereka melerai konflik secara terbuka dan langsung; di sini, kadang-kadang mereka tidak terlalu peka namun mereka sendiri juga dapat menerima kritik dengan sangat baik.</p>
                <p>Sebagai teman, tipe Pelaku Individualistis setia dan penuh pengabdian; mereka hanya memiliki beberapa hubungan pertemanan namun banyak di antaranya berlanjut seumur hidup. Orang senang berbicara dengan mereka karena sikap optimis mereka dalam memandang kehidupan dan kemampuan mereka untuk mendengarkan. Namun demikian, mereka lebih suka membicarakan minat dan hobi yang sama ketimbang isu-isu teoritis atau filosofis – hal-hal itu tidak cukup nyata bagi mereka. Mereka membutuhkan banyak kebebasan dan waktu bagi diri sendiri dalam hubungan asmara namun, pada saat bersamaan, mereka juga sangat toleran terhadap pasangan mereka. Sangat jarang tipe Pelaku Individualistis jatuh cinta hingga mabuk kepayang. Mereka terlalu rasional. Mereka lebih suka memilih pasangan berdasarkan kesamaan minat dan kegemaran yang ingin mereka bagi bersama pasangan tersebut. Tipe Pelaku Individualistis tidak terlalu menyukai emosi yang meletup-letup. Mereka lebih suka membuktikan cinta mereka dengan tindakan dan mengharapkan hal yang sama dari pasangan mereka. Barangsiapa berharap mengikat diri dengan seorang Pelaku Individualistis membutuhkan banyak kesabaran. Butuh beberapa saat sebelum tipe kepribadian ini bersedia terlibat dengan orang lain.'
            );
            $result[] = array(
                'accumulate' => 'ABBB',
                'label' => 'Idealis Terlibat',
                'slug' => 'idealis-terlibat',
                'description' => '<p><strong>Tipe Idealis Terlibat</strong> bersifat ekstrovert dan suka menolong. Orang lain menganggap mereka sangat ramah dan menginspirasi – khususnya karena mereka selalu mau melihat hal-hal terbaik dalam diri orang lain. Selera humor, energi, dan optimisme mereka menarik orang lain. Tipe Idealis Terlibat sangat pandai berkomunikasi dan pandai meyakinkan serta menyemangati orang lain. Inilah sebabnya sangat lazim jika mereka biasanya mengambil peran pemimpin dalam kelompok. Tipe kepribadian ini seringkali menghasilkan orang-orang yang sangat karismatik.</p>
                <p>Tipe Idealis Terlibat memiliki kemampuan besar yang tidak biasa untuk berempati. Mereka toleran dan murah hati terhadap orang lain; kadang-kadang mereka cenderung menganggap teman-teman mereka lebih ideal dibanding sesungguhnya. Mereka selalu berusaha cocok dengan semua orang dan menginginkan hubungan mereka harmonis serta memuaskan. Untuk mencapai ini, mereka siap mencurahkan diri dan meletakkan kebutuhan-kebutuhan mereka di urutan paling akhir. Karena tipe Idealis Terlibat sangat peduli, ada risiko mereka akan mengorbankan diri dan memforsir diri mereka demi orang lain. Oleh karena itu, dalam pekerjaan mereka harus berhati-hati agar tidak timbul sindrom kelelahan.</p>
                <p>Tipe Idealis Terlibat dapat diandalkan, cukup terorganisir dan suka membuat struktur situasi-situasi rumit. Mereka sulit menerima kritik; mereka cepat merasa tersinggung dan salah dimengerti. Perfeksionisme mereka juga memengaruhi kehidupan percintaan – mereka mencari hubungan yang sempurna untuk seumur hidup. Begitu mereka mengambil keputusan, mereka menjadi pasangan yang setia, cukup seimbang, dan penuh cinta. Namun demikian, jikalau mereka terlibat dengan orang yang salah, bisa saja terjadi mereka membiarkan diri mereka dimanfaatkan sekian lama sebelum mengakhiri hubungan tersebut.'
            );
            return $result;
        } catch (\Exception $e) {
            logger()->error('Error in setQuiz: ' . $e->getMessage());
            throw $e;
        }
    }

    public function checkValidStep($step = null) {
        try {
            if (!$step) {
                return false;
            }

            $defineQuiz = $this->defineQuiz();
            $valid = false;
            foreach($defineQuiz as $val => $key) {
                if($step === $key['step']['init']) {
                    $valid = true;
                }
            }
            return $valid;
        } catch (\Exception $e) {
            logger()->error('Error in setQuiz: ' . $e->getMessage());
            throw $e;
        }
    }

    public function checkValidSlugResult($slug) {
        try {
            if (!$slug) {
                return false;
            }

            $defineResult = $this->defineResult();
            $valid = false;
            foreach($defineResult as $val => $key) {
                if($slug === $key['slug']) {
                    $valid = true;
                }
            }
            return $valid;

        } catch (\Exception $e) {
            logger()->error('Error in setQuiz: ' . $e->getMessage());
            throw $e;
        }
    }

    public function PostQuiz(PostQuizRequest $request, $nextStep) {
        try {
            $value = $request->input('value');
            $accumulate = $request->input('accumulate');
            $total_accumulate = $accumulate.$value;

            return array('accumulate' => $total_accumulate, 'nextStep' => $nextStep);
        } catch (\Exception $e) {
            logger()->error('Error in setQuiz: ' . $e->getMessage());
            throw $e;
        }
    }

    public function getNextStep($step) {
        try {
            $defineQuiz = $this->defineQuiz();
            $nextStep = [];
            foreach($defineQuiz as $val => $key) {
                if($step === $key['step']['init']) {
                    $index = $val + 1;
                    if($index < count($defineQuiz)) {
                        $nextStep = $defineQuiz[$index]['step']['init'];
                    }else{
                        $nextStep = 'final';
                    }
                }
            }
            return $nextStep;
        } catch (\Exception $e) {
            logger()->error('Error in setQuiz: ' . $e->getMessage());
            throw $e;
        }
    }

    public function getFinalResult($accumulate) {
        try {
            $result = $this->getResult($accumulate, 'accumulate');

            return $result;
        } catch (\Exception $e) {
            logger()->error('Error in setQuiz: ' . $e->getMessage());
            throw $e;
        }
    }

    public function getResult($value, $type = 'slug') {
        try {
            $valid = in_array($type, ['accumulate','slug']);
            if(!$valid) {
                return false;
            }

            $result = [];
            $defineResult = $this->defineResult();
            foreach($defineResult as $val => $key) {
                if($value === $key[$type]) {
                    $result = $key;
                }
            }
            return $result;
        } catch (\Exception $e) {
            logger()->error('Error in setQuiz: ' . $e->getMessage());
            throw $e;
        }
    }
}
