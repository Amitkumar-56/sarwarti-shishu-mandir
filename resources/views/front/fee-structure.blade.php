@include('front.header')
@php
if (!isset($feedata) || !$feedata) {
   $feedata = DB::table('feestructures')->first();
}
@endphp

<!-- Page Banner Area -->
<div class="page-banner-area">
   <img class="page-banner" src="{{ asset('public/front') }}/images/breadcrumb-bg-image.jpg" alt="Fee Structure">
   <div class="page-banner-content">
      <h1>{{ $feedata->title ?? 'School Fee Structure' }}</h1>
      <ul>
         <li><a href="{{ url('/') }}">Home</a></li>
         <li>{{ $feedata->title ?? 'Fee Structure' }}</li>
      </ul>
   </div>
</div>

<!-- Main Fee Structure Section -->
<section class="page-fee-structure-area">
   <div class="container">
      
      <!-- Premium Hero Header Card -->
      <div class="fee-hero-card">
         <div class="fee-hero-content">
            <div class="fee-badge-row">
               <span class="fee-pill session-pill">
                  <i class="ri-calendar-2-line"></i> Academic Session 2026–2027
               </span>
               <span class="fee-pill status-pill">
                  <i class="ri-shield-check-line"></i> Official Fee Schedule
               </span>
            </div>
            <div class="fee-school-name">SARASWATI SHISHU MANDIR</div>
            <p class="fee-school-location"><i class="ri-map-pin-line"></i> Nehru Nagar, Ghaziabad</p>
            <div class="fee-main-heading">{{ $feedata->title ?? 'School Fee Structure' }}</div>
         </div>
         <div class="fee-quick-actions">
            <a href="{{ url('registration/online') }}" class="btn-action btn-action-primary">
               <i class="ri-edit-box-line"></i> Apply Online Now
            </a>
            <a href="{{ url('admission-process') }}" class="btn-action btn-action-outline">
               <i class="ri-book-read-line"></i> Admission Procedure
            </a>
            <a href="{{ url('contact') }}" class="btn-action btn-action-light">
               <i class="ri-phone-line"></i> Helpdesk
            </a>
         </div>
      </div>

      <!-- Quick Note Banner -->
      <div class="fee-note-banner">
         <div class="note-icon"><i class="ri-information-line"></i></div>
         <div class="note-text">
            <strong>Important Notice:</strong> Fee schedule is subject to institutional regulations. One-time admission &amp; registration charges are applicable only for <strong>new admissions</strong>.
         </div>
      </div>

      <!-- Main Content Card with Dynamic Backend Tables & Content -->
      <div class="fee-card-wrapper">
         <div class="fee-process-content" id="feeProcessContent">
            {!! $feedata->description ?? '' !!}
         </div>

         <!-- Bottom Help & Contact Bar -->
         <div class="fee-footer-contact">
            <div class="row align-items-center">
               <div class="col-lg-8 col-md-7">
                  <div class="help-box">
                     <h4><i class="ri-customer-service-2-fill"></i> Have Any Questions Regarding Fee Payment?</h4>
                     <p>Accounts &amp; fee counter is open Monday to Saturday (8:00 AM – 2:00 PM). Parents can also clear queries via phone or campus helpdesk.</p>
                  </div>
               </div>
               <div class="col-lg-4 col-md-5 text-md-end text-start mt-3 mt-md-0">
                  <a href="{{ url('contact') }}" class="btn default-btn me-2">
                     <i class="ri-mail-send-line"></i> Contact Accounts
                  </a>
                  <a href="{{ url('registration/online') }}" class="btn default-btn btn-secondary-action">
                     <i class="ri-file-text-line"></i> Register Online
                  </a>
               </div>
            </div>
         </div>
      </div>

   </div>
</section>

<!-- Custom Styling for Fee Structure Page -->
<style>
.page-fee-structure-area {
   background: #f4f6fa;
   padding: 50px 0 80px 0;
   font-family: 'Poppins', sans-serif;
}

/* Hero Header Card */
.fee-hero-card {
   background: linear-gradient(135deg, #032274 0%, #0d38a5 60%, #1e4bb8 100%);
   border-radius: 18px;
   padding: 40px 35px;
   color: #ffffff;
   box-shadow: 0 15px 35px rgba(3, 34, 116, 0.15);
   margin-bottom: 30px;
   position: relative;
   overflow: hidden;
}

.fee-hero-card::after {
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

.fee-badge-row {
   display: flex;
   gap: 12px;
   flex-wrap: wrap;
   margin-bottom: 18px;
}

.fee-pill {
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

.fee-hero-card .fee-school-name,
.fee-school-name,
.fee-hero-card h2,
.fee-hero-card h3 {
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

.fee-school-location {
   font-size: 16px;
   color: #cbd5e1 !important;
   margin-bottom: 12px;
   display: flex;
   align-items: center;
   gap: 6px;
}

.fee-main-heading,
.fee-hero-card .fee-main-heading {
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
.fee-quick-actions {
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
.fee-note-banner {
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
.fee-card-wrapper {
   background: #ffffff;
   border-radius: 18px;
   box-shadow: 0 10px 40px rgba(0, 0, 0, 0.05);
   border: 1px solid #e2e8f0;
   padding: 40px;
}

/* Dynamic Content Formatting for CKEditor Content */
.fee-process-content {
   color: #334155;
   font-size: 15.5px;
   line-height: 1.7;
}

/* Hide initial duplicate institution text inside CKEditor to avoid redundancy */
.fee-process-content > h2:first-of-type,
.fee-process-content > p:nth-of-type(1),
.fee-process-content > p:nth-of-type(2),
.fee-process-content > p:nth-of-type(3) {
   display: none;
}

/* Styled Section Headers */
.fee-process-content h2,
.fee-process-content h3 {
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

.fee-process-content h2:first-of-type {
   margin-top: 0;
}

/* Responsive Table Wrapper */
.fee-table-scroll-wrap {
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
.fee-swipe-indicator {
   display: none;
   background: #f8fafc;
   padding: 8px 15px;
   font-size: 12.5px;
   color: #64748b;
   border-bottom: 1px solid #e2e8f0;
   text-align: right;
}

.fee-swipe-indicator i {
   font-size: 14px;
   margin-right: 4px;
   color: #032274;
}

/* Table Styling */
.fee-process-content figure.table {
   margin: 0 !important;
   width: 100% !important;
   overflow: visible !important;
}

.fee-process-content table {
   width: 100% !important;
   min-width: 680px;
   border-collapse: collapse !important;
   border: none !important;
   text-align: center;
}

/* Header row */
.fee-process-content table tr:first-child th,
.fee-process-content table thead th {
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
.fee-process-content table tr:not(:first-child) th,
.fee-process-content table tr:not(:first-child) td {
   padding: 14px 15px !important;
   font-size: 14.5px !important;
   color: #1e293b !important;
   border: 1px solid #e2e8f0 !important;
   vertical-align: middle !important;
   line-height: 1.4 !important;
}

/* Second column (Particulars/Item Name) - Left align */
.fee-process-content table tr:not(:first-child) th:nth-child(2),
.fee-process-content table tr:not(:first-child) td:nth-child(2),
.fee-process-content table tr:not(:first-child) th:first-child:not(:only-child),
.fee-process-content table tr:not(:first-child) td:first-child:not(:only-child) {
   text-align: left !important;
   font-weight: 600;
}

/* Zebra Striping */
.fee-process-content table tr:nth-child(even) th,
.fee-process-content table tr:nth-child(even) td {
   background: #f8fafc !important;
}

.fee-process-content table tr:nth-child(odd):not(:first-child) th,
.fee-process-content table tr:nth-child(odd):not(:first-child) td {
   background: #ffffff !important;
}

/* Row Hover */
.fee-process-content table tr:not(:first-child):hover th,
.fee-process-content table tr:not(:first-child):hover td {
   background: #eef4ff !important;
   transition: background 0.2s ease;
}

/* Highlight Total Rows */
.fee-process-content table tr.total-row th,
.fee-process-content table tr.total-row td,
.fee-process-content table tr:last-child th,
.fee-process-content table tr:last-child td {
   background: #fff8e6 !important;
   font-weight: 700 !important;
   color: #032274 !important;
}

/* Concession & Other Fees Grid */
.concession-card-grid {
   display: grid;
   grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
   gap: 16px;
   margin: 20px 0 35px 0;
}

.concession-card-item {
   background: #ffffff;
   border: 1px solid #e2e8f0;
   border-left: 4px solid #ffd700;
   border-radius: 10px;
   padding: 16px 20px;
   display: flex;
   justify-content: space-between;
   align-items: center;
   box-shadow: 0 4px 12px rgba(0, 0, 0, 0.03);
   transition: all 0.3s ease;
}

.concession-card-item:hover {
   transform: translateY(-3px);
   box-shadow: 0 8px 20px rgba(3, 34, 116, 0.08);
   border-color: #032274;
}

.concession-card-label {
   font-weight: 600;
   color: #1e293b;
   display: flex;
   align-items: center;
   gap: 8px;
}

.concession-card-label i {
   color: #10b981;
   font-size: 18px;
}

.concession-card-value {
   font-weight: 700;
   color: #032274;
   background: #eef2ff;
   padding: 5px 12px;
   border-radius: 20px;
   font-size: 13.5px;
}

/* Bottom Help & Contact Bar */
.fee-footer-contact {
   margin-top: 45px;
   padding: 30px;
   background: linear-gradient(135deg, #032274 0%, #0a2f91 100%);
   border-radius: 14px;
   color: #ffffff;
}

.fee-footer-contact .help-box h4 {
   color: #ffd700;
   font-size: 20px;
   font-weight: 700;
   margin-bottom: 8px;
   display: flex;
   align-items: center;
   gap: 10px;
}

.fee-footer-contact .help-box p {
   color: #e2e8f0;
   margin-bottom: 0;
   font-size: 14.5px;
   line-height: 1.6;
}

.fee-footer-contact .btn.default-btn {
   background: #ffd700;
   color: #032274;
   font-weight: 700;
   padding: 10px 22px;
   border-radius: 8px;
   border: none;
   box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
}

.fee-footer-contact .btn.default-btn:hover {
   background: #ffffff;
   color: #032274;
}

.fee-footer-contact .btn.btn-secondary-action {
   background: rgba(255, 255, 255, 0.15);
   color: #ffffff;
   border: 1px solid rgba(255, 255, 255, 0.4);
}

.fee-footer-contact .btn.btn-secondary-action:hover {
   background: #ffffff;
   color: #032274;
}

/* Responsive Styles */
@media (max-width: 991px) {
   .fee-card-wrapper {
      padding: 25px 20px;
   }
   .fee-hero-card {
      padding: 30px 22px;
   }
   .fee-hero-card .fee-school-name,
   .fee-school-name {
      font-size: 26px !important;
   }
}

@media (max-width: 767px) {
   .fee-swipe-indicator {
      display: block;
   }
   .fee-hero-card {
      padding: 24px 18px;
   }
   .fee-hero-card .fee-school-name,
   .fee-school-name {
      font-size: 22px !important;
   }
   .fee-main-heading,
   .fee-hero-card .fee-main-heading {
      font-size: 16px !important;
   }
   .fee-quick-actions {
      flex-direction: column;
   }
   .btn-action {
      justify-content: center;
      width: 100%;
   }
   .fee-footer-contact {
      padding: 20px;
   }
}
</style>

<!-- Automatic Table Wrapper & Beautification Script -->
<script>
document.addEventListener('DOMContentLoaded', function() {
   var container = document.getElementById('feeProcessContent');
   if (!container) return;

   // 1. Wrap each table with a responsive scroll container & swipe indicator
   var tables = container.querySelectorAll('table');
   tables.forEach(function(table) {
      var parent = table.parentNode;
      
      // If table is inside figure.table, wrap the figure
      var targetToWrap = (parent && parent.tagName.toLowerCase() === 'figure') ? parent : table;
      
      var scrollWrap = document.createElement('div');
      scrollWrap.className = 'fee-table-scroll-wrap';

      var swipeIndicator = document.createElement('div');
      swipeIndicator.className = 'fee-swipe-indicator';
      swipeIndicator.innerHTML = '<i class="ri-arrow-left-right-line"></i> Scroll horizontally to view full fee schedule';
      scrollWrap.appendChild(swipeIndicator);

      targetToWrap.parentNode.insertBefore(scrollWrap, targetToWrap);
      scrollWrap.appendChild(targetToWrap);

      // Clean inline widths
      table.style.width = '100%';
      var cells = table.querySelectorAll('th, td');
      cells.forEach(function(c) {
         c.style.width = '';
         if (c.innerText.toLowerCase().indexOf('total') !== -1) {
            c.parentNode.classList.add('total-row');
         }
      });
   });

   // 2. Beautify "Other Fees and Concessions" list if present
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