<div class="form-group">
    <label class="control-label col-md-2 col-sm-2 col-xs-12">Descrição: <span class="required">*</span></label>
    <div class="col-md-10 col-sm-10 col-xs-12">
        <input name="description" type="text" maxlength="100" class="form-control" required
               value="{{(isset($Data->description))?$Data->description:old('description')}}">
    </div>
</div>