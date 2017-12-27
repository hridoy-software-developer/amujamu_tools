

<div class="form-group {{ $errors->has('locations_id') ? 'has-error' : '' }}">
    <label for="locations_id" class="col-md-2 control-label">Locations</label>
    <div class="col-md-10">
        <select class="form-control" id="locations_id" name="locations_id" required="true">
        	    <option value="" style="display: none;" {{ old('locations_id', optional($manualBooking)->locations_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select locations</option>
        	@foreach ($locations as $key => $location)
			    <option value="{{ $key }}" {{ old('locations_id', optional($manualBooking)->locations_id) == $key ? 'selected' : '' }}>
			    	{{ $location }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('locations_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('tours_id') ? 'has-error' : '' }}">
    <label for="tours_id" class="col-md-2 control-label">Tours</label>
    <div class="col-md-10">
        <select class="form-control" id="tours_id" name="tours_id" required="true">
        	    <option value="" style="display: none;" {{ old('tours_id', optional($manualBooking)->tours_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select tours</option>
        	@foreach ($tours as $key => $tour)
			    <option value="{{ $key }}" {{ old('tours_id', optional($manualBooking)->tours_id) == $key ? 'selected' : '' }}>
			    	{{ $tour }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('tours_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('tour_date') ? 'has-error' : '' }}">
    <label for="tour_date" class="col-md-2 control-label">Tour Date</label>
    <div class="col-md-10">
        <input class="form-control" name="tour_date" type="text" id="tour_date" value="{{ old('tour_date', optional($manualBooking)->tour_date) }}" required="true" placeholder="Enter tour date here...">
        {!! $errors->first('tour_date', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('tour_price') ? 'has-error' : '' }}">
    <label for="tour_price" class="col-md-2 control-label">Tour Price</label>
    <div class="col-md-10">
        <input class="form-control" name="tour_price" type="number" id="tour_price" value="{{ old('tour_price', optional($manualBooking)->tour_price) }}" min="-999999999" max="999999999" required="true" placeholder="Enter tour price here..." step="any">
        {!! $errors->first('tour_price', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('payment_link') ? 'has-error' : '' }}">
    <label for="payment_link" class="col-md-2 control-label">Payment Link</label>
    <div class="col-md-10">
        <input class="form-control" name="payment_link" type="text" id="payment_link" value="{{ old('payment_link', optional($manualBooking)->payment_link) }}" maxlength="300" placeholder="Enter payment link here...">
        {!! $errors->first('payment_link', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('paid_amount') ? 'has-error' : '' }}">
    <label for="paid_amount" class="col-md-2 control-label">Paid Amount</label>
    <div class="col-md-10">
        <input class="form-control" name="paid_amount" type="number" id="paid_amount" value="{{ old('paid_amount', optional($manualBooking)->paid_amount) }}" min="-999999999" max="999999999" required="true" placeholder="Enter paid amount here..." step="any">
        {!! $errors->first('paid_amount', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('due_amount') ? 'has-error' : '' }}">
    <label for="due_amount" class="col-md-2 control-label">Due Amount</label>
    <div class="col-md-10">
        <input class="form-control" name="due_amount" type="number" id="due_amount" value="{{ old('due_amount', optional($manualBooking)->due_amount) }}" min="-999999999" max="999999999" required="true" placeholder="Enter due amount here..." step="any">
        {!! $errors->first('due_amount', '<p class="help-block">:message</p>') !!}
    </div>
</div>

