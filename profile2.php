<?php
include 'lib/header.php';
?>
  <!-- Slider -->
  <section id="maincontent">
    <div class="container container_12">
      <div class="grid_12" style="height:150px; background:#CCC;"></div>
      <div class="clearfix"></div>
    </div>
    <div class="clearfix"></div>
    <!-- POST GRID --> 
  </section>
  <div class="clearfix"></div>
  <div class="devide"></div>
  <!-- Content/Teaser -->
  <section id="maincontent"> 
    <!-- BREADCRUMBS -->
    <div class="container_12">
      <div class="grid_6 text-right">
        <div id="Date" class="mobile-hide"></div>
      </div>
      <div class="clearfix"></div>
    </div>
    
    <!-- CONTENT/ARTIKEL -->
    <div class="container_12">
      <div class="textdev grid_12">
        <h1>Profile Page2</h1>
        <div></div>
      </div>
      <div class="clearfix"></div>
      <div class="grid_8">
      <form role="form">
   <div class="form-group grid_6">
      <label for="name"> *Account Type</label>
      <select class="form-control">
      <option selected="selected" value="1">College/University</option>
      <option value="2">Training Institute</option>
      <option value="3">Educational Consultants</option>
      <option value="4">Others</option>
</select>
      
   </div>
   <div class="form-group grid_6">
      <label for="name"> *Institute Name</label>
      <input type="text" class="form-control" id="name" 
         placeholder="Institute Name">
   </div> 
   <div class="form-group grid_6">
      <label for="name"> *Contact Person Name </label>
      <input type="text" class="form-control" id="name" 
         placeholder="Contact Person Name">
   </div>
   <div class="form-group grid_6">
      <label for="name"> *Mobile</label>
      <input type="text" class="form-control" id="name" 
         placeholder="Enter Mobile">
   </div>
   <div class="form-group grid_6">
      <label for="name"> *Designation</label>
      <select class="form-control">
        <option value="">--Select--</option>
        <option value="1">Asst. Placement Officer (Asst. TPO)</option>
        <option value="2">Chairman</option>
        <option value="3">Counsellor</option>
        <option value="4">Dean</option>
        <option value="5">Director</option>
        <option value="6">HOD</option>
        <option value="7">Placement Officer (TPO)</option>
        <option value="8">Principal</option>
        <option value="9">Professor / Lecturer</option>
        <option value="10">Receptionist</option>
        <option value="11">Student Co-ordinator</option>
        <option value="12">Training manager</option>
        <option value="13">Others</option>
      </select>
   </div>
   <div class="form-group grid_6">
      <label for="name"> *City</label>
     <select class="form-control">
               <option value="">Select City</option>
<optgroup label="Top Metropolitan Cities">
<option value="30">Ahmedabad</option>
<option value="65">Bangalore</option>
<option value="125">Chennai</option>
<option value="26">Delhi</option>
<option value="49">Gurgaon</option>
<option value="5">Hyderabad</option>
<option value="160">Kolkata</option>
<option value="93">Mumbai</option>
<option value="152">Noida</option>
<option value="98">Pune</option>
</optgroup>
<optgroup label="Andaman &amp; Nicobar Islands">
<option value="1">Port Blair</option>
<option value="1047">Andaman &amp; Nicobar Islands-other</option>
</optgroup>
<optgroup label="Andhra Pradesh">
<option value="2">Anantapur</option>
<option value="3">Guntakal</option>
<option value="4">Guntur</option>
<option value="5">Hyderabad</option>
<option value="6">Kakinada</option>
<option value="163">Karimnagar</option>
<option value="7">Kurnool</option>
<option value="8">Nellore</option>
<option value="9">Nizamabad</option>
<option value="10">Rajahmundry</option>
<option value="162">Ramagundam</option>
<option value="11">Tirupati</option>
<option value="12">Vijayawada</option>
<option value="13">Visakhapatnam</option>
<option value="14">Warangal</option>
<option value="1048">Andhra Pradesh-other</option>
</optgroup>
<optgroup label="Arunachal Pradesh">
<option value="15">Itanagar</option>
<option value="1049">Arunachal Pradesh-other</option>
</optgroup>
<optgroup label="Assam">
<option value="16">Guwahati</option>
<option value="17">Silchar</option>
<option value="1006">Assam-other</option>
</optgroup>
<optgroup label="Bihar">
<option value="164">Arrah</option>
<option value="18">Bhagalpur</option>
<option value="167">Darbhanga</option>
<option value="166">Muzaffarpur</option>
<option value="19">Patna</option>
<option value="165">Purnia</option>
<option value="1051">Bihar-other</option>
</optgroup>
<optgroup label="Chandigarh">
<option value="20">Chandigarh</option>
<option value="1052">Chandigarh-other</option>
</optgroup>
<optgroup label="Chhattisgarh">
<option value="21">Bhilai</option>
<option value="22">Bilaspur</option>
<option value="168">Durg</option>
<option value="169">Korba</option>
<option value="23">Raipur</option>
<option value="1053">Chhattisgarh-other</option>
</optgroup>
<optgroup label="Dadra &amp; Nagar Haveli">
<option value="24">Silvassa</option>
<option value="1054">Dadra &amp; Nagar Haveli-other</option>
</optgroup>
<optgroup label="Daman &amp; Diu">
<option value="25">Daman &amp; Diu</option>
<option value="1055">Daman &amp; Diu-other</option>
</optgroup>
<optgroup label="Delhi">
<option value="26">Delhi</option>
</optgroup>
<optgroup label="Goa">
<option value="28">Panaji</option>
<option value="29">Vasco Da Gama</option>
<option value="1056">Goa-other</option>
</optgroup>
<optgroup label="Gujarat">
<option value="30">Ahmedabad</option>
<option value="31">Anand</option>
<option value="32">Ankleshwar</option>
<option value="33">Bharuch</option>
<option value="34">Bhavnagar</option>
<option value="35">Bhuj</option>
<option value="36">Gandhinagar</option>
<option value="37">Gir</option>
<option value="38">Jamnagar</option>
<option value="39">Kandla</option>
<option value="40">Porbandar</option>
<option value="41">Rajkot</option>
<option value="42">Surat</option>
<option value="43">Vadodara</option>
<option value="44">Valsad</option>
<option value="45">Vapi</option>
<option value="1057">Gujarat-other</option>
</optgroup>
<optgroup label="Haryana">
<option value="46">Ambala</option>
<option value="47">Chandigarh</option>
<option value="48">Faridabad</option>
<option value="49">Gurgaon</option>
<option value="50">Hisar</option>
<option value="51">Karnal</option>
<option value="52">Kurukshetra</option>
<option value="53">Panipat</option>
<option value="54">Rohtak</option>
<option value="170">Sonipat</option>
<option value="1058">Haryana-other</option>
</optgroup>
<optgroup label="Himachal Pradesh">
<option value="55">Dalhousie</option>
<option value="56">Dharmasala</option>
<option value="57">Kulu</option>
<option value="58">Shimla</option>
<option value="1059">Himachal Pradesh-other</option>
</optgroup>
<optgroup label="Jammu &amp; Kashmir">
<option value="59">Jammu</option>
<option value="60">Srinagar</option>
<option value="1060">Jammu &amp; Kashmir-other</option>
</optgroup>
<optgroup label="Jharkhand">
<option value="61">Bokaro</option>
<option value="62">Dhanbad</option>
<option value="63">Jamshedpur</option>
<option value="64">Ranchi</option>
<option value="1061">Jharkhand-other</option>
</optgroup>
<optgroup label="Karnataka">
<option value="65">Bangalore</option>
<option value="66">Belgaum</option>
<option value="67">Bellary</option>
<option value="68">Bidar</option>
<option value="172">Bijapur</option>
<option value="171">Davanagere</option>
<option value="69">Dharwad</option>
<option value="70">Gulbarga</option>
<option value="71">Hubli</option>
<option value="173">Hubli-Dharwad</option>
<option value="72">Kolar</option>
<option value="73">Mangalore</option>
<option value="74">Mysore</option>
<option value="174">Raichur</option>
<option value="1062">Karnataka-other</option>
</optgroup>
<optgroup label="Kerala">
<option value="77">Kannur</option>
<option value="76">Kochi</option>
<option value="78">Kollam</option>
<option value="79">Kottayam</option>
<option value="75">Kozhikode</option>
<option value="80">Palakkad</option>
<option value="82">Thiruvananthapuram</option>
<option value="81">Thrissur</option>
<option value="1063">Kerala-other</option>
</optgroup>
<optgroup label="Lakshadeep">
<option value="83">Lakshadeep</option>
<option value="1064">Lakshadeep-other</option>
</optgroup>
<optgroup label="Madhya Pradesh">
<option value="84">Bhopal</option>
<option value="178">Burhanpur</option>
<option value="180">Dewas</option>
<option value="85">Gwalior</option>
<option value="86">Indore</option>
<option value="87">Jabalpur</option>
<option value="177">Ratlam</option>
<option value="175">Rewa</option>
<option value="181">Sagar</option>
<option value="179">Satna</option>
<option value="176">Singrauli</option>
<option value="88">Ujjain</option>
<option value="1065">Madhya Pradesh-other</option>
</optgroup>
<optgroup label="Maharashtra">
<option value="89">Ahmednagar</option>
<option value="182">Akola</option>
<option value="184">Amravati</option>
<option value="90">Aurangabad</option>
<option value="188">Bhiwandi</option>
<option value="186">Dhule</option>
<option value="91">Jalgaon</option>
<option value="92">Kolhapur</option>
<option value="187">Latur</option>
<option value="189">Malegaon</option>
<option value="93">Mumbai</option>
<option value="95">Nagpur</option>
<option value="183">Nanded</option>
<option value="96">Nasik</option>
<option value="97">Navi Mumbai</option>
<option value="185">Parbhani</option>
<option value="98">Pune</option>
<option value="99">Solapur</option>
<option value="1066">Maharashtra-other</option>
</optgroup>
<optgroup label="Manipur">
<option value="100">Imphal</option>
<option value="1067">Manipur-other</option>
</optgroup>
<optgroup label="Meghalaya">
<option value="101">Shillong</option>
<option value="1068">Meghalaya-other</option>
</optgroup>
<optgroup label="Mizoram">
<option value="102">Aizawal</option>
<option value="1069">Mizoram-other</option>
</optgroup>
<optgroup label="Nagaland">
<option value="103">Dimapur</option>
<option value="1070">Nagaland-other</option>
</optgroup>
<optgroup label="Orissa">
<option value="104">Bhubaneshwar</option>
<option value="190">Brahmapur</option>
<option value="105">Cuttack</option>
<option value="106">Paradeep</option>
<option value="107">Puri</option>
<option value="108">Rourkela</option>
<option value="1071">Orissa-other</option>
</optgroup>
<optgroup label="Pudhucherry">
<option value="109">Pondicherry</option>
<option value="1072">Pudhucherry-other</option>
</optgroup>
<optgroup label="Punjab">
<option value="110">Amritsar</option>
<option value="111">Bathinda</option>
<option value="112">Chandigarh</option>
<option value="113">Jalandhar</option>
<option value="114">Ludhiana</option>
<option value="115">Mohali</option>
<option value="116">Pathankot</option>
<option value="117">Patiala</option>
<option value="1073">Punjab-other</option>
</optgroup>
<optgroup label="Rajasthan">
<option value="118">Ajmer</option>
<option value="194">Alwar</option>
<option value="191">Bharatpur</option>
<option value="192">Bhilwara</option>
<option value="193">Bikaner</option>
<option value="119">Jaipur</option>
<option value="120">Jaisalmer</option>
<option value="121">Jodhpur</option>
<option value="122">Kota</option>
<option value="123">Udaipur</option>
<option value="1074">Rajasthan-other</option>
</optgroup>
<optgroup label="Sikkim">
<option value="124">Gangtok</option>
<option value="1075">Sikkim-other</option>
</optgroup>
<optgroup label="Tamil Nadu">
<option value="196">Ambattur</option>
<option value="197">Avadi</option>
<option value="125">Chennai</option>
<option value="126">Coimbatore</option>
<option value="127">Cuddalore</option>
<option value="128">Erode</option>
<option value="129">Hosur</option>
<option value="130">Madurai</option>
<option value="131">Nagercoil</option>
<option value="132">Ooty</option>
<option value="133">Salem</option>
<option value="134">Thanjavur</option>
<option value="902">Tiruchirapalli</option>
<option value="135">Tirunalveli</option>
<option value="195">Tiruvottiyur</option>
<option value="136">Trichy</option>
<option value="137">Tuticorin</option>
<option value="138">Vellore</option>
<option value="1076">Tamil Nadu-other</option>
</optgroup>
<optgroup label="Tripura">
<option value="139">Agartala</option>
<option value="1033">Tripura-other</option>
</optgroup>
<optgroup label="Uttar Pradesh">
<option value="140">Agra</option>
<option value="141">Aligarh</option>
<option value="142">Allahabad</option>
<option value="153">Banaras</option>
<option value="143">Bareilly</option>
<option value="198">Etawah</option>
<option value="144">Faizabad</option>
<option value="207">Farrukhabad</option>
<option value="145">Ghaziabad</option>
<option value="146">Gorakhpur</option>
<option value="200">Hapur</option>
<option value="202">Jhansi</option>
<option value="147">Kanpur</option>
<option value="199">Loni</option>
<option value="148">Lucknow</option>
<option value="149">Mathura</option>
<option value="205">Mau</option>
<option value="150">Meerut</option>
<option value="204">Mirzapur</option>
<option value="151">Moradabad</option>
<option value="152">Noida</option>
<option value="203">Rampur</option>
<option value="206">Saharanpur</option>
<option value="201">Shahjahanpur</option>
<option value="1034">Uttar Pradesh-other</option>
</optgroup>
<optgroup label="Uttarakhand">
<option value="154">Dehradun</option>
<option value="479">Kashipur</option>
<option value="208">Nainital</option>
<option value="155">Roorkee</option>
<option value="1035">Uttarakhand-other</option>
</optgroup>
<optgroup label="West Bengal">
<option value="156">Asansol</option>
<option value="215">Baranagar</option>
<option value="212">Bardhaman</option>
<option value="209">Bhatpara</option>
<option value="157">Durgapur</option>
<option value="213">Gopalpur</option>
<option value="158">Haldia</option>
<option value="211">Kamarhati</option>
<option value="159">Kharagpur</option>
<option value="160">Kolkata</option>
<option value="210">Maheshtala</option>
<option value="214">Panihati</option>
<option value="161">Siliguri</option>
<option value="1036">West Bengal-other</option>
</optgroup>
<optgroup label="Outside India">
<option value="5001">Outside India</option>
</optgroup>
</select>
   </div>
   <div class="form-group grid_6">
      <label for="name"> *Service Interested</label>
      <textarea class="form-control" name="" cols="" rows="">
      
      </textarea>
   </div>
   <div class="form-group grid_6">
      <label for="name" class="grid_12">  *Captcha </label>
      <div class="grid_6">
      <input type="text" class="form-control" id="name" 
         placeholder="Captcha Code"></div>
        <div class="grid_6"> <input type="text" class="form-control" id="name" 
         placeholder="Captcha Code"></div>
   </div>
      
   <div class="grid_12"><button  type="submit" class="btn btn-default">Submit</button><br><br></div>
      
</form>
</div>
      <!--<div class="grid_4"><form class="form-horizontal" role="form">
  <div class="form-group">
    <label class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <p class="form-control-static">email@example.com</p>
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword" 
         placeholder="Password">
    </div>
  </div>
</form></div>-->
      
      <div class="clearfix"></div>
    </div>
  </section>
  <?php
include 'lib/footer.php';
?>