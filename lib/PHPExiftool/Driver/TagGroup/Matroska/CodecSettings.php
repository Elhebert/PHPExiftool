<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Matroska;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CodecSettings extends AbstractTagGroup
{
    protected string $id = 'Matroska:CodecSettings';

    protected string $name = 'CodecSettings';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Codec Settings',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Matroska::Main
             * line : 119848
             * type : utf8
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Matroska::Main.Matroska:CodecSettings',
            'desc' => [
                'en' => 'Codec Settings',
            ],
        ],
    ];

    protected int $count = 0;
}
