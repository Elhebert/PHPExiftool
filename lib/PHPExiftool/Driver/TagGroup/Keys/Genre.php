<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Keys;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Genre extends AbstractTagGroup
{
    protected string $id = 'Keys:Genre';

    protected string $name = 'Genre';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Genre',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : QuickTime::Keys
             * line : 228640
             * type : ?
             * writable : true
             * count :
             * flags :
             */
            'id' => 'QuickTime::Keys.Keys:Genre',
            'desc' => [
                'en' => 'Genre',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
