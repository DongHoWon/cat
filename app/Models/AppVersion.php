<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\AppVersion
 *
 * @property int $id
 * @property string $version_name 버전명
 * @property int $is_update 업데이트 여부 0:기본 / 1:선택업데이트 / 2:강제업데이트
 * @property string|null $update_message 업데이트 메시지
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|AppVersion newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AppVersion newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AppVersion query()
 * @method static \Illuminate\Database\Eloquent\Builder|AppVersion whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AppVersion whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AppVersion whereIsUpdate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AppVersion whereUpdateMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AppVersion whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AppVersion whereVersionName($value)
 * @mixin \Eloquent
 */
class AppVersion extends Model
{
    use HasFactory;

    protected $fillable = [
        'version_name',
        'is_update',
        'update_message',
    ];

    public const IS_UPDATE = [
        self::IS_UPDATE_DEFAULT => 'default',
        self::IS_UPDATE_SELECT => 'select',
        self::IS_UPDATE_FORCE => 'force',
    ];

    public const IS_UPDATE_DEFAULT = 0;
    public const IS_UPDATE_SELECT = 1;
    public const IS_UPDATE_FORCE = 2;
}
