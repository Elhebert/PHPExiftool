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
class TimecodeScale extends AbstractTagGroup
{
    protected string $id = 'Matroska:TimecodeScale';

    protected string $name = 'TimecodeScale';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Timecode Scale',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Matroska::Main
             * line : 119839
             * type : unsigned
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Matroska::Main.Matroska:TimecodeScale',
            'desc' => [
                'en' => 'Timecode Scale',
            ],
        ],
    ];

    protected int $count = 0;
}
