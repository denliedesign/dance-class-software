<input type="checkbox" class="form-check-input" id="{{ preg_replace('/\s/', '_', $info, 1) }}" name="{{ $category }}[]" value="{{ ucfirst($info) }}">
<label class="form-check-label ms-1 me-3" for="{{ preg_replace('/\s/', '_', $info, 1) }}">{{ ucfirst($info) }}</label>
