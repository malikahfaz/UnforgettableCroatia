<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * the cities is large, we need to break it in parts
     * @return void
     */
    public function run()
    {
        //
 DB::table('cities')->delete();
$cities = array(

    //Sindh

array('name' => "Adilpur",'state_id' => 1),
array('name' => "Badah",'state_id' => 1),
array('name' => "Badin",'state_id' => 1),
array('name' => "Bagarji",'state_id' => 1),
array('name' => "Bakshshapur",'state_id' => 1),
array('name' => "Bandhi",'state_id' => 1),
array('name' => "Berani",'state_id' => 1),
array('name' => "Bhan",'state_id' => 1),
array('name' => "Bhiria City",'state_id' => 1),
array('name' => "Bhiria Road",'state_id' => 1),
array('name' => "Bhit Shah",'state_id' => 1),
array('name' => "Bozdar",'state_id' => 1),
array('name' => "Bulri",'state_id' => 1),
array('name' => "Chak",'state_id' => 1),
array('name' => "Chambar",'state_id' => 1),
array('name' => "Chohar Jamali",'state_id' => 1),
array('name' => "Chor",'state_id' => 1),
array('name' => "Dadu",'state_id' => 1),
array('name' => "Daharki",'state_id' => 1),
array('name' => "Daro",'state_id' => 1),
array('name' => "Darya Khan Mari",'state_id' => 1),
array('name' => "Daulatpur",'state_id' => 1),
array('name' => "Daur",'state_id' => 1),
array('name' => "Dhoronaro",'state_id' => 1),
array('name' => "Digri",'state_id' => 1),
array('name' => "Diplo",'state_id' => 1),
array('name' => "Dokri",'state_id' => 1),
array('name' => "Faqirabad",'state_id' => 1),
array('name' => "Gambat",'state_id' => 1),
array('name' => "Garello",'state_id' => 1),
array('name' => "Garhi Khairo",'state_id' => 1),
array('name' => "Garhi Yasin",'state_id' => 1),
array('name' => "Gharo",'state_id' => 1),
array('name' => "Ghauspur",'state_id' => 1),
array('name' => "Ghotki",'state_id' => 1),
array('name' => "Golarchi",'state_id' => 1),
array('name' => "Guddu",'state_id' => 1),
array('name' => "Hala",'state_id' => 1),
array('name' => "Hingorja",'state_id' => 1),
array('name' => "Hyderabad",'state_id' => 1),
array('name' => "Islamkot",'state_id' => 1),
array('name' => "Jacobabad",'state_id' => 1),
array('name' => "Jam Nawaz Ali",'state_id' => 1),
array('name' => "Jam Sahib",'state_id' => 1),
array('name' => "Jati",'state_id' => 1),
array('name' => "Jhol",'state_id' => 1),
array('name' => "Jhudo",'state_id' => 1),
array('name' => "Johi",'state_id' => 1),
array('name' => "Kadhan",'state_id' => 1),
array('name' => "Kambar",'state_id' => 1),
array('name' => "Kandhra",'state_id' => 1),
array('name' => "Kandiari",'state_id' => 1),
array('name' => "Kandiaro",'state_id' => 1),
array('name' => "Karachi",'state_id' => 1),
array('name' => "Karampur",'state_id' => 1),
array('name' => "Kario Ghanwar",'state_id' => 1),
array('name' => "Karoondi",'state_id' => 1),
array('name' => "Kashmor",'state_id' => 1),
array('name' => "Kazi Ahmad",'state_id' => 1),
array('name' => "Keti Bandar",'state_id' => 1),
array('name' => "Khadro",'state_id' => 1),
array('name' => "Khairpur",'state_id' => 1),
array('name' => "Khairpur Nathan Shah",'state_id' => 1),
array('name' => "Khandh Kot",'state_id' => 1),
array('name' => "Khanpur",'state_id' => 1),
array('name' => "Khipro",'state_id' => 1),
array('name' => "Khoski",'state_id' => 1),
array('name' => "Khuhra",'state_id' => 1),
array('name' => "Khyber",'state_id' => 1),
array('name' => "Kot Diji",'state_id' => 1),
array('name' => "Kot Ghulam Mohammad",'state_id' => 1),
array('name' => "Kotri",'state_id' => 1),
array('name' => "Kumb",'state_id' => 1),
array('name' => "Kunri",'state_id' => 1),
array('name' => "Lakhi",'state_id' => 1),
array('name' => "Larkana",'state_id' => 1),
array('name' => "Madeji",'state_id' => 1),
array('name' => "Matiari",'state_id' => 1),
array('name' => "Matli",'state_id' => 1),
array('name' => "Mehar",'state_id' => 1),
array('name' => "Mehrabpur",'state_id' => 1),
array('name' => "Miro Khan",'state_id' => 1),
array('name' => "Mirpur Bathoro",'state_id' => 1),
array('name' => "Mirpur Khas",'state_id' => 1),
array('name' => "Mirpur Mathelo",'state_id' => 1),
array('name' => "Mirpur Sakro",'state_id' => 1),
array('name' => "Mirwah",'state_id' => 1),
array('name' => "Mithi",'state_id' => 1),
array('name' => "Moro",'state_id' => 1),
array('name' => "Nabisar",'state_id' => 1),
array('name' => "Nasarpur",'state_id' => 1),
array('name' => "Nasirabad",'state_id' => 1),
array('name' => "Naudero",'state_id' => 1),
array('name' => "Naukot",'state_id' => 1),
array('name' => "Naushahro Firoz",'state_id' => 1),
array('name' => "Nawabshah",'state_id' => 1),
array('name' => "Oderolal Station",'state_id' => 1),
array('name' => "Pacca Chang",'state_id' => 1),
array('name' => "Padidan",'state_id' => 1),
array('name' => "Pano Aqil",'state_id' => 1),
array('name' => "Perumal",'state_id' => 1),
array('name' => "Phulji",'state_id' => 1),
array('name' => "Pirjo Goth",'state_id' => 1),
array('name' => "Piryaloi",'state_id' => 1),
array('name' => "Pithoro",'state_id' => 1),
array('name' => "Radhan",'state_id' => 1),
array('name' => "Rajo Khanani",'state_id' => 1),
array('name' => "Ranipur",'state_id' => 1),
array('name' => "Ratodero",'state_id' => 1),
array('name' => "Rohri",'state_id' => 1),
array('name' => "Rustam",'state_id' => 1),
array('name' => "Saeedabad",'state_id' => 1),
array('name' => "Sakrand",'state_id' => 1),
array('name' => "Samaro",'state_id' => 1),
array('name' => "Sanghar",'state_id' => 1),
array('name' => "Sann",'state_id' => 1),
array('name' => "Sarhari",'state_id' => 1),
array('name' => "Sehwan",'state_id' => 1),
array('name' => "Setharja",'state_id' => 1),
array('name' => "Shah Dipalli",'state_id' => 1),
array('name' => "Shahdadkot",'state_id' => 1),
array('name' => "Shahdadpur",'state_id' => 1),
array('name' => "Shahpur Chakar",'state_id' => 1),
array('name' => "Shahpur Jahania",'state_id' => 1),
array('name' => "Shikarpur",'state_id' => 1),
array('name' => "Sinjhoro",'state_id' => 1),
array('name' => "Sita Road",'state_id' => 1),
array('name' => "Sobhodero",'state_id' => 1),
array('name' => "Sujawal",'state_id' => 1),
array('name' => "Sukkur",'state_id' => 1),
array('name' => "Talhar",'state_id' => 1),
array('name' => "Tando Adam",'state_id' => 1),
array('name' => "Tando Allah Yar",'state_id' => 1),
array('name' => "Tando Bagho",'state_id' => 1),
array('name' => "Tando Ghulam Ali",'state_id' => 1),
array('name' => "Tando Jam",'state_id' => 1),
array('name' => "Tando Jan Mohammad",'state_id' => 1),
array('name' => "Tando Mitha Khan",'state_id' => 1),
array('name' => "Tando Muhammad Khan",'state_id' => 1),
array('name' => "Tangwani",'state_id' => 1),
array('name' => "Thano Bula Khan",'state_id' => 1),
array('name' => "Thari Mirwah",'state_id' => 1),
array('name' => "Tharushah",'state_id' => 1),
array('name' => "Thatta",'state_id' => 1),
array('name' => "Ther I",'state_id' => 1),
array('name' => "Ther I Mohabat",'state_id' => 1),
array('name' => "Thul",'state_id' => 1),
array('name' => "Ubauro",'state_id' => 1),
array('name' => "Umarkot",'state_id' => 1),
array('name' => "Warah",'state_id' => 1),

    //Balochistan

array('name' => "Amir chah",'state_id' => 2),
array('name' => "Awaran",'state_id' => 2),
array('name' => "Barkhan",'state_id' => 2),
array('name' => "Bela",'state_id' => 2),
array('name' => "Bhag",'state_id' => 2),
array('name' => "Chaman",'state_id' => 2),
array('name' => "Chitkan",'state_id' => 2),
array('name' => "Dalbandin",'state_id' => 2),
array('name' => "Dera Allah Yar",'state_id' => 2),
array('name' => "Dera Bugti",'state_id' => 2),
array('name' => "Dera Murad Jamali",'state_id' => 2),
array('name' => "Dhadar",'state_id' => 2),
array('name' => "Duki",'state_id' => 2),
array('name' => "Gaddani",'state_id' => 2),
array('name' => "Gwadar",'state_id' => 2),
array('name' => "Harnai",'state_id' => 2),
array('name' => "Hub",'state_id' => 2),
array('name' => "Jiwani",'state_id' => 2),
array('name' => "Kalat",'state_id' => 2),
array('name' => "Kharan",'state_id' => 2),
array('name' => "Khuzdar",'state_id' => 2),
array('name' => "Kohlu",'state_id' => 2),
array('name' => "Loralai",'state_id' => 2),
array('name' => "Mach",'state_id' => 2),
array('name' => "Mastung",'state_id' => 2),
array('name' => "Nushki",'state_id' => 2),
array('name' => "Ormara",'state_id' => 2),
array('name' => "Pasni",'state_id' => 2),
array('name' => "Pishin",'state_id' => 2),
array('name' => "Quetta",'state_id' => 2),
array('name' => "Sibi",'state_id' => 2),
array('name' => "Sohbatpur",'state_id' => 2),
array('name' => "Surab",'state_id' => 2),
array('name' => "Turbat",'state_id' => 2),
array('name' => "Usta Muhammad",'state_id' => 2),
array('name' => "Uthal",'state_id' => 2),
array('name' => "Wadh",'state_id' => 2),
array('name' => "Winder",'state_id' => 2),
array('name' => "Zehri",'state_id' => 2),
array('name' => "Zhob",'state_id' => 2),
array('name' => "Ziarat",'state_id' => 2),

    //Gilgit-Baltistan

array('name' => "Astore",'state_id' => 3),
array('name' => "Chilas",'state_id' => 3),
array('name' => "Dambudas",'state_id' => 3),
array('name' => "Danyor",'state_id' => 3),
array('name' => "Gahkuch",'state_id' => 3),
array('name' => "Gilgit",'state_id' => 3),
array('name' => "Skardu",'state_id' => 3),

    //Khyber-Pakhtunkhwa

array('name' => "Peshawar",'state_id' => 4),
array('name' => "Mardan",'state_id' => 4),
array('name' => "Mingora",'state_id' => 4),
array('name' => "Kohat",'state_id' => 4),
array('name' => "Abbottabad",'state_id' => 4),
array('name' => "Dera Ismail Khan",'state_id' => 4),
array('name' => "Nowshera",'state_id' => 4),
array('name' => "Charsada",'state_id' => 4),
array('name' => "Swabi",'state_id' => 4),

    //Punjab
array('name' => "Abdul Hakim",'state_id' => 5),
array('name' => "Ahmadpur East",'state_id' => 5),
array('name' => "Ahmadpur Lumma",'state_id' => 5),
array('name' => "Ahmadpur Sial",'state_id' => 5),
array('name' => "Ahmedabad",'state_id' => 5),
array('name' => "Alipur",'state_id' => 5),
array('name' => "Alipur Chatha",'state_id' => 5),
array('name' => "Arifwala",'state_id' => 5),
array('name' => "Attock",'state_id' => 5),
array('name' => "Baddomalhi",'state_id' => 5),
array('name' => "Bagh",'state_id' => 5),
array('name' => "Bahawalnagar",'state_id' => 5),
array('name' => "Bahawalpur",'state_id' => 5),
array('name' => "Bai Pheru",'state_id' => 5),
array('name' => "Basirpur",'state_id' => 5),
array('name' => "Begowala",'state_id' => 5),
array('name' => "Bhakkar",'state_id' => 5),
array('name' => "Bhalwal",'state_id' => 5),
array('name' => "Bhawana",'state_id' => 5),
array('name' => "Bhera",'state_id' => 5),
array('name' => "Bhopalwala",'state_id' => 5),
array('name' => "Burewala",'state_id' => 5),
array('name' => "Chak Azam Sahu",'state_id' => 5),
array('name' => "Chak Jhumra",'state_id' => 5),
array('name' => "Chak Sarwar Shahid",'state_id' => 5),
array('name' => "Chakwal",'state_id' => 5),
array('name' => "Chawinda",'state_id' => 5),
array('name' => "Chichawatni",'state_id' => 5),
array('name' => "Chiniot",'state_id' => 5),
array('name' => "Chishtian Mandi",'state_id' => 5),
array('name' => "Choa Saidan Shah",'state_id' => 5),
array('name' => "Chuhar Kana",'state_id' => 5),
array('name' => "Chunian",'state_id' => 5),
array('name' => "Dajal",'state_id' => 5),
array('name' => "Darya Khan",'state_id' => 5),
array('name' => "Daska",'state_id' => 5),
array('name' => "Daud Khel",'state_id' => 5),
array('name' => "Daultala",'state_id' => 5),
array('name' => "Dera Din Panah",'state_id' => 5),
array('name' => "Dera Ghazi Khan",'state_id' => 5),
array('name' => "Dhanote",'state_id' => 5),
array('name' => "Dhonkal",'state_id' => 5),
array('name' => "Dijkot",'state_id' => 5),
array('name' => "Dina",'state_id' => 5),
array('name' => "Dinga",'state_id' => 5),
array('name' => "Dipalpur",'state_id' => 5),
array('name' => "Dullewala",'state_id' => 5),
array('name' => "Dunga Bunga",'state_id' => 5),
array('name' => "Dunyapur",'state_id' => 5),
array('name' => "Eminabad",'state_id' => 5),
array('name' => "Faisalabad",'state_id' => 5),
array('name' => "Faqirwali",'state_id' => 5),
array('name' => "Faruka",'state_id' => 5),
array('name' => "Fateh Jang",'state_id' => 5),
array('name' => "Fatehpur",'state_id' => 5),
array('name' => "Fazalpur",'state_id' => 5),
array('name' => "Ferozwala",'state_id' => 5),
array('name' => "Fort Abbas",'state_id' => 5),
array('name' => "Garh Maharaja",'state_id' => 5),
array('name' => "Ghakar",'state_id' => 5),
array('name' => "Ghurgushti",'state_id' => 5),
array('name' => "Gojra",'state_id' => 5),
array('name' => "Gujar Khan",'state_id' => 5),
array('name' => "Gujranwala",'state_id' => 5),
array('name' => "Gujrat",'state_id' => 5),
array('name' => "Hadali",'state_id' => 5),
array('name' => "Hafizabad",'state_id' => 5),
array('name' => "Harnoli",'state_id' => 5),
array('name' => "Harunabad",'state_id' => 5),
array('name' => "Hasan Abdal",'state_id' => 5),
array('name' => "Hasilpur",'state_id' => 5),
array('name' => "Haveli",'state_id' => 5),
array('name' => "Hazro",'state_id' => 5),
array('name' => "Hujra Shah Muqim",'state_id' => 5),
array('name' => "Isa Khel",'state_id' => 5),
array('name' => "Jahanian",'state_id' => 5),
array('name' => "Jalalpur Bhattian",'state_id' => 5),
array('name' => "Jalalpur Jattan",'state_id' => 5),
array('name' => "Jalalpur Pirwala",'state_id' => 5),
array('name' => "Jalla Jeem",'state_id' => 5),
array('name' => "Jamke Chima",'state_id' => 5),
array('name' => "Jampur",'state_id' => 5),
array('name' => "Jand",'state_id' => 5),
array('name' => "Jandanwala",'state_id' => 5),
array('name' => "Jandiala Sherkhan",'state_id' => 5),
array('name' => "Jaranwala",'state_id' => 5),
array('name' => "Jatoi",'state_id' => 5),
array('name' => "Jauharabad",'state_id' => 5),
array('name' => "Jhang",'state_id' => 5),
array('name' => "Jhawarian",'state_id' => 5),
array('name' => "Jhelum",'state_id' => 5),
array('name' => "Kabirwala",'state_id' => 5),
array('name' => "Kahna Nau",'state_id' => 5),
array('name' => "Kahror Pakka",'state_id' => 5),
array('name' => "Kahuta",'state_id' => 5),
array('name' => "Kalabagh",'state_id' => 5),
array('name' => "Kalaswala",'state_id' => 5),
array('name' => "Kaleke",'state_id' => 5),
array('name' => "Kalur Kot",'state_id' => 5),
array('name' => "Kamalia",'state_id' => 5),
array('name' => "Kamar Mashani",'state_id' => 5),
array('name' => "Kamir",'state_id' => 5),
array('name' => "Kamoke",'state_id' => 5),
array('name' => "Kamra",'state_id' => 5),
array('name' => "Kanganpur",'state_id' => 5),
array('name' => "Karampur",'state_id' => 5),
array('name' => "Karor Lal Esan",'state_id' => 5),
array('name' => "Kasur",'state_id' => 5),
array('name' => "Khairpur Tamewali",'state_id' => 5),
array('name' => "Khanewal",'state_id' => 5),
array('name' => "Khangah Dogran",'state_id' => 5),
array('name' => "Khangarh",'state_id' => 5),
array('name' => "Khanpur",'state_id' => 5),
array('name' => "Kharian",'state_id' => 5),
array('name' => "Khewra",'state_id' => 5),
array('name' => "Khundian",'state_id' => 5),
array('name' => "Khurianwala",'state_id' => 5),
array('name' => "Khushab",'state_id' => 5),
array('name' => "Kot Abdul Malik",'state_id' => 5),
array('name' => "Kot Addu",'state_id' => 5),
array('name' => "Kot Mithan",'state_id' => 5),
array('name' => "Kot Moman",'state_id' => 5),
array('name' => "Kot Radha Kishan",'state_id' => 5),
array('name' => "Kot Samaba",'state_id' => 5),
array('name' => "Kotli Loharan",'state_id' => 5),
array('name' => "Kundian",'state_id' => 5),
array('name' => "Kunjah",'state_id' => 5),
array('name' => "Lahore",'state_id' => 5),
array('name' => "Lalamusa",'state_id' => 5),
array('name' => "Lalian",'state_id' => 5),
array('name' => "Liaqatabad",'state_id' => 5),
array('name' => "Liaqatpur",'state_id' => 5),
array('name' => "Lieah",'state_id' => 5),
array('name' => "Liliani",'state_id' => 5),
array('name' => "Lodhran",'state_id' => 5),
array('name' => "Ludhewala Waraich",'state_id' => 5),
array('name' => "Mailsi",'state_id' => 5),
array('name' => "Makhdumpur",'state_id' => 5),
array('name' => "Makhdumpur Rashid",'state_id' => 5),
array('name' => "Malakwal",'state_id' => 5),
array('name' => "Mamu Kanjan",'state_id' => 5),
array('name' => "Mananwala Jodh Singh",'state_id' => 5),
array('name' => "Mandi Bahauddin",'state_id' => 5),
array('name' => "Mandi Sadiq Ganj",'state_id' => 5),
array('name' => "Mangat",'state_id' => 5),
array('name' => "Mangla",'state_id' => 5),
array('name' => "Mankera",'state_id' => 5),
array('name' => "Mian Channun",'state_id' => 5),
array('name' => "Miani",'state_id' => 5),
array('name' => "Mianwali",'state_id' => 5),
array('name' => "Minchinabad",'state_id' => 5),
array('name' => "Mitha Tiwana",'state_id' => 5),
array('name' => "Multan",'state_id' => 5),
array('name' => "Muridke",'state_id' => 5),
array('name' => "Murree",'state_id' => 5),
array('name' => "Mustafabad",'state_id' => 5),
array('name' => "Muzaffargarh",'state_id' => 5),
array('name' => "Nankana Sahib",'state_id' => 5),
array('name' => "Narang",'state_id' => 5),
array('name' => "Narowal",'state_id' => 5),
array('name' => "Noorpur Thal",'state_id' => 5),
array('name' => "Nowshera",'state_id' => 5),
array('name' => "Nowshera Virkan",'state_id' => 5),
array('name' => "Okara",'state_id' => 5),
array('name' => "Pakpattan",'state_id' => 5),
array('name' => "Pasrur",'state_id' => 5),
array('name' => "Pattoki",'state_id' => 5),
array('name' => "Phalia",'state_id' => 5),
array('name' => "Phularwan",'state_id' => 5),
array('name' => "Pind Dadan Khan",'state_id' => 5),
array('name' => "Pindi Bhattian",'state_id' => 5),
array('name' => "Pindi Gheb",'state_id' => 5),
array('name' => "Pirmahal",'state_id' => 5),
array('name' => "Qadirabad",'state_id' => 5),
array('name' => "Qadirpur Ran",'state_id' => 5),
array('name' => "Qila Disar Singh",'state_id' => 5),
array('name' => "Qila Sobha Singh",'state_id' => 5),
array('name' => "Quaidabad",'state_id' => 5),
array('name' => "Rabwah",'state_id' => 5),
array('name' => "Rahim Yar Khan",'state_id' => 5),
array('name' => "Raiwind",'state_id' => 5),
array('name' => "Raja Jang",'state_id' => 5),
array('name' => "Rajanpur",'state_id' => 5),
array('name' => "Rasulnagar",'state_id' => 5),
array('name' => "Rawalpindi",'state_id' => 5),
array('name' => "Renala Khurd",'state_id' => 5),
array('name' => "Rojhan",'state_id' => 5),
array('name' => "Saddar Gogera",'state_id' => 5),
array('name' => "Sadiqabad",'state_id' => 5),
array('name' => "Safdarabad",'state_id' => 5),
array('name' => "Sahiwal",'state_id' => 5),
array('name' => "Samasatta",'state_id' => 5),
array('name' => "Sambrial",'state_id' => 5),
array('name' => "Sammundri",'state_id' => 5),
array('name' => "Sangala Hill",'state_id' => 5),
array('name' => "Sanjwal",'state_id' => 5),
array('name' => "Sarai Alamgir",'state_id' => 5),
array('name' => "Sarai Sidhu",'state_id' => 5),
array('name' => "Sargodha",'state_id' => 5),
array('name' => "Shadiwal",'state_id' => 5),
array('name' => "Shahkot",'state_id' => 5),
array('name' => "Shahpur City",'state_id' => 5),
array('name' => "Shahpur Saddar",'state_id' => 5),
array('name' => "Shakargarh",'state_id' => 5),
array('name' => "Sharqpur",'state_id' => 5),
array('name' => "Shehr Sultan",'state_id' => 5),
array('name' => "Shekhupura",'state_id' => 5),
array('name' => "Shujaabad",'state_id' => 5),
array('name' => "Sialkot",'state_id' => 5),
array('name' => "Sillanwali",'state_id' => 5),
array('name' => "Sodhra",'state_id' => 5),
array('name' => "Sohawa",'state_id' => 5),
array('name' => "Sukheke",'state_id' => 5),
array('name' => "Talagang",'state_id' => 5),
array('name' => "Tandlianwala",'state_id' => 5),
array('name' => "Taunsa",'state_id' => 5),
array('name' => "Taxila",'state_id' => 5),
array('name' => "Tibba Sultanpur",'state_id' => 5),
array('name' => "Toba Tek Singh",'state_id' => 5),
array('name' => "Tulamba",'state_id' => 5),
array('name' => "Uch",'state_id' => 5),
array('name' => "Vihari",'state_id' => 5),
array('name' => "Wah",'state_id' => 5),
array('name' => "Warburton",'state_id' => 5),
array('name' => "Wazirabad",'state_id' => 5),
array('name' => "Yazman",'state_id' => 5),
array('name' => "Zafarwal",'state_id' => 5),
array('name' => "Zahir Pir",'state_id' => 5),

		);
        DB::table('cities')->insert($cities);
    }
}
