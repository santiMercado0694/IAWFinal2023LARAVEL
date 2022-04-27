<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('name') }}
            {{ Form::text('name', $product->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('details') }}
            {{ Form::text('details', $product->details, ['class' => 'form-control' . ($errors->has('details') ? ' is-invalid' : ''), 'placeholder' => 'Details']) }}
            {!! $errors->first('details', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('price') }}
            {{ Form::text('price', $product->price, ['class' => 'form-control' . ($errors->has('price') ? ' is-invalid' : ''), 'placeholder' => 'Price']) }}
            {!! $errors->first('price', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('stock') }}
            {{ Form::text('stock', $product->stock, ['class' => 'form-control' . ($errors->has('stock') ? ' is-invalid' : ''), 'placeholder' => 'Stock']) }}
            {!! $errors->first('stock', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('shipping_cost') }}
            {{ Form::text('shipping_cost', $product->shipping_cost, ['class' => 'form-control' . ($errors->has('shipping_cost') ? ' is-invalid' : ''), 'placeholder' => 'Shipping Cost']) }}
            {!! $errors->first('shipping_cost', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('description') }}
            {{ Form::text('description', $product->description, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Description']) }}
            {!! $errors->first('description', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('category_id') }}
            {{ Form::text('category_id', $product->category_id, ['class' => 'form-control' . ($errors->has('category_id') ? ' is-invalid' : ''), 'placeholder' => 'Category Id']) }}
            {!! $errors->first('category_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('brand_id') }}
            {{ Form::text('brand_id', $product->brand_id, ['class' => 'form-control' . ($errors->has('brand_id') ? ' is-invalid' : ''), 'placeholder' => 'Brand Id']) }}
            {!! $errors->first('brand_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('image_path') }}
            {{ Form::text('image_path', $product->image_path, ['class' => 'form-control' . ($errors->has('image_path') ? ' is-invalid' : ''), 'placeholder' => 'Image Path']) }}
            {!! $errors->first('image_path', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>