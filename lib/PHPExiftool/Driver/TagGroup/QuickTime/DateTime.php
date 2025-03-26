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
class DateTime extends AbstractTagGroup
{
    protected string $id = 'QuickTime:DateTime';

    protected string $name = 'DateTime';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : QuickTime::tx3g
             * line : 326765
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'QuickTime::tx3g.QuickTime:DateTime',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
