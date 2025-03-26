<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Samsung;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class BeautyRetouchLevel extends AbstractTagGroup
{
    protected string $id = 'Samsung:BeautyRetouchLevel';

    protected string $name = 'BeautyRetouchLevel';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Beauty Retouch Level',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Samsung::SingleShotMeta
             * line : 234240
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Samsung::SingleShotMeta.Samsung:BeautyRetouchLevel',
            'desc' => [
                'en' => 'Beauty Retouch Level',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
