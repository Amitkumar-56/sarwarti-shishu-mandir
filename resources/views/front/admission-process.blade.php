@include('front.header')
@php
$apdata = DB::table('admissionprocesses')->first();
@endphp

<!-- Page Banner Area -->
<div class="page-banner-area">
   <img class="page-banner" src="{{ asset('public/front') }}/images/banner_admission.jpg" alt="Admission Procedure">
   <div class="page-banner-content">
      <h1>{{ $apdata->title ?? 'Procedure For Admission' }}</h1>
      <ul>
         <li><a href="{{ url('/') }}">Home</a></li>
         <li>{{ $apdata->title ?? 'Procedure For Admission' }}</li>
      </ul>
   </div>
</div>

<!-- Main Admission Process Section -->
<section class="page-admission-process-area">
   <div class="container">
      
      <!-- Premium Hero Header Card -->
      <div class="admission-hero-card">
         <div class="admission-hero-content">
            <div class="admission-badge-row">
               <span class="admission-pill session-pill">
                  <i class="ri-calendar-2-line"></i> Academic Session 2026–2027
               </span>
               <span class="admission-pill status-pill">
                  <i class="ri-checkbox-circle-line"></i> Admissions Open
               </span>
            </div>
            <div class="admission-school-name">SARASWATI SHISHU MANDIR</div>
            <p class="admission-school-location"><i class="ri-map-pin-line"></i> Nehru Nagar, Ghaziabad</p>
            <div class="admission-main-heading">{{ $apdata->title ?? 'Procedure For Admission & Fee Structure' }}</div>
         </div>
         <div class="admission-quick-actions">
            <a href="{{ url('registration/online') }}" class="btn-action btn-action-primary">
               <i class="ri-edit-box-line"></i> Apply Online Now
            </a>
            <a href="{{ url('registration/download') }}" class="btn-action btn-action-outline">
               <i class="ri-download-2-line"></i> Download Form
            </a>
            <a href="{{ url('contact') }}" class="btn-action btn-action-light">
               <i class="ri-phone-line"></i> Helpdesk
            </a>
         </div>
      </div>

      <!-- Quick Note Banner -->
      <div class="admission-note-banner">
         <div class="note-icon"><i class="ri-information-line"></i></div>
         <div class="note-text">
            <strong>Important Notice:</strong> One-time admission &amp; registration charges are applicable only for <strong>new admissions</strong>. Monthly fees are payable as per the fee schedule below.
         </div>
      </div>

      <!-- Main Content Card with Styled Tables & Sections -->
      <div class="admission-card-wrapper">
         <div class="admission-process-content" id="admissionProcessContent">
            {!! $apdata->description ?? '' !!}
         </div>

         <!-- Bottom Help & Contact Bar -->
         <div class="admission-footer-contact">
            <div class="row align-items-center">
               <div class="col-lg-8 col-md-7">
                  <div class="help-box">
                     <h4><i class="ri-customer-service-2-fill"></i> Need Assistance with the Admission Process?</h4>
                     <p>Our admission counselors are available Monday to Saturday (8:00 AM – 2:00 PM) to assist you with inquiries, campus visits, and document verification.</p>
                  </div>
               </div>
               <div class="col-lg-4 col-md-5 text-md-end text-start mt-3 mt-md-0">
                  <a href="{{ url('contact') }}" class="btn default-btn me-2">
                     <i class="ri-mail-send-line"></i> Contact Campus
                  </a>
                  <a href="{{ url('registration/online') }}" class="btn default-btn btn-secondary-action">
                     <i class="ri-file-text-line"></i> Register
                  </a>
               </div>
            </div>
         </div>
      </div>

   </div>
</section>

<!-- Custom Styling for Admission Process Page -->
<style>
.page-admission-process-area {
   background: #f4f6fa;
   padding: 50px 0 80px 0;
   font-family: 'Poppins', sans-serif;
}

/* Hero Header Card */
.admission-hero-card {
   background: linear-gradient(135deg, #032274 0%, #0d38a5 60%, #1e4bb8 100%);
   border-radius: 18px;
   padding: 40px 35px;
   color: #ffffff;
   box-shadow: 0 15px 35px rgba(3, 34, 116, 0.15);
   margin-bottom: 30px;
   position: relative;
   overflow: hidden;
}

.admission-hero-card::after {
   content: '';
   position: absolute;
   right: -60px;
   bottom: -60px;
   width: 250px;
   height: 250px;
   background: radial-gradient(circle, rgba(255,255,255,0.12) 0%, rgba(255,255,255,0) 70%);
   border-radius: 50%;
   pointer-events: none;
}

.admission-badge-row {
   display: flex;
   gap: 12px;
   flex-wrap: wrap;
   margin-bottom: 18px;
}

.admission-pill {
   display: inline-flex;
   align-items: center;
   gap: 6px;
   padding: 6px 16px;
   border-radius: 30px;
   font-size: 13px;
   font-weight: 700;
   letter-spacing: 0.3px;
   text-transform: uppercase;
}

.session-pill {
   background: #ffd700;
   color: #032274;
}

.status-pill {
   background: rgba(255, 255, 255, 0.2);
   color: #ffffff;
   border: 1px solid rgba(255, 255, 255, 0.3);
}

.admission-hero-card .admission-school-name,
.admission-school-name,
.admission-hero-card h2,
.admission-hero-card h3 {
   font-family: 'Poppins', sans-serif !important;
   font-size: 32px !important;
   font-weight: 800 !important;
   color: #ffffff !important;
   -webkit-text-fill-color: #ffffff !important;
   background: none !important;
   -webkit-background-clip: unset !important;
   letter-spacing: 1px;
   margin-bottom: 6px;
   text-shadow: 0 2px 4px rgba(0,0,0,0.25) !important;
}

.admission-school-location {
   font-size: 16px;
   color: #cbd5e1 !important;
   margin-bottom: 12px;
   display: flex;
   align-items: center;
   gap: 6px;
}

.admission-main-heading,
.admission-hero-card .admission-main-heading {
   font-size: 20px !important;
   color: #ffffff !important;
   -webkit-text-fill-color: #ffffff !important;
   background: none !important;
   -webkit-background-clip: unset !important;
   font-weight: 600;
   margin-bottom: 0;
   border-top: 1px solid rgba(255,255,255,0.2);
   padding-top: 15px;
}

/* Quick Action Buttons */
.admission-quick-actions {
   display: flex;
   gap: 14px;
   flex-wrap: wrap;
   margin-top: 25px;
}

.btn-action {
   display: inline-flex;
   align-items: center;
   gap: 8px;
   padding: 11px 22px;
   border-radius: 10px;
   font-size: 14.5px;
   font-weight: 700;
   text-decoration: none;
   transition: all 0.3s ease;
}

.btn-action-primary {
   background: #ffd700;
   color: #032274;
   box-shadow: 0 4px 15px rgba(255, 215, 0, 0.35);
}

.btn-action-primary:hover {
   background: #ffea75;
   color: #032274;
   transform: translateY(-2px);
}

.btn-action-outline {
   background: transparent;
   color: #ffffff;
   border: 2px solid rgba(255, 255, 255, 0.8);
}

.btn-action-outline:hover {
   background: #ffffff;
   color: #032274;
   transform: translateY(-2px);
}

.btn-action-light {
   background: rgba(255, 255, 255, 0.15);
   color: #ffffff;
   border: 1px solid rgba(255, 255, 255, 0.25);
}

.btn-action-light:hover {
   background: rgba(255, 255, 255, 0.25);
   color: #ffffff;
   transform: translateY(-2px);
}

/* Note Banner */
.admission-note-banner {
   display: flex;
   align-items: center;
   gap: 16px;
   background: #eef2ff;
   border-left: 5px solid #032274;
   padding: 16px 22px;
   border-radius: 10px;
   margin-bottom: 30px;
   color: #1e293b;
   font-size: 15px;
   box-shadow: 0 4px 12px rgba(0, 0, 0, 0.03);
}

.note-icon {
   font-size: 26px;
   color: #032274;
   flex-shrink: 0;
}

/* Card Wrapper */
.admission-card-wrapper {
   background: #ffffff;
   border-radius: 18px;
   box-shadow: 0 10px 40px rgba(0, 0, 0, 0.05);
   border: 1px solid #e2e8f0;
   padding: 40px;
}

/* Dynamic Content Formatting for CKEditor Content */
.admission-process-content {
   color: #334155;
   font-size: 15.5px;
   line-height: 1.7;
}

/* Hide initial duplicate institution text inside CKEditor to avoid redundancy */
.admission-process-content > h2:first-of-type,
.admission-process-content > p:nth-of-type(1),
.admission-process-content > p:nth-of-type(2),
.admission-process-content > p:nth-of-type(3) {
   display: none;
}

/* Styled Section Headers (1. One-Time Admission Charges, 2. Monthly Fee, etc.) */
.admission-process-content h2,
.admission-process-content h3 {
   font-family: 'Poppins', sans-serif;
   font-size: 22px;
   font-weight: 700;
   color: #032274;
   margin-top: 35px;
   margin-bottom: 20px;
   padding: 12px 20px;
   background: linear-gradient(90deg, #f0f4ff 0%, #ffffff 100%);
   border-left: 5px solid #032274;
   border-radius: 0 10px 10px 0;
   display: flex;
   align-items: center;
   gap: 10px;
}

.admission-process-content h2:first-of-type {
   margin-top: 0;
}

/* Responsive Table Wrapper */
.admission-table-scroll-wrap {
   width: 100%;
   overflow-x: auto;
   -webkit-overflow-scrolling: touch;
   margin: 20px 0 35px 0;
   border-radius: 12px;
   border: 1px solid #e2e8f0;
   box-shadow: 0 4px 20px rgba(0, 0, 0, 0.04);
   background: #ffffff;
}

/* Swipe Indicator on mobile */
.admission-swipe-indicator {
   display: none;
   background: #f8fafc;
   padding: 8px 15px;
   font-size: 12.5px;
   color: #64748b;
   border-bottom: 1px solid #e2e8f0;
   text-align: right;
}

.admission-swipe-indicator i {
   font-size: 14px;
   margin-right: 4px;
   color: #032274;
}

/* Table Styling */
.admission-process-content figure.table {
   margin: 0 !important;
   width: 100% !important;
   overflow: visible !important;
}

.admission-process-content table {
   width: 100% !important;
   min-width: 680px;
   border-collapse: collapse !important;
   border: none !important;
   text-align: center;
}

/* Header row */
.admission-process-content table tr:first-child th,
.admission-process-content table thead th {
   background: linear-gradient(135deg, #032274 0%, #0d3aa9 100%) !important;
   color: #ffffff !important;
   font-size: 14.5px !important;
   font-weight: 700 !important;
   text-transform: uppercase !important;
   letter-spacing: 0.6px !important;
   padding: 16px 14px !important;
   border: 1px solid #032274 !important;
   vertical-align: middle !important;
   text-align: center !important;
}

/* Table Body Cells */
.admission-process-content table tr:not(:first-child) th,
.admission-process-content table tr:not(:first-child) td {
   padding: 13px 14px !important;
   font-size: 15px !important;
   color: #334155 !important;
   font-weight: 500 !important;
   border: 1px solid #e2e8f0 !important;
   vertical-align: middle !important;
   text-align: center !important;
   transition: background 0.2s ease;
}

/* Left align Fee Head and Class names for clean typography */
.admission-process-content table tr:not(:first-child) th:nth-child(2),
.admission-process-content table tr:not(:first-child) td:nth-child(2),
.admission-process-content table tr:not(:first-child) th:first-child:not(:only-child),
.admission-process-content table tr:not(:first-child) td:first-child:not(:only-child) {
   font-weight: 600 !important;
   color: #1e293b !important;
}

/* Alternating zebra rows */
.admission-process-content table tr:nth-child(even) th,
.admission-process-content table tr:nth-child(even) td {
   background-color: #f8fafc !important;
}

.admission-process-content table tr:nth-child(odd):not(:first-child) th,
.admission-process-content table tr:nth-child(odd):not(:first-child) td {
   background-color: #ffffff !important;
}

/* Hover Row Effect */
.admission-process-content table tr:not(:first-child):hover th,
.admission-process-content table tr:not(:first-child):hover td {
   background-color: #eef4ff !important;
}

/* Highlight Total Row */
.admission-process-content table tr.total-row th,
.admission-process-content table tr.total-row td,
.admission-process-content table tr:last-child th,
.admission-process-content table tr:last-child td {
   font-weight: 800 !important;
}

/* Specifically highlight Total row in One-Time charges */
.admission-total-highlight th,
.admission-total-highlight td {
   background: #fef9c3 !important;
   color: #854d0e !important;
   border-top: 2px solid #eab308 !important;
   font-size: 15.5px !important;
}

/* Concessions & Other Charges Items */
.concession-card-grid {
   display: grid;
   grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
   gap: 15px;
   margin-top: 15px;
}

.concession-card-item {
   background: #ffffff;
   border: 1px solid #e2e8f0;
   border-left: 4px solid #032274;
   border-radius: 10px;
   padding: 14px 18px;
   display: flex;
   align-items: center;
   justify-content: space-between;
   box-shadow: 0 2px 8px rgba(0, 0, 0, 0.02);
   transition: transform 0.2s, box-shadow 0.2s;
}

.concession-card-item:hover {
   transform: translateY(-2px);
   box-shadow: 0 6px 16px rgba(3, 34, 116, 0.08);
   border-color: #032274;
}

.concession-card-label {
   display: flex;
   align-items: center;
   gap: 10px;
   font-size: 14.5px;
   font-weight: 600;
   color: #1e293b;
}

.concession-card-label i {
   color: #032274;
   font-size: 18px;
}

.concession-card-value {
   background: #eef2ff;
   color: #032274;
   font-weight: 800;
   font-size: 14.5px;
   padding: 4px 12px;
   border-radius: 20px;
   white-space: nowrap;
}

/* Bottom Help & Contact Bar */
.admission-footer-contact {
   margin-top: 45px;
   padding-top: 30px;
   border-top: 2px dashed #e2e8f0;
}

.help-box h4 {
   font-size: 18px;
   color: #032274;
   font-weight: 700;
   margin-bottom: 6px;
   display: flex;
   align-items: center;
   gap: 8px;
}

.help-box p {
   color: #64748b;
   font-size: 14px;
   margin-bottom: 0;
}

.btn-secondary-action {
   background: #032274 !important;
   color: #ffffff !important;
}

.btn-secondary-action:hover {
   background: #0a3399 !important;
   color: #ffffff !important;
}

/* Mobile Responsive Adjustments */
@media (max-width: 768px) {
   .admission-hero-card {
      padding: 28px 20px;
   }
   .admission-school-name {
      font-size: 24px;
   }
   .admission-main-heading {
      font-size: 17px;
   }
   .admission-card-wrapper {
      padding: 24px 16px;
   }
   .admission-quick-actions {
      flex-direction: column;
   }
   .btn-action {
      width: 100%;
      justify-content: center;
   }
   .admission-swipe-indicator {
      display: block;
   }
   .admission-process-content h2,
   .admission-process-content h3 {
      font-size: 18px;
      padding: 10px 14px;
   }
   .concession-card-grid {
      grid-template-columns: 1fr;
   }
}
</style>

<!-- Script to Enhance & Wrap Tables & Style Concessions -->
<script>
document.addEventListener('DOMContentLoaded', function() {
   var container = document.getElementById('admissionProcessContent');
   if (!container) return;

   // 1. Wrap all tables in a responsive scroll container with swipe hint
   var figures = container.querySelectorAll('figure.table, table');
   figures.forEach(function(el) {
      if (el.tagName.toLowerCase() === 'table' && el.parentElement.classList.contains('admission-table-scroll-wrap')) {
         return; // Already wrapped
      }
      var target = el.tagName.toLowerCase() === 'figure' ? el : el;
      if (target.parentElement && !target.parentElement.classList.contains('admission-table-scroll-wrap')) {
         var wrap = document.createElement('div');
         wrap.className = 'admission-table-scroll-wrap';
         
         var swipeHint = document.createElement('div');
         swipeHint.className = 'admission-swipe-indicator';
         swipeHint.innerHTML = '<i class="ri-arrow-left-right-line"></i> Swipe horizontally to view all classes';
         
         target.parentNode.insertBefore(wrap, target);
         wrap.appendChild(swipeHint);
         wrap.appendChild(target);
      }
   });

   // 2. Identify Total Row in tables
   var tables = container.querySelectorAll('table');
   tables.forEach(function(tbl) {
      var rows = tbl.querySelectorAll('tr');
      rows.forEach(function(tr) {
         var text = tr.innerText.trim();
         if (text.indexOf('Total') !== -1 || text.indexOf('TOTAL') !== -1) {
            tr.classList.add('admission-total-highlight');
         }
      });
   });

   // 3. Beautify "3. Other Fees and Concessions" list
   var headings = container.querySelectorAll('h2, h3');
   headings.forEach(function(h) {
      if (h.innerText.indexOf('Other Fees') !== -1 || h.innerText.indexOf('Concessions') !== -1) {
         var grid = document.createElement('div');
         grid.className = 'concession-card-grid';
         
         var next = h.nextElementSibling;
         var itemsToMove = [];
         while (next && next.tagName.toLowerCase() === 'p') {
            itemsToMove.push(next);
            next = next.nextElementSibling;
         }

         if (itemsToMove.length > 0) {
            itemsToMove.forEach(function(p) {
               var text = p.innerText.trim();
               if (!text) return;

               var card = document.createElement('div');
               card.className = 'concession-card-item';

               var parts = text.split(':');
               if (parts.length >= 2) {
                  var label = parts[0].trim();
                  var val = parts.slice(1).join(':').trim();
                  card.innerHTML = '<span class="concession-card-label"><i class="ri-checkbox-circle-fill"></i> ' + label + '</span>' +
                                   '<span class="concession-card-value">' + val + '</span>';
               } else {
                  card.innerHTML = '<span class="concession-card-label"><i class="ri-checkbox-circle-fill"></i> ' + text + '</span>';
               }
               grid.appendChild(card);
               p.remove();
            });
            h.parentNode.insertBefore(grid, h.nextSibling);
         }
      }
   });
});
</script>

@include('front.footer')