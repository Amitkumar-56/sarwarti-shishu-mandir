@include('front.header')

<style>
    .page-banner-area { margin-bottom: 0 !important; }
    body { background-color: #f0f0f0; }
    .a4-container {
        width: 200mm;
        min-height: 280mm;
        margin: 10px auto;
        background: #e8f5e9;
        padding: 5mm 8mm;
        box-shadow: 0 0 10px rgba(0,0,0,0.2);
        font-family: Arial, sans-serif;
        color: #000;
        position: relative;
        box-sizing: border-box;
    }
    .page-break {
        page-break-after: always;
        page-break-inside: avoid;
    }
    .page-break-last {
        page-break-after: auto;
    }
    .form-header {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        border-bottom: 2px solid #000;
        padding-bottom: 2px;
        margin-bottom: 2px;
    }
    .logo-container {
        width: 70px;
    }
    .logo-container img {
        width: 60px;
        height: auto;
    }
    .header-text {
        flex-grow: 1;
        text-align: center;
        padding: 0 5px;
    }
    .header-text h4 { margin:0; font-size: 13px; font-weight:bold; color:#000; }
    .header-text p.sub { margin:0; font-size: 9px; color:#000; line-height:1.2; font-weight:bold;}
    .header-text h1 { margin: 1px 0; font-size: 24px; font-weight: 900; color:#000; letter-spacing: 1px;}
    .header-text p.address { margin:0; font-size: 10px; color:#000; font-weight:bold;}
    .header-text h3 { margin-top: 1px; font-size: 15px; font-weight:bold; color:#000;}
    
    .photo-box {
        width: 70px;
        height: 90px;
        border: 2px solid #000;
        padding: 2px;
        text-align: center;
        font-size: 11px;
        font-weight:bold;
        display:flex;
        align-items:center;
        justify-content:center;
        color:#000;
        background: #fff;
        border-radius: 5px;
    }
    
    .section-title {
        font-weight:bold;
        font-size: 10px;
        color:#000;
        margin-bottom: 2px;
        margin-top: 2px;
    }
    
    .form-row {
        display: flex;
        margin-bottom: 1px;
        align-items: flex-end;
    }
    
    .form-label {
        font-size: 10px;
        font-weight: bold;
        color: #000;
        white-space: nowrap;
    }
    
    .form-sublabel {
        font-size: 7px;
        color: #000;
        margin-top: -2px;
        display: block;
    }
    
    .flex-col {
        display: flex;
        flex-direction: column;
        min-width: 0;
    }
    
    .flex-row {
        display: flex;
        width: 100%;
        align-items: flex-end;
    }
    
    .form-input {
        border: none;
        border-bottom: 1px dotted #000;
        flex-grow: 1;
        outline: none;
        font-family: inherit;
        font-size: 10px;
        background: transparent;
        color: #000;
        padding: 0 5px;
        min-width: 0;
        height: 12px;
    }
    
    /* Table styles */
    .custom-table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 2px;
        border: 1px solid #000;
    }
    .custom-table th, .custom-table td {
        border: 1px solid #000;
        padding: 1px;
        text-align: center;
        color: #000;
        font-size: 9px;
    }
    .custom-table th {
        font-weight: bold;
        font-size: 9px;
    }
    
    .checkbox-group {
        display: flex;
        align-items: center;
        gap: 3px;
        font-size: 9px;
        font-weight: bold;
    }
    .checkbox-box {
        width: 10px;
        height: 10px;
        border: 1px solid #000;
        display: inline-block;
        background: #fff;
    }
    
    .important-box {
        border: 2px solid #000;
        padding: 4px;
        margin-top: 6px;
    }
    .important-box h4 {
        text-align: center;
        font-weight: bold;
        border: 1px solid #000;
        display: inline-block;
        padding: 1px 8px;
        margin: -12px auto 2px auto;
        background: #e8f5e9;
        font-size: 10px;
    }
    
    .print-controls {
        text-align: center;
        margin: 40px auto;
        max-width: 800px;
        padding: 20px;
        background: #fff;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    
    @media print {
        body { background-color: #fff; margin: 0; padding: 0; }
        
        /* Explicitly hide all website UI elements in print mode */
        .print-controls, .page-banner-area, header, footer, .navbar, .topbar, .footer-area, .top-header-area, .navbar-area, .copyright-area, .auto-hide, #slider, .go-top, .socialsticky {
            display: none !important;
        }
        
        .a4-container {
            margin: 0 auto;
            padding: 8mm 5mm !important; /* Fixed padding at top to stop clipping */
            box-shadow: none;
            background: #e8f5e9 !important;
            -webkit-print-color-adjust: exact;
            print-color-adjust: exact;
            width: 200mm !important;
            height: auto !important;
            max-height: 290mm !important;
            page-break-after: always;
            page-break-inside: avoid;
        }
        
        .form-input {
            border-bottom: 1px dotted #000 !important;
            appearance: none;
            -webkit-appearance: none;
        }
        
        .form-input::placeholder { color: transparent; }
        
        @page { size: A4; margin: 0; }
    }
</style>

<div class="page-banner-area" style="background: #032274; padding: 40px 0; text-align:center;">
    <h1 style="color:#fff; margin:0;">Online Registration Form</h1>
</div>

<div class="container">
    <div class="print-controls">
        <p style="margin-bottom: 15px;">Fill out the form below online and click the button to save it as a PDF or print it.</p>
        <button type="button" class="btn btn-primary" onclick="window.print()" style="font-size: 18px; padding: 10px 30px; background: #032274;">
            <i class="ri-printer-line"></i> Save / Print Filled Form (PDF)
        </button>
        <button type="submit" form="registrationForm" class="btn btn-success" style="font-size: 18px; padding: 10px 30px; margin-left: 10px;">
            <i class="ri-save-line"></i> Submit Form Online
        </button>
        
        @if(session('success'))
            <div class="alert alert-success mt-3" style="font-size:16px;">{{ session('success') }}</div>
        @endif
    </div>
</div>

<form id="registrationForm" action="{{ url('registration/online') }}" method="POST">
@csrf

<!-- PAGE 1 -->
<div class="a4-container page-break" id="printable-form-p1">
    <div class="form-header">
        <div class="logo-container">
            <img src="{{ asset('public/front/images/saraswati-logo.png') }}" alt="Logo">
        </div>
        <div class="header-text">
            <h4>विद्या भारती अखिल भारतीय शिक्षा संस्थान</h4>
            <p class="sub">द्वारा सम्बद्ध<br>स्थाई मान्यता प्राप्त</p>
            <h1>सरस्वती शिशु मन्दिर</h1>
            <p class="address">नेहरू नगर (गणेश अस्पताल के सामने) गाजियाबाद, फोन : 7840037549</p>
            <h3>प्रवेश पत्र (Admission Form)</h3>
        </div>
        <div class="photo-box">
            नवीनतम<br>फोटो<br>प्रमाणित<br>प्रधानाचार्य
        </div>
    </div>

    <!-- Scholar Info -->
    <div class="section-title">शिशु सम्बन्धी जानकारी :- INFORMATION ABOUT SCHOLAR</div>
    
    <div class="form-row" style="gap:20px;">
        <div class="flex-col" style="flex:2;">
            <div class="flex-row"><span class="form-label">1. शिशु का नाम (हिन्दी में)</span><input type="text" name="student_name_hi" class="form-input"></div>
            <span class="form-sublabel" style="margin-left:15px;">Student's Name (In English)</span>
        </div>
        <div class="flex-col" style="flex:1;">
            <div class="flex-row"><span class="form-label">3. जन्मतिथि अंकों में</span><input type="text" name="dob" class="form-input"></div>
            <span class="form-sublabel" style="margin-left:15px;">Date of Birth in figures</span>
        </div>
    </div>

    <div class="form-row" style="gap:20px;">
        <div class="flex-col" style="flex:1;">
            <div class="flex-row"><span class="form-label">3. कक्षा जिसमें प्रवेश चाहिए</span><input type="text" name="class_admission" class="form-input"></div>
            <span class="form-sublabel" style="margin-left:15px;">Class in which you want admission</span>
        </div>
        <div class="flex-col" style="flex:1;">
            <div class="flex-row"><span class="form-label">4. आयु शब्दों में</span><input type="text" class="form-input" name="custom_field_1"></div>
            <span class="form-sublabel" style="margin-left:15px;">Age in words</span>
        </div>
    </div>

    <div class="form-row" style="gap:20px;">
        <div class="flex-col" style="flex:1;">
            <div class="flex-row"><span class="form-label">5. पूर्व कक्षा</span><input type="text" class="form-input" name="custom_field_2"></div>
            <span class="form-sublabel" style="margin-left:15px;">Previous class</span>
        </div>
        <div class="flex-col" style="flex:1;">
            <div class="flex-row"><span class="form-label">8. जन्म तिथि प्रमाण पत्र (टी.सी.) संलग्न करें</span><input type="text" class="form-input" name="custom_field_3"></div>
            <span class="form-sublabel" style="margin-left:15px;">Enclose Birth Certificate & T.C.</span>
        </div>
    </div>
    
    <div class="form-row">
        <div class="flex-col" style="width:100%;">
            <div class="flex-row"><span class="form-label">7. पूर्व विद्यालय का नाम</span><input type="text" class="form-input" name="custom_field_4"></div>
            <span class="form-sublabel" style="margin-left:15px;">Name of Previous School</span>
        </div>
    </div>

    <div class="form-row" style="border-bottom: 2px solid #000; padding-bottom:5px; margin-bottom:5px;">
        <div class="flex-col" style="flex:3;">
            <div class="flex-row"><span class="form-label">2. शिशु की आधार कार्ड संख्या</span><input type="text" class="form-input" name="custom_field_5"></div>
            <span class="form-sublabel" style="margin-left:15px;">Scholar's Aadhar Card No.</span>
        </div>
        <div class="flex-row" style="flex:1; align-items:flex-end; justify-content:flex-end;">
            <span class="form-label" style="margin-right:5px;">Blood Group</span><input type="text" class="form-input" name="custom_field_6">
        </div>
    </div>

    <!-- Guardian Info -->
    <div class="section-title">अभिभावक सम्बन्धी जानकारी :- Information about guardian</div>
    
    <!-- Mother -->
    <div class="form-row" style="gap:10px;">
        <div class="flex-col" style="flex:2.5;">
            <div class="flex-row"><span class="form-label">1. माता का नाम श्रीमती</span><input type="text" name="mother_name" class="form-input"></div>
            <span class="form-sublabel" style="margin-left:15px;">Mother's Name Smt.</span>
        </div>
        <div class="flex-col" style="flex:1;">
            <div class="flex-row"><span class="form-label">शैक्षणिक योग्यता</span><input type="text" name="mother_qualification" class="form-input"></div>
            <span class="form-sublabel">Qualification</span>
        </div>
        <div class="flex-col" style="flex:1;">
            <div class="flex-row"><span class="form-label">व्यवसाय</span><input type="text" name="mother_occupation" class="form-input"></div>
            <span class="form-sublabel">Occupation</span>
        </div>
        <div class="flex-col" style="flex:1;">
            <div class="flex-row"><span class="form-label">मो०</span><input type="text" name="mother_phone" class="form-input"></div>
            <span class="form-sublabel">Mob.</span>
        </div>
    </div>

    <!-- Father -->
    <div class="form-row" style="gap:10px;">
        <div class="flex-col" style="flex:2.5;">
            <div class="flex-row"><span class="form-label">2. पिता का नाम श्री</span><input type="text" name="father_name" class="form-input"></div>
            <span class="form-sublabel" style="margin-left:15px;">Father's Name Sh.</span>
        </div>
        <div class="flex-col" style="flex:1;">
            <div class="flex-row"><span class="form-label">शैक्षणिक योग्यता</span><input type="text" name="father_qualification" class="form-input"></div>
            <span class="form-sublabel">Qualification</span>
        </div>
        <div class="flex-col" style="flex:1;">
            <div class="flex-row"><span class="form-label">व्यवसाय</span><input type="text" name="father_occupation" class="form-input"></div>
            <span class="form-sublabel">Occupation</span>
        </div>
        <div class="flex-col" style="flex:1;">
            <div class="flex-row"><span class="form-label">मो०</span><input type="text" name="father_phone" class="form-input"></div>
            <span class="form-sublabel">Mob.</span>
        </div>
    </div>
    
    <!-- Religion/Caste -->
    <div class="form-row" style="gap:10px;">
        <div class="flex-col" style="flex:2;">
            <div class="flex-row"><span class="form-label">3. धर्म</span><input type="text" class="form-input" name="custom_field_7"></div>
            <span class="form-sublabel" style="margin-left:15px;">Religion</span>
        </div>
        <div class="flex-col" style="flex:1;">
            <div class="flex-row"><span class="form-label">जाति</span><input type="text" class="form-input" name="custom_field_8"></div>
            <span class="form-sublabel">Caste</span>
        </div>
        <div class="flex-col" style="flex:1;">
            <div class="flex-row"><span class="form-label">वर्ग</span><input type="text" class="form-input" name="custom_field_9"></div>
            <span class="form-sublabel">Category</span>
        </div>
         <div class="flex-col" style="flex:1;">
            <div class="flex-row"><span class="form-label">लिंग</span><input type="text" class="form-input" name="custom_field_10"></div>
            <span class="form-sublabel">Gender</span>
        </div>
         <div class="flex-col" style="flex:1;">
            <div class="flex-row"><span class="form-label">पु०/स्त्री०</span><input type="text" class="form-input" name="custom_field_11"></div>
            <span class="form-sublabel">M./F.</span>
        </div>
    </div>
    
    <!-- Addresses -->
    <div class="form-row mt-2">
        <div class="flex-col" style="width:100%;">
            <div class="flex-row"><span class="form-label">4. पूरा वर्तमान पता (हिन्दी में)</span><input type="text" class="form-input" name="custom_field_12"></div>
            <span class="form-sublabel" style="margin-left:15px;">Full Present Address (In English)</span>
        </div>
    </div>
    
    <div class="form-row mt-2">
        <div class="flex-col" style="width:100%;">
            <div class="flex-row"><span class="form-label">5. पूरा स्थाई पता (हिन्दी में)</span><input type="text" class="form-input" name="custom_field_13"></div>
            <span class="form-sublabel" style="margin-left:15px;">Full Permanent Address (In English)</span>
        </div>
    </div>
    
    <!-- Guardian Relation -->
    <div class="form-row mt-2" style="border-bottom: 2px solid #000; padding-bottom:10px; margin-bottom:10px;">
        <div class="flex-col" style="flex:2;">
            <div class="flex-row"><span class="form-label">6. अभिभावक का नाम श्री</span><input type="text" class="form-input" name="custom_field_14"></div>
            <span class="form-sublabel" style="margin-left:15px;">Guardian's Name Sh.</span>
        </div>
        <div class="flex-col" style="flex:1.5;">
            <div class="flex-row"><span class="form-label">शिशु से सम्बन्ध</span><input type="text" class="form-input" name="custom_field_15"></div>
            <span class="form-sublabel">Relation with Scholar</span>
        </div>
    </div>

    <!-- Domicile -->
    <div class="form-row">
        <div class="flex-col" style="width:100%;">
            <div class="flex-row"><span class="form-label">7. प्रदेश में निवास काल</span><input type="text" class="form-input" name="custom_field_16"><span class="form-label">Domicile in State/Province</span><input type="text" class="form-input" name="custom_field_17"></div>
        </div>
    </div>

    <!-- Siblings -->
    <div class="form-row mt-2">
        <div class="flex-col" style="flex:1.2;">
            <span class="form-label">8. अन्य भाई अथवा बहिन जो शिशु मन्दिर में पढ़ते हैं</span>
            <span class="form-sublabel">Other Brother & Sister who is studying in Shishu Mandir</span>
        </div>
        <div class="flex-col" style="flex:1;">
            <div class="flex-row"><span class="form-label">नाम (1)</span><input type="text" class="form-input" name="custom_field_18"><span class="form-label">कक्षा</span><input type="text" class="form-input" name="custom_field_19"></div>
            <span class="form-sublabel" style="margin-bottom:5px;">Name <span style="float:right; margin-right:45px;">Class</span></span>
            
            <div class="flex-row"><span class="form-label">नाम (2)</span><input type="text" class="form-input" name="custom_field_20"><span class="form-label">कक्षा</span><input type="text" class="form-input" name="custom_field_21"></div>
            <span class="form-sublabel">Name <span style="float:right; margin-right:45px;">Class</span></span>
        </div>
    </div>

    <!-- Scholars Identity Checkboxes -->
    <div class="section-title mt-3">शिशु परिचय :- Scholars Identity</div>
    <div class="form-label" style="margin-bottom: 10px;">सही उत्तर के ऊपर (✓) लगा दें Tick On (✓) Right Statement</div>
    
    <div class="flex-row" style="justify-content:space-between; margin-bottom:15px;">
        <div class="flex-col">
            <span class="form-label">1. रूचि किसमें है?</span>
            <span class="form-sublabel">Interest in</span>
        </div>
        <div class="checkbox-group"><div class="flex-col" style="align-items:center;"><span>अध्ययन पाठ्य पुस्तक</span><span class="form-sublabel">Text Book Study</span></div><input type="checkbox" name="interest[]" value="Text Book Study" style="width:20px;height:20px;"></div>
        <div class="checkbox-group"><div class="flex-col" style="align-items:center;"><span>कथा साहित्य</span><span class="form-sublabel">Fiction</span></div><input type="checkbox" name="interest[]" value="Fiction" style="width:20px;height:20px;"></div>
        <div class="checkbox-group"><div class="flex-col" style="align-items:center;"><span>लेख</span><span class="form-sublabel">Article</span></div><input type="checkbox" name="interest[]" value="Article" style="width:20px;height:20px;"></div>
        <div class="checkbox-group"><div class="flex-col" style="align-items:center;"><span>मित्र मंडल</span><span class="form-sublabel">Peer</span></div><input type="checkbox" name="interest[]" value="Peer" style="width:20px;height:20px;"></div>
        <div class="checkbox-group"><div class="flex-col" style="align-items:center;"><span>संगीत</span><span class="form-sublabel">Music</span></div><input type="checkbox" name="interest[]" value="Music" style="width:20px;height:20px;"></div>
        <div class="checkbox-group"><div class="flex-col" style="align-items:center;"><span>कला</span><span class="form-sublabel">ART</span></div><input type="checkbox" name="interest[]" value="ART" style="width:20px;height:20px;"></div>
    </div>

    <div class="flex-row" style="justify-content:space-between; margin-bottom:15px;">
        <div class="flex-col">
            <span class="form-label">2. स्वभाव की विशेषतायें</span>
            <span class="form-sublabel">Specialities of Nature</span>
        </div>
        <div class="checkbox-group"><div class="flex-col" style="align-items:center;"><span>गम्भीर</span><span class="form-sublabel">Serious</span></div><input type="checkbox" name="nature[]" value="Serious" style="width:20px;height:20px;"></div>
        <div class="checkbox-group"><div class="flex-col" style="align-items:center;"><span>चंचल</span><span class="form-sublabel">Active (spry)</span></div><input type="checkbox" name="nature[]" value="Active" style="width:20px;height:20px;"></div>
        <div class="checkbox-group"><div class="flex-col" style="align-items:center;"><span>क्रोधी</span><span class="form-sublabel">Aggressive</span></div><input type="checkbox" name="nature[]" value="Aggressive" style="width:20px;height:20px;"></div>
        <div class="checkbox-group"><div class="flex-col" style="align-items:center;"><span>शान्ति प्रिय</span><span class="form-sublabel">Peaceful</span></div><input type="checkbox" name="nature[]" value="Peaceful" style="width:20px;height:20px;"></div>
    </div>

    <div class="flex-row" style="justify-content:space-between; margin-bottom:20px;">
        <div class="flex-col">
            <span class="form-label">3. परिवार के वातावरण की विशेषता</span>
            <span class="form-sublabel">Specialities of Family Environment</span>
        </div>
        <div class="checkbox-group"><div class="flex-col" style="align-items:center;"><span>आत्मीयता पूर्ण</span><span class="form-sublabel">Intimacy</span></div><input type="checkbox" name="family_env[]" value="Intimacy" style="width:20px;height:20px;"></div>
        <div class="checkbox-group"><div class="flex-col" style="align-items:center;"><span>भारतीय</span><span class="form-sublabel">Indian</span></div><input type="checkbox" name="family_env[]" value="Indian" style="width:20px;height:20px;"></div>
        <div class="checkbox-group"><div class="flex-col" style="align-items:center;"><span>धार्मिक</span><span class="form-sublabel">Religious</span></div><input type="checkbox" name="family_env[]" value="Religious" style="width:20px;height:20px;"></div>
        <div class="checkbox-group"><div class="flex-col" style="align-items:center;"><span>तनावपूर्ण</span><span class="form-sublabel">Tension full</span></div><input type="checkbox" name="family_env[]" value="Tension full" style="width:20px;height:20px;"></div>
    </div>
    
    <div style="font-weight:bold; font-size:14px; text-align:center; border-top:1px solid #000; padding-top:10px;">
        उपरोक्त समस्त जानकारी सही दी गई है। शिशु के हित में संस्था के समस्त नियमों का पालन करना मुझे स्वीकार है।<br>
        Above all information are correct I agree to obey all rules and regulation of institution in the welfare of scholar.
    </div>
    
    <div style="display:flex; justify-content:space-between; margin-top:50px; font-weight:bold; font-size:14px;">
        <div class="flex-col" style="text-align:center;">अभिभावक<br><span class="form-sublabel">Guardian</span></div>
        <div class="flex-col" style="text-align:center;">तिथि<br><span class="form-sublabel">DATE</span></div>
        <div class="flex-col" style="text-align:center;">ह० प्रधानाचार्य<br><span class="form-sublabel">Sig. of Principal</span></div>
    </div>

</div>

<!-- PAGE 2 -->
<div class="a4-container" id="printable-form-p2">
    <div style="text-align:center; position:relative; margin-bottom:20px;">
        <h3 style="font-weight:bold; margin:0; font-size:20px;">केवल विद्यालय प्रयोगार्थ</h3>
        <h4 style="margin:0; font-size:14px; font-weight:bold;">FOR INSTITUTIONAL USE ONLY</h4>
        <div style="position:absolute; right:0; top:0; font-weight:bold;">Admission No. <input type="text" class="form-input" name="office_admission_no" style="width:100px;"></div>
    </div>

    <div style="font-size:13px; font-weight:bold; margin-bottom:5px;">निम्नांकित आचार्यागण उन विषयों में जो उनके नाम के आगे लिखें हैं परीक्षा लेकर अपना मत व्यक्त करें कि प्रिय <input type="text" class="form-input" name="office_student_hi" style="width:200px;"> का भैया/बहिन कक्षा में प्रवेश के निमित्त योग्य है अथवा नहीं।</div>
    <div style="font-size:11px; margin-bottom:15px;">Dear <input type="text" class="form-input" name="office_student_en" style="width:250px;"> Brother / Sister is able / unable for Admission in the class</div>

    <div style="display:flex; justify-content:space-between; margin-bottom:15px; font-weight:bold;">
        <div>दिनांक : <input type="text" class="form-input" name="office_exam_date" style="width:150px;"><br><span class="form-sublabel">Date :</span></div>
        <div style="text-align:center;">ह० प्रधानाचार्य<br><span class="form-sublabel">Principal</span></div>
    </div>

    <table class="custom-table">
        <thead>
            <tr>
                <th style="width:20%;">विषय <br><span style="font-size:10px;">Subject</span></th>
                <th style="width:25%;">आचार्य का नाम <br><span style="font-size:10px;">Name of Acharya</span></th>
                <th style="width:15%;">पूर्णांक <br><span style="font-size:10px;">Integer Marks</span></th>
                <th style="width:15%;">प्राप्तांक <br><span style="font-size:10px;">Obtained Marks</span></th>
                <th style="width:12%;">अभिमत <br><span style="font-size:10px;">Opinion</span></th>
                <th style="width:13%;">हस्ताक्षर <br><span style="font-size:10px;">Signature</span></th>
            </tr>
        </thead>
        <tbody>
            <tr><td style="font-weight:bold;">हिन्दी <span style="font-size:10px;">HINDI</span></td><td><input type="text" name="sub_hindi_acharya" class="form-input" style="width:100%;"></td><td><input type="text" name="sub_hindi_max" class="form-input" style="width:100%;"></td><td><input type="text" name="sub_hindi_obt" class="form-input" style="width:100%;"></td><td><input type="text" name="sub_hindi_opinion" class="form-input" style="width:100%;"></td><td><input type="text" name="sub_hindi_sig" class="form-input" style="width:100%;"></td></tr>
            <tr><td style="font-weight:bold;">गणित <span style="font-size:10px;">MATHS</span></td><td><input type="text" name="sub_maths_acharya" class="form-input" style="width:100%;"></td><td><input type="text" name="sub_maths_max" class="form-input" style="width:100%;"></td><td><input type="text" name="sub_maths_obt" class="form-input" style="width:100%;"></td><td><input type="text" name="sub_maths_opinion" class="form-input" style="width:100%;"></td><td><input type="text" name="sub_maths_sig" class="form-input" style="width:100%;"></td></tr>
            <tr><td style="font-weight:bold;">अंग्रेजी <span style="font-size:10px;">ENGLISH</span></td><td><input type="text" name="sub_eng_acharya" class="form-input" style="width:100%;"></td><td><input type="text" name="sub_eng_max" class="form-input" style="width:100%;"></td><td><input type="text" name="sub_eng_obt" class="form-input" style="width:100%;"></td><td><input type="text" name="sub_eng_opinion" class="form-input" style="width:100%;"></td><td><input type="text" name="sub_eng_sig" class="form-input" style="width:100%;"></td></tr>
            <tr><td style="font-weight:bold;">सा० ज्ञान <span style="font-size:10px;">G.K.</span></td><td><input type="text" name="sub_gk_acharya" class="form-input" style="width:100%;"></td><td><input type="text" name="sub_gk_max" class="form-input" style="width:100%;"></td><td><input type="text" name="sub_gk_obt" class="form-input" style="width:100%;"></td><td><input type="text" name="sub_gk_opinion" class="form-input" style="width:100%;"></td><td><input type="text" name="sub_gk_sig" class="form-input" style="width:100%;"></td></tr>
        </tbody>
    </table>

    <div style="text-align:center; margin:30px 0 20px 0;">
        <h3 style="font-weight:bold; margin:0; font-size:18px;">केवल कार्यालय प्रयोगार्थ</h3>
        <h4 style="margin:0; font-size:14px; font-weight:bold;">FOR OFFICE USE ONLY</h4>
    </div>

    <div style="font-size:14px; font-weight:bold; line-height:2.5;">
        प्रिय <input type="text" class="form-input" name="office_admitted_name" style="width:200px;"> को कक्षा <input type="text" class="form-input" name="office_admitted_class" style="width:100px;"> वर्ग <input type="text" class="form-input" name="office_admitted_section" style="width:80px;"> में प्रविष्ट किया गया है।<br>
        प्रिय <input type="text" class="form-input" name="office_readmitted_name" style="width:200px;"> को कक्षा <input type="text" class="form-input" name="office_readmitted_class" style="width:100px;"> वर्ग <input type="text" class="form-input" name="office_readmitted_section" style="width:80px;"> में पुनः प्रविष्ट किया गया है।<br>
        कार्यालय प्रमुख/कक्षाचार्य शुल्क तथा देय राशि प्राप्त कर लें।
    </div>
    
    <div style="display:flex; justify-content:space-between; margin:15px 0 20px 0; font-weight:bold;">
        <div>दिनांक <input type="text" class="form-input" name="office_fee_date" style="width:150px;"></div>
        <div style="text-align:center;">ह० प्रधानाचार्य</div>
    </div>
    
    <div style="font-size:14px; font-weight:bold; line-height:2.5; border-bottom: 2px solid #000; padding-bottom: 20px; margin-bottom: 20px;">
        उपर्युक्त शिशु का नाम विद्यालय में पंजीयन क्र. <input type="text" class="form-input" name="office_register_no" style="width:150px;"> पर लिख गया।<br>
        शिशु के सभी देय शुल्क पावती क्र० <input type="text" class="form-input" name="office_receipt_no" style="width:120px;"> दिनांक <input type="text" class="form-input" name="office_receipt_date" style="width:120px;"> द्वारा प्राप्त कर लिये गये है।
    </div>

    <div style="display:flex; justify-content:space-between; margin-bottom:30px; font-weight:bold;">
        <div>दिनांक <input type="text" class="form-input" name="office_office_date" style="width:150px;"></div>
        <div style="text-align:center;">कार्यालय प्रमुख</div>
    </div>

    <div style="font-size:14px; font-weight:bold; line-height:2.5; margin-bottom:30px;">
        शिशु का नाम <input type="text" class="form-input" name="office_att_name" style="width:200px;"> एवं समस्त विवरण प्रवेश पत्रानुसार कक्षा उपस्थिति पंजी में अंकित कर लिया है।<br>
        दिनांक <input type="text" class="form-input" name="office_att_date" style="width:150px;"> <span style="float:right;">कक्षाचार्य</span>
    </div>

    <div class="important-box">
        <div style="text-align:center;"><h4 style="margin-top:-28px;">अति आवश्यक</h4></div>
        <ol style="font-size:14px; font-weight:bold; line-height:1.8; margin-bottom:0;">
            <li>आधार कार्ड छाया प्रति प्रस्तुत करें।</li>
            <li>नर्सरी (अरूण) कक्षा के शिशु हेतु जन्म-प्रमाण पत्र नगर निगम अथवा सेकेट्री द्वारा प्रदत्त प्रमाण पत्र प्रस्तुत करें।</li>
            <li>कक्षा के.जी. (उदय) से ऊपर यदि पूर्व विद्यालय का नाम लिखा है तो टी.सी. की मूलप्रति प्रस्तुत करें।</li>
            <li>कक्षा प्रथम से पंचम तक पूर्व विद्यालय की टी.सी. की मूलप्रति प्रस्तुत करें।</li>
            <li>जाति प्रमाण-पत्र की छाया प्रति प्रस्तुत करें।</li>
            <li>यदि आय प्रमाण पत्र है तो छाया प्रति प्रस्तुत करें।</li>
            <li>प्रवेश आवेदन पत्र में अभिभावकों द्वारा दी गयी जानकारी के लिए वह स्वयं उत्तरदायी होंगे।</li>
        </ol>
    </div>
    
    <div style="text-align:right; font-weight:bold; margin-top:40px;">
        हस्ताक्षर अभिभावक
    </div>

</div>

<!-- PAGE 3 -->
<div class="a4-container page-break" id="printable-form-p3" style="border: 4px double #000; padding: 25px; background: #fff !important; min-height: 297mm; display:flex; flex-direction:column; justify-content:space-between;">
    <div>
        <div class="form-header" style="justify-content: space-between; align-items: center; border-bottom: none; margin-bottom: 30px;">
            <div class="logo-container" style="width: 100px;">
                <img src="{{ asset('public/front/images/saraswati-logo.png') }}" style="width:90px; height:auto;">
            </div>
            <div class="header-text" style="flex-grow: 1; text-align: center;">
                <div style="border: 1px solid #000; display: inline-block; padding: 2px 10px; font-weight: bold; font-size: 14px; margin-bottom: 5px;">स्वयमेव मृगेन्द्रता</div>
                <h1 style="margin: 0; font-size: 42px; font-weight: 900; color:#000;">सरस्वती शिशु मन्दिर</h1>
                <p style="margin: 5px 0 0 0; font-size: 18px; font-weight: bold; color:#000;">नेहरू नगर (गणेश अस्पताल के सामने) गाजियाबाद</p>
            </div>
            <div class="logo-container" style="width: 100px; text-align: right;">
                <img src="{{ asset('public/front/images/vidyabharati_logo.png') }}" style="width:90px; height:auto;">
            </div>
        </div>

        <div style="display:flex; justify-content:space-between; margin-bottom: 30px;">
            <div style="flex-grow:1; padding-right: 20px;">
                <div class="form-row" style="margin-bottom: 15px; align-items:center;">
                    <span class="form-label" style="font-size: 16px;">1. शिशु का नाम</span>
                    <input type="text" class="form-input" name="custom_field_22">
                    <span class="form-label" style="font-size: 16px; margin-left:10px;">कक्षा/वर्ग</span>
                    <input type="text" class="form-input" name="custom_field_23">
                </div>
                <div class="form-row" style="margin-bottom: 15px; align-items:center;">
                    <span class="form-label" style="font-size: 16px;">2. माता का नाम</span>
                    <input type="text" class="form-input" name="custom_field_24">
                    <span class="form-label" style="font-size: 16px; margin-left:10px;">मोबाईल नं.</span>
                    <input type="text" class="form-input" name="custom_field_25">
                </div>
                <div class="form-row" style="margin-bottom: 15px; align-items:center;">
                    <span class="form-label" style="font-size: 16px;">3. पिता का नाम</span>
                    <input type="text" class="form-input" name="custom_field_26">
                    <span class="form-label" style="font-size: 16px; margin-left:10px;">मोबाईल नं.</span>
                    <input type="text" class="form-input" name="custom_field_27">
                </div>
                <div class="form-row" style="margin-bottom: 15px; align-items:center;">
                    <span class="form-label" style="font-size: 16px;">4. अन्य अभिभावक का नाम व शिशु से सम्बन्ध</span>
                    <input type="text" class="form-input" name="custom_field_28">
                </div>
                <div class="form-row" style="margin-bottom: 15px; align-items:center;">
                    <span class="form-label" style="font-size: 16px;">5. वर्तमान आवास का पता</span>
                    <input type="text" class="form-input" name="custom_field_29">
                </div>
                <div class="form-row" style="margin-bottom: 15px; align-items:center;">
                    <span class="form-label" style="font-size: 16px;">6. स्थाई आवास का पता</span>
                    <input type="text" class="form-input" name="custom_field_30">
                </div>
            </div>
            <div style="width: 140px; height: 180px; border: 2px solid #000; display:flex; align-items:center; justify-content:center; font-weight:bold; font-size:18px; text-align:center;">
                शिशु का<br>वर्तमान<br>फोटो
            </div>
        </div>

        <div style="display:flex; justify-content:space-around; margin: 40px 0;">
            <div style="width: 140px; height: 170px; border: 2px solid #000; display:flex; align-items:center; justify-content:center; font-weight:bold; font-size:20px; text-align:center;">फोटो<br>(पिता)</div>
            <div style="width: 140px; height: 170px; border: 2px solid #000; display:flex; align-items:center; justify-content:center; font-weight:bold; font-size:20px; text-align:center;">फोटो<br>(माता)</div>
            <div style="width: 140px; height: 170px; border: 2px solid #000; display:flex; align-items:center; justify-content:center; font-weight:bold; font-size:20px; text-align:center;">फोटो<br>(अन्य)</div>
        </div>

        <div style="margin-top: 30px; margin-bottom: 20px;">
            <h3 style="font-weight:bold; font-size:20px; margin-bottom:10px;">नोट</h3>
            <ol style="font-size: 16px; line-height: 1.6; font-weight: bold; margin-bottom: 10px; padding-left: 20px;">
                <li>उपरोक्त तीन व्यक्तियों के अतिरिक्त किसी भी व्यक्ति के साथ शिशु को भेजना सम्भव न होगा।</li>
                <li>उपरोक्त व्यक्तियों के अतिरिक्त दिया गया कोई भी भोज्य पदार्थ शिशु को पहुँचाना सम्भव नहीं होगा।</li>
                <li>अपना मोबाईल वॉट्सअप रोजाना चैक करें गृहकार्य तथा सूचनायें उसी नम्बर पर आपको प्राप्त होगी।</li>
                <li>फोन पर वार्ता कर किसी अन्य व्यक्ति के साथ शिशु को भेजने का आग्रह न करें यह सम्भव न होगा।</li>
                <li>यदि पूर्व से निर्धारित कार्यक्रम है तो शिशु को उस दिन विद्यालय न भेजें।</li>
                <li>शिशु को फास्ट फूड/जंक फूड या आचार देकर विद्यालय न भेजें घर का शुद्ध व सात्विक भोजन ही<br>देकर भेजें। अथवा मौसम अनुसार कोई फल भी दे सकते है।</li>
            </ol>
            <div style="text-align: right; font-weight: bold; font-size: 18px; margin-top:20px;">ह० अभिभावक</div>
        </div>
    </div>
    
  
</div>

<!-- PAGE 4 -->
<div class="a4-container page-break-last" id="printable-form-p4" style="border: 2px solid #000; padding: 15px; background: #fff !important; min-height: 297mm; display:flex; flex-direction:column; justify-content:space-between;">
    <div>
        <!-- Header -->
        <div class="form-header" style="justify-content: space-between; align-items: center; border-bottom: 2px solid #000; padding-bottom:5px; margin-bottom: 10px;">
            <div class="logo-container" style="width: 80px;">
                <img src="{{ asset('public/front/images/saraswati-logo.png') }}" style="width:70px; height:auto;">
            </div>
            <div class="header-text" style="flex-grow: 1; text-align: center;">
                <div style="border: 1px solid #000; display: inline-block; padding: 2px 15px; font-weight: bold; font-size: 14px; margin-bottom: 5px; background: #000; color: #fff;">स्वयमेव मृगेन्द्रता</div>
                <h1 style="margin: 0; font-size: 40px; font-weight: 900; color:#000; text-shadow: 1px 1px 0 #000;">सरस्वती शिशु मन्दिर</h1>
                <p style="margin: 5px 0 0 0; font-size: 16px; font-weight: bold; color:#000;">नेहरू नगर, गाजियाबाद, फोन : 4100151, 9350370660</p>
            </div>
            <div class="logo-container" style="width: 80px; text-align: right;">
                <img src="{{ asset('public/front/images/vidyabharati_logo.png') }}" style="width:70px; height:auto;">
            </div>
        </div>

        <!-- Body -->
        <div style="font-size: 16px; line-height: 1.5; font-weight: bold; color: #000;">
            <div style="margin-bottom: 10px;">
                सेवा में,<br>
                <div style="padding-left: 50px;">
                    प्रधानाचार्य<br>
                    सरस्वती शिशु मन्दिर<br>
                    नेहरू नगर, गाजियाबाद
                </div>
            </div>

            <div style="text-align: right; margin-bottom: 10px;">
                दिनांक <input type="text" class="form-input" name="custom_field_31">
            </div>

            <div style="margin-bottom: 15px;">
                महोदय,
                <div style="text-indent: 50px; text-align: justify; margin-top: 5px;">
                    निवेदन यह है कि मेरे पुत्र/पुत्री <input type="text" class="form-input" name="custom_field_32"> ने आपके विद्यालय में प्रवेश हेतु परीक्षा देकर कक्षा <input type="text" class="form-input" name="custom_field_33"> वर्ग <input type="text" class="form-input" name="custom_field_34"> में प्रवेश लिया है। उसकी जन्मतिथि प्रमाण-पत्र, आधार कार्ड व टी०सी० मैं दिनांक <input type="text" class="form-input" name="custom_field_35"> तक अवश्य जमा करवा दूँगा/दूँगी। यदि मैं उपरोक्त दस्तावेज़ समय पर जमा न करवा सका / सकी तो भविष्य में टी० सी० न मिलने के लिए मैं स्वयं जिम्मेदार रहूँगा/रहूँगी। यही अन्तिम सूचना है इसके बाद की पूर्ण जिम्मेदारी अभिभावक की होगी।
                </div>
            </div>

            <div style="margin-bottom: 10px;">
                शिशु का नाम लिखा हुआ कोई एक प्रमाण-पत्र के साथ प्रवेश के समय संलग्न करें-
                <ol style="margin-top: 5px; padding-left: 25px; text-align: justify; font-size: 15px;">
                    <li style="margin-bottom: 4px;">पूर्व विद्यालय का टी०सी० जिला या प्रदेश बदलने पर काउन्टर साइन सहित जमा करें।</li>
                    <li style="margin-bottom: 4px;">यदि बालक घर पर पढ़ा है तो नोटरी का शपथ पत्र जिसमें घर पर शिक्षा प्राप्त दर्शायी गयी हो, किसी मान्यता प्राप्त विद्यालय से नही।</li>
                    <li style="margin-bottom: 4px;">नगर निगम का जन्म प्रमाण-पत्र केवल नर्सरी हेतु जिनका कोई पूर्व विद्यालय न हो।</li>
                    <li style="margin-bottom: 4px;">बालक के आधार कार्ड की फोटोकॉपी अवश्य संलग्न करें।</li>
                    <li style="margin-bottom: 4px;">यदि आप आरक्षित वर्ग से है तो बालक या उसके माता या पिता का जाति प्रमाण पत्र संलग्न करें।</li>
                </ol>
            </div>
        </div>
    </div>

    <!-- Footer Signatures -->
    <div style="display: flex; justify-content: flex-end; font-size: 16px; font-weight: bold; color: #000; margin-top: 5px;">
        <div style="width: 400px;">
            <div style="text-align: center; margin-bottom: 10px;">
                भवदीय<br><br>
                ह० अभिभावक
            </div>
            <div style="display: flex; align-items: flex-end; margin-bottom: 10px;">
                <span style="width: 80px;">नाम :</span>
                <input type="text" class="form-input" name="custom_field_36">
            </div>
            <div style="display: flex; align-items: flex-start; margin-bottom: 10px;">
                <span style="width: 80px; padding-top: 5px;">पता :</span>
                <div style="flex-grow: 1;">
                    <input type="text" class="form-input" name="custom_field_37">
                    <input type="text" class="form-input" name="custom_field_38">
                    <input type="text" class="form-input" name="custom_field_39">
                </div>
            </div>
            <div style="display: flex; align-items: flex-end;">
                <span style="width: 80px;">फोन न०</span>
                <input type="text" class="form-input" name="custom_field_40">
            </div>
        </div>
    </div>
</div>
</form>

@if(session('success') && session('submitted_data'))
<script>
    document.addEventListener("DOMContentLoaded", function() {
        let submittedData = @json(session('submitted_data'));
        let form = document.querySelector('form');
        
        if (form) {
            for (let name in submittedData) {
                let value = submittedData[name];
                let elements = form.querySelectorAll(`[name="${name}"], [name="${name}[]"]`);
                
                if (elements.length > 0) {
                    elements.forEach(el => {
                        if (el.type === 'checkbox' || el.type === 'radio') {
                            if (Array.isArray(value)) {
                                if (value.includes(el.value)) el.checked = true;
                            } else {
                                if (value == el.value) el.checked = true;
                            }
                        } else {
                            el.value = value;
                        }
                    });
                }
            }
        }
        
        // Show success alert first, then print
        setTimeout(() => {
            alert("{{ session('success') }}");
            window.print();
        }, 500);
    });
</script>
@endif

@include('front.footer')

