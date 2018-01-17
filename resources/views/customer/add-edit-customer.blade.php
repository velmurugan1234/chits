@extends('layouts.app')

@section('title', 'Add Customer')

@section('content')

   <section id="content">

        <div class="page page-fullwidth-layout">

            <div class="pageheader">

                

                <div class="page-bar">

                    <ul class="page-breadcrumb">
                        <li>
                            <a href="index.html"><i class="fa fa-home"></i> Minovate</a>
                        </li>
                        <li>
                            <a href="#">Layouts</a>
                        </li>
                        <li>
                            <a href="layout-fullwidth.html">Full-width Layout</a>
                        </li>
                    </ul>
                    
                </div>

            </div>

            <div class="row">
                <!-- col -->
                <div class="col-md-12">

                	<div class="pagecontent">

                        <div id="rootwizard" class="tab-container tab-wizard">
                            <ul class="nav nav-tabs nav-justified nav-pills">
                                <li class="active"><a href="#tab1" data-toggle="tab" aria-expanded="true">Personal Information <span class="badge badge-default pull-right wizard-step">1</span></a></li>
                                <li><a href="#tab2" data-toggle="tab">Address<span class="badge badge-default pull-right wizard-step">2</span></a></li>
                                <li><a href="#tab3" data-toggle="tab">Education<span class="badge badge-default pull-right wizard-step">3</span></a></li>
                                <li><a href="#tab4" data-toggle="tab">Contact<span class="badge badge-default pull-right wizard-step">4</span></a></li>
                                <li><a href="#tab5" data-toggle="tab">EULA<span class="badge badge-default pull-right wizard-step">5</span></a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab1">

                               {{ Form::open(array('route' => array('customer-store','store'), 'id' => 'form1', 'method' => 'POST', 'files' => 'true')) }}

                                          <div class="row">
                                            <div class="form-group col-md-4">
                                                <label>Customer ID</label>
                                                
                                                    <input id="customer_id" class="form-control required" placeholder="Enter the customer id" name="customer_id" type="text" aria-required="true"> 
                                                
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label>Applicant Name</label>
                                                
                                                    <input id="applicantname1" class="form-control required" placeholder="Enter Applicant Name" name="applicant_name" type="text" aria-required="true"> 
                                                
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label>Father Name</label>
                                                
                                                  <input id="fathername1" class="form-control required" placeholder="Enter Applicant Father Name" name="father_name" type="text" aria-required="true"> 
                                                
                                            </div>
                                            <div class="form-group col-md-4" id="data_3">
                                                <label>Date Of Birth</label>
                                                        
                                                        <div class="input-group date">
                                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                            <input type="text" name="date_of_birth" class="form-control required" placeholder="Select the birth date" aria-required="true">
                                                        </div>
                                                    
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label>Profile Photo</label>

                                                    <input type="file" name="profile_photo" class="form-control required" aria-required="true">
                                                
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label>Marital Status </label>
                                                            
                                                <label class="radio-inline">
                                                  <input type="radio" name="marital_status" id="married" value="Married">Married
                                                </label>
                                                   
                                                   
                                                <label class="radio-inline">
                                                    <input type="radio" name="marital_status" id="single" value="Single">Single
                                                </label>
                                                    
                                                    
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label>Gender </label>
                                                            
                                                <label class="radio-inline">
                                                  <input type="radio" name="gender" id="male" value="Male">Male
                                                </label>
                                                   
                                                   
                                                <label class="radio-inline">
                                                    <input type="radio" name="gender" id="female" value="Female">Female
                                                </label>
                                                    
                                                    
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label > 
                                                 <b>ADDRESS </b></label> 
                                            </div>
                                             <div class="form-group col-md-4">
                                                <label>Door Number</label>
                                                <input id="door_number" class="form-control required" placeholder="Door Number" name="door_number" type="text" aria-required="true">                    
                                            </div> 
                                            <div class="form-group col-md-4">
                                                <label>Address</label>
                                                <input id="address" class="form-control required" placeholder="Address" name="address" type="text" aria-required="true">                    
                                             </div>  
                                             <div class="form-group col-md-4">
                                                <label>Address</label>
                                                <select name="city" data-placeholder="Choose a City..." class="form-control required chosen-select" aria-required="true">
                                                    <option value="">Select city</option>
                                                    <option value="A.Vellalapatti"> A.Vellalapatti</option>
                                                    <option value="Abiramam">   Abiramam</option>
                                                    <option value="Avinashi">   Avinashi</option>
                                                    <option value="Achampudur"> Achampudur</option>
                                                    <option value="Acharapakkam">   Acharapakkam</option>
                                                    <option value="Acharipallam">   Acharipallam</option>
                                                    <option value="Achipatti">  Achipatti</option>
                                                    <option value="Adikaratti"> Adikaratti</option>
                                                    <option value="Adiramapattinam">Adiramapattinam</option>
                                                    <option value="AduthuraialiasMaruthuvakudi"> Aduthurai alias Maruthuvakudi</option>
                                                    <option value="Agaram"> Agaram</option>
                                                    <option value="Agastheeswaram"> Agastheeswaram</option>
                                                    <option value="Alagappapuram">  Alagappapuram</option>
                                                    <option value="Alanganallur">   Alanganallur</option>
                                                    <option value="Alangayam">  Alangayam</option>
                                                    <option value="Alangudi">   Alangudi</option>
                                                    <option value="Alangulam">  Alangulam</option>
                                                    <option value="Alangulam">  Alangulam</option>
                                                    <option value="Alanthurai"> Alanthurai</option>
                                                    <option value="Alapakkam">  Alapakkam</option>
                                                    <option value="Alur">   Alur</option>
                                                    <option value="Alwarkurichi">   Alwarkurichi</option>
                                                    <option value="Alwarthirunagiri">   Alwarthirunagiri</option>
                                                    <option value="Ambasamudram">   Ambasamudram</option>
                                                    <option value="Ambur">  Ambur</option>
                                                    <option value="Ammainaickanur"> Ammainaickanur</option>
                                                    <option value="Ammapettai"> Ammapettai</option>
                                                    <option value="Ammapettai"> Ammapettai</option>
                                                  
                                                    <option value="Ammavarikuppam"> Ammavarikuppam</option>
                                                    <option value="Ammoor"> Ammoor</option>
                                                    <option value="Anaimalai">  Anaimalai</option>
                                                    <option value="Anaiyur">    Anaiyur</option>
                                                    <option value="Ananthapuram">   Ananthapuram</option>
                                                    <option value="AndipattiJakkampatti">  Andipatti Jakkampatti</option>
                                                    <option value="Anjugramam"> Anjugramam</option>
                                                    <option value="Annavasal">  Annavasal</option>
                                                    <option value="Annur">  Annur</option>
                                                    <option value="Anthiyur">   Anthiyur</option>
                                                    <option value="Appakudal">  Appakudal</option>
                                                    <option value="Arachalur">  Arachalur</option>
                                                    <option value="Arakandanallur"> Arakandanallur</option>
                                                    <option value="Arakonam">   Arakonam</option>
                                                    <option value="Aralvaimozhi">   Aralvaimozhi</option>
                                                    <option value="Arani">  Arani</option>
                                                    <option value="Arani">  Arani</option>
                                                    <option value="Aranthangi"> Aranthangi</option>
                                                    <option value="Arasiramani">    Arasiramani</option>
                                                    <option value="Aravakurichi">   Aravakurichi</option>
                                                    <option value="Arcot">  Arcot</option>
                                                    <option value="Arimalam">   Arimalam</option>
                                                    <option value="Ariyalur">   Ariyalur</option>
                                                    <option value="Ariyappampalayam">   Ariyappampalayam</option>
                                                    <option value="Ariyur"> Ariyur</option>
                                                    <option value="Arumanai">   Arumanai</option>
                                                    <option value="Arumbavur">  Arumbavur</option>
                                                    <option value="">   </option>
                                                    <option value="Aruppukkottai">  Aruppukkottai</option>
                                                    <option value="Athani"> Athani</option>
                                                    <option value="Athanur">    Athanur</option>
                                                    <option value="Athimarapatti">  Athimarapatti</option>
                                                    <option value="Athipattu">  Athipattu</option>
                                                    <option value="Athur">  Athur</option>
                                                    <option value="Athur">  Athur</option>
                                                    <option value="Attur">  Attur</option>
                                                    <option value="Avadattur">  Avadattur</option>
                                                    <option value="Avalpoondurai">  Avalpoondurai</option>
                                                    <option value="Ayakudi">    Ayakudi</option>
                                                    <option value="Aygudi"> Aygudi</option>
                                                    <option value="Ayothiapattinam">  Ayothiapattinam</option>
                                                    <option value="Ayyalur">    Ayyalur</option>
                                                    <option value="Ayyampalayam">   Ayyampalayam</option>
                                                    <option value="Ayyampettai">    Ayyampettai</option>
                                                    <option value="Ayyampettai">    Ayyampettai</option>
                                                    <option value="Azhagiapandiapuram"> Azhagiapandiapuram</option>
                                                    <option value="B.Meenakshipuram">   B.Meenakshipuram</option>
                                                    <option value="B.Mallapuram">   B.Mallapuram</option>
                                                    <option value="Balakrishnampatti">  Balakrishnampatti</option>
                                                    <option value="Balakrishnapuram">   Balakrishnapuram</option>
                                                    <option value="Balapallam"> Balapallam</option>
                                                    <option value="Balasamudram"> Balasamudram</option>
                                                    <option value="Bargur"> Bargur</option>
                                                    <option value="Batlagundu"> Batlagundu</option>
                                                    <option value="Belur">  Belur</option>
                                                    <option value="">   </option>
                                                    <option value="BhavaniUA">  BhavaniUA</option>
                                                    <option value="Bhavanisagar">   Bhavanisagar</option>
                                                    <option value="Bhuvanagiri">    Bhuvanagiri</option>
                                                    <option value="Bikketti">   Bikketti</option>
                                                    <option value="Bodinayakanur">  Bodinayakanur</option>
                                                    <option value="Boothapandi">    Boothapandi</option>
                                                    <option value="Boothipuram">    Boothipuram</option>
                                                    <option value="Chengalpattu">   Chengalpattu</option>
                                                    <option value="Chengam">    Chengam</option>
                                                    <option value="ChennaiUA">  ChennaiUA</option>
                                                    <option value="Chennasamudram"> Chennasamudram</option>
                                                    <option value="Chennimalai">    Chennimalai</option>
                                                    <option value="Cheranmadevi">   Cheranmadevi</option>
                                                    <option value="Chetpet">    Chetpet</option>
                                                    <option value="Chettiarpatti">  Chettiarpatti</option>
                                                    <option value="Chettipalayam">  Chettipalayam</option>
                                                    <option value="Chettithangal">  Chettithangal</option>
                                                    <option value="Chidambaram">    Chidambaram</option>
                                                    <option value="Chinnakkampalayam">  Chinnakkampalayam</option>
                                                    <option value="Chinnalapatti">  Chinnalapatti</option>
                                                    <option value="Chinnamanur">    Chinnamanur</option>
                                                    <option value="Chinnasalem">    Chinnasalem</option>
                                                    <option value="Chithode">   Chithode</option>
                                                    <option value="Cholapuram"> Cholapuram</option>
                                                    <option value="Coimbatore"> Coimbatore</option>
                                                    <option value="Coonoor">    Coonoor</option>
                                                    <option value="Courtalam">  Courtalam</option>
                                                    <option value="Cuddalore">  Cuddalore</option>
                                                    <option value="Denkanikottai">  Denkanikottai</option>
                                                    <option value="Desur">  Desur</option>
                                                    <option value="Devadanapatti">  Devadanapatti</option>
                                                    <option value="Devakottai"> Devakottai</option>
                                                    <option value="Devanangurichi"> Devanangurichi</option>
                                                    <option value="Devarshola"> Devarshola</option>
                                                    <option value="Dhalavoipuram">  Dhalavoipuram</option>
                                                    <option value="Dhali">  Dhali</option>
                                                    <option value="Dhaliyur">   Dhaliyur</option>
                                                    <option value="Dharapuram"> Dharapuram</option>
                                                    <option value="Dharmapuri"> Dharmapuri</option>
                                                    <option value="Dindigul">   Dindigul</option>
                                                    <option value="Dusi">   Dusi</option>
                                                    <option value="Edaganasalai">   Edaganasalai</option>
                                                    <option value="Edaikodu">   Edaikodu</option>
                                                    <option value="Edakalinadu">    Edakalinadu</option>
                                                    <option value="Edappadi">   Edappadi</option>
                                                    <option value="Elathur">    Elathur</option>
                                                    <option value="Elayirampannai"> Elayirampannai</option>
                                                    <option value="Elumalai">   Elumalai</option>
                                                    <option value="Eral">   Eral</option>
                                                    <option value="Eraniel">    Eraniel</option>
                                                    <option value="Eriodu"> Eriodu</option>
                                                    <option value="ErodeUA">    ErodeUA</option>
                                                    <option value="Erumaipatti">    Erumaipatti</option>
                                                    <option value="Eruvadi">    Eruvadi</option>
                                                    <option value="Ethapur">    Ethapur</option>
                                                    <option value="Ettayapuram">    Ettayapuram</option>
                                                    <option value="Ezhudesam">  Ezhudesam</option>
                                                    <option value="Ganapathipuram"> Ganapathipuram</option>
                                                    <option value="Gangavalli"> Gangavalli</option>
                                                    <option value="Ganguvarpatti">  Ganguvarpatti</option>
                                                    <option value="Gingee"> Gingee</option>
                                                    <option value="Gobichettipalayam">  Gobichettipalayam</option>
                                                    <option value="Gopalasamudram"> Gopalasamudram</option>
                                                    <option value="Gudalur">    Gudalur</option>
                                                    <option value="Gudalur">    Gudalur</option>
                                                    <option value="Gudalur">    Gudalur</option>
                                                    <option value="Gudiyatham"> Gudiyatham</option>
                                                    <option value="Gummidipoondi">  Gummidipoondi</option>
                                                    <option value="Hanumanthampatti">   Hanumanthampatti</option>
                                                    <option value="Harur">  Harur</option>
                                                    <option value="Hosur">  Hosur</option>
                                                    <option value="Huligal">    Huligal</option>
                                                    <option value="Ilampillai"> Ilampillai</option>
                                                    <option value="Ilanji"> Ilanji</option>
                                                    <option value="Ilayangudi"> Ilayangudi</option>
                                                    <option value="Iluppaiyurani">  Iluppaiyurani</option>
                                                    <option value="Iluppur">    Iluppur</option>
                                                    <option value="Jalakandapuram"> Jalakandapuram</option>
                                                    <option value="Jambai"> Jambai</option>
                                                    <option value="Jayankondam">    Jayankondam</option>
                                                    <option value="Jolarpet">   Jolarpet</option>
                                                    <option value="Kadambur">   Kadambur</option>
                                                    <option value="Kadathur">   Kadathur</option>
                                                    <option value="Kadayal">    Kadayal</option>
                                                    <option value="Kadayampatti">   Kadayampatti</option>
                                                    <option value="Kadayanallur">   Kadayanallur</option>
                                                    <option value="Kalakkad">   Kalakkad</option>
                                                    <option value="Kalambur">   Kalambur</option>
                                                    <option value="Kalappanaickenpatti">  Kalappanaickenpatti</option>
                                                    <option value="Kalavai">    Kalavai</option>
                                                    <option value="Kaliyakkavilai"> Kaliyakkavilai</option>
                                                    <option value="Kallakkurichi">  Kallakkurichi</option>
                                                    <option value="Kallakudi">  Kallakudi</option>
                                                    <option value="Kallukuttam">    Kallukuttam</option>
                                                    <option value="Kalugumalai">    Kalugumalai</option>
                                                    <option value="Kamayagoundanpatti"> Kamayagoundanpatti</option>
                                                    <option value="Kambainallur">   Kambainallur</option>
                                                    <option value="Kambam"> Kambam</option>
                                                    <option value="Kamuthi">    Kamuthi</option>
                                                    <option value="Kanakkampalayam">    Kanakkampalayam</option>
                                                    <option value="Kanam">  Kanam</option>
                                                    <option value="Kancheepuram">   Kancheepuram</option>
                                                    <option value="Kangayampalayam">    Kangayampalayam</option>
                                                    <option value="Kangeyam">   Kangeyam</option>
                                                    <option value="Kaniyur">    Kaniyur</option>
                                                    <option value="Kanjikoil">  Kanjikoil</option>
                                                    <option value="Kannamangalam">  Kannamangalam</option>
                                                    <option value="Kannivadi">  Kannivadi</option>
                                                    <option value="Kannivadi">  Kannivadi</option>
                                                    <option value="Kanniyakumari">  Kanniyakumari</option>
                                                    <option value="Kappiyarai"> Kappiyarai</option>
                                                    <option value="Karaikkudi"> Karaikkudi</option>
                                                    <option value="Karamadai">  Karamadai</option>
                                                    <option value="Karambakkudi">   Karambakkudi</option>
                                                    <option value="Kariamangalam">  Kariamangalam</option>
                                                    <option value="Kariapatti"> Kariapatti</option>
                                                    <option value="Karugampattur">  Karugampattur</option>
                                                    <option value="KarumandiChellipalayam"> KarumandiChellipalayam</option>
                                                    <option value="Karumathampatti">    Karumathampatti</option>
                                                    <option value="Karungal">   Karungal</option>
                                                    <option value="Karunguzhi"> Karunguzhi</option>
                                                    <option value="Karuppur">   Karuppur</option>
                                                    <option value="Karur">  Karur</option>
                                                    <option value="Kasipalayam">    Kasipalayam</option>
                                                    <option value="Kathujuganapalli">   Kathujuganapalli</option>
                                                    <option value="Kattumannarkoil">    Kattumannarkoil</option>
                                                    <option value="Kattuputhur">    Kattuputhur</option>
                                                    <option value="Kaveripakkam">   Kaveripakkam</option>
                                                    <option value="Kaveripattinam"> Kaveripattinam</option>
                                                    <option value="Kayatharu">  Kayatharu</option>
                                                    <option value="Keelakarai"> Keelakarai</option>
                                                    <option value="Keeramangalam">  Keeramangalam</option>
                                                    <option value="Keeranur">   Keeranur</option>
                                                    <option value="Keeranur">   Keeranur</option>
                                                    <option value="Keeripatti"> Keeripatti</option>
                                                    <option value="Keezhapavur">    Keezhapavur</option>
                                                    <option value="Kelamangalam">   Kelamangalam</option>
                                                    <option value="Kembainaickenpalayam"> Kembainaickenpalayam</option>
                                                    <option value="Kethi">  Kethi</option>
                                                    <option value="Kilampadi">  Kilampadi</option>
                                                    <option value="Kilkulam">   Kilkulam</option>
                                                    <option value="Kilkunda">   Kilkunda</option>
                                                    <option value="Killai"> Killai</option>
                                                    <option value="Killiyur">   Killiyur</option>
                                                    <option value="Kilpennathur">   Kilpennathur</option>
                                                    <option value="Kilvelur">   Kilvelur</option>
                                                    <option value="Kinathukadavu">  Kinathukadavu</option>
                                                    <option value="Kodaikanal"> Kodaikanal</option>
                                                    <option value="Kodavasal">  Kodavasal</option>
                                                    <option value="Kodumudi">   Kodumudi</option>
                                                    <option value="Kolachal">   Kolachal</option>
                                                    <option value="Kolappalur"> Kolappalur</option>
                                                    <option value="Kolathupalayam"> Kolathupalayam</option>
                                                    <option value="Kolathur">   Kolathur</option>
                                                    <option value="Kollankodu"> Kollankodu</option>
                                                    <option value="Kollankoil"> Kollankoil</option>
                                                    <option value="Komaralingam">   Komaralingam</option>
                                                    <option value="Kombai"> Kombai</option>
                                                    <option value="Konganapuram">   Konganapuram</option>
                                                    <option value="Kooraikundu">    Kooraikundu</option>
                                                    <option value="Koradacheri">    Koradacheri</option>
                                                    <option value="Kotagiri">   Kotagiri</option>
                                                    <option value="Kothinallur">    Kothinallur</option>
                                                    <option value="Kottakuppam">    Kottakuppam</option>
                                                    <option value="Kottaram">   Kottaram</option>
                                                    <option value="Kottur"> Kottur</option>
                                                    <option value="Kovilpatti"> Kovilpatti</option>
                                                    <option value="Krishnagiri">    Krishnagiri</option>
                                                    <option value="Krishnarayapuram">   Krishnarayapuram</option>
                                                    <option value="Kuchanur">   Kuchanur</option>
                                                    <option value="Kuhalur">    Kuhalur</option>
                                                    <option value="Kulasekarapuram">    Kulasekarapuram</option>
                                                    <option value="Kulithalai"> Kulithalai</option>
                                                    <option value="Kumarapuram">    Kumarapuram</option>
                                                    <option value="Kumbakonam"> Kumbakonam</option>
                                                    <option value="Kunnathur">  Kunnathur</option>
                                                    <option value="Kurinjipadi">    Kurinjipadi</option>
                                                    <option value="Kurumbalur"> Kurumbalur</option>
                                                    <option value="Kuthalam">   Kuthalam</option>
                                                    <option value="Kuthanallur">    Kuthanallur</option>
                                                    <option value="Kuzhithurai">    Kuzhithurai</option>
                                                    <option value="Labbaikudikadu"> Labbaikudikadu</option>
                                                    <option value="Lakkampatti">    Lakkampatti</option>
                                                    <option value="Lalgudi">    Lalgudi</option>
                                                    <option value="Lalpet"> Lalpet</option>
                                                    <option value="Madathukulam">   Madathukulam</option>
                                                    <option value="Madukkur">   Madukkur</option>
                                                    <option value="Madurai">    Madurai</option>
                                                    <option value="Maduranthakam">  Maduranthakam</option>
                                                    <option value="Mallankinaru">   Mallankinaru</option>
                                                    <option value="MallasamudramUA">    MallasamudramUA</option>
                                                    <option value="Mallur"> Mallur</option>
                                                    <option value="Mamallapuram">   Mamallapuram</option>
                                                    <option value="Mamsapuram"> Mamsapuram</option>
                                                    <option value="Manachanallur">  Manachanallur</option>
                                                    <option value="Manalmedu">  Manalmedu</option>
                                                    <option value="Manalurpet"> Manalurpet</option>
                                                    <option value="Manamadurai">    Manamadurai</option>
                                                    <option value="Manapparai"> Manapparai</option>
                                                    <option value="Manavalakurichi">    Manavalakurichi</option>
                                                    <option value="Mandaikadu"> Mandaikadu</option>
                                                    <option value="Mandapam">   Mandapam</option>
                                                    <option value="Mangalampet">    Mangalampet</option>
                                                    <option value="Manimutharu">    Manimutharu</option>
                                                    <option value="Mannargudi"> Mannargudi</option>
                                                    <option value="Maraimalainagar">    Maraimalainagar</option>
                                                    <option value="Marakkanam"> Marakkanam</option>
                                                    <option value="Maramangalathupatti">    Maramangalathupatti</option>
                                                    <option value="Marandahalli">   Marandahalli</option>
                                                    <option value="Markayankottai"> Markayankottai</option>
                                                    <option value="Marudur">    Marudur</option>
                                                    <option value="Marungur">   Marungur</option>
                                                    <option value="Mathigiri">  Mathigiri</option>
                                                    <option value="Mayiladuthurai"> Mayiladuthurai</option>
                                                    <option value="Mecheri">    Mecheri</option>
                                                    <option value="Melacheval"> Melacheval</option>
                                                    <option value="Melachokkanathapuram"> Melachokkanathapuram</option>
                                                    <option value="Melagaram">  Melagaram</option>
                                                    <option value="Melamaiyur"> Melamaiyur</option>
                                                    <option value="Melathiruppanthuruthi">  Melathiruppanthuruthi</option>
                                                    <option value="Melattur">   Melattur</option>
                                                    <option value="Melpattampakkam">    Melpattampakkam</option>
                                                    <option value="Melur">  Melur</option>
                                                    <option value="Melvisharam">    Melvisharam</option>
                                                    <option value="Mettupalayam">   Mettupalayam</option>
                                                    <option value="Mettupalayam">   Mettupalayam</option>
                                                    <option value="Mettur"> Mettur</option>
                                                    <option value="Minjur"> Minjur</option>
                                                    <option value="Modakurichi">    Modakurichi</option>
                                                    <option value="Mohanur">    Mohanur</option>
                                                    <option value="Moolakaraipatti">    Moolakaraipatti</option>
                                                    <option value="Mopperipalayam"> Mopperipalayam</option>
                                                    <option value="Mudukulathur">   Mudukulathur</option>
                                                    <option value="Mukasipidariyur">    Mukasipidariyur</option>
                                                    <option value="Mukkudal">   Mukkudal</option>
                                                    <option value="Mulagumudu"> Mulagumudu</option>
                                                    <option value="Mulanur">    Mulanur</option>
                                                    <option value="Muruganpalayam"> Muruganpalayam</option>
                                                    <option value="Musiri"> Musiri</option>
                                                    <option value="Muthupet">   Muthupet</option>
                                                    <option value="Muthur"> Muthur</option>
                                                    <option value="Muttayyapuram">  Muttayyapuram</option>
                                                    <option value="Myladi"> Myladi</option>
                                                    <option value="Naduvattam"> Naduvattam</option>
                                                    <option value="Nagapattinam">   Nagapattinam</option>
                                                    <option value="Nagavakulam">    Nagavakulam</option>
                                                    <option value="Nagercoil">  Nagercoil</option>
                                                    <option value="Nagojanahalli">  Nagojanahalli</option>
                                                    <option value="Nallampatti">    Nallampatti</option>
                                                    <option value="Nallur"> Nallur</option>
                                                    <option value="Namagiripettai"> Namagiripettai</option>
                                                    <option value="Namakkal">   Namakkal</option>
                                                    <option value="Nambiyur">   Nambiyur</option>
                                                    <option value="Nandivaram-Guduvancheri">    Nandivaram-Guduvancheri</option>
                                                    <option value="Nangavalli"> Nangavalli</option>
                                                    <option value="Nangavaram"> Nangavaram</option>
                                                    <option value="Nanguneri">  Nanguneri</option>
                                                    <option value="Nanjikottai">    Nanjikottai</option>
                                                    <option value="Nannilam">   Nannilam</option>
                                                    <option value="Naranapuram">    Naranapuram</option>
                                                    <option value="Narasingapuram"> Narasingapuram</option>
                                                    <option value="Narasingapuram"> Narasingapuram</option>
                                                    <option value="Nasiyanur">  Nasiyanur</option>
                                                    <option value="Natham"> Natham</option>
                                                    <option value="Nathampannai">   Nathampannai</option>
                                                    <option value="Natrampalli">    Natrampalli</option>
                                                    <option value="Nattarasankottai">   Nattarasankottai</option>
                                                    <option value="Nazerath">   Nazerath</option>
                                                    <option value="Needamangalam">  Needamangalam</option>
                                                    <option value="Neelagiri">  Neelagiri</option>
                                                    <option value="Neikkarapatti">  Neikkarapatti</option>
                                                    <option value="Neiyyur">    Neiyyur</option>
                                                    <option value="Nellikuppam">    Nellikuppam</option>
                                                    <option value="Nemili"> Nemili</option>
                                                    <option value="Neripperichal">  Neripperichal</option>
                                                    <option value="Nerkuppai">  Nerkuppai</option>
                                                    <option value="Nerunjipettai">  Nerunjipettai</option>
                                                    <option value="Neyveli">    Neyveli</option>
                                                    <option value="Nilakkottai">    Nilakkottai</option>
                                                    <option value="O'Valley">   O'Valley</option>
                                                    <option value="Odaipatti">  Odaipatti</option>
                                                    <option value="Odaiyakulam">    Odaiyakulam</option>
                                                    <option value="Oddanchatram">   Oddanchatram</option>
                                                    <option value="Odugathur">  Odugathur</option>
                                                    <option value="Olagadam">   Olagadam</option>
                                                    <option value="Omalur"> Omalur</option>
                                                    <option value="Orathanadu"> Orathanadu</option>
                                                    <option value="Othakadai">  Othakadai</option>
                                                    <option value="Othakalmandapam">    Othakalmandapam</option>
                                                    <option value="Ottapparai"> Ottapparai</option>
                                                    <option value="P.J.Cholapuram"> P.J.Cholapuram</option>
                                                    <option value="P.Mettupalayam"> P.Mettupalayam</option>
                                                    <option value="P.N.Patti">  P.N.Patti</option>
                                                    <option value="Pacode"> Pacode</option>
                                                    <option value="Padaiveedu"> Padaiveedu</option>
                                                    <option value="Padirikuppam">   Padirikuppam</option>
                                                    <option value="Padmanabhapuram">    Padmanabhapuram</option>
                                                    <option value="Palaganangudy">  Palaganangudy</option>
                                                    <option value="Palakkodu">  Palakkodu</option>
                                                    <option value="Palamedu">   Palamedu</option>
                                                    <option value="Palani"> Palani</option>
                                                    <option value="PalaniChettipatti">  PalaniChettipatti</option>
                                                    <option value="Palayam">    Palayam</option>
                                                    <option value="Palladam">   Palladam</option>
                                                    <option value="Pallapalayam">   Pallapalayam</option>
                                                    <option value="Pallapatti"> Pallapatti</option>
                                                    <option value="Pallapatti"> Pallapatti</option>
                                                    <option value="Pallapatti"> Pallapatti</option>
                                                    <option value="Pallikonda"> Pallikonda</option>
                                                    <option value="Pallipattu"> Pallipattu</option>
                                                    <option value="Panagudi">   Panagudi</option>
                                                    <option value="Panaimarathupatti">  Panaimarathupatti</option>
                                                    <option value="Panapakkam"> Panapakkam</option>
                                                    <option value="Panboli">    Panboli</option>
                                                    <option value="Pandamangalam">  Pandamangalam</option>
                                                    <option value="Pannaikadu"> Pannaikadu</option>
                                                    <option value="Pannaipuram">    Pannaipuram</option>
                                                    <option value="Panruti">    Panruti</option>
                                                    <option value="Papanasam">  Papanasam</option>
                                                    <option value="Papparapatti">   Papparapatti</option>
                                                    <option value="Pappireddipatti">    Pappireddipatti</option>
                                                    <option value="Paramakudi"> Paramakudi</option>
                                                    <option value="Paramathi">  Paramathi</option>
                                                    <option value="Parangipettai">  Parangipettai</option>
                                                    <option value="Pasur">  Pasur</option>
                                                    <option value="Pathamadai"> Pathamadai</option>
                                                    <option value="Pattinam">   Pattinam</option>
                                                    <option value="Pattiveeranpatti">   Pattiveeranpatti</option>
                                                    <option value="Pattukkottai">   Pattukkottai</option>
                                                    <option value="Pazhugal">   Pazhugal</option>
                                                    <option value="Pennadam">   Pennadam</option>
                                                    <option value="Pennagaram"> Pennagaram</option>
                                                    <option value="Pennathur">  Pennathur</option>
                                                    <option value="Peraiyur">   Peraiyur</option>
                                                    <option value="Peralam">    Peralam</option>
                                                    <option value="Perambalur"> Perambalur</option>
                                                    <option value="Peranamallur">   Peranamallur</option>
                                                    <option value="Peravurani"> Peravurani</option>
                                                    <option value="PeriyaNegamam">  PeriyaNegamam</option>
                                                    <option value="Periyakodiveri"> Periyakodiveri</option>
                                                    <option value="Periyakulam">    Periyakulam</option>
                                                    <option value="Periyapatti">    Periyapatti</option>
                                                    <option value="Periyasemur">    Periyasemur</option>
                                                    <option value="Pernampattu">    Pernampattu</option>
                                                    <option value="Perumagalur">    Perumagalur</option>
                                                    <option value="Perumandi">  Perumandi</option>
                                                    <option value="Perumuchi">  Perumuchi</option>
                                                    <option value="Perundurai"> Perundurai</option>
                                                    <option value="Perungulam"> Perungulam</option>
                                                    <option value="Pethampalayam">  Pethampalayam</option>
                                                    <option value="Pethanaickenpalayam">    Pethanaickenpalayam</option>
                                                    <option value="Pillanallur">    Pillanallur</option>
                                                    <option value="Pollachi">   Pollachi</option>
                                                    <option value="Polur">  Polur</option>
                                                    <option value="Ponmani">    Ponmani</option>
                                                    <option value="Ponnamaravathi"> Ponnamaravathi</option>
                                                    <option value="Ponnampatti">    Ponnampatti</option>
                                                    <option value="Ponneri">    Ponneri</option>
                                                    <option value="Poolambadi"> Poolambadi</option>
                                                    <option value="Poolampatti">    Poolampatti</option>
                                                    <option value="Pooluvapatti">   Pooluvapatti</option>
                                                    <option value="Pothanur">   Pothanur</option>
                                                    <option value="Pothatturpettai">    Pothatturpettai</option>
                                                    <option value="Pudukadai">  Pudukadai</option>
                                                    <option value="Pudukkottai">    Pudukkottai</option>
                                                    <option value="Pudukkottai">    Pudukkottai</option>
                                                    <option value="Pudupalayam">    Pudupalayam</option>
                                                    <option value="PudupalayamAgraharam">   PudupalayamAgraharam</option>
                                                    <option value="Pudupatti">  Pudupatti</option>
                                                    <option value="Pudupattinam">   Pudupattinam</option>
                                                    <option value="Pudur">  Pudur</option>
                                                    <option value="Puliyankudi">    Puliyankudi</option>
                                                    <option value="Puliyur">    Puliyur</option>
                                                    <option value="Pullampadi"> Pullampadi</option>
                                                    <option value="PunjaiThottakurichi">    PunjaiThottakurichi</option>
                                                    <option value="Punjaipugalur">  Punjaipugalur</option>
                                                    <option value="Punjaipuliampatti">  Punjaipuliampatti</option>
                                                    <option value="Puthalam">   Puthalam</option>
                                                    <option value="Puvalur">    Puvalur</option>
                                                    <option value="R.Pudupatti">    R.Pudupatti</option>
                                                    <option value="R.S.Mangalam">   R.S.Mangalam</option>
                                                    <option value="Rajapalayam">    Rajapalayam</option>
                                                    <option value="Ramanathapuram"> Ramanathapuram</option>
                                                    <option value="Rameswaram"> Rameswaram</option>
                                                    <option value="Rasipuram">  Rasipuram</option>
                                                    <option value="Rayagiri">   Rayagiri</option>
                                                    <option value="Reethapuram">    Reethapuram</option>
                                                    <option value="Rosalpatti"> Rosalpatti</option>
                                                    <option value="Rudravathi"> Rudravathi</option>
                                                    <option value="S.Kannanur"> S.Kannanur</option>
                                                    <option value="S.Kodikulam">    S.Kodikulam</option>
                                                    <option value="Salangapalayam"> Salangapalayam</option>
                                                    <option value="Salem">  Salem</option>
                                                    <option value="Samalapuram">    Samalapuram</option>
                                                    <option value="Samathur">   Samathur</option>
                                                    <option value="SambavarVadagarai">  SambavarVadagarai</option>
                                                    <option value="Sankaramanallur">    Sankaramanallur</option>
                                                    <option value="Sankarankoil">   Sankarankoil</option>
                                                    <option value="Sankarapuram">   Sankarapuram</option>
                                                    <option value="Sankari">    Sankari</option>
                                                    <option value="Sarcarsamakulam">    Sarcarsamakulam</option>
                                                    <option value="Sathankulam">    Sathankulam</option>
                                                    <option value="Sathiyavijayanagaram">   Sathiyavijayanagaram</option>
                                                    <option value="Sathyamangalam"> Sathyamangalam</option>
                                                    <option value="Sattur"> Sattur</option>
                                                    <option value="Sayalgudi">  Sayalgudi</option>
                                                    <option value="Sayapuram">  Sayapuram</option>
                                                    <option value="Seerapalli"> Seerapalli</option>
                                                    <option value="Seithur">    Seithur</option>
                                                    <option value="Semmipalayam">   Semmipalayam</option>
                                                    <option value="Senthamangalam"> Senthamangalam</option>
                                                    <option value="Sentharapatti">  Sentharapatti</option>
                                                    <option value="Senur">  Senur</option>
                                                    <option value="Sethiathoppu">   Sethiathoppu</option>
                                                    <option value="Sevugampatti">   Sevugampatti</option>
                                                    <option value="Shenkottai"> Shenkottai</option>
                                                    <option value="Sholavandan">    Sholavandan</option>
                                                    <option value="Sholingur">  Sholingur</option>
                                                    <option value="Sholur"> Sholur</option>
                                                    <option value="Singampuneri">   Singampuneri</option>
                                                    <option value="Singaperumalkoil">   Singaperumalkoil</option>
                                                    <option value="Sirkali">    Sirkali</option>
                                                    <option value="Sirugamani"> Sirugamani</option>
                                                    <option value="Sirumugai">  Sirumugai</option>
                                                    <option value="Sithayankottai"> Sithayankottai</option>
                                                    <option value="Sithurajapuram"> Sithurajapuram</option>
                                                    <option value="Sivaganga">  Sivaganga</option>
                                                    <option value="Sivagiri">   Sivagiri</option>
                                                    <option value="Sivagiri">   Sivagiri</option>
                                                    <option value="Sivakasi">   Sivakasi</option>
                                                    <option value="Sivanthipuram">  Sivanthipuram</option>
                                                    <option value="Srimushnam"> Srimushnam</option>
                                                    <option value="Sriperumbudur">  Sriperumbudur</option>
                                                    <option value="Sriramapuram">   Sriramapuram</option>
                                                    <option value="Srivaikuntam">   Srivaikuntam</option>
                                                    <option value="Srivilliputhur"> Srivilliputhur</option>
                                                    <option value="Suchindram"> Suchindram</option>
                                                    <option value="Sundarapandiam"> Sundarapandiam</option>
                                                    <option value="Sundarapandiapuram"> Sundarapandiapuram</option>
                                                    <option value="Surandai">   Surandai</option>
                                                    <option value="Suriyampalayam"> Suriyampalayam</option>
                                                    <option value="Swamimalai"> Swamimalai</option>
                                                    <option value="T.Kallupatti">   T.Kallupatti</option>
                                                    <option value="Tayilupatti">    Tayilupatti</option>
                                                    <option value="Tenkasi">    Tenkasi</option>
                                                    <option value="Thadikombu"> Thadikombu</option>
                                                    <option value="Thakkolam">  Thakkolam</option>
                                                    <option value="Thalainayar">    Thalainayar</option>
                                                    <option value="Thalakudi">  Thalakudi</option>
                                                    <option value="Thamaraikulam">  Thamaraikulam</option>
                                                    <option value="Thammampatti">   Thammampatti</option>
                                                    <option value="Thanjavur">  Thanjavur</option>
                                                    <option value="Tharamangalam">  Tharamangalam</option>
                                                    <option value="Tharangambadi">  Tharangambadi</option>
                                                    <option value="Thathaiyangarpet">   Thathaiyangarpet</option>
                                                    <option value="Thedavur">   Thedavur</option>
                                                    <option value="Thengampudur">   Thengampudur</option>
                                                    <option value="TheniAllinagaram">   TheniAllinagaram</option>
                                                    <option value="Thenkarai">  Thenkarai</option>
                                                    <option value="Thenkarai">  Thenkarai</option>
                                                    <option value="Thenthamaraikulam">  Thenthamaraikulam</option>
                                                    <option value="Thenthiruperai"> Thenthiruperai</option>
                                                    <option value="Thesur"> Thesur</option>
                                                    <option value="Thevaram">   Thevaram</option>
                                                    <option value="Thevur"> Thevur</option>
                                                    <option value="Thiagadurgam">   Thiagadurgam</option>
                                                    <option value="Thingalnagar">   Thingalnagar</option>
                                                    <option value="Thirukarungudi"> Thirukarungudi</option>
                                                    <option value="Thirukkattupalli">   Thirukkattupalli</option>
                                                    <option value="Thirumalayampalayam">    Thirumalayampalayam</option>
                                                    <option value="Thirumangalam">  Thirumangalam</option>
                                                    <option value="Thirunageswaram">    Thirunageswaram</option>
                                                    <option value="Thirunindravur"> Thirunindravur</option>
                                                    <option value="Thiruparappu">   Thiruparappu</option>
                                                    <option value="Thiruporur"> Thiruporur</option>
                                                    <option value="Thiruppanandal"> Thiruppanandal</option>
                                                    <option value="Thirupuvanam">   Thirupuvanam</option>
                                                    <option value="Thirupuvanam">   Thirupuvanam</option>
                                                    <option value="Thiruthuraipoondi">  Thiruthuraipoondi</option>
                                                    <option value="Thiruvaiyaru">   Thiruvaiyaru</option>
                                                    <option value="Thiruvalam"> Thiruvalam</option>
                                                    <option value="Thiruvallur">    Thiruvallur</option>
                                                    <option value="Thiruvarur"> Thiruvarur</option>
                                                    <option value="Thiruvattaru">   Thiruvattaru</option>
                                                    <option value="Thiruvenkatam">  Thiruvenkatam</option>
                                                    <option value="Thiruvennainallur">  Thiruvennainallur</option>
                                                    <option value="Thiruvidaimarudur">  Thiruvidaimarudur</option>
                                                    <option value="Thiruvithankodu">    Thiruvithankodu</option>
                                                    <option value="Thisayanvilai">  Thisayanvilai</option>
                                                    <option value="Thittacheri">    Thittacheri</option>
                                                    <option value="Thondamuthur">   Thondamuthur</option>
                                                    <option value="Thondi"> Thondi</option>
                                                    <option value="Thoothukkudi">   Thoothukkudi</option>
                                                    <option value="Thorapadi">  Thorapadi</option>
                                                    <option value="Thottiyam">  Thottiyam</option>
                                                    <option value="Thuraiyur">  Thuraiyur</option>
                                                    <option value="Thuthipattu">    Thuthipattu</option>
                                                    <option value="Timiri"> Timiri</option>
                                                    <option value="Tindivanam"> Tindivanam</option>
                                                    <option value="Tiruchendur">    Tiruchendur</option>
                                                    <option value="Tiruchengode">   Tiruchengode</option>
                                                    <option value="Tiruchirappalli">    Tiruchirappalli</option>
                                                    <option value="Tirukalukundram">    Tirukalukundram</option>
                                                    <option value="Tirukkoyilur">   Tirukkoyilur</option>
                                                    <option value="Tirunelveli">    Tirunelveli</option>
                                                    <option value="Tirupathur"> Tirupathur</option>
                                                    <option value="Tirupathur"> Tirupathur</option>
                                                    <option value="Tiruppur">   Tiruppur</option>
                                                    <option value="Tiruttani">  Tiruttani</option>
                                                    <option value="Tiruvannamalai"> Tiruvannamalai</option>
                                                    <option value="Tiruvethipuram"> Tiruvethipuram</option>
                                                    <option value="Tittakudi">  Tittakudi</option>
                                                    <option value="TNPLPugalur">    TNPLPugalur</option>
                                                    <option value="Udangudi">   Udangudi</option>
                                                    <option value="Udayarpalayam">  Udayarpalayam</option>
                                                    <option value="Udhagamandalam"> Udhagamandalam</option>
                                                    <option value="Udumalaipettai"> Udumalaipettai</option>
                                                    <option value="Ulundurpettai">  Ulundurpettai</option>
                                                    <option value="Unjalur">    Unjalur</option>
                                                    <option value="Unnamalaikadai"> Unnamalaikadai</option>
                                                    <option value="Uppidamangalam"> Uppidamangalam</option>
                                                    <option value="Uppiliapuram">   Uppiliapuram</option>
                                                    <option value="Urapakkam">  Urapakkam</option>
                                                    <option value="Usilampatti">    Usilampatti</option>
                                                    <option value="Uthamapalayam">  Uthamapalayam</option>
                                                    <option value="Uthangarai"> Uthangarai</option>
                                                    <option value="Uthiramerur">    Uthiramerur</option>
                                                    <option value="Uthukkottai">    Uthukkottai</option>
                                                    <option value="Uthukuli">   Uthukuli</option>
                                                    <option value="V.Pudur">    V.Pudur</option>
                                                    <option value="V.Pudupatti">    V.Pudupatti</option>
                                                    <option value="VadakaraiKeezhpadugai">  VadakaraiKeezhpadugai</option>
                                                    <option value="Vadakkanandal">  Vadakkanandal</option>
                                                    <option value="Vadakkuvalliyur">    Vadakkuvalliyur</option>
                                                    <option value="Vadalur">    Vadalur</option>
                                                    <option value="Vadamadurai">    Vadamadurai</option>
                                                    <option value="Vadipatti">  Vadipatti</option>
                                                    <option value="Vadugapatti">    Vadugapatti</option>
                                                    <option value="Vadugapatti">    Vadugapatti</option>
                                                    <option value="Vaitheeswarankoil">  Vaitheeswarankoil</option>
                                                    <option value="Valangaiman">    Valangaiman</option>
                                                    <option value="Valavanur">  Valavanur</option>
                                                    <option value="Vallam"> Vallam</option>
                                                    <option value="Valparai">   Valparai</option>
                                                    <option value="Valvaithankoshtam">  Valvaithankoshtam</option>
                                                    <option value="Vanavasi">   Vanavasi</option>
                                                    <option value="Vandavasi">  Vandavasi</option>
                                                    <option value="Vaniputhur"> Vaniputhur</option>
                                                    <option value="Vaniyambadi">    Vaniyambadi</option>
                                                    <option value="Varadarajanpettai">  Varadarajanpettai</option>
                                                    <option value="Vasudevanallur"> Vasudevanallur</option>
                                                    <option value="Vathirairuppu">  Vathirairuppu</option>
                                                    <option value="Vazhapadi">  Vazhapadi</option>
                                                    <option value="Vedaranyam"> Vedaranyam</option>
                                                    <option value="Vedasandur"> Vedasandur</option>
                                                    <option value="Veeraganur"> Veeraganur</option>
                                                    <option value="Veerakkalpudur"> Veerakkalpudur</option>
                                                    <option value="Veerapandi"> Veerapandi</option>
                                                    <option value="Veeravanallur">  Veeravanallur</option>
                                                    <option value="Velankanni"> Velankanni</option>
                                                    <option value="Vellakoil">  Vellakoil</option>
                                                    <option value="Vellimalai"> Vellimalai</option>
                                                    <option value="Vellore">    Vellore</option>
                                                    <option value="Vellottamparappu">   Vellottamparappu</option>
                                                    <option value="Velur">  Velur</option>
                                                    <option value="Vengampudur">    Vengampudur</option>
                                                    <option value="Vengathur">  Vengathur</option>
                                                    <option value="Venkarai">   Venkarai</option>
                                                    <option value="Vennanthur"> Vennanthur</option>
                                                    <option value="Veppathur">  Veppathur</option>
                                                    <option value="Verkilambi"> Verkilambi</option>
                                                    <option value="Vettaikaranpudur">   Vettaikaranpudur</option>
                                                    <option value="Vettavalam"> Vettavalam</option>
                                                    <option value="Vijayapuri"> Vijayapuri</option>
                                                    <option value="Vikramasingapuram">  Vikramasingapuram</option>
                                                    <option value="Vikravandi"> Vikravandi</option>
                                                    <option value="Vilapakkam"> Vilapakkam</option>
                                                    <option value="Vilathikulam">   Vilathikulam</option>
                                                    <option value="Vilavur">    Vilavur</option>
                                                    <option value="Villukuri">  Villukuri</option>
                                                    <option value="Viluppuram"> Viluppuram</option>
                                                    <option value="Virudhachalam">  Virudhachalam</option>
                                                    <option value="Virudhunagar">   Virudhunagar</option>
                                                    <option value="Virupakshipuram">    Virupakshipuram</option>
                                                    <option value="Viswanatham">    Viswanatham</option>
                                                    <option value="Walajabad">  Walajabad</option>
                                                    </select>
                                                </div>
                                                 <div class="form-group col-md-4">
                                                 <label>District</label>
                                                      <select name="street_name" data-placeholder="Choose a district..." class="form-control required chosen-select" aria-required="true" >
                                                          <option>Select District</option>
                                                          <option value="Ariyalur">Ariyalur</option>
                                                          <option value="Chennai">Chennai</option>
                                                          <option value="Coimbatore">Coimbatore</option>
                                                          <option value="Cuddalore">Cuddalore</option>
                                                          <option value="Dharmapuri">Dharmapuri</option>
                                                          <option value="Dindigul">Dindigul</option>
                                                          <option value="Erode">Erode</option>
                                                          <option value="Kanchipuram">Kanchipuram</option>
                                                          <option value="Karur">Karur</option>
                                                          <option value="Krishnagiri">Krishnagiri</option>
                                                          <option value="Madurai">Madurai</option>
                                                          <option value="Nagapattinam">Nagapattinam</option>
                                                          <option value="Nagercoil">Nagercoil</option>
                                                          <option value="Namakkal">Namakkal</option>
                                                          <option value="Perambalur">Perambalur</option>
                                                          <option value="Pudukkottai">Pudukkottai</option>
                                                          <option value="Ramanathapuram">Ramanathapuram</option>
                                                          <option value="Salem">Salem</option>
                                                          <option value="Sivagangai">Sivagangai</option>
                                                          <option value="Thanjavur">Thanjavur</option>
                                                          <option value="Theni">Theni</option>
                                                          <option value="Thiruvallur">Thiruvallur</option>
                                                          <option value="Thiruvarur">Thiruvarur</option>
                                                          <option value="Thoothukudi">Thoothukudi</option>
                                                          <option value="Tiruchirappalli">Tiruchirappalli</option>
                                                          <option value="Tirunelveli">Tirunelveli</option>
                                                          <option value="Tiruppur">Tiruppur</option>
                                                          <option value="Tiruvannamalai">Tiruvannamalai</option>
                                                          <option value="Udagamandalam">Udagamandalam</option>
                                                          <option value="Vellore">Vellore</option>
                                                          <option value="Vilupuram">Vilupuram</option>
                                                          <option value="Virudhunagar">Virudhunagar</option>
                                                          </select>
                                                 </div>
                                                 <div class="form-group col-md-4">
                                                 <label>State *</label>
                                                      <select name="state" data-placeholder="Choose a state..." class="form-control chosen-select">
                                                            <option value="" class="required" aria-required="true">Select state</option>
                                                            <option value="Andhra Pradesh"> Andhra Pradesh</option>
                                                            <option value="Arunachal Pradesh">  Arunachal Pradesh</option>
                                                            <option value="Assam">  Assam</option>
                                                            <option value="Bihar">  Bihar</option>
                                                            <option value="Chhattisgarh">   Chhattisgarh</option>
                                                            <option value="Goa">    Goa</option>
                                                            <option value="Gujarat">    Gujarat</option>
                                                            <option value="Haryana">    Haryana</option>
                                                            <option value="Himachal Pradesh">   Himachal Pradesh</option>
                                                            <option value="Jammu &amp; Kashmir">    Jammu &amp; Kashmir</option>
                                                            <option value="Jharkhand">  Jharkhand</option>
                                                            <option value="Karnataka">  Karnataka</option>
                                                            <option value="Kerala"> Kerala</option>
                                                            <option value="Madhya Pradesh"> Madhya Pradesh</option>
                                                            <option value="Maharashtra">    Maharashtra</option>
                                                            <option value="Manipur">    Manipur</option>
                                                            <option value="Meghalaya">  Meghalaya</option>
                                                            <option value="Mizoram">    Mizoram</option>
                                                            <option value="Nagaland">   Nagaland</option>
                                                            <option value="Orissa"> Orissa</option>
                                                            <option value="Punjab"> Punjab</option>
                                                            <option value="Rajasthan">  Rajasthan</option>
                                                            <option value="Sikkim"> Sikkim</option>
                                                            <option value="Tamil Nadu"> Tamil Nadu</option>
                                                            <option value="Telangana">  Telangana</option>
                                                            <option value="Tripura">    Tripura</option>
                                                            <option value="Uttar Pradesh">  Uttar Pradesh</option>
                                                            <option value="Uttarakhand">    Uttarakhand</option>
                                                            <option value="West Bengal">    West Bengal</option>
                                                            </select>
                                                      </div>
                                                      <div class="form-group col-md-4">
                                                        <label>PinCode</label>
                                                             <input id="pincode" class="form-control required" placeholder="Enter the Pincode" maxlength="6" name="pincode" type="number" aria-required="true"> 
                                                      </div>
                                                    
                                                      <div class="form-group col-md-12">
                                                            <label class="checkbox checkbox-custom"> 
                                                            <input type="checkbox" name="permanent_address_is_true" id="pp_address" value="yes" checked=""><i></i> Permanent address same as present address </label> 
                                                      </div>
                                                      <div id="permanent">
                                                          <div class="form-group col-md-4">
                                                <label>Door Number</label>
                                                <input id="permanent_door_no" class="form-control required" placeholder="Door Number" name="flatno" type="text" aria-required="true">                    
                                            </div> 
                                            <div class="form-group col-md-4">
                                                <label>Address</label>
                                                <input id="permanent_address" class="form-control required" placeholder="Address" name="permanent_address" type="text" aria-required="true">                    
                                             </div>  
                                             <div class="form-group col-md-4">
                                                <label>Address</label>
                                                <select name="permanent_city" data-placeholder="Choose a City..." class="form-control required chosen-select" aria-required="true">
                                                    <option value="">Select city</option>
                                                    <option value="A.Vellalapatti"> A.Vellalapatti</option>
                                                    <option value="Abiramam">   Abiramam</option>
                                                    <option value="Avinashi">   Avinashi</option>
                                                    <option value="Achampudur"> Achampudur</option>
                                                    <option value="Acharapakkam">   Acharapakkam</option>
                                                    <option value="Acharipallam">   Acharipallam</option>
                                                    <option value="Achipatti">  Achipatti</option>
                                                    <option value="Adikaratti"> Adikaratti</option>
                                                    <option value="Adiramapattinam">Adiramapattinam</option>
                                                    <option value="AduthuraialiasMaruthuvakudi"> Aduthurai alias Maruthuvakudi</option>
                                                    <option value="Agaram"> Agaram</option>
                                                    <option value="Agastheeswaram"> Agastheeswaram</option>
                                                    <option value="Alagappapuram">  Alagappapuram</option>
                                                    <option value="Alanganallur">   Alanganallur</option>
                                                    <option value="Alangayam">  Alangayam</option>
                                                    <option value="Alangudi">   Alangudi</option>
                                                    <option value="Alangulam">  Alangulam</option>
                                                    <option value="Alangulam">  Alangulam</option>
                                                    <option value="Alanthurai"> Alanthurai</option>
                                                    <option value="Alapakkam">  Alapakkam</option>
                                                    <option value="Alur">   Alur</option>
                                                    <option value="Alwarkurichi">   Alwarkurichi</option>
                                                    <option value="Alwarthirunagiri">   Alwarthirunagiri</option>
                                                    <option value="Ambasamudram">   Ambasamudram</option>
                                                    <option value="Ambur">  Ambur</option>
                                                    <option value="Ammainaickanur"> Ammainaickanur</option>
                                                    <option value="Ammapettai"> Ammapettai</option>
                                                    <option value="Ammapettai"> Ammapettai</option>
                                                  
                                                    <option value="Ammavarikuppam"> Ammavarikuppam</option>
                                                    <option value="Ammoor"> Ammoor</option>
                                                    <option value="Anaimalai">  Anaimalai</option>
                                                    <option value="Anaiyur">    Anaiyur</option>
                                                    <option value="Ananthapuram">   Ananthapuram</option>
                                                    <option value="AndipattiJakkampatti">  Andipatti Jakkampatti</option>
                                                    <option value="Anjugramam"> Anjugramam</option>
                                                    <option value="Annavasal">  Annavasal</option>
                                                    <option value="Annur">  Annur</option>
                                                    <option value="Anthiyur">   Anthiyur</option>
                                                    <option value="Appakudal">  Appakudal</option>
                                                    <option value="Arachalur">  Arachalur</option>
                                                    <option value="Arakandanallur"> Arakandanallur</option>
                                                    <option value="Arakonam">   Arakonam</option>
                                                    <option value="Aralvaimozhi">   Aralvaimozhi</option>
                                                    <option value="Arani">  Arani</option>
                                                    <option value="Arani">  Arani</option>
                                                    <option value="Aranthangi"> Aranthangi</option>
                                                    <option value="Arasiramani">    Arasiramani</option>
                                                    <option value="Aravakurichi">   Aravakurichi</option>
                                                    <option value="Arcot">  Arcot</option>
                                                    <option value="Arimalam">   Arimalam</option>
                                                    <option value="Ariyalur">   Ariyalur</option>
                                                    <option value="Ariyappampalayam">   Ariyappampalayam</option>
                                                    <option value="Ariyur"> Ariyur</option>
                                                    <option value="Arumanai">   Arumanai</option>
                                                    <option value="Arumbavur">  Arumbavur</option>
                                                    <option value="">   </option>
                                                    <option value="Aruppukkottai">  Aruppukkottai</option>
                                                    <option value="Athani"> Athani</option>
                                                    <option value="Athanur">    Athanur</option>
                                                    <option value="Athimarapatti">  Athimarapatti</option>
                                                    <option value="Athipattu">  Athipattu</option>
                                                    <option value="Athur">  Athur</option>
                                                    <option value="Athur">  Athur</option>
                                                    <option value="Attur">  Attur</option>
                                                    <option value="Avadattur">  Avadattur</option>
                                                    <option value="Avalpoondurai">  Avalpoondurai</option>
                                                    <option value="Ayakudi">    Ayakudi</option>
                                                    <option value="Aygudi"> Aygudi</option>
                                                    <option value="Ayothiapattinam">  Ayothiapattinam</option>
                                                    <option value="Ayyalur">    Ayyalur</option>
                                                    <option value="Ayyampalayam">   Ayyampalayam</option>
                                                    <option value="Ayyampettai">    Ayyampettai</option>
                                                    <option value="Ayyampettai">    Ayyampettai</option>
                                                    <option value="Azhagiapandiapuram"> Azhagiapandiapuram</option>
                                                    <option value="B.Meenakshipuram">   B.Meenakshipuram</option>
                                                    <option value="B.Mallapuram">   B.Mallapuram</option>
                                                    <option value="Balakrishnampatti">  Balakrishnampatti</option>
                                                    <option value="Balakrishnapuram">   Balakrishnapuram</option>
                                                    <option value="Balapallam"> Balapallam</option>
                                                    <option value="Balasamudram"> Balasamudram</option>
                                                    <option value="Bargur"> Bargur</option>
                                                    <option value="Batlagundu"> Batlagundu</option>
                                                    <option value="Belur">  Belur</option>
                                                    <option value="">   </option>
                                                    <option value="BhavaniUA">  BhavaniUA</option>
                                                    <option value="Bhavanisagar">   Bhavanisagar</option>
                                                    <option value="Bhuvanagiri">    Bhuvanagiri</option>
                                                    <option value="Bikketti">   Bikketti</option>
                                                    <option value="Bodinayakanur">  Bodinayakanur</option>
                                                    <option value="Boothapandi">    Boothapandi</option>
                                                    <option value="Boothipuram">    Boothipuram</option>
                                                    <option value="Chengalpattu">   Chengalpattu</option>
                                                    <option value="Chengam">    Chengam</option>
                                                    <option value="ChennaiUA">  ChennaiUA</option>
                                                    <option value="Chennasamudram"> Chennasamudram</option>
                                                    <option value="Chennimalai">    Chennimalai</option>
                                                    <option value="Cheranmadevi">   Cheranmadevi</option>
                                                    <option value="Chetpet">    Chetpet</option>
                                                    <option value="Chettiarpatti">  Chettiarpatti</option>
                                                    <option value="Chettipalayam">  Chettipalayam</option>
                                                    <option value="Chettithangal">  Chettithangal</option>
                                                    <option value="Chidambaram">    Chidambaram</option>
                                                    <option value="Chinnakkampalayam">  Chinnakkampalayam</option>
                                                    <option value="Chinnalapatti">  Chinnalapatti</option>
                                                    <option value="Chinnamanur">    Chinnamanur</option>
                                                    <option value="Chinnasalem">    Chinnasalem</option>
                                                    <option value="Chithode">   Chithode</option>
                                                    <option value="Cholapuram"> Cholapuram</option>
                                                    <option value="Coimbatore"> Coimbatore</option>
                                                    <option value="Coonoor">    Coonoor</option>
                                                    <option value="Courtalam">  Courtalam</option>
                                                    <option value="Cuddalore">  Cuddalore</option>
                                                    <option value="Denkanikottai">  Denkanikottai</option>
                                                    <option value="Desur">  Desur</option>
                                                    <option value="Devadanapatti">  Devadanapatti</option>
                                                    <option value="Devakottai"> Devakottai</option>
                                                    <option value="Devanangurichi"> Devanangurichi</option>
                                                    <option value="Devarshola"> Devarshola</option>
                                                    <option value="Dhalavoipuram">  Dhalavoipuram</option>
                                                    <option value="Dhali">  Dhali</option>
                                                    <option value="Dhaliyur">   Dhaliyur</option>
                                                    <option value="Dharapuram"> Dharapuram</option>
                                                    <option value="Dharmapuri"> Dharmapuri</option>
                                                    <option value="Dindigul">   Dindigul</option>
                                                    <option value="Dusi">   Dusi</option>
                                                    <option value="Edaganasalai">   Edaganasalai</option>
                                                    <option value="Edaikodu">   Edaikodu</option>
                                                    <option value="Edakalinadu">    Edakalinadu</option>
                                                    <option value="Edappadi">   Edappadi</option>
                                                    <option value="Elathur">    Elathur</option>
                                                    <option value="Elayirampannai"> Elayirampannai</option>
                                                    <option value="Elumalai">   Elumalai</option>
                                                    <option value="Eral">   Eral</option>
                                                    <option value="Eraniel">    Eraniel</option>
                                                    <option value="Eriodu"> Eriodu</option>
                                                    <option value="ErodeUA">    ErodeUA</option>
                                                    <option value="Erumaipatti">    Erumaipatti</option>
                                                    <option value="Eruvadi">    Eruvadi</option>
                                                    <option value="Ethapur">    Ethapur</option>
                                                    <option value="Ettayapuram">    Ettayapuram</option>
                                                    <option value="Ezhudesam">  Ezhudesam</option>
                                                    <option value="Ganapathipuram"> Ganapathipuram</option>
                                                    <option value="Gangavalli"> Gangavalli</option>
                                                    <option value="Ganguvarpatti">  Ganguvarpatti</option>
                                                    <option value="Gingee"> Gingee</option>
                                                    <option value="Gobichettipalayam">  Gobichettipalayam</option>
                                                    <option value="Gopalasamudram"> Gopalasamudram</option>
                                                    <option value="Gudalur">    Gudalur</option>
                                                    <option value="Gudalur">    Gudalur</option>
                                                    <option value="Gudalur">    Gudalur</option>
                                                    <option value="Gudiyatham"> Gudiyatham</option>
                                                    <option value="Gummidipoondi">  Gummidipoondi</option>
                                                    <option value="Hanumanthampatti">   Hanumanthampatti</option>
                                                    <option value="Harur">  Harur</option>
                                                    <option value="Hosur">  Hosur</option>
                                                    <option value="Huligal">    Huligal</option>
                                                    <option value="Ilampillai"> Ilampillai</option>
                                                    <option value="Ilanji"> Ilanji</option>
                                                    <option value="Ilayangudi"> Ilayangudi</option>
                                                    <option value="Iluppaiyurani">  Iluppaiyurani</option>
                                                    <option value="Iluppur">    Iluppur</option>
                                                    <option value="Jalakandapuram"> Jalakandapuram</option>
                                                    <option value="Jambai"> Jambai</option>
                                                    <option value="Jayankondam">    Jayankondam</option>
                                                    <option value="Jolarpet">   Jolarpet</option>
                                                    <option value="Kadambur">   Kadambur</option>
                                                    <option value="Kadathur">   Kadathur</option>
                                                    <option value="Kadayal">    Kadayal</option>
                                                    <option value="Kadayampatti">   Kadayampatti</option>
                                                    <option value="Kadayanallur">   Kadayanallur</option>
                                                    <option value="Kalakkad">   Kalakkad</option>
                                                    <option value="Kalambur">   Kalambur</option>
                                                    <option value="Kalappanaickenpatti">  Kalappanaickenpatti</option>
                                                    <option value="Kalavai">    Kalavai</option>
                                                    <option value="Kaliyakkavilai"> Kaliyakkavilai</option>
                                                    <option value="Kallakkurichi">  Kallakkurichi</option>
                                                    <option value="Kallakudi">  Kallakudi</option>
                                                    <option value="Kallukuttam">    Kallukuttam</option>
                                                    <option value="Kalugumalai">    Kalugumalai</option>
                                                    <option value="Kamayagoundanpatti"> Kamayagoundanpatti</option>
                                                    <option value="Kambainallur">   Kambainallur</option>
                                                    <option value="Kambam"> Kambam</option>
                                                    <option value="Kamuthi">    Kamuthi</option>
                                                    <option value="Kanakkampalayam">    Kanakkampalayam</option>
                                                    <option value="Kanam">  Kanam</option>
                                                    <option value="Kancheepuram">   Kancheepuram</option>
                                                    <option value="Kangayampalayam">    Kangayampalayam</option>
                                                    <option value="Kangeyam">   Kangeyam</option>
                                                    <option value="Kaniyur">    Kaniyur</option>
                                                    <option value="Kanjikoil">  Kanjikoil</option>
                                                    <option value="Kannamangalam">  Kannamangalam</option>
                                                    <option value="Kannivadi">  Kannivadi</option>
                                                    <option value="Kannivadi">  Kannivadi</option>
                                                    <option value="Kanniyakumari">  Kanniyakumari</option>
                                                    <option value="Kappiyarai"> Kappiyarai</option>
                                                    <option value="Karaikkudi"> Karaikkudi</option>
                                                    <option value="Karamadai">  Karamadai</option>
                                                    <option value="Karambakkudi">   Karambakkudi</option>
                                                    <option value="Kariamangalam">  Kariamangalam</option>
                                                    <option value="Kariapatti"> Kariapatti</option>
                                                    <option value="Karugampattur">  Karugampattur</option>
                                                    <option value="KarumandiChellipalayam"> KarumandiChellipalayam</option>
                                                    <option value="Karumathampatti">    Karumathampatti</option>
                                                    <option value="Karungal">   Karungal</option>
                                                    <option value="Karunguzhi"> Karunguzhi</option>
                                                    <option value="Karuppur">   Karuppur</option>
                                                    <option value="Karur">  Karur</option>
                                                    <option value="Kasipalayam">    Kasipalayam</option>
                                                    <option value="Kathujuganapalli">   Kathujuganapalli</option>
                                                    <option value="Kattumannarkoil">    Kattumannarkoil</option>
                                                    <option value="Kattuputhur">    Kattuputhur</option>
                                                    <option value="Kaveripakkam">   Kaveripakkam</option>
                                                    <option value="Kaveripattinam"> Kaveripattinam</option>
                                                    <option value="Kayatharu">  Kayatharu</option>
                                                    <option value="Keelakarai"> Keelakarai</option>
                                                    <option value="Keeramangalam">  Keeramangalam</option>
                                                    <option value="Keeranur">   Keeranur</option>
                                                    <option value="Keeranur">   Keeranur</option>
                                                    <option value="Keeripatti"> Keeripatti</option>
                                                    <option value="Keezhapavur">    Keezhapavur</option>
                                                    <option value="Kelamangalam">   Kelamangalam</option>
                                                    <option value="Kembainaickenpalayam"> Kembainaickenpalayam</option>
                                                    <option value="Kethi">  Kethi</option>
                                                    <option value="Kilampadi">  Kilampadi</option>
                                                    <option value="Kilkulam">   Kilkulam</option>
                                                    <option value="Kilkunda">   Kilkunda</option>
                                                    <option value="Killai"> Killai</option>
                                                    <option value="Killiyur">   Killiyur</option>
                                                    <option value="Kilpennathur">   Kilpennathur</option>
                                                    <option value="Kilvelur">   Kilvelur</option>
                                                    <option value="Kinathukadavu">  Kinathukadavu</option>
                                                    <option value="Kodaikanal"> Kodaikanal</option>
                                                    <option value="Kodavasal">  Kodavasal</option>
                                                    <option value="Kodumudi">   Kodumudi</option>
                                                    <option value="Kolachal">   Kolachal</option>
                                                    <option value="Kolappalur"> Kolappalur</option>
                                                    <option value="Kolathupalayam"> Kolathupalayam</option>
                                                    <option value="Kolathur">   Kolathur</option>
                                                    <option value="Kollankodu"> Kollankodu</option>
                                                    <option value="Kollankoil"> Kollankoil</option>
                                                    <option value="Komaralingam">   Komaralingam</option>
                                                    <option value="Kombai"> Kombai</option>
                                                    <option value="Konganapuram">   Konganapuram</option>
                                                    <option value="Kooraikundu">    Kooraikundu</option>
                                                    <option value="Koradacheri">    Koradacheri</option>
                                                    <option value="Kotagiri">   Kotagiri</option>
                                                    <option value="Kothinallur">    Kothinallur</option>
                                                    <option value="Kottakuppam">    Kottakuppam</option>
                                                    <option value="Kottaram">   Kottaram</option>
                                                    <option value="Kottur"> Kottur</option>
                                                    <option value="Kovilpatti"> Kovilpatti</option>
                                                    <option value="Krishnagiri">    Krishnagiri</option>
                                                    <option value="Krishnarayapuram">   Krishnarayapuram</option>
                                                    <option value="Kuchanur">   Kuchanur</option>
                                                    <option value="Kuhalur">    Kuhalur</option>
                                                    <option value="Kulasekarapuram">    Kulasekarapuram</option>
                                                    <option value="Kulithalai"> Kulithalai</option>
                                                    <option value="Kumarapuram">    Kumarapuram</option>
                                                    <option value="Kumbakonam"> Kumbakonam</option>
                                                    <option value="Kunnathur">  Kunnathur</option>
                                                    <option value="Kurinjipadi">    Kurinjipadi</option>
                                                    <option value="Kurumbalur"> Kurumbalur</option>
                                                    <option value="Kuthalam">   Kuthalam</option>
                                                    <option value="Kuthanallur">    Kuthanallur</option>
                                                    <option value="Kuzhithurai">    Kuzhithurai</option>
                                                    <option value="Labbaikudikadu"> Labbaikudikadu</option>
                                                    <option value="Lakkampatti">    Lakkampatti</option>
                                                    <option value="Lalgudi">    Lalgudi</option>
                                                    <option value="Lalpet"> Lalpet</option>
                                                    <option value="Madathukulam">   Madathukulam</option>
                                                    <option value="Madukkur">   Madukkur</option>
                                                    <option value="Madurai">    Madurai</option>
                                                    <option value="Maduranthakam">  Maduranthakam</option>
                                                    <option value="Mallankinaru">   Mallankinaru</option>
                                                    <option value="MallasamudramUA">    MallasamudramUA</option>
                                                    <option value="Mallur"> Mallur</option>
                                                    <option value="Mamallapuram">   Mamallapuram</option>
                                                    <option value="Mamsapuram"> Mamsapuram</option>
                                                    <option value="Manachanallur">  Manachanallur</option>
                                                    <option value="Manalmedu">  Manalmedu</option>
                                                    <option value="Manalurpet"> Manalurpet</option>
                                                    <option value="Manamadurai">    Manamadurai</option>
                                                    <option value="Manapparai"> Manapparai</option>
                                                    <option value="Manavalakurichi">    Manavalakurichi</option>
                                                    <option value="Mandaikadu"> Mandaikadu</option>
                                                    <option value="Mandapam">   Mandapam</option>
                                                    <option value="Mangalampet">    Mangalampet</option>
                                                    <option value="Manimutharu">    Manimutharu</option>
                                                    <option value="Mannargudi"> Mannargudi</option>
                                                    <option value="Maraimalainagar">    Maraimalainagar</option>
                                                    <option value="Marakkanam"> Marakkanam</option>
                                                    <option value="Maramangalathupatti">    Maramangalathupatti</option>
                                                    <option value="Marandahalli">   Marandahalli</option>
                                                    <option value="Markayankottai"> Markayankottai</option>
                                                    <option value="Marudur">    Marudur</option>
                                                    <option value="Marungur">   Marungur</option>
                                                    <option value="Mathigiri">  Mathigiri</option>
                                                    <option value="Mayiladuthurai"> Mayiladuthurai</option>
                                                    <option value="Mecheri">    Mecheri</option>
                                                    <option value="Melacheval"> Melacheval</option>
                                                    <option value="Melachokkanathapuram"> Melachokkanathapuram</option>
                                                    <option value="Melagaram">  Melagaram</option>
                                                    <option value="Melamaiyur"> Melamaiyur</option>
                                                    <option value="Melathiruppanthuruthi">  Melathiruppanthuruthi</option>
                                                    <option value="Melattur">   Melattur</option>
                                                    <option value="Melpattampakkam">    Melpattampakkam</option>
                                                    <option value="Melur">  Melur</option>
                                                    <option value="Melvisharam">    Melvisharam</option>
                                                    <option value="Mettupalayam">   Mettupalayam</option>
                                                    <option value="Mettupalayam">   Mettupalayam</option>
                                                    <option value="Mettur"> Mettur</option>
                                                    <option value="Minjur"> Minjur</option>
                                                    <option value="Modakurichi">    Modakurichi</option>
                                                    <option value="Mohanur">    Mohanur</option>
                                                    <option value="Moolakaraipatti">    Moolakaraipatti</option>
                                                    <option value="Mopperipalayam"> Mopperipalayam</option>
                                                    <option value="Mudukulathur">   Mudukulathur</option>
                                                    <option value="Mukasipidariyur">    Mukasipidariyur</option>
                                                    <option value="Mukkudal">   Mukkudal</option>
                                                    <option value="Mulagumudu"> Mulagumudu</option>
                                                    <option value="Mulanur">    Mulanur</option>
                                                    <option value="Muruganpalayam"> Muruganpalayam</option>
                                                    <option value="Musiri"> Musiri</option>
                                                    <option value="Muthupet">   Muthupet</option>
                                                    <option value="Muthur"> Muthur</option>
                                                    <option value="Muttayyapuram">  Muttayyapuram</option>
                                                    <option value="Myladi"> Myladi</option>
                                                    <option value="Naduvattam"> Naduvattam</option>
                                                    <option value="Nagapattinam">   Nagapattinam</option>
                                                    <option value="Nagavakulam">    Nagavakulam</option>
                                                    <option value="Nagercoil">  Nagercoil</option>
                                                    <option value="Nagojanahalli">  Nagojanahalli</option>
                                                    <option value="Nallampatti">    Nallampatti</option>
                                                    <option value="Nallur"> Nallur</option>
                                                    <option value="Namagiripettai"> Namagiripettai</option>
                                                    <option value="Namakkal">   Namakkal</option>
                                                    <option value="Nambiyur">   Nambiyur</option>
                                                    <option value="Nandivaram-Guduvancheri">    Nandivaram-Guduvancheri</option>
                                                    <option value="Nangavalli"> Nangavalli</option>
                                                    <option value="Nangavaram"> Nangavaram</option>
                                                    <option value="Nanguneri">  Nanguneri</option>
                                                    <option value="Nanjikottai">    Nanjikottai</option>
                                                    <option value="Nannilam">   Nannilam</option>
                                                    <option value="Naranapuram">    Naranapuram</option>
                                                    <option value="Narasingapuram"> Narasingapuram</option>
                                                    <option value="Narasingapuram"> Narasingapuram</option>
                                                    <option value="Nasiyanur">  Nasiyanur</option>
                                                    <option value="Natham"> Natham</option>
                                                    <option value="Nathampannai">   Nathampannai</option>
                                                    <option value="Natrampalli">    Natrampalli</option>
                                                    <option value="Nattarasankottai">   Nattarasankottai</option>
                                                    <option value="Nazerath">   Nazerath</option>
                                                    <option value="Needamangalam">  Needamangalam</option>
                                                    <option value="Neelagiri">  Neelagiri</option>
                                                    <option value="Neikkarapatti">  Neikkarapatti</option>
                                                    <option value="Neiyyur">    Neiyyur</option>
                                                    <option value="Nellikuppam">    Nellikuppam</option>
                                                    <option value="Nemili"> Nemili</option>
                                                    <option value="Neripperichal">  Neripperichal</option>
                                                    <option value="Nerkuppai">  Nerkuppai</option>
                                                    <option value="Nerunjipettai">  Nerunjipettai</option>
                                                    <option value="Neyveli">    Neyveli</option>
                                                    <option value="Nilakkottai">    Nilakkottai</option>
                                                    <option value="O'Valley">   O'Valley</option>
                                                    <option value="Odaipatti">  Odaipatti</option>
                                                    <option value="Odaiyakulam">    Odaiyakulam</option>
                                                    <option value="Oddanchatram">   Oddanchatram</option>
                                                    <option value="Odugathur">  Odugathur</option>
                                                    <option value="Olagadam">   Olagadam</option>
                                                    <option value="Omalur"> Omalur</option>
                                                    <option value="Orathanadu"> Orathanadu</option>
                                                    <option value="Othakadai">  Othakadai</option>
                                                    <option value="Othakalmandapam">    Othakalmandapam</option>
                                                    <option value="Ottapparai"> Ottapparai</option>
                                                    <option value="P.J.Cholapuram"> P.J.Cholapuram</option>
                                                    <option value="P.Mettupalayam"> P.Mettupalayam</option>
                                                    <option value="P.N.Patti">  P.N.Patti</option>
                                                    <option value="Pacode"> Pacode</option>
                                                    <option value="Padaiveedu"> Padaiveedu</option>
                                                    <option value="Padirikuppam">   Padirikuppam</option>
                                                    <option value="Padmanabhapuram">    Padmanabhapuram</option>
                                                    <option value="Palaganangudy">  Palaganangudy</option>
                                                    <option value="Palakkodu">  Palakkodu</option>
                                                    <option value="Palamedu">   Palamedu</option>
                                                    <option value="Palani"> Palani</option>
                                                    <option value="PalaniChettipatti">  PalaniChettipatti</option>
                                                    <option value="Palayam">    Palayam</option>
                                                    <option value="Palladam">   Palladam</option>
                                                    <option value="Pallapalayam">   Pallapalayam</option>
                                                    <option value="Pallapatti"> Pallapatti</option>
                                                    <option value="Pallapatti"> Pallapatti</option>
                                                    <option value="Pallapatti"> Pallapatti</option>
                                                    <option value="Pallikonda"> Pallikonda</option>
                                                    <option value="Pallipattu"> Pallipattu</option>
                                                    <option value="Panagudi">   Panagudi</option>
                                                    <option value="Panaimarathupatti">  Panaimarathupatti</option>
                                                    <option value="Panapakkam"> Panapakkam</option>
                                                    <option value="Panboli">    Panboli</option>
                                                    <option value="Pandamangalam">  Pandamangalam</option>
                                                    <option value="Pannaikadu"> Pannaikadu</option>
                                                    <option value="Pannaipuram">    Pannaipuram</option>
                                                    <option value="Panruti">    Panruti</option>
                                                    <option value="Papanasam">  Papanasam</option>
                                                    <option value="Papparapatti">   Papparapatti</option>
                                                    <option value="Pappireddipatti">    Pappireddipatti</option>
                                                    <option value="Paramakudi"> Paramakudi</option>
                                                    <option value="Paramathi">  Paramathi</option>
                                                    <option value="Parangipettai">  Parangipettai</option>
                                                    <option value="Pasur">  Pasur</option>
                                                    <option value="Pathamadai"> Pathamadai</option>
                                                    <option value="Pattinam">   Pattinam</option>
                                                    <option value="Pattiveeranpatti">   Pattiveeranpatti</option>
                                                    <option value="Pattukkottai">   Pattukkottai</option>
                                                    <option value="Pazhugal">   Pazhugal</option>
                                                    <option value="Pennadam">   Pennadam</option>
                                                    <option value="Pennagaram"> Pennagaram</option>
                                                    <option value="Pennathur">  Pennathur</option>
                                                    <option value="Peraiyur">   Peraiyur</option>
                                                    <option value="Peralam">    Peralam</option>
                                                    <option value="Perambalur"> Perambalur</option>
                                                    <option value="Peranamallur">   Peranamallur</option>
                                                    <option value="Peravurani"> Peravurani</option>
                                                    <option value="PeriyaNegamam">  PeriyaNegamam</option>
                                                    <option value="Periyakodiveri"> Periyakodiveri</option>
                                                    <option value="Periyakulam">    Periyakulam</option>
                                                    <option value="Periyapatti">    Periyapatti</option>
                                                    <option value="Periyasemur">    Periyasemur</option>
                                                    <option value="Pernampattu">    Pernampattu</option>
                                                    <option value="Perumagalur">    Perumagalur</option>
                                                    <option value="Perumandi">  Perumandi</option>
                                                    <option value="Perumuchi">  Perumuchi</option>
                                                    <option value="Perundurai"> Perundurai</option>
                                                    <option value="Perungulam"> Perungulam</option>
                                                    <option value="Pethampalayam">  Pethampalayam</option>
                                                    <option value="Pethanaickenpalayam">    Pethanaickenpalayam</option>
                                                    <option value="Pillanallur">    Pillanallur</option>
                                                    <option value="Pollachi">   Pollachi</option>
                                                    <option value="Polur">  Polur</option>
                                                    <option value="Ponmani">    Ponmani</option>
                                                    <option value="Ponnamaravathi"> Ponnamaravathi</option>
                                                    <option value="Ponnampatti">    Ponnampatti</option>
                                                    <option value="Ponneri">    Ponneri</option>
                                                    <option value="Poolambadi"> Poolambadi</option>
                                                    <option value="Poolampatti">    Poolampatti</option>
                                                    <option value="Pooluvapatti">   Pooluvapatti</option>
                                                    <option value="Pothanur">   Pothanur</option>
                                                    <option value="Pothatturpettai">    Pothatturpettai</option>
                                                    <option value="Pudukadai">  Pudukadai</option>
                                                    <option value="Pudukkottai">    Pudukkottai</option>
                                                    <option value="Pudukkottai">    Pudukkottai</option>
                                                    <option value="Pudupalayam">    Pudupalayam</option>
                                                    <option value="PudupalayamAgraharam">   PudupalayamAgraharam</option>
                                                    <option value="Pudupatti">  Pudupatti</option>
                                                    <option value="Pudupattinam">   Pudupattinam</option>
                                                    <option value="Pudur">  Pudur</option>
                                                    <option value="Puliyankudi">    Puliyankudi</option>
                                                    <option value="Puliyur">    Puliyur</option>
                                                    <option value="Pullampadi"> Pullampadi</option>
                                                    <option value="PunjaiThottakurichi">    PunjaiThottakurichi</option>
                                                    <option value="Punjaipugalur">  Punjaipugalur</option>
                                                    <option value="Punjaipuliampatti">  Punjaipuliampatti</option>
                                                    <option value="Puthalam">   Puthalam</option>
                                                    <option value="Puvalur">    Puvalur</option>
                                                    <option value="R.Pudupatti">    R.Pudupatti</option>
                                                    <option value="R.S.Mangalam">   R.S.Mangalam</option>
                                                    <option value="Rajapalayam">    Rajapalayam</option>
                                                    <option value="Ramanathapuram"> Ramanathapuram</option>
                                                    <option value="Rameswaram"> Rameswaram</option>
                                                    <option value="Rasipuram">  Rasipuram</option>
                                                    <option value="Rayagiri">   Rayagiri</option>
                                                    <option value="Reethapuram">    Reethapuram</option>
                                                    <option value="Rosalpatti"> Rosalpatti</option>
                                                    <option value="Rudravathi"> Rudravathi</option>
                                                    <option value="S.Kannanur"> S.Kannanur</option>
                                                    <option value="S.Kodikulam">    S.Kodikulam</option>
                                                    <option value="Salangapalayam"> Salangapalayam</option>
                                                    <option value="Salem">  Salem</option>
                                                    <option value="Samalapuram">    Samalapuram</option>
                                                    <option value="Samathur">   Samathur</option>
                                                    <option value="SambavarVadagarai">  SambavarVadagarai</option>
                                                    <option value="Sankaramanallur">    Sankaramanallur</option>
                                                    <option value="Sankarankoil">   Sankarankoil</option>
                                                    <option value="Sankarapuram">   Sankarapuram</option>
                                                    <option value="Sankari">    Sankari</option>
                                                    <option value="Sarcarsamakulam">    Sarcarsamakulam</option>
                                                    <option value="Sathankulam">    Sathankulam</option>
                                                    <option value="Sathiyavijayanagaram">   Sathiyavijayanagaram</option>
                                                    <option value="Sathyamangalam"> Sathyamangalam</option>
                                                    <option value="Sattur"> Sattur</option>
                                                    <option value="Sayalgudi">  Sayalgudi</option>
                                                    <option value="Sayapuram">  Sayapuram</option>
                                                    <option value="Seerapalli"> Seerapalli</option>
                                                    <option value="Seithur">    Seithur</option>
                                                    <option value="Semmipalayam">   Semmipalayam</option>
                                                    <option value="Senthamangalam"> Senthamangalam</option>
                                                    <option value="Sentharapatti">  Sentharapatti</option>
                                                    <option value="Senur">  Senur</option>
                                                    <option value="Sethiathoppu">   Sethiathoppu</option>
                                                    <option value="Sevugampatti">   Sevugampatti</option>
                                                    <option value="Shenkottai"> Shenkottai</option>
                                                    <option value="Sholavandan">    Sholavandan</option>
                                                    <option value="Sholingur">  Sholingur</option>
                                                    <option value="Sholur"> Sholur</option>
                                                    <option value="Singampuneri">   Singampuneri</option>
                                                    <option value="Singaperumalkoil">   Singaperumalkoil</option>
                                                    <option value="Sirkali">    Sirkali</option>
                                                    <option value="Sirugamani"> Sirugamani</option>
                                                    <option value="Sirumugai">  Sirumugai</option>
                                                    <option value="Sithayankottai"> Sithayankottai</option>
                                                    <option value="Sithurajapuram"> Sithurajapuram</option>
                                                    <option value="Sivaganga">  Sivaganga</option>
                                                    <option value="Sivagiri">   Sivagiri</option>
                                                    <option value="Sivagiri">   Sivagiri</option>
                                                    <option value="Sivakasi">   Sivakasi</option>
                                                    <option value="Sivanthipuram">  Sivanthipuram</option>
                                                    <option value="Srimushnam"> Srimushnam</option>
                                                    <option value="Sriperumbudur">  Sriperumbudur</option>
                                                    <option value="Sriramapuram">   Sriramapuram</option>
                                                    <option value="Srivaikuntam">   Srivaikuntam</option>
                                                    <option value="Srivilliputhur"> Srivilliputhur</option>
                                                    <option value="Suchindram"> Suchindram</option>
                                                    <option value="Sundarapandiam"> Sundarapandiam</option>
                                                    <option value="Sundarapandiapuram"> Sundarapandiapuram</option>
                                                    <option value="Surandai">   Surandai</option>
                                                    <option value="Suriyampalayam"> Suriyampalayam</option>
                                                    <option value="Swamimalai"> Swamimalai</option>
                                                    <option value="T.Kallupatti">   T.Kallupatti</option>
                                                    <option value="Tayilupatti">    Tayilupatti</option>
                                                    <option value="Tenkasi">    Tenkasi</option>
                                                    <option value="Thadikombu"> Thadikombu</option>
                                                    <option value="Thakkolam">  Thakkolam</option>
                                                    <option value="Thalainayar">    Thalainayar</option>
                                                    <option value="Thalakudi">  Thalakudi</option>
                                                    <option value="Thamaraikulam">  Thamaraikulam</option>
                                                    <option value="Thammampatti">   Thammampatti</option>
                                                    <option value="Thanjavur">  Thanjavur</option>
                                                    <option value="Tharamangalam">  Tharamangalam</option>
                                                    <option value="Tharangambadi">  Tharangambadi</option>
                                                    <option value="Thathaiyangarpet">   Thathaiyangarpet</option>
                                                    <option value="Thedavur">   Thedavur</option>
                                                    <option value="Thengampudur">   Thengampudur</option>
                                                    <option value="TheniAllinagaram">   TheniAllinagaram</option>
                                                    <option value="Thenkarai">  Thenkarai</option>
                                                    <option value="Thenkarai">  Thenkarai</option>
                                                    <option value="Thenthamaraikulam">  Thenthamaraikulam</option>
                                                    <option value="Thenthiruperai"> Thenthiruperai</option>
                                                    <option value="Thesur"> Thesur</option>
                                                    <option value="Thevaram">   Thevaram</option>
                                                    <option value="Thevur"> Thevur</option>
                                                    <option value="Thiagadurgam">   Thiagadurgam</option>
                                                    <option value="Thingalnagar">   Thingalnagar</option>
                                                    <option value="Thirukarungudi"> Thirukarungudi</option>
                                                    <option value="Thirukkattupalli">   Thirukkattupalli</option>
                                                    <option value="Thirumalayampalayam">    Thirumalayampalayam</option>
                                                    <option value="Thirumangalam">  Thirumangalam</option>
                                                    <option value="Thirunageswaram">    Thirunageswaram</option>
                                                    <option value="Thirunindravur"> Thirunindravur</option>
                                                    <option value="Thiruparappu">   Thiruparappu</option>
                                                    <option value="Thiruporur"> Thiruporur</option>
                                                    <option value="Thiruppanandal"> Thiruppanandal</option>
                                                    <option value="Thirupuvanam">   Thirupuvanam</option>
                                                    <option value="Thirupuvanam">   Thirupuvanam</option>
                                                    <option value="Thiruthuraipoondi">  Thiruthuraipoondi</option>
                                                    <option value="Thiruvaiyaru">   Thiruvaiyaru</option>
                                                    <option value="Thiruvalam"> Thiruvalam</option>
                                                    <option value="Thiruvallur">    Thiruvallur</option>
                                                    <option value="Thiruvarur"> Thiruvarur</option>
                                                    <option value="Thiruvattaru">   Thiruvattaru</option>
                                                    <option value="Thiruvenkatam">  Thiruvenkatam</option>
                                                    <option value="Thiruvennainallur">  Thiruvennainallur</option>
                                                    <option value="Thiruvidaimarudur">  Thiruvidaimarudur</option>
                                                    <option value="Thiruvithankodu">    Thiruvithankodu</option>
                                                    <option value="Thisayanvilai">  Thisayanvilai</option>
                                                    <option value="Thittacheri">    Thittacheri</option>
                                                    <option value="Thondamuthur">   Thondamuthur</option>
                                                    <option value="Thondi"> Thondi</option>
                                                    <option value="Thoothukkudi">   Thoothukkudi</option>
                                                    <option value="Thorapadi">  Thorapadi</option>
                                                    <option value="Thottiyam">  Thottiyam</option>
                                                    <option value="Thuraiyur">  Thuraiyur</option>
                                                    <option value="Thuthipattu">    Thuthipattu</option>
                                                    <option value="Timiri"> Timiri</option>
                                                    <option value="Tindivanam"> Tindivanam</option>
                                                    <option value="Tiruchendur">    Tiruchendur</option>
                                                    <option value="Tiruchengode">   Tiruchengode</option>
                                                    <option value="Tiruchirappalli">    Tiruchirappalli</option>
                                                    <option value="Tirukalukundram">    Tirukalukundram</option>
                                                    <option value="Tirukkoyilur">   Tirukkoyilur</option>
                                                    <option value="Tirunelveli">    Tirunelveli</option>
                                                    <option value="Tirupathur"> Tirupathur</option>
                                                    <option value="Tirupathur"> Tirupathur</option>
                                                    <option value="Tiruppur">   Tiruppur</option>
                                                    <option value="Tiruttani">  Tiruttani</option>
                                                    <option value="Tiruvannamalai"> Tiruvannamalai</option>
                                                    <option value="Tiruvethipuram"> Tiruvethipuram</option>
                                                    <option value="Tittakudi">  Tittakudi</option>
                                                    <option value="TNPLPugalur">    TNPLPugalur</option>
                                                    <option value="Udangudi">   Udangudi</option>
                                                    <option value="Udayarpalayam">  Udayarpalayam</option>
                                                    <option value="Udhagamandalam"> Udhagamandalam</option>
                                                    <option value="Udumalaipettai"> Udumalaipettai</option>
                                                    <option value="Ulundurpettai">  Ulundurpettai</option>
                                                    <option value="Unjalur">    Unjalur</option>
                                                    <option value="Unnamalaikadai"> Unnamalaikadai</option>
                                                    <option value="Uppidamangalam"> Uppidamangalam</option>
                                                    <option value="Uppiliapuram">   Uppiliapuram</option>
                                                    <option value="Urapakkam">  Urapakkam</option>
                                                    <option value="Usilampatti">    Usilampatti</option>
                                                    <option value="Uthamapalayam">  Uthamapalayam</option>
                                                    <option value="Uthangarai"> Uthangarai</option>
                                                    <option value="Uthiramerur">    Uthiramerur</option>
                                                    <option value="Uthukkottai">    Uthukkottai</option>
                                                    <option value="Uthukuli">   Uthukuli</option>
                                                    <option value="V.Pudur">    V.Pudur</option>
                                                    <option value="V.Pudupatti">    V.Pudupatti</option>
                                                    <option value="VadakaraiKeezhpadugai">  VadakaraiKeezhpadugai</option>
                                                    <option value="Vadakkanandal">  Vadakkanandal</option>
                                                    <option value="Vadakkuvalliyur">    Vadakkuvalliyur</option>
                                                    <option value="Vadalur">    Vadalur</option>
                                                    <option value="Vadamadurai">    Vadamadurai</option>
                                                    <option value="Vadipatti">  Vadipatti</option>
                                                    <option value="Vadugapatti">    Vadugapatti</option>
                                                    <option value="Vadugapatti">    Vadugapatti</option>
                                                    <option value="Vaitheeswarankoil">  Vaitheeswarankoil</option>
                                                    <option value="Valangaiman">    Valangaiman</option>
                                                    <option value="Valavanur">  Valavanur</option>
                                                    <option value="Vallam"> Vallam</option>
                                                    <option value="Valparai">   Valparai</option>
                                                    <option value="Valvaithankoshtam">  Valvaithankoshtam</option>
                                                    <option value="Vanavasi">   Vanavasi</option>
                                                    <option value="Vandavasi">  Vandavasi</option>
                                                    <option value="Vaniputhur"> Vaniputhur</option>
                                                    <option value="Vaniyambadi">    Vaniyambadi</option>
                                                    <option value="Varadarajanpettai">  Varadarajanpettai</option>
                                                    <option value="Vasudevanallur"> Vasudevanallur</option>
                                                    <option value="Vathirairuppu">  Vathirairuppu</option>
                                                    <option value="Vazhapadi">  Vazhapadi</option>
                                                    <option value="Vedaranyam"> Vedaranyam</option>
                                                    <option value="Vedasandur"> Vedasandur</option>
                                                    <option value="Veeraganur"> Veeraganur</option>
                                                    <option value="Veerakkalpudur"> Veerakkalpudur</option>
                                                    <option value="Veerapandi"> Veerapandi</option>
                                                    <option value="Veeravanallur">  Veeravanallur</option>
                                                    <option value="Velankanni"> Velankanni</option>
                                                    <option value="Vellakoil">  Vellakoil</option>
                                                    <option value="Vellimalai"> Vellimalai</option>
                                                    <option value="Vellore">    Vellore</option>
                                                    <option value="Vellottamparappu">   Vellottamparappu</option>
                                                    <option value="Velur">  Velur</option>
                                                    <option value="Vengampudur">    Vengampudur</option>
                                                    <option value="Vengathur">  Vengathur</option>
                                                    <option value="Venkarai">   Venkarai</option>
                                                    <option value="Vennanthur"> Vennanthur</option>
                                                    <option value="Veppathur">  Veppathur</option>
                                                    <option value="Verkilambi"> Verkilambi</option>
                                                    <option value="Vettaikaranpudur">   Vettaikaranpudur</option>
                                                    <option value="Vettavalam"> Vettavalam</option>
                                                    <option value="Vijayapuri"> Vijayapuri</option>
                                                    <option value="Vikramasingapuram">  Vikramasingapuram</option>
                                                    <option value="Vikravandi"> Vikravandi</option>
                                                    <option value="Vilapakkam"> Vilapakkam</option>
                                                    <option value="Vilathikulam">   Vilathikulam</option>
                                                    <option value="Vilavur">    Vilavur</option>
                                                    <option value="Villukuri">  Villukuri</option>
                                                    <option value="Viluppuram"> Viluppuram</option>
                                                    <option value="Virudhachalam">  Virudhachalam</option>
                                                    <option value="Virudhunagar">   Virudhunagar</option>
                                                    <option value="Virupakshipuram">    Virupakshipuram</option>
                                                    <option value="Viswanatham">    Viswanatham</option>
                                                    <option value="Walajabad">  Walajabad</option>
                                                    </select>
                                                </div>
                                                 <div class="form-group col-md-4">
                                                 <label>District</label>
                                                      <select name="permanent_street_name" data-placeholder="Choose a district..." class="form-control required chosen-select" aria-required="true" >
                                                          <option>Select District</option>
                                                          <option value="Ariyalur">Ariyalur</option>
                                                          <option value="Chennai">Chennai</option>
                                                          <option value="Coimbatore">Coimbatore</option>
                                                          <option value="Cuddalore">Cuddalore</option>
                                                          <option value="Dharmapuri">Dharmapuri</option>
                                                          <option value="Dindigul">Dindigul</option>
                                                          <option value="Erode">Erode</option>
                                                          <option value="Kanchipuram">Kanchipuram</option>
                                                          <option value="Karur">Karur</option>
                                                          <option value="Krishnagiri">Krishnagiri</option>
                                                          <option value="Madurai">Madurai</option>
                                                          <option value="Nagapattinam">Nagapattinam</option>
                                                          <option value="Nagercoil">Nagercoil</option>
                                                          <option value="Namakkal">Namakkal</option>
                                                          <option value="Perambalur">Perambalur</option>
                                                          <option value="Pudukkottai">Pudukkottai</option>
                                                          <option value="Ramanathapuram">Ramanathapuram</option>
                                                          <option value="Salem">Salem</option>
                                                          <option value="Sivagangai">Sivagangai</option>
                                                          <option value="Thanjavur">Thanjavur</option>
                                                          <option value="Theni">Theni</option>
                                                          <option value="Thiruvallur">Thiruvallur</option>
                                                          <option value="Thiruvarur">Thiruvarur</option>
                                                          <option value="Thoothukudi">Thoothukudi</option>
                                                          <option value="Tiruchirappalli">Tiruchirappalli</option>
                                                          <option value="Tirunelveli">Tirunelveli</option>
                                                          <option value="Tiruppur">Tiruppur</option>
                                                          <option value="Tiruvannamalai">Tiruvannamalai</option>
                                                          <option value="Udagamandalam">Udagamandalam</option>
                                                          <option value="Vellore">Vellore</option>
                                                          <option value="Vilupuram">Vilupuram</option>
                                                          <option value="Virudhunagar">Virudhunagar</option>
                                                          </select>
                                                 </div>
                                                 <div class="form-group col-md-4">
                                                 <label>State *</label>
                                                      <select name="permanent_state" data-placeholder="Choose a state..." class="form-control chosen-select">
                                                            <option value="" class="required" aria-required="true">Select state</option>
                                                            <option value="Andhra Pradesh"> Andhra Pradesh</option>
                                                            <option value="Arunachal Pradesh">  Arunachal Pradesh</option>
                                                            <option value="Assam">  Assam</option>
                                                            <option value="Bihar">  Bihar</option>
                                                            <option value="Chhattisgarh">   Chhattisgarh</option>
                                                            <option value="Goa">    Goa</option>
                                                            <option value="Gujarat">    Gujarat</option>
                                                            <option value="Haryana">    Haryana</option>
                                                            <option value="Himachal Pradesh">   Himachal Pradesh</option>
                                                            <option value="Jammu &amp; Kashmir">    Jammu &amp; Kashmir</option>
                                                            <option value="Jharkhand">  Jharkhand</option>
                                                            <option value="Karnataka">  Karnataka</option>
                                                            <option value="Kerala"> Kerala</option>
                                                            <option value="Madhya Pradesh"> Madhya Pradesh</option>
                                                            <option value="Maharashtra">    Maharashtra</option>
                                                            <option value="Manipur">    Manipur</option>
                                                            <option value="Meghalaya">  Meghalaya</option>
                                                            <option value="Mizoram">    Mizoram</option>
                                                            <option value="Nagaland">   Nagaland</option>
                                                            <option value="Orissa"> Orissa</option>
                                                            <option value="Punjab"> Punjab</option>
                                                            <option value="Rajasthan">  Rajasthan</option>
                                                            <option value="Sikkim"> Sikkim</option>
                                                            <option value="Tamil Nadu"> Tamil Nadu</option>
                                                            <option value="Telangana">  Telangana</option>
                                                            <option value="Tripura">    Tripura</option>
                                                            <option value="Uttar Pradesh">  Uttar Pradesh</option>
                                                            <option value="Uttarakhand">    Uttarakhand</option>
                                                            <option value="West Bengal">    West Bengal</option>
                                                            </select>
                                                      </div>
                                                      <div class="form-group col-md-4">
                                                        <label>PinCode</label>
                                                             <input id="permanent_pincode" class="form-control required" placeholder="Enter the Pincode" maxlength="6" name="pincode" type="number" aria-required="true"> 
                                                      </div> 
                                                      <div class="form-group col-md-3">
                                                            <label>Mobile Number</label>
                                                            <input id="mobile1" class="form-control required" placeholder="Enter Mobile Number" name="mobile_no" type="number" aria-required="true"> 
                                                      </div>
                                                      <div class="form-group col-md-3">
                                                            <label>Email ID</label>
                                                            <input id="nominee_emailid" class="form-control" placeholder="Enter Nominee Email ID" name="email_id" type="text"> 
                                                            
                                                      </div> 
                              <div class="form-group col-md-12">
                                    <input type="submit" value="Save" class="btn btn-success pull-right">
                              </div>
                              {{ Form::close() }}
                                                      <div class="form-group col-md-12">
                                                            <label > 
                                                             <b>PROOF OF IDENTITY </b></label> 
                                                        </div>

                                                      <div class="form-group col-md-4">
                                                            <label>Aadhaar</label>
                                                            <input id="adhar" class="form-control required" placeholder="Enter the aadhaar number" maxlength="14" name="adhar1" type="text" aria-required="true">                                 
                                                      </div>
                                                      <div class="form-group col-md-4">
                                                            <label>PAN</label>
                                                        <input id="pan" class="form-control required " placeholder="Enter the PAN number" maxlength="10" name="pan1" type="text" aria-required="true">
                                                      </div>
                                                      <div class="form-group col-md-4">
                                                        <label>Proof of Address</label>
                                                        <select id="proof_of_address" class="form-control required valid" name="proof_of_address" aria-required="true" aria-invalid="false">
                                                            <option value="-1">Select</option>
                                                            <option value="Aadhaar">Aadhaar</option>
                                                            <option value="Voter ID">Voter ID</option>
                                                            <option value="Driving License">Driving License</option>
                                                            <option value="Family Card">Family Card</option>
                                                            </select>            
                                                      </div>
                                                      <div class="form-group col-md-4" id="Aadhaar" style="display : none">
                                                        <label>Aadhaar No</label>
                                                        
                                                            <input id="Aadhaar1" class="form-control required" placeholder="Enter Aadhaar Number" maxlength="14" name="aadhaar_no" type="text" aria-required="true">                                    
                                                       
                                                    </div>
                                                    <div class="form-group col-md-4" id="voter_id" style="display : none">
                                                        <label>Voter ID</label>
                                                        
                                                            <input id="voter" class="form-control required" placeholder="Enter Voter ID Number" maxlength="10" name="voter" type="text" aria-required="true">                                    
                                                       
                                                    </div>
                                                    <div id="driving_license" style="display : none">
                                                          <div class="form-group col-md-4">
                                                              <label>Driving License No</label>
                                                              
                                                                  <input id="license" class="form-control required" placeholder="Enter Driving License Number" maxlength="15" name="license" type="text" aria-required="true">                            
                                                            </div>
                                                          
                                                            
                                                            <div class="form-group col-md-4" id="data_3">
                                                            <label>Date of Issue</label>
                                                                  <div class="input-group date">
                                                                      <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                                      <input type="text" name="date_of_start" class="form-control required" value="01-01-2017" aria-required="true">
                                                                  </div>
                                                            </div>
                                                            
                                                            <div class="form-group col-md-4" id="data_3">
                                                            <label>Expiry Date</label>
                                                                  <div class="input-group date">
                                                                      <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                                      <input type="text" name="expiry_date" class="form-control required" value="01-01-2017" aria-required="true">
                                                                  </div>
                                                            </div>
                                                            </div>
                                                            <div id="ration_card" style="">
                                                                <div class="form-group col-md-12">
                                                                    <label>Family Card No</label>
                                                                    
                                                                        <input id="family_card" class="form-control required" placeholder="Enter Family Card No" maxlength="15" name="family_card" type="text" aria-required="true">                                 
                                                              
                                                                </div>
                                                                
                                                                    <div class="col-lg-2">
                                                                    <label>S.No</label>
                                                                        <input id="family_card" class="form-control" placeholder="" name="s_no1" type="text"><br>
                                                                        <input id="family_card" class="form-control" placeholder="" name="s_no2" type="text"><br>
                                                                        <input id="family_card" class="form-control" placeholder="" name="s_no3" type="text"><br>
                                                                        <input id="family_card" class="form-control" placeholder="" name="s_no4" type="text"><br>
                                                                    </div>
                                                                    
                                                                    <div class="col-lg-4">
                                                                    <label>Name</label>
                                                                        <input id="member_name" class="form-control" placeholder="" name="member_name1" type="text"> <br>
                                                                        <input id="member_name" class="form-control" placeholder="" name="member_name2" type="text"><br>
                                                                        <input id="member_name" class="form-control" placeholder="" name="member_name3" type="text"><br>
                                                                        <input id="member_name" class="form-control" placeholder="" name="member_name4" type="text"><br>
                                                                    </div>
                                                                    <div class="col-lg-2">
                                                                    <label>Age</label>
                                                                        <input id="member_age" class="form-control" placeholder="" name="member_age1" type="text"><br>
                                                                        <input id="member_age" class="form-control" placeholder="" name="member_age2" type="text"><br>
                                                                        <input id="member_age" class="form-control" placeholder="" name="member_age3" type="text"><br>
                                                                        <input id="member_age" class="form-control" placeholder="" name="member_age4" type="text">                                </div>
                                                                    <div class="col-lg-4">
                                                                    <label>Occupation</label>
                                                                        <input id="family_card" class="form-control" placeholder="" name="member_occupation1" type="text"><br>
                                                                        <input id="family_card" class="form-control" placeholder="" name="member_occupation2" type="text"><br>
                                                                        <input id="family_card" class="form-control" placeholder="" name="member_occupation3" type="text"><br>
                                                                        <input id="family_card" class="form-control" placeholder="" name="member_occupation4" type="text">                  
                                                                        </div>
                                                              
                                                            </div>
                                                            
                                                             <div class="form-group col-md-12">
                                                                  <label > 
                                                                  <b>OCCUPATION </b></label> 
                                                            </div>
                                                            <div class="form-group col-md-12">
                                                            <label>Occupation</label>
                                                
                                                          <table width="100%">
                                                          <tbody><tr>
                                                          <td>
                                                            <label class="checkbox checkbox-custom"> 
                                                                 <input type="radio" id="salaried" name="occupation" value="Salaried"><i></i> Salaried 
                                                            </label>
                                                            </td>

                                                            <td>
                                                            <label class="checkbox checkbox-custom"> 
                                                                <input type="radio" id="self_professional" name="occupation" value="Self Employed Proffessional"><i></i> Self Employed Professional 
                                                            </label>

                                                              </td>
                                                              <td>

                                                            <label class="checkbox checkbox-custom"> 
                                                                <input type="radio" id="self_employeed_business" name="occupation" value="Self Employed Business"><i></i> Self Employed Business 
                                                            </label>

                                                            </td>

                                                            <td>
                                                            <label class="checkbox checkbox-custom"> 
                                                               <input type="radio" id="wages" name="occupation" value="Wages"><i></i> Wages
                                                            </label>

                                                            
                                                            </td>
                                                            <td>
                                                            <label class="checkbox checkbox-custom"> 
                                                               <input type="radio" id="occupation_other" name="occupation" value="Other"><i></i> Others
                                                            </label>
                                                             
                                                             
                                                              </td>
                                                            
                                                              </tr>
                                                          </tbody>
                                                          </table>
                                                                  <input type="textbox" class="form-control required" id="occupation_other1" name="occupation_other" style="display: none" aria-required="true">
                                                          </div>
                                                    
                                                    </div>

                                                      <div id="type_of_company_salaried" style="display: ;">
                                                        <div class="hr-line-dashed"></div>
                                                          <label>Type of Company</label>
                                                          <div class="form-group col-md-3">
                                                            
                                                               <select id="type_of_company_salary" class="form-control required" name="type_of_company_salaried" aria-required="true">
                                                                  <option value="-1">Select</option>
                                                                  <option value="Pvt.Ltd">Pvt.Ltd</option>
                                                                  <option value="Partnership">Partnership</option>
                                                                  <option value="Proprietor">Proprietor</option>
                                                                  <option value="Public Ltd">Public Ltd</option>
                                                                  <option value="Retailers">Retailers</option>
                                                                  <option value="PSU">PSU</option>
                                                                  <option value="Govt">Govt</option>
                                                                  <option value="MNC">MNC</option>
                                                                  <option value="Other">Other</option></select>                                 <br>
                                                              <input type="textbox" class="form-control required" id="company_other1" name="company_other" style="display: none" aria-required="true">
                                                          </div>
                                                      </div>
                                                      






                                            

                                            
                                        </div>

                                      

                               

                                </div>
      <div class="tab-pane" id="tab2">

            <form name="step2" role="form">
            <div class="form-group col-md-12">
                  <label > 
                   <b>EXISTING CHITS</b></label> 
            </div>
                
                  <div class="form-group col-md-4" id="name1">
                        <label>Company Name</label>
                        <input id="company_name" class="form-control" placeholder="Enter the existing company name " name="company_name" type="text">                            
                  </div>
                  <div class="form-group col-md-4">
                        <label>CIN No</label>
                        <input id="cin_no" class="form-control" placeholder="Enter the cin number" name="cin_no" type="text">                            
                  </div>
                  <div class="form-group  col-md-4">
                        <label>Chit Value(INR)</label>
                        <input id="chit_value" class="form-control" placeholder="Enter the chit value" name="chit_value" type="text">
                  </div>
                  <div class="form-group col-md-4">
                        <label>Total Instalments</label>
                        <input id="total_instalments" class="form-control" placeholder="" name="total_instalments" type="text">
                  </div>
                  <div class="form-group col-md-4">
                        <label>Instalments Completed</label>
                        <input id="completed_instalments" class="form-control" placeholder="" name="completed_instalments" type="text">                            
                  </div>
                  <div class="form-group col-md-4">
                        <label>Remaining Instalments</label>
                        <input id="remaining_instalments" class="form-control" placeholder="" name="remaining_instalments" type="text">                            
                  </div>
            <div class="form-group col-md-12">
                  <label > 
                   <b>NOMINEE DETAILS</b></label> 
            </div>
                  <div class="form-group col-md-3">
                        <label>Nominee Name</label>
                        
                            <input id="nominee_name" class="form-control required" placeholder="Enter the nominee name" name="nominee_name" type="text" aria-required="true"> 
                        
                  </div>
                  <div class="form-group col-md-3">
                        <label>Father Name</label>
                        
                            <input id="nominee_fathername" class="form-control required" placeholder="Enter Nominee Father Name" name="nominee_fathername" type="text" aria-required="true"> 
                        
                  </div>
                  <div class="form-group col-md-3" id="data_3">
                        <label>Date Of Birth</label>
                                
                                <div class="input-group date">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                    <input type="text" name="nominee_date_of_birth" class="form-control required" placeholder="Select date of birth" aria-required="true">
                                </div>
                            
                  </div>
                  <div class="form-group col-md-3">
                        <label>Age</label>
                        
                            <input id="nominee_age" class="form-control required" placeholder="Enter age of the nominee" name="nominee_age" type="text" aria-required="true"> 
                        
                  </div>
                  <div class="form-group col-md-3">
                        <label>Marital Status </label>
                                    
                        <label class="radio-inline">
                          <input type="radio" name="nominee_marital_status" id="married1" value="Married">Married
                        </label>
                           
                           
                        <label class="radio-inline">
                            <input type="radio" name="nominee_marital_status" id="single1" value="Single">Single
                        </label>
                            
                            
                  </div>
                  <div class="form-group col-md-3">
                        <label>Gender </label>
                                    
                        <label class="radio-inline">
                          <input type="radio" name="nominee_gender" id="male" value="Male">Male
                        </label>
                           
                           
                        <label class="radio-inline">
                            <input type="radio" name="nominee_gender" id="female" value="Female">Female
                        </label>
                            
                            
                    </div>
                  <div class="form-group col-md-3">
                        <label>Door Number</label>
                        <input id="nominee_flatno" class="form-control required" placeholder="Door Number" name="nominee_flatno" type="text" aria-required="true">                    
                  </div>
                  <div class="form-group col-md-3">
                        <label>Address</label>
                        <input id="address" class="form-control required" placeholder="Address" name="nominee_address" type="text" aria-required="true">                    
                  </div>
                  <div class="form-group col-md-3">
                        <label>Pin Code</label>
                         <input id="nominee_pincode" class="form-control required" placeholder="Enter the Pincode" name="nominee_pincode" type="number" aria-required="true"> 
                  </div>
                  <div class="form-group col-md-3">
                        <label>Mobile Number</label>
                        <input id="mobile1" class="form-control required" placeholder="Enter Mobile Number" name="nominee_mobile" type="number" aria-required="true"> 
                  </div>
                  <div class="form-group col-md-3">
                        <label>Email ID</label>
                        <input id="nominee_emailid" class="form-control" placeholder="Enter Nominee Email ID" name="nominee_emailid" type="text"> 
                        
                  </div>
            <div class="form-group col-md-12">
                  <label > 
                   <b>GUARANTOR DETAILS</b></label> 
            </div>
                  <div class="form-group col-md-3">
                        <label>Name of the Guarantor</label>
                    
                        <input id="control" class="form-control required" placeholder="Enter name of the guarantor" name="guarandor_name" type="text" aria-required="true">                                   
                   
                  </div>
                  <div class="form-group col-md-3">
                        <label>Relationship with the Guarantor</label>
                    
                        <input id="guarandor_relationship" class="form-control required" placeholder="Enter the guarandor relationship" name="guarandor_relationship" type="text" aria-required="true">                                   
                   
                  </div>
                  <div class="form-group col-md-3">
                        <label>PAN of Guarantor</label>
                    
                        <input id="guarandor_pan" class="form-control required" placeholder="Enter the guarandor pan no" name="guarandor_pan" type="text" aria-required="true">                                   
                   
                  </div>
                  <div class="form-group col-md-3" id="data_3">
                        <label>Date Of Birth</label>
                    
                        <div class="input-group date">

                              <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                              <input type="text" name="guarantor_date_of_birth" class="form-control required" placeholder="Select date of birth" aria-required="true">
                        </div>
                  </div>
                  <div class="form-group col-md-3">
                        <label>Door Number</label>
                        <input id="nominee_flatno" class="form-control required" placeholder="Door Number" name="gurantor_flatno" type="text" aria-required="true">                    
                  </div>
                  <div class="form-group col-md-3">
                        <label>Address</label>
                        <input id="address" class="form-control required" placeholder="Address" name="gurantor_address" type="text" aria-required="true">                    
                  </div>
                  
                  <div class="form-group col-md-3">
                        <label>Pin Code</label>
                         <input id="gurantor_pincode" class="form-control required" placeholder="Enter the Pincode" name="gurantor_pincode" type="number" aria-required="true"> 
                  </div>
                  <div class="form-group col-md-3">
                        <label>Mobile No</label>
                        <input id="gurantor_mobile" class="form-control required" placeholder="Enter the guarantor mobile no" name="gurantor_mobile" type="text" aria-required="true">                        
                  </div>
                  <div class="form-group col-md-3">
                        <label>Email ID</label>
                        <input id="gurantor_emailid" class="form-control required" placeholder="Enter the guarantor email ID" name="gurantor_emailid" type="text" aria-required="true"> 
                  </div>

            </form>

      </div>
      <div class="tab-pane" id="tab3">

            <form name="step3" role="form" novalidate="">
            <h4 class="custom-font"><strong>BANK</strong> ACCOUNTS</h4>
                
              <div class="form-group col-md-3">
                  <select name="name_of_bank" data-placeholder="Choose a bank..." class="form-control required " aria-required="true" style="display: none;">
                    <option value="">Select</option>
                    <option value="ALLAHABAD BANK">ALLAHABAD BANK</option>
                    <option value="ANDHRA BANK">ANDHRA BANK</option>
                    <option value="AXIS BANK">AXIS BANK</option>
                    <option value="BANK OF AMERICA">BANK OF AMERICA</option>
                    <option value="BANK OF CEYLON">BANK OF CEYLON</option>
                    <option value="BANK OF INDIA">BANK OF INDIA</option>
                    <option value="BANK OF MAHARASHTRA">BANK OF MAHARASHTRA</option>
                    <option value="CANARA BANK">CANARA BANK</option>
                    <option value="CORPORATION BANK">CORPORATION BANK</option>
                    <option value="EQUITAS SMALL FIANANCE BANK">EQUITAS SMALL FIANANCE BANK</option>
                    <option value="HONG KONG &amp; SHANGHAI BANK (HSBC)">HONG KONG &amp; SHANGHAI BANK (HSBC)</option>
                    <option value="INDIAN BANK">INDIAN BANK</option>
                    <option value="INDIAN OVERSEAS BANK">INDIAN OVERSEAS BANK</option>
                    <option value="KARUR VYSYA BANK">KARUR VYSYA BANK</option>
                    <option value="ORIENTAL BANK OF COMMERCE">ORIENTAL BANK OF COMMERCE</option>
                    <option value="PUNJAB AND SIND BANK">PUNJAB AND SIND BANK</option>
                    <option value="PUNJAB NATIONAL BANK">PUNJAB NATIONAL BANK</option>
                    <option value="RESERVE BANK OF INDIA">RESERVE BANK OF INDIA</option>
                    <option value="STANDARD CHARTERED BANK">STANDARD CHARTERED BANK</option>
                    <option value="STATE BANK OF INDIA">STATE BANK OF INDIA</option>
                    <option value="SYNDICATE BANK">SYNDICATE BANK</option>
                    <option value="LAKSHMI VILAS BANK LTD (THE)">LAKSHMI VILAS BANK LTD</option>
                    <option value="UCO BANK">UCO BANK</option>
                    <option value="UNION BANK OF INDIA">UNION BANK OF INDIA</option>
                    <option value="UNITED BANK OF INDIA">UNITED BANK OF INDIA</option>
                    <option value="VIJAYA BANK">VIJAYA BANK</option>
                    <option value="CENTRAL BANK OF INDIA">CENTRAL BANK OF INDIA</option>
                    <option value="WOORI BANK">WOORI BANK</option>
                    <option value="BANDHAN BANK LIMITED">BANDHAN BANK LIMITED</option>
                    <option value="LAXMI VILAS BANK">LAXMI VILAS BANK</option>
                    <option value="BNP PARIBAS BANK branch BANK OF TOKYO-MITSUBISHI">BNP PARIBAS BANK</option>
                    <option value="CATHOLIC SYRIAN BANK">CATHOLIC SYRIAN BANK</option>
                    <option value="CHINATRUST COMMERCIAL BANK LIMITED">CHINATRUST COMMERCIAL BANK LIMITED</option>
                    <option value="CITY UNION BANK LTD">CITY UNION BANK LTD</option>
                    <option value="CREDIT AGRICOLE CORP N INVSMNT BANK">CREDIT AGRICOLE CORP N INVSMNT BANK</option>
                    <option value="DEUTSCHE BANK AG">DEUTSCHE BANK AG</option>
                    <option value="DBS BANK LTD">DBS BANK LTD</option>
                    <option value="DHANALAXMI BANK">DHANALAXMI BANK</option>
                    <option value="FEDERAL BANK LTD (THE)">FEDERAL BANK LTD (THE)</option>
                    <option value="HDFC BANK LTD">HDFC BANK LTD</option>
                    <option value="ICICI BANK LTD">ICICI BANK LTD</option>
                    <option value="IDBI BANK LTD">IDBI BANK LTD</option>
                    <option value="IDFC BANK LIMITED">IDFC BANK LIMITED</option>
                    <option value="INDUSIND BANK LTD">INDUSIND BANK LTD</option>
                    <option value="JAMMU AND KASHMIR BANK LTD (THE)">JAMMU AND KASHMIR BANK LTD (THE)</option>
                    <option value="KARNATAKA BANK LTD">KARNATAKA BANK LTD</option>
                    <option value="KOTAK MAHINDRA BANK">KOTAK MAHINDRA BANK</option>
                    <option value="MIZUHO CORPORATE BANK LIMITED">MIZUHO CORPORATE BANK LIMITED</option>
                   
                    <option value="TAMILNAD MERCANTILE BANK LTD">TAMILNAD MERCANTILE BANK LTD</option>
                    <option value="BANK OF NOVA SCOTIA (THE)">BANK OF NOVA SCOTIA (THE)</option>
                    <option value="ROYAL BANK OF SCOTLAND (THE)">ROYAL BANK OF SCOTLAND (THE)</option>
                    <option value="SHAMRAO VITHAL CO-OP BANK LTD (THE)">SHAMRAO VITHAL CO-OP BANK LTD (THE)</option>
                    <option value="TAMIL NADU STATE APEX CO-OPERATIVE BANK LTD (THE)">TAMIL NADU STATE APEX CO-OPERATIVE BANK LTD (THE)</option>
                    <option value="YES BANK LTD">YES BANK LTD</option>
                               
                  </select>
            </div> 
            <div class="form-group col-md-3">
                  <label>Branch</label>
                    
                  <input id="textbox1" class="form-control required valid" placeholder="Branch" name="branch" type="text" aria-required="true" aria-invalid="false">                                                                    
            </div>  
            <div class="form-group col-md-3">
                  <label>A/C Number</label>
              
                  <input id="textbox1" class="form-control required valid" placeholder="Enter A/C Number" maxlength="15" name="ac_no" type="text" aria-required="true" aria-invalid="false">                                                                   
            </div>
            <div class="form-group col-md-3">
                  <label>IFSC</label>
                                
                  <input id="textbox1" class="form-control required valid" placeholder="IFSC Code EX:ICIC0006226" maxlength="11" name="ifsc" type="text" aria-required="true" aria-invalid="false">                                                                   
            </div>
              
            <h4 class="custom-font"><strong>CHIT</strong> SECURITIES</h4>
                
            <div class="form-group col-md-6">
                  <label>Promissory Note</label>
                  <input type="file" name="promissiory_note" class="form-control required" aria-required="true">
                   
            </div>
            <div class="form-group col-md-6">
                  <label>Post Dated Cheque</label>
             
              
                  <label id="post_dated_cheque-error" class="error" for="post_dated_cheque" style="display: none;"></label><input id="post_dated_cheque" class="form-control required valid" placeholder="Enter number of post dated cheque" maxlength="15" name="post_dated_cheque" type="text" aria-required="true" aria-invalid="false">                                
            </div>
            <h4 class="custom-font"><strong>SERVICES</strong> REQUIRED</h4>
            <div class="form-group col-md-3">
                  <label>Door Step Collection Facility : </label>
                  <label class="checkbox checkbox-custom"> 
                       <input type="radio"  name="door_step_facility" value="1"><i></i> YES 
                  </label>
                  <label class="checkbox checkbox-custom"> 
                       <input type="radio"  name="door_step_facility" value="2"><i></i> NO 
                  </label>     
                              
            </div>
            <div class="form-group col-md-3">
                  <label>SMS Alert Facility : </label>
                  <label class="checkbox checkbox-custom"> 
                       <input type="radio"  name="sms_facility" value="1"><i></i> YES 
                  </label>
                  <label class="checkbox checkbox-custom"> 
                       <input type="radio"  name="sms_facility" value="2"><i></i> NO 
                  </label>     
                              
            </div>
            <div class="form-group col-md-3">
                  <label>Call Back Facility : </label>
                  <label class="checkbox checkbox-custom"> 
                       <input type="radio"  name="call_back_facility" value="1"><i></i> YES 
                  </label>
                  <label class="checkbox checkbox-custom"> 
                       <input type="radio"  name="call_back_facility" value="2"><i></i> NO 
                  </label>     
                              
            </div>
            <div class="form-group col-md-3">
                  <label>E-Mail Statement Facility : </label>
                  <label class="checkbox checkbox-custom"> 
                       <input type="radio"  name="email_facility" value="1"><i></i> YES 
                  </label>
                  <label class="checkbox checkbox-custom"> 
                       <input type="radio"  name="email_facility" value="2"><i></i> NO 
                  </label>     
                              
            </div>
            <h4 class="custom-font"><strong>KYC AND RISK PROFILE</strong> CERTIFICATION</h4>   
             <h4 class="custom-font"><strong>PROOF OF</strong> IDENTITY</h4>       
            <div class="form-group col-md-3">
                  <label class="checkbox checkbox-custom"> 
                  <input type="checkbox" name="risk_proof_of_identity[]" id="identity_aadhar" value="Aadhaar"><i></i> Aadhaar </label> 
                 
            </div>
            <div class="form-group col-md-3">
                  <label class="checkbox checkbox-custom"> 
                  <input type="checkbox" name="risk_proof_of_identity[]" id="identity_pan" value="PAN"><i></i> PAN </label> 
                  
            </div>
            <div class="form-group col-md-6">
                  <label class="checkbox checkbox-custom"> 
                  <input type="checkbox" name="risk_proof_of_identity[]" id="identity_other" value="Others"><i></i> Others </label> 
                  
            </div>
            <div class="form-group col-md-12">
                  <div class="form-group col-md-3">
                        <label>Aadhaar No</label>
                        <input id="reference1" class="form-control required" name="identity_aadhar" type="text" aria-required="true">
                  </div>
                  <div class="form-group col-md-3">
                        <label>PAN No</label>
                        <input id="reference1" class="form-control required" name="identity_pan" type="text" aria-required="true">
                  </div>
                  <div class="form-group col-md-3">
                        <label>Others</label>
                        <input id="reference1" class="form-control required" name="identity_other" type="text" aria-required="true">
                  </div>
            </div>

            <h4 class="custom-font"><strong>PROOF OF</strong> ADDRESS</h4>   
                 
            <div class="form-group col-md-2">
                  <label class="checkbox checkbox-custom"> 
                  <input type="checkbox" name="risk_proof_of_address[]" id="address_family" value="Family Card"><i></i> Family Card </label> 

            </div>
            <div class="form-group col-md-2">
                  <label class="checkbox checkbox-custom"> 
                  <input type="checkbox" name="risk_proof_of_address[]" id="address_voter" value="Voter ID"><i></i> Voter ID </label> 
                 
            </div>
            <div class="form-group col-md-2">
                  <label class="checkbox checkbox-custom"> 
                  <input type="checkbox" name="risk_proof_of_address[]" id="address_passport" value="Passport"><i></i> Passport </label> 
                  
            </div>
            <div class="form-group col-md-2">
                  <label class="checkbox checkbox-custom"> 
                  <input type="checkbox" name="risk_proof_of_address[]" id="address_driving" value="Driving License"><i></i> Driving License </label> 
              
            </div>
            <div class="form-group col-md-4">
                  <label class="checkbox checkbox-custom"> 
                  <input type="checkbox" name="risk_proof_of_address[]" id="address_other" value="Others"><i></i> Others </label> 
           
            </div>

            <div class="form-group col-md-12">
                  <div class="form-group col-md-2">
                        <label>Family Card No</label>
                        <input id="reference1" class="form-control required" name="address_family" type="text" aria-required="true">
                  </div>
                  <div class="form-group col-md-2">
                        <label>Voter ID</label>
                        <input id="reference1" class="form-control required" name="address_voter" type="text" aria-required="true">
                  </div>

                  <div class="form-group col-md-2">
                        <label>Passport No</label>
                        <input id="reference1" class="form-control required" name="address_passport" type="text" aria-required="true">
                        <label>Expiry Date</label>
                        <div class="input-group date">
                              <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                              <input type="text" name="address_passport_expiry_date" class="form-control required" placeholder="Select expiry date" aria-required="true">
                        </div>
                  </div>
                  

                  <div class="form-group col-md-2">
                        <label>Driving License No</label>
                        <input id="reference1" class="form-control required" name="address_driving" type="text" aria-required="true">
                        <label>Expiry Date</label>
                        <div class="input-group date">
                              <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                              <input type="text" name="address_driving_expiry_date" class="form-control required" placeholder="Select expiry date" aria-required="true">
                        </div>
                  </div>
                  
                  <div class="form-group col-md-2">
                        <label>Others</label>
                        <input id="reference1" class="form-control required" name="address_other" type="text" aria-required="true">

                  </div>
                  
            </div>


            <h4 class="custom-font"><strong>INTRODUCER</strong></h4> 
            <div class="form-group col-md-6">
                 
                  <label class="checkbox checkbox-custom"> 
                       <input type="radio"  name="intoducer" id="customer" value="Existing Customer"><i></i> Introduce by Customer 
                  </label>
             
             <div class="form-group" id="customer_intro" style="display: none;">
                   <div class="form-group">
                      <label>Customer ID</label>
                          

                          <input id="reference1" class="form-control required" name="reference_code1" type="text" aria-required="true"> 
                      
                  </div>
                  <div class="form-group">
                      <label>Customer Name</label>
                      
                          <input id="reference1" class="form-control required" name="reference1" type="text" aria-required="true"> 
                      
                  </div>
            </div>       
                              
            </div>
            
            <div class="form-group col-md-6">
                 
                  <label class="checkbox checkbox-custom"> 
                       <input type="radio"  name="intoducer" id="employee" value="Employee"><i></i> Introduce by Employee 
                  </label>
            
            <div class="form-group" id="employee_intro" style="display: block;">
                  <div class="form-group">
                        <label>Employee Code</label>
                        
                            <input id="reference1" class="form-control required" name="reference_code" type="text" aria-required="true"> 
                        
                  </div>
                  <div class="form-group">
                        <label>Employee Name</label>
                        
                            <input id="reference1" class="form-control required" name="reference" type="text" aria-required="true"> 
                        
                  </div>
            </div>        
                          
            </div>
            </form>

      </div>
                                <div class="tab-pane" id="tab4">

                                    <form name="step4" role="form" novalidate="">

                                        <div class="row">
                                            <div class="form-group col-md-6 mb-0">
                                                <label for="email">Email: </label>
                                                <input type="email" name="email" id="email" class="form-control" required="">
                                            </div>
                                            <div class="form-group col-md-6 mb-0">
                                                <label for="phone">Phone: </label>
                                                <input type="text" name="phone" id="phone" class="form-control" placeholder="(XXX) XXXX XXX" pattern="^[\d\+\-\.\(\)\/\s]*$">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="web">Website: </label>
                                            <input type="url" name="web" id="web" class="form-control" placeholder="http://">
                                        </div>

                                    </form>

                                </div>
                                <div class="tab-pane" id="tab5">

                                    <p class="well">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?</p>

                                    <form name="step5" role="form" novalidate="">

                                        <div class="checkbox">
                                            <label class="checkbox checkbox-custom">
                                                <input type="checkbox" name="agree" id="agree" required=""><i></i> I agree to the <a href="" class="text-info">Terms of Service</a>
                                            </label>
                                        </div>

                                        <div class="checkbox">
                                            <label class="checkbox checkbox-custom">
                                                <input type="checkbox" name="newsletter" id="newsletter"><i></i> Receive newsletter
                                            </label>
                                        </div>

                                    </form>

                                </div>
                                <ul class="pager wizard">
                                    <li class="previous disabled"><button class="btn btn-default">Previous</button></li>
                                    <li class="next"><button class="btn btn-default">Next</button></li>
                                    <li class="next finish" style="display: none;"><button class="btn btn-success">Finish</button></li>
                                </ul>
                            </div>
                        </div>

                    </div>

                </div>
                <!-- /col -->
            </div>
        </div>
        
    </section>
    <!--/ CONTENT -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script>
                  $(document).ready(function(){
                  $('#customer').click(function() {
                        $('#customer_intro').show();
                  });
            });
            </script>
@endsection