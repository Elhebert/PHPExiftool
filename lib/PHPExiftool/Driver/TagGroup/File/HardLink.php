<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\File;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class HardLink extends AbstractTagGroup
{
    protected string $id = 'File:HardLink';

    protected string $name = 'HardLink';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Hard Link',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Extra
             * line : 85178
             * type : ?
             * writable : true
             * count :
             * flags : unsafe
             */
            'id' => 'Extra.File:HardLink',
            'desc' => [
                'en' => 'Hard Link',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2064;
}
