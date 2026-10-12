@include('admin.header')
@include('admin.sidebar')
<div class="main-content">
   <div class="page-content">
      <div class="container-fluid">
         <div class="row">
            <div class="col-12">
               <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                  <h4 class="mb-sm-0">Bank Details Management</h4>
                  <div class="page-title-right">
                     <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Settings</a></li>
                        <li class="breadcrumb-item active">Bank Details</li>
                     </ol>
                  </div>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-12">
               @if (\Session::has('status'))
               <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <i class="ri-check-double-line me-1"></i> {!! \Session::get('status') !!}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
               </div>
               @endif

               <div class="card">
                  <div class="card-header align-items-center d-flex">
                     <h4 class="card-title mb-0 flex-grow-1"><i class="mdi mdi-bank me-2 text-primary"></i> Update School Bank & Fee Account Details</h4>
                     <div class="flex-shrink-0">
                        <a href="{{ url('fee-payment') }}" target="_blank" class="btn btn-sm btn-outline-primary">
                           <i class="ri-external-link-line me-1"></i> View Live Fee Payment Page
                        </a>
                     </div>
                  </div>
                  <div class="card-body">
                     <form action="{{ url('admin/update-bank-details') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row gy-4">
                           <div class="col-xxl-6 col-md-6">
                              <label for="account_holder" class="form-label fw-bold">Account Holder Name <span class="text-danger">*</span></label>
                              <input type="text" name="account_holder" id="account_holder" class="form-control" value="{{ $bank->account_holder ?? '' }}" placeholder="e.g. Kusum Goel Dr. Santosh Saraswati Vidya Mandir" required>
                           </div>

                           <div class="col-xxl-6 col-md-6">
                              <label for="bank_name" class="form-label fw-bold">Bank Name <span class="text-danger">*</span></label>
                              <input type="text" name="bank_name" id="bank_name" class="form-control" value="{{ $bank->bank_name ?? '' }}" placeholder="e.g. Bank Of Baroda" required>
                           </div>

                           <div class="col-xxl-6 col-md-6">
                              <label for="account_number" class="form-label fw-bold">Bank Account Number <span class="text-danger">*</span></label>
                              <input type="text" name="account_number" id="account_number" class="form-control" value="{{ $bank->account_number ?? '' }}" placeholder="e.g. 21860200000865" required>
                           </div>

                           <div class="col-xxl-6 col-md-6">
                              <label for="ifsc_code" class="form-label fw-bold">IFSC Code <span class="text-danger">*</span></label>
                              <input type="text" name="ifsc_code" id="ifsc_code" class="form-control" value="{{ $bank->ifsc_code ?? '' }}" placeholder="e.g. BARB0RAJNAG" required style="text-transform: uppercase;">
                           </div>

                           <div class="col-xxl-6 col-md-6">
                              <label for="branch" class="form-label fw-bold">Branch Name <span class="text-danger">*</span></label>
                              <input type="text" name="branch" id="branch" class="form-control" value="{{ $bank->branch ?? '' }}" placeholder="e.g. RDC Raj Nagar, Ghaziabad" required>
                           </div>

                           <div class="col-xxl-6 col-md-6">
                              <label for="qr_code" class="form-label fw-bold">UPI QR Code Image (Optional)</label>
                              <input type="file" name="qr_code" id="qr_code" class="form-control" accept="image/*">
                              @if(!empty($bank->qr_code))
                              <div class="mt-2">
                                 <small class="text-muted d-block mb-1">Current QR Code:</small>
                                 <img src="{{ asset('public/uploads/bank/' . $bank->qr_code) }}" alt="QR Code" style="max-height: 90px; border-radius: 8px; border: 1px solid #ddd; padding: 4px;">
                              </div>
                              @endif
                           </div>

                           <div class="col-xxl-12 col-md-12">
                              <label for="note" class="form-label fw-bold">Payment Instructions / Note</label>
                              <textarea name="note" id="note" class="form-control" rows="3" placeholder="Instructions for parents...">{{ $bank->note ?? '' }}</textarea>
                           </div>

                           <div class="col-xxl-12 col-md-12 pt-2">
                              <button type="submit" class="btn btn-primary px-4 py-2 fw-bold">
                                 <i class="ri-save-line me-1"></i> Update Bank Details
                              </button>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>

            </div>
         </div>
      </div>
   </div>
</div>
@include('admin.footer')
