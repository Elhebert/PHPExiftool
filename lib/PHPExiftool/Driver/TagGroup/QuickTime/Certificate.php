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
class Certificate extends AbstractTagGroup
{
    protected string $id = 'QuickTime:Certificate';

    protected string $name = 'Certificate';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Certificate',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : QuickTime::SchemeInfo
             * line : 229252
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'QuickTime::SchemeInfo.QuickTime:Certificate',
            'desc' => [
                'en' => 'Certificate',
            ],
        ],
    ];

    protected int $count = 0;
}
