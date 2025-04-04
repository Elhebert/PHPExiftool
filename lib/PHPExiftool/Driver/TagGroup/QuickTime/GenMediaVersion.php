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
class GenMediaVersion extends AbstractTagGroup
{
    protected string $id = 'QuickTime:GenMediaVersion';

    protected string $name = 'GenMediaVersion';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Gen Media Version',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : QuickTime::GenMediaInfo
             * line : 218988
             * type : int8u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'QuickTime::GenMediaInfo.QuickTime:GenMediaVersion',
            'desc' => [
                'en' => 'Gen Media Version',
            ],
        ],
    ];

    protected int $count = 0;
}
