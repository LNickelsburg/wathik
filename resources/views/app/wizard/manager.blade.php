<div class="" data-kt-stepper-element="content">
    <div class="w-100">
        <div class="pb-10 pb-lg-15">
            <h2 class="fw-bold d-flex align-items-center text-dark">مدير الجمعية
            </h2>
        </div>
        <div class="mb-10 fv-row fv-plugins-icon-container">
            <label class="form-label mb-3 required">الاسم</label>
            <input type="text" class="form-control form-control-lg form-control-solid" name="manager_name"
                placeholder="manager name" value="{{ old('manager_name') }}" kl_vkbd_parsed="true" required>
            <div class="fv-plugins-message-container invalid-feedback"></div>
        </div>
        <div class="mb-10 fv-row fv-plugins-icon-container">
            <label class="form-label mb-3 required">الرقم الوطني</label>
            <input type="text" class="form-control form-control-lg form-control-solid" name="manager_national_id"
                placeholder="manager national id" value="{{ old('manager_national_id') }}" kl_vkbd_parsed="true" required>
            <div class="fv-plugins-message-container invalid-feedback"></div>
        </div>
        <div class="mb-10 fv-row fv-plugins-icon-container">
            <label class="form-label mb-3 required">رقم الهاتف</label>
            <input type="tel" class="form-control form-control-lg form-control-solid" name="manager_phone"
                placeholder="manager phone" value="{{ old('manager_phone') }}" kl_vkbd_parsed="true" required>
            <div class="fv-plugins-message-container invalid-feedback"></div>
        </div>
        <div class="mb-10 fv-row fv-plugins-icon-container">
            <label class="form-label mb-3 required">البريد الالكتروني</label>
            <input type="email" class="form-control form-control-lg form-control-solid" name="manager_email"
                placeholder="manager email" value="{{ old('manager_email') }}" kl_vkbd_parsed="true" required>
            <div class="fv-plugins-message-container invalid-feedback"></div>
        </div>
    </div>
</div>
