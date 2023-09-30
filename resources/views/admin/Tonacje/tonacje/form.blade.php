<div class="form-group {{ $errors->has('nazwaTonacji') ? 'has-error' : ''}}">
    <label for="nazwaTonacji" class="control-label">{{ 'Nazwatonacji' }}</label>
    <input class="form-control" name="nazwaTonacji" type="text" id="nazwaTonacji" value="{{ isset($tonacje->nazwaTonacji) ? $tonacje->nazwaTonacji : ''}}" >
    {!! $errors->first('nazwaTonacji', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('stopien1') ? 'has-error' : ''}}">
    <label for="stopien1" class="control-label">{{ 'Stopien1' }}</label>
    <select name="stopien1" class="form-control" id="stopien1" >
    @foreach (json_decode('{"C": "C", "D": "D", "E": "E", "F": "F", "G": "G", "A": "A", "H": "H"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($tonacje->stopien1) && $tonacje->stopien1 == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('stopien1', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('stopien2') ? 'has-error' : ''}}">
    <label for="stopien2" class="control-label">{{ 'Stopien2' }}</label>
    <select name="stopien2" class="form-control" id="stopien2" >
     @foreach (json_decode('{"C": "C", "D": "D", "E": "E", "F": "F", "G": "G", "A": "A", "H": "H"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($tonacje->stopien2) && $tonacje->stopien2 == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('stopien2', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('stopien3') ? 'has-error' : ''}}">
    <label for="stopien3" class="control-label">{{ 'Stopien3' }}</label>
    <select name="stopien3" class="form-control" id="stopien3" >
    @foreach (json_decode('{"C": "C", "D": "D", "E": "E", "F": "F", "G": "G", "A": "A", "H": "H"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($tonacje->stopien3) && $tonacje->stopien3 == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('stopien3', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('stopien4') ? 'has-error' : ''}}">
    <label for="stopien4" class="control-label">{{ 'Stopien4' }}</label>
    <select name="stopien4" class="form-control" id="stopien4" >
    @foreach (json_decode('{"C": "C", "D": "D", "E": "E", "F": "F", "G": "G", "A": "A", "H": "H"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($tonacje->stopien4) && $tonacje->stopien4 == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('stopien4', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('stopien5') ? 'has-error' : ''}}">
    <label for="stopien5" class="control-label">{{ 'Stopien5' }}</label>
    <select name="stopien5" class="form-control" id="stopien5" >
    @foreach (json_decode('{"C": "C", "D": "D", "E": "E", "F": "F", "G": "G", "A": "A", "H": "H"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($tonacje->stopien5) && $tonacje->stopien5 == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('stopien5', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('stopien6') ? 'has-error' : ''}}">
    <label for="stopien6" class="control-label">{{ 'Stopien6' }}</label>
    <select name="stopien6" class="form-control" id="stopien6" >
    @foreach (json_decode('{"C": "C", "D": "D", "E": "E", "F": "F", "G": "G", "A": "A", "H": "H"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($tonacje->stopien6) && $tonacje->stopien6 == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('stopien6', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('stopien7') ? 'has-error' : ''}}">
    <label for="stopien7" class="control-label">{{ 'Stopien7' }}</label>
    <select name="stopien7" class="form-control" id="stopien7" >
    @foreach (json_decode('{"C": "C", "D": "D", "E": "E", "F": "F", "G": "G", "A": "A", "H": "H"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($tonacje->stopien7) && $tonacje->stopien7 == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('stopien7', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('transpozycjaGoraCdur') ? 'has-error' : ''}}">
    <label for="transpozycjaGoraCdur" class="control-label">{{ 'Transpozycjagoracdur' }}</label>
    <input class="form-control" name="transpozycjaGoraCdur" type="text" id="transpozycjaGoraCdur" value="{{ isset($tonacje->transpozycjaGoraCdur) ? $tonacje->transpozycjaGoraCdur : ''}}" >
    {!! $errors->first('transpozycjaGoraCdur', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('transpozycjaDolCdur') ? 'has-error' : ''}}">
    <label for="transpozycjaDolCdur" class="control-label">{{ 'Transpozycjadolcdur' }}</label>
    <input class="form-control" name="transpozycjaDolCdur" type="text" id="transpozycjaDolCdur" value="{{ isset($tonacje->transpozycjaDolCdur) ? $tonacje->transpozycjaDolCdur : ''}}" >
    {!! $errors->first('transpozycjaDolCdur', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Aktualizuj' : 'Utwórz' }}">
</div>
