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
class Producer extends AbstractTagGroup
{
    protected string $id = 'Keys:Producer';

    protected string $name = 'Producer';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Producer',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : QuickTime::Keys
             * line : 228740
             * type : ?
             * writable : true
             * count :
             * flags :
             */
            'id' => 'QuickTime::Keys.Keys:Producer',
            'desc' => [
                'en' => 'Producer',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
