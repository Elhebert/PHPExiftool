<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Canon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FlashActivity extends AbstractTagGroup
{
    protected string $id = 'Canon:FlashActivity';

    protected string $name = 'FlashActivity';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Flash Activity',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::CameraSettings
             * line : 45525
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraSettings.Canon:FlashActivity',
            'desc' => [
                'en' => 'Flash Activity',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
