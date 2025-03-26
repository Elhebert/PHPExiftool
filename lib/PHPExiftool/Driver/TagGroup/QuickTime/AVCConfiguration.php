<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\QuickTime;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AVCConfiguration extends AbstractTagGroup
{
    protected string $id = 'QuickTime:AVCConfiguration';

    protected string $name = 'AVCConfiguration';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'AVC Configuration',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : QuickTime::ImageDesc
             * line : 219661
             * type : int16u
             * writable : false
             * count :
             * flags : binary,unknown
             */
            'id' => 'QuickTime::ImageDesc.QuickTime:AVCConfiguration',
            'desc' => [
                'en' => 'AVC Configuration',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 34;
}
