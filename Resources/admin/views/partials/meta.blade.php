<div class="form-group">
    <label class="form-label">Title:</label>
    @input('meta[title]', isset($model->meta) ? $model->meta->title : false)
</div>
<div class="form-group">
    <label class="form-label">Description:</label>
    @textarea('meta[description]', isset($model->meta) ? $model->meta->description : false)
</div>