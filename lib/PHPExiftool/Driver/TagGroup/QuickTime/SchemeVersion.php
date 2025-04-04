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
class SchemeVersion extends AbstractTagGroup
{
    protected string $id = 'QuickTime:SchemeVersion';

    protected string $name = 'SchemeVersion';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Scheme Version',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : QuickTime::SchemeType
             * line : 229274
             * type : int16u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'QuickTime::SchemeType.QuickTime:SchemeVersion',
            'desc' => [
                'en' => 'Scheme Version',
            ],
        ],
    ];

    protected int $count = 0;
}
