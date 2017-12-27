
<div class="form-group {{ $errors->has('booking_code') ? 'has-error' : '' }}">
    <label for="booking_code" class="col-md-2 control-label">Booking Code</label>
    <div class="col-md-10">
        <input class="form-control" name="booking_code" type="text" id="booking_code" value="{{ old('booking_code', optional($client)->booking_code) }}" minlength="1" maxlength="150" required="true" placeholder="Enter booking code here...">
        {!! $errors->first('booking_code', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
    <label for="name" class="col-md-2 control-label">Name</label>
    <div class="col-md-10">
        <input class="form-control" name="name" type="text" id="name" value="{{ old('name', optional($client)->name) }}" minlength="1" maxlength="150" required="true" placeholder="Enter name here...">
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
    <label for="email" class="col-md-2 control-label">Email</label>
    <div class="col-md-10">
        <input class="form-control" name="email" type="text" id="email" value="{{ old('email', optional($client)->email) }}" minlength="1" maxlength="150" required="true" placeholder="Enter email here...">
        {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('nationality') ? 'has-error' : '' }}">
    <label for="nationality" class="col-md-2 control-label">Nationality</label>
    <div class="col-md-10">
        <input class="form-control" name="nationality" type="text" id="nationality" value="{{ old('nationality', optional($client)->nationality) }}" minlength="1" maxlength="150" required="true" placeholder="Enter nationality here...">
        {!! $errors->first('nationality', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('contact_no') ? 'has-error' : '' }}">
    <label for="contact_no" class="col-md-2 control-label">Contact No</label>
    <div class="col-md-10">
        <input class="form-control" name="contact_no" type="text" id="contact_no" value="{{ old('contact_no', optional($client)->contact_no) }}" minlength="1" maxlength="150" required="true" placeholder="Enter contact no here...">
        {!! $errors->first('contact_no', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('total_paid_amount') ? 'has-error' : '' }}">
    <label for="total_paid_amount" class="col-md-2 control-label">Total Paid Amount</label>
    <div class="col-md-10">
        <input class="form-control" name="total_paid_amount" type="number" id="total_paid_amount" value="{{ old('total_paid_amount', optional($client)->total_paid_amount) }}" min="-99999999" max="99999999" placeholder="Enter total paid amount here..." step="any">
        {!! $errors->first('total_paid_amount', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('paid_amount') ? 'has-error' : '' }}">
    <label for="paid_amount" class="col-md-2 control-label">Paid Amount</label>
    <div class="col-md-10">
        <input class="form-control" name="paid_amount" type="number" id="paid_amount" value="{{ old('paid_amount', optional($client)->paid_amount) }}" min="-99999999" max="99999999" placeholder="Enter paid amount here..." step="any">
        {!! $errors->first('paid_amount', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('due_amount') ? 'has-error' : '' }}">
    <label for="due_amount" class="col-md-2 control-label">Due Amount</label>
    <div class="col-md-10">
        <input class="form-control" name="due_amount" type="number" id="due_amount" value="{{ old('due_amount', optional($client)->due_amount) }}" min="-99999999" max="99999999" placeholder="Enter due amount here..." step="any">
        {!! $errors->first('due_amount', '<p class="help-block">:message</p>') !!}
    </div>
</div>

