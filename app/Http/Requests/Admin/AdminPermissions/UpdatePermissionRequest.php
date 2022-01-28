<?php

namespace App\Http\Requests\Admin\AdminPermissions;

use App\Helper\Functions;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdatePermissionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['sometimes', 'string', 'min:2', 'max:60'],
            'slug' => ['sometimes', 'string', 'max:255', Functions::getSlugValidation(), Rule::unique('admin_permissions')->ignore($this->adminPermission)],
            'enabled' => ['sometimes', 'in:true,false'],
        ];
    }
}
