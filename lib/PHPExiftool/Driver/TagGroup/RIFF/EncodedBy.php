<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\RIFF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class EncodedBy extends AbstractTagGroup
{
    protected string $id = 'RIFF:EncodedBy';

    protected string $name = 'EncodedBy';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Encoded By',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : RIFF::Info
             * line : 231448
             * type : string
             * writable : false
             * count :
             * flags :
             */
            'id' => 'RIFF::Info.RIFF:EncodedBy',
            'desc' => [
                'en' => 'Encoded By',
            ],
        ],
        1 => [
            /**
             * table_name : RIFF::Info
             * line : 231544
             * type : string
             * writable : false
             * count :
             * flags :
             */
            'id' => 'RIFF::Info.RIFF:EncodedBy',
            'desc' => [
                'en' => 'Encoded By',
            ],
        ],
    ];

    protected int $count = 0;
}
