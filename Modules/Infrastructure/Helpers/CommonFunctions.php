<?php
if (!function_exists('getRoleColor')) {
    function getRoleColor($roleName)
    {
        if ($roleName == \Modules\User\Entities\Lookups\RoleLookup::SUPER_ADMIN) {
            return 'danger';
        } elseif ($roleName == \Modules\User\Entities\Lookups\RoleLookup::ADMIN) {
            return 'secondary';
        } elseif ($roleName == \Modules\User\Entities\Lookups\RoleLookup::TECHNICAL) {
            return 'info';
        } elseif ($roleName == \Modules\User\Entities\Lookups\RoleLookup::CLIENT) {
            return 'dark';
        }
    }
}


if (!function_exists('getOrganizationStatus')) {
    function getOrganizationStatus($status)
    {
        if ($status == \Modules\Organization\Entities\Lookups\OrganizationStatusLookup::ACTIVE) {
            return \Modules\Organization\Entities\Lookups\OrganizationStatusLookup::ACTIVE_TILTLE;
        } elseif ($status == \Modules\Organization\Entities\Lookups\OrganizationStatusLookup::PENDING) {
            return \Modules\Organization\Entities\Lookups\OrganizationStatusLookup::PENDING_TILTLE;
        } elseif ($status == \Modules\Organization\Entities\Lookups\OrganizationStatusLookup::LOCKED) {
            return \Modules\Organization\Entities\Lookups\OrganizationStatusLookup::LOCKED_TILTLE;
        }
    }
}

if (!function_exists('getPanelStatus')) {
    function getPanelStatus($status)
    {
        if ($status == \Modules\Panel\Entities\Lookups\PanelStatusLookup::DISCONNECTED) {
            return \Modules\Panel\Entities\Lookups\PanelStatusLookup::DISCONNECTED_TILTLE;
        } elseif ($status == \Modules\Panel\Entities\Lookups\PanelStatusLookup::CONNECTED) {
            return \Modules\Panel\Entities\Lookups\PanelStatusLookup::CONNECTED_TILTLE;
        }
    }
}
if (!function_exists('getPanelStatusColor')) {
    function getPanelStatusColor($status)
    {
        if ($status == \Modules\Panel\Entities\Lookups\PanelStatusLookup::DISCONNECTED) {
            return "danger";
        } elseif ($status == \Modules\Panel\Entities\Lookups\PanelStatusLookup::CONNECTED) {
            return "success";
        }
    }
}

if (!function_exists('getCameraStatusColor')) {
    function getCameraStatusColor($status)
    {
        if ($status == \Modules\Camera\Entities\Lookups\CameraStatusLookup::DISCONNECTED) {
            return "danger";
        } elseif ($status == \Modules\Camera\Entities\Lookups\CameraStatusLookup::CONNECTED) {
            return "success";
        }
    }
}
if (!function_exists('getCameraStatus')) {
    function getCameraStatus($status)
    {
        if ($status == \Modules\Camera\Entities\Lookups\CameraStatusLookup::DISCONNECTED) {
            return \Modules\Camera\Entities\Lookups\CameraStatusLookup::DISCONNECTED_TITLE;
        } elseif ($status == \Modules\Camera\Entities\Lookups\CameraStatusLookup::CONNECTED) {
            return \Modules\Camera\Entities\Lookups\CameraStatusLookup::CONNECTED_TITLE;
        }
    }
}
if (!function_exists('getPanelsStatus')) {
    function getPanelsStatus()
    {
        $status[\Modules\Panel\Entities\Lookups\PanelStatusLookup::DISCONNECTED] = \Modules\Panel\Entities\Lookups\PanelStatusLookup::DISCONNECTED_TILTLE;
        $status[\Modules\Panel\Entities\Lookups\PanelStatusLookup::CONNECTED] = \Modules\Panel\Entities\Lookups\PanelStatusLookup::CONNECTED_TILTLE;
        return $status;
    }
}

if (!function_exists('translatePanelsAction')) {
    function translatePanelsAction($action)
    {
        if ($action == \Modules\Panel\Entities\Lookups\PanelActionLookup::RESET || $action == \Modules\Panel\Entities\Lookups\PanelActionLookup::RESET_ID) {
            return trans('panel::messages.' . \Modules\Panel\Entities\Lookups\PanelActionLookup::RESET);
        } elseif ($action == \Modules\Panel\Entities\Lookups\PanelActionLookup::SILENCE_FAULT || $action == \Modules\Panel\Entities\Lookups\PanelActionLookup::SILENCE_FAULT_ID) {
            return trans('panel::messages.' . \Modules\Panel\Entities\Lookups\PanelActionLookup::SILENCE_FAULT);
        } elseif ($action == \Modules\Panel\Entities\Lookups\PanelActionLookup::SILENCE_SOUNDER || $action == \Modules\Panel\Entities\Lookups\PanelActionLookup::SILENCE_SOUNDER_ID) {
            return trans('panel::messages.' . \Modules\Panel\Entities\Lookups\PanelActionLookup::SILENCE_SOUNDER);
        } elseif ($action == \Modules\Panel\Entities\Lookups\PanelActionLookup::EVACUATE || $action == \Modules\Panel\Entities\Lookups\PanelActionLookup::EVACUATE_ID) {
            return trans('panel::messages.' . \Modules\Panel\Entities\Lookups\PanelActionLookup::EVACUATE);
        }
    }
}
if (!function_exists('getTimeAgo')) {
    function getTimeAgo($carbonObject)
    {
        return str_ireplace(
            [' seconds', ' second', ' minutes', ' minute', ' hours', ' hour', ' days', ' day', ' weeks', ' week'],
            ['s', 's', 'm', 'm', 'h', 'h', 'd', 'd', 'w', 'w'],
            $carbonObject->diffForHumans()
        );
    }
}
if (!function_exists('getContactCategory')) {
    function getContactCategory($category)
    {
        if ($category == \Modules\Contact\Entities\Lookups\ConversationCategoryLookup::REQUEST) {
            return trans('contact::messages.' . \Modules\Contact\Entities\Lookups\ConversationCategoryLookup::REQUEST);
        } elseif ($category == \Modules\Contact\Entities\Lookups\ConversationCategoryLookup::QUESTIONNAIRE ) {
            return trans('contact::messages.' . \Modules\Contact\Entities\Lookups\ConversationCategoryLookup::QUESTIONNAIRE);
        } elseif ($category == \Modules\Contact\Entities\Lookups\ConversationCategoryLookup::MAINTENANCE) {
            return trans('contact::messages.' . \Modules\Contact\Entities\Lookups\ConversationCategoryLookup::MAINTENANCE);
        } elseif ($category == \Modules\Contact\Entities\Lookups\ConversationCategoryLookup::BUG) {
            return trans('contact::messages.' .  \Modules\Contact\Entities\Lookups\ConversationCategoryLookup::BUG);
        }
    }
}
