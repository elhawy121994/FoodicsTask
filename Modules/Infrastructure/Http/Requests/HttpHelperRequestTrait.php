<?php

namespace Modules\Infrastructure\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Modules\Building\Entities\Building;
use Modules\Panel\Entities\Panel;
use Modules\User\Entities\Lookups\RoleLookup;
use Modules\User\Entities\User;
use Modules\Organization\Entities\Organization;
use Illuminate\Validation\Rule;

class HttpHelperRequestTrait extends FormRequest
{
    public function addOrganization()
    {
        $user = Auth::user();
        if(!$user->hasRole(RoleLookup::SUPER_ADMIN_NAME)) {
            $orgID['organization_id'] = $user->organiztion_id;
            $this->merge($orgID);
        }
    }
}
